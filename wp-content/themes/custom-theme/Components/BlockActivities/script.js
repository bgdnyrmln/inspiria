import { buildRefs } from '@/assets/scripts/helpers.js'

const WHEEL_COOLDOWN = 800
const THRESHOLD = 40

export default function (el) {
  const refs = buildRefs(el)

  if (!refs.slider) return

  const items = [...refs.slider.querySelectorAll('.activity-item')]
  const dots = [...refs.dots.querySelectorAll('.point')]

  let currentIndex = 0
  let accumulated = 0
  let wheelLocked = false

  function itemWidth () {
    return items[0]?.offsetWidth || 0
  }

  function goTo (index) {
    currentIndex = Math.max(0, Math.min(index, items.length - 1))

    refs.slider.scrollTo({
      left: currentIndex * itemWidth(),
      behavior: 'smooth'
    })

    updateDots()
  }

  function updateDots () {
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === currentIndex)
    })
  }

  refs.prev.addEventListener('click', () => goTo(currentIndex - 1))
  refs.next.addEventListener('click', () => goTo(currentIndex + 1))

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => goTo(i))
  })

  refs.slider.addEventListener(
    'wheel',
    (e) => {
      const isTouchpadSwipe = Math.abs(e.deltaX) > Math.abs(e.deltaY)
      const isAltScroll = e.altKey

      if (!isTouchpadSwipe && !isAltScroll) return
      if (wheelLocked) return

      e.preventDefault()

      accumulated += isTouchpadSwipe ? e.deltaX : e.deltaY

      if (accumulated > THRESHOLD) {
        goTo(currentIndex + 1)
        lockWheel()
      } else if (accumulated < -THRESHOLD) {
        goTo(currentIndex - 1)
        lockWheel()
      }
    },
    { passive: false }
  )

  function lockWheel () {
    accumulated = 0
    wheelLocked = true
    setTimeout(() => {
      wheelLocked = false
    }, WHEEL_COOLDOWN)
  }

  updateDots()

  return () => {

  }
}
