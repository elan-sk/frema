import { GnCarousel } from '../libraries/slick'

const SELECTORS = {
    component: '.js-slider'
}

const sliderInstance = document.querySelector(SELECTORS.component)

if (sliderInstance) {
    const OPTIONS = {
        slidesToShow: 1,
        slidesToScroll: 1,
        variableHeight: true,
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        rtl: true,
        pauseOnHover: false,
        pauseOnDotsHover: true,

    }

    const parent = sliderInstance.parentElement
    const slickInstance = new GnCarousel(sliderInstance, OPTIONS, parent)

    slickInstance.initCarousel()
}