import { GnCarousel } from '../libraries/slick'

const SELECTORS = {
  component: '.js-carousel-center'
}

const OPTIONS = {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: true,
  mobileFirst: true,
  responsive: [
    {
      breakpoint: 1124,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true
      }
    }
  ]
}

const sliderInstance = [...document.querySelectorAll(SELECTORS.component)]

if (sliderInstance) {
  sliderInstance.forEach(slider => {
    const parent = slider.parentElement
    const slickInstance = new GnCarousel(slider, OPTIONS, parent)

    slickInstance.initCarousel()
  })
}
