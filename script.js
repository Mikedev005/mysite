const nav = document.querySelector(".nav");
window.addEventListener("scroll", fixNav);
function fixNav() {
  if (window.scrollY > nav.offsetHeight + 150) {
    nav.classList.add("active");
  } else {
    nav.classList.remove("active");
  }
}
const port1 = document.querySelector(".portfolio");
const cont1 = document.querySelector("#Contact");
const port = document.querySelector(".port");
const cont = document.querySelector(".cont");
port.addEventListener("click", () => {
  port1.scrollIntoView({
    behavior: "smooth",
  });
});
cont.addEventListener("click", () => {
  cont1.scrollIntoView({
    behavior: "smooth",
  });
});
