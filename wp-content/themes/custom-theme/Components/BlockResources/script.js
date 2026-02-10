export default function (el) {
  const stopVideo = (modal) => {
    const iframe = modal.querySelector('iframe')
    if (!iframe) return

    const src = iframe.getAttribute('src')
    iframe.setAttribute('src', '')
    iframe.setAttribute('src', src)
  }

  const closeModal = (modal) => {
    stopVideo(modal)
    modal.classList.remove('is-open')
    modal.setAttribute('aria-hidden', 'true')
  }

  el.addEventListener('click', (e) => {
    const openTrigger = e.target.closest('[data-modal-open]')
    const closeTrigger = e.target.closest('[data-modal-close]')

    // OPEN
    if (openTrigger) {
      const item = openTrigger.closest('.box')
      const modal = item.querySelector('.modal')

      modal.classList.add('is-open')
      modal.setAttribute('aria-hidden', 'false')
    }

    // CLOSE (overlay or button)
    if (closeTrigger) {
      const modal = closeTrigger.closest('.modal')
      closeModal(modal)
    }
  })

  // ESC key
  document.addEventListener('keydown', (e) => {
    if (e.key !== 'Escape') return

    const openModal = el.querySelector('.modal.is-open')
    if (openModal) {
      closeModal(openModal)
    }
  })
}
