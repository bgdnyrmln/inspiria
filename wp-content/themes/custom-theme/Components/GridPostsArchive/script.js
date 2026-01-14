/* eslint-env browser */
import delegate from 'delegate-event-listener'
import { buildRefs } from '@/assets/scripts/helpers.js'

export default function (el) {
  const refs = buildRefs(el)
  if (refs.pagination) {
    initPagination(refs.pagination)
  }

  function initPagination (paginationEl) {
    const Pagination = {
      el: paginationEl,
      current: parseInt(paginationEl.dataset.current, 10),
      total: parseInt(paginationEl.dataset.total, 10),

      render () {
        let html = ''
        const page = this.current
        const size = this.total

        html += page > 1
          ? this.arrow(page - 1, 'prev')
          : this.arrowDisabled('prev')

        html += this.pageLink(1)

        const startMiddle = Math.max(2, page - 3)
        if (startMiddle > 2) html += '<span class="ellipsis">…</span>'

        const endMiddle = Math.min(size - 1, page + 3)
        for (let i = startMiddle; i <= endMiddle; i++) {
          html += this.pageLink(i)
        }

        if (endMiddle < size - 1) html += '<span class="ellipsis">…</span>'

        if (size > 1) html += this.pageLink(size)

        html += page < size
          ? this.arrow(page + 1, 'next')
          : this.arrowDisabled('next')

        this.el.innerHTML = html
      },

      pageLink (p) {
        return p === this.current
          ? `<span class="active">${p}</span>`
          : `<a href="${this.pageUrl(p)}" data-page="${p}">${p}</a>`
      },

      arrow (p, dir) {
        return `
          <a href="${this.pageUrl(p)}" data-page="${p}" class="${dir}">
            ${this.icon(dir)}
          </a>
        `
      },

      arrowDisabled (dir) {
        return `
          <a class="disabled ${dir}">
            ${this.icon(dir)}
          </a>
        `
      },

      icon (dir) {
        return dir === 'prev'
          ? `<svg width="6" height="10" viewBox="0 0 6 10">
               <path d="M4.46 0.92L0.46 4.92L4.46 8.92"/>
             </svg>`
          : `<svg width="6" height="10" viewBox="0 0 6 10">
               <path d="M0.92 8.92L4.92 4.92L0.92 0.92"/>
             </svg>`
      },

      pageUrl (p) {
        const url = new URL(window.location.href)
        p === 1
          ? url.searchParams.delete('paged')
          : url.searchParams.set('paged', p)
        return url.toString()
      }
    }

    Pagination.render()
  }

  const loadMoreDelegate = delegate('[data-ref="loadMore"]', onLoadMore)
  el.addEventListener('click', loadMoreDelegate)

  async function onLoadMore (e) {
    e.preventDefault()

    const target = e.delegateTarget
    target.classList.add('button--disabled')

    const url = new URL(target.href)

    try {
      const response = await fetch(url)
      const responseAsText = await response.text()

      const parser = new DOMParser()
      const html = parser.parseFromString(responseAsText, 'text/html')
      const posts = html.querySelector(
        'flynt-component[name="GridPostsArchive"] [data-ref="posts"]'
      )
      const pagination = html.querySelector(
        'flynt-component[name="GridPostsArchive"] [data-ref="pagination"]'
      )

      refs.posts.append(...posts.children)

      refs.pagination.textContent = ''
      if (pagination) {
        refs.pagination.append(...pagination.children)
        initPagination(refs.pagination)
      }

      target.classList.remove('button--disabled')
    } catch (err) {
      console.error(err)
      target.classList.remove('button--disabled')
    }
  }

  return () => {
    el.removeEventListener('click', loadMoreDelegate)
  }
}
