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

// gallery tabs

const tabBtns = document.querySelectorAll(".galerija__tab-btn");
tabBtns.forEach((tabBtn) => {
  tabBtn.addEventListener("click", (e) => {
    const tabContent = tabBtn.nextElementSibling;
    const tabIcon = tabBtn.querySelector(".close-tab-icon");
    if (tabContent.getAttribute("data-visible") === "false") {
      tabContent.setAttribute("data-visible", "true");
      tabIcon.style = `
      transition:.5s;
        transform: rotate(45deg);
      `;
    } else {
      tabContent.setAttribute("data-visible", "false");
      tabIcon.style = `
      transition:.5s;
      transform: rotate(0deg);
    `;
    }
  });
});

// gallery

let galleryImages = document.querySelectorAll(".galerija__image");
let getLatestOpenedImg;
let windowWidth = window.innerWidth;

let newImgWindow;

if (galleryImages) {
  galleryImages.forEach((img, index) => {
    img.addEventListener("click", (e) => {
      let getFullImageUrl = img.getAttribute("src");
      let getImageUrlPosition = getFullImageUrl.split(
        "/wp-content/themes/aljmas/src/assets/images/album/img ("
      );
      let setNewImgUrl = getImageUrlPosition[1].replace(").jpg", "");
      getLatestOpenedImg = index + 1;
      createOverlay();
      ///////// create curr img that contains clicked img
      let newImg = document.createElement("img");
      newImg.setAttribute("class", "current-gallery-img");
      newImg.setAttribute("id", "current-img");
      newImg.setAttribute(
        "src",
        `/wp-content/themes/aljmas/src/assets/images/album/img (${setNewImgUrl}).jpg`
      );
      newImgWindow.append(newImg);
      console.log(newImg);
      // when image is loaded put btns beside
      newImg.addEventListener("load", () => {
        createGalleryBtns();
      });
    });
  });
}

function changeImg(changeDir) {
  let anyOfIimages = newImgWindow.querySelectorAll("img");
  if (anyOfIimages) {
    anyOfIimages.forEach((img) => {
      img.remove();
    });
  }
  let newImg = document.createElement("img");
  newImgWindow.append(newImg);

  newImg.setAttribute("class", "current-gallery-img");
  let calcNewImg;
  if (changeDir === 1) {
    calcNewImg = getLatestOpenedImg + 1;
    if (calcNewImg > galleryImages.length) calcNewImg = 1;
    newImg.classList.remove("left-image");
    newImg.classList.add("right-image");
  } else if (changeDir === 0) {
    calcNewImg = getLatestOpenedImg - 1;
    newImg.classList.remove("right-image");
    newImg.classList.add("left-image");
    if (calcNewImg < 1) calcNewImg = galleryImages.length;
  }

  newImg.setAttribute(
    "src",
    `/wp-content/themes/aljmas/src/assets/images/album/img (${calcNewImg}).jpg`
  );
  newImg.setAttribute("id", "current-gallery-img");
  getLatestOpenedImg = calcNewImg;
}

function createGalleryBtns(e) {
  ///////////// create btns
  // prev btn
  let prevBtn = document.createElement("button");
  prevBtn.setAttribute("class", "gallery-btn gallery-btn--prev");
  prevBtn.addEventListener("click", () => {
    changeImg(0);
  });
  let prevImgIcon = document.createElement("i");
  prevImgIcon.setAttribute("class", "fa-solid fa-chevron-left");
  prevBtn.append(prevImgIcon);
  newImgWindow.append(prevBtn);
  // next btn
  let nextBtn = document.createElement("button");
  nextBtn.setAttribute("class", "gallery-btn gallery-btn--next");
  nextBtn.addEventListener("click", () => {
    changeImg(1);
  });
  let nextImgIcon = document.createElement("i");
  nextImgIcon.setAttribute("class", "fa-solid fa-chevron-right");
  nextBtn.append(nextImgIcon);
  newImgWindow.append(nextBtn);
}

function createOverlay() {
  ////////// create overlay for curr img
  newImgWindow = document.createElement("div");
  newImgWindow.setAttribute("class", "overlay-gallery-image");

  ////////// when clicks overlay close img
  newImgWindow.addEventListener("click", (e) => {
    if (e.target === e.currentTarget) {
      e.currentTarget.remove();
    }
  });
  document.body.append(newImgWindow);
}
