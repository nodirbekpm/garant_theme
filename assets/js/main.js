document.addEventListener('DOMContentLoaded', function () {
  // show more 
  const cards = document.querySelectorAll('.object_item');
  const showMoreBtn = document.getElementById('show_more');
  let visibleCount = 4;

  function showCards(count) {
      for (let i = 0; i < cards.length; i++) {
          if (i < count) {
              cards[i].style.display = 'flex';
          }
      }
  }

  // Initially show 4 cards
  showCards(visibleCount);
  checkButtonVisibility();

  // Handle click
  showMoreBtn.addEventListener('click', function (e) {
      e.preventDefault();
      visibleCount += 4;
      showCards(visibleCount);
      checkButtonVisibility();
  });

  function checkButtonVisibility() {
      if (visibleCount >= cards.length) {
          showMoreBtn.style.display = 'none';
      }
  }


    // input mask
    const input = document.getElementById('phone');
    if (input) {
      Inputmask({ mask: "+7 (999) 999-99-99" }).mask(input);
    }

    // yandex map
    ymaps.ready(function () {
      const coords = [55.622014, 37.601457];

      const map = new ymaps.Map("map", {
        center: coords,
        zoom: 16,
        controls: ['zoomControl', 'fullscreenControl']
      });

      map.behaviors.disable('scrollZoom');

      // ✅ Add Placemark
      const placemark = new ymaps.Placemark(coords, {
        balloonContent: 'Днепропетровская ул., 3к5А'
      }, {
        preset: 'islands#redDotIcon'
      });

      map.geoObjects.add(placemark);
    });
});