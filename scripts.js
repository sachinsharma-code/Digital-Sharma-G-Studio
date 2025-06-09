// scripts.js
document.addEventListener('DOMContentLoaded', () => {
  console.log("Digital Sharma G Studio website loaded.");
});

// Set today's date as min date
  const dateInput = document.getElementById('bdate');
  const today = new Date().toISOString().split('T')[0];
  dateInput.min = today;

// Scroll to top on page load
  window.addEventListener('load', () => {
    // Use a slight delay to ensure this runs after the browser attempts to jump to anchors
      setTimeout(() => {
        window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
      }, 10);
  });


document.addEventListener("DOMContentLoaded", () => {
  const emojiSpans = document.querySelectorAll(".emoji-rating span");
  const ratingInput = document.getElementById("ratingInput");

  emojiSpans.forEach(span => {
    span.addEventListener("click", () => {
      // Clear previous selection
      emojiSpans.forEach(s => s.classList.remove("selected"));
      span.classList.add("selected");

      // Set hidden input value
      ratingInput.value = span.dataset.value;
    });
  });
});

function toggleMenu() {
  const nav = document.getElementById("navbar");
  nav.classList.toggle("active");
}


