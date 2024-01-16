// Auto play carousel
let currentIndex = 0;
const slides = document.querySelectorAll("[data-te-carousel-item]");
const indicatorButtons = document.querySelectorAll(".indicator-button");

function showSlide(index) {
  currentIndex = (index + slides.length) % slides.length;

  slides.forEach((slide, i) => {
    slide.style.transition = "transform 0.6s ease-out";
    slide.style.transform = `translateX(${(i - currentIndex) * 100}%)`;
  });

  // Highlight the active indicator button
  indicatorButtons.forEach((button, i) => {
    button.classList.toggle("active", i === currentIndex);
  });
}

function nextSlide() {
  showSlide(currentIndex + 1);
}

function prevSlide() {
  showSlide(currentIndex - 1);
}

// Add event listeners to indicator buttons
indicatorButtons.forEach((button, i) => {
  button.addEventListener("click", () => showSlide(i));
});

// Auto play carousel with smoother transition
let autoPlayInterval;

function startAutoPlay() {
  autoPlayInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
}

function stopAutoPlay() {
  clearInterval(autoPlayInterval);
}

// Start auto play on page load
startAutoPlay();
