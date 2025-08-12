
    const slider = document.querySelector('.logo-slider');

    // Clone items to simulate infinite loop
    const clone = slider.innerHTML;
    slider.innerHTML += clone;

    let scrollAmount = 0;

    function autoScroll() {
      scrollAmount++;
      if (scrollAmount >= slider.scrollWidth / 2) {
        scrollAmount = 0;
      }
      slider.scrollLeft = scrollAmount;
    }

    let interval = setInterval(autoScroll, 20);
