const sidebar = document.getElementById("sidebarMenu");
const overlay = document.getElementById("sidebarOverlay");
const toggleBtn = document.getElementById("menuToggle");
const mainContent = document.querySelector(".main-content");

toggleBtn.addEventListener("click", () => {
  // Untuk mobile
  if (window.innerWidth < 992) {
    sidebar.classList.toggle("active");
    overlay.classList.toggle("active");
  }
  // Untuk desktop
  else {
    sidebar.classList.toggle("collapsed");
    mainContent.classList.toggle("full");
  }
});

// Tutup sidebar saat klik overlay di mobile
overlay.addEventListener("click", () => {
  sidebar.classList.remove("active");
  overlay.classList.remove("active");
});
