import 'vite/modulepreload-polyfill'
import FlyntComponent from './scripts/FlyntComponent'

import 'lazysizes'
import 'fslightbox'

if (import.meta.env.DEV) {
  import('@vite/client')
}

import.meta.glob([
  '../Components/**',
  '../assets/**',
  '!**/*.js',
  '!**/*.scss',
  '!**/*.php',
  '!**/*.twig',
  '!**/screenshot.png',
  '!**/*.md'
])

window.customElements.define(
  'flynt-component',
  FlyntComponent
)

// Author tag
console.log('%c' + "@bgdnyrmln for GRANDEM", 'font-size:30px;')

// Block gallery popup
const images = document.querySelectorAll('.wp-block-gallery a')
for (let i = 0; i < images.length; i++) {
  images[i].setAttribute('data-fslightbox', 'gallery')
}
refreshFsLightbox() // eslint-disable-line no-undef
