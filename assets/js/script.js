// Inisialisasi AOS
AOS.init({
  duration: 800,
  easing: "ease-in-out",
  once: true,
});

// Smooth scroll untuk anchor links (modern behavior)
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });
      // update URL hash tanpa jump (history API)
      history.pushState(null, null, this.getAttribute("href"));
    }
  });
});

// Language switcher (UI only; untuk implementasi nyata, sambungkan i18n)
document.getElementById("langBtn").addEventListener("click", function () {
  if (this.innerText === "EN") {
    this.innerText = "ID";
    this.setAttribute("aria-pressed", "true");
    // Untuk demo: arahkan ke versi bahasa EN bila ada
    // window.location.href = '/en/index.html';
    alert("Switch bahasa (demo): akan ganti ke Bahasa Inggris bila tersedia.");
  } else {
    this.innerText = "EN";
    this.setAttribute("aria-pressed", "false");
  }
});
