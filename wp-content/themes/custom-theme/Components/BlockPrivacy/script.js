export default function (el) {
  const buttons = el.querySelectorAll('.block-privacy__button')
  const panels = el.querySelectorAll('.block-privacy__panel')

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      const tabId = button.dataset.tab

      buttons.forEach(b => b.classList.remove('is-active'))
      panels.forEach(p => p.classList.remove('is-active'))

      button.classList.add('is-active')

      const panel = el.querySelector(
        `.block-privacy__panel[data-tab="${tabId}"]`
      )

      if (panel) {
        panel.classList.add('is-active')
      }
    })
  })
}
