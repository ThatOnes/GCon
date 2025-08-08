window.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.querySelector("input[placeholder='Search servers...']");
  const panel = document.getElementById("contact-panel");

  if (!searchInput || !panel) return;

  // Saat klik input, buka panel
  searchInput.addEventListener("click", function (e) {
    panel.classList.remove("hidden");
    e.stopPropagation();
  });

  // Agar klik di panel tidak menutup
  panel.addEventListener("click", function (e) {
    e.stopPropagation();
  });

  // Klik di luar panel dan input = tutup panel
  document.addEventListener("click", function () {
    panel.classList.add("hidden");
  });
});
