import { GnCarousel } from '../libraries/slick'

const SELECTORS = {
  component: '.js-custom-pager-slider'
}

const sliderInstance = document.querySelector(SELECTORS.component)

if (sliderInstance) {
  const OPTIONS = {
    slidesToShow: 1,
    slidesToScroll: 1,
    variableHeight: true,
    arrows: true,
    customPaging : function(slider, i) {
      const thumb = $(slider.$slides[i])[0]
      const thumbUrl = thumb.querySelector('.steps__item').dataset.thumb
      return `<a class="slider-pager__thumb"><img src="${thumbUrl}"></a>`;
    }
  }

  const parent = sliderInstance.parentElement
  const slickInstance = new GnCarousel(sliderInstance, OPTIONS, parent)

  slickInstance.initCarousel()
}
