const menuLinks = document.querySelectorAll('.menu a[href^="#"]');

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      const id = entry.target.getAttribute("id");
      const menuLink = document.querySelector(`.menu a[href="#${id}"]`);

      if (entry.isIntersecting) {
        if (menuLink != document.querySelector(`.menu a[href="#historia"]`)){
          menuLink.classList.add("menu-item-selected");
        }
      } else {
        menuLink.classList.remove("menu-item-selected");
      }
    });
  },
  { rootMargin: "-50% 0px -50% 0px" }
);

menuLinks.forEach((menuLink) => {
  const hash = menuLink.getAttribute("href");
  const target = document.querySelector(hash);
  if (target) {
    observer.observe(target);
  }
});

window.onload = function(){
  let container = document.getElementById("carga-container");

  container.style.visibility = "hidden";
  container.style.opacity = "0";
}

const navToggle = document.querySelector(".toggle");
const navMenu = document.querySelector(".menu-container");

navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("toggle-show");
});

const aboutMenu = document.querySelector(".about");
const aboutSubmenu = document.querySelector(".about-submenu");

aboutMenu.addEventListener("click", () => {
  aboutSubmenu.classList.toggle("show");
});

const menu = document.querySelectorAll(".menu-opt");

menu.forEach((menuOpt) => {
  menuOpt.addEventListener("click", () => {
    navMenu.classList.remove("toggle-show");
  })
})