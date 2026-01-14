/* eslint-env browser */
import { buildRefs } from '@/assets/scripts/helpers.js'
export default function (el) {
  const refs = buildRefs(el)
  if (!refs['scroll-down-button']) return

  refs['scroll-down-button'].addEventListener('click', function () {
    window.scrollBy({
      top: 72.4 * parseFloat(getComputedStyle(document.documentElement).fontSize) - document.documentElement.scrollTop,
      left: 0,
      behavior: 'smooth'
    })
  })

  return () => {}
}
