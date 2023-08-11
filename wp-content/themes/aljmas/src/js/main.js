// overlay
const overlay = document.querySelector(".overlay");
overlay.addEventListener("click", (e) => {
  e.currentTarget.setAttribute("aria-hidden", "true");
  if (window.innerWidth < 768) {
    // gsap.to(nav, {
    //   x: "-100%",
    //   ease: "power3.out",
    // });
    ham.setAttribute("aria-expanded", "false");
    nav.setAttribute("aria-hidden", "true");
  }
});
const hamBtn = document.querySelector(".ham-btn");
const navMenu = document.querySelector(".nav");
hamBtn.addEventListener("click", (e) => {
  if (hamBtn.getAttribute("aria-expanded") === "false") {
    hamBtn.setAttribute("aria-expanded", "true");
    navMenu.setAttribute("data-visible", "true");
  } else {
    hamBtn.setAttribute("aria-expanded", "false");
    navMenu.setAttribute("data-visible", "false");
  }
});
////////// FUNCTIONAL VIDEO CAROUSEL

if (document.body.classList.contains("home")) {
  const left = document.querySelector(".video__left");
  const right = document.querySelector(".video__right");
  const scrollContainer = document.querySelector(".promo-video__sub-video");

  const videoClips = document.querySelectorAll(".video-clip");
  videoClips.forEach((video) => {
    video.addEventListener("click", (e) => {
      let singleURL = e.target.firstElementChild.src;
      e.target.closest(
        ".promo-video__inner-wrapper"
      ).previousElementSibling.firstElementChild.src = singleURL;
    });
  });

  right.addEventListener("click", (e) => {
    scrollContainer.scrollBy({
      top: 0,
      left: 307,
      behavior: "smooth",
    });
  });

  left.addEventListener("click", (e) => {
    scrollContainer.scrollBy({
      top: 0,
      left: -307,
      behavior: "smooth",
    });
  });
}

///////// CONTENT FADE IN ANIMATION

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("left");
      entry.target.classList.add("right");
      entry.target.classList.add("down");
    }
  });
});

const hiddenLeft = document.querySelectorAll(".hidden-left");
const hiddenRight = document.querySelectorAll(".hidden-right");
const hiddenDown = document.querySelectorAll(".hidden-down");
hiddenLeft.forEach((el) => observer.observe(el));
hiddenRight.forEach((el) => observer.observe(el));
hiddenDown.forEach((el) => observer.observe(el));

///// Search

const searchBtn = document.querySelectorAll(".search-btn");
const searchForm = document.querySelector(".search-form-wrapper");
searchBtn.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    overlay.setAttribute("aria-hidden", "false");
    searchForm.setAttribute("aria-hidden", "false");
  });
  overlay.addEventListener("click", (e) => {
    searchForm.setAttribute("aria-hidden", "true");
  });
});

//// back to top button

const backToTopbtn = document.querySelector(".back-to-top-btn");

backToTopbtn.addEventListener("click", (e) => {
  window.scroll({
    top: 0,
  });
});
window.addEventListener("scroll", (e) => {
  if (window.scrollY > 150) {
    backToTopbtn.setAttribute("data-visible", "true");
  } else backToTopbtn.setAttribute("data-visible", "false");
});
