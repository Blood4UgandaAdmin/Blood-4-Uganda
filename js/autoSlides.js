  // JavaScript to handle the automatic slideshow
  let currentIndex = 0;
  const slides = document.querySelectorAll('.fade');

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.display = i === index ? 'block' : 'none';
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  // Set an interval to automatically transition to the next slide every 4 seconds
  setInterval(nextSlide, 6000);

  // Initial display
  showSlide(currentIndex);