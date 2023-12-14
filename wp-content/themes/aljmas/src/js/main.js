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

////////////////////// 💡 ALBUM GALLERY

let currentImageIndex = 0;
let currentTabId;
let newImgWindow;

// gallery tabs

const tabBtns = document.querySelectorAll(".galerija__tab-btn");

tabBtns.forEach((tabBtn) => {
  tabBtn.addEventListener("click", (e) => {
    const tabIcon = tabBtn.querySelector(".close-tab-icon");
    // Toggle the clicked button
    const isActive = tabBtn.getAttribute("data-active") === "true";

    tabBtns.forEach((btn) => {
      btn.setAttribute("data-active", "false");
      const icon = btn.querySelector(".close-tab-icon");
      icon.style.transition = ".5s";
      icon.style.transform = "rotate(0deg)";
    });
    tabBtn.setAttribute("data-active", isActive ? "false" : "true");

    // Toggle the rotation
    const rotationAngle = isActive ? "0deg" : "45deg";
    tabIcon.style.transition = ".5s";
    tabIcon.style.transform = `rotate(${rotationAngle})`;

    ///////////// 👌
    // galleryTabBtns.forEach((btn) => {
    // btn.addEventListener("click", (e) => {
    currentTabId = e.currentTarget.id;
    const filteredImgs = tabImages.filter((obj) => obj.id === currentTabId);
    const imgs = filteredImgs[0].images.map((img) => {
      const imgElement = document.createElement("img");
      imgElement.classList.add("galerija__image");
      imgElement.setAttribute("loading", "lazy");
      imgElement.setAttribute(
        "src",
        `/wp-content/themes/aljmas/src/assets/images/album/img (${img}).jpg`
      );
      imgElement.setAttribute("alt", "image");

      return imgElement;
    });

    const galleryWrapper = document.querySelector(".galerija__tab-content");
    galleryWrapper.innerHTML = "";
    imgs.forEach((img) => {
      img.addEventListener("click", (e) => {
        const splitPart = img.src.split(
          "/wp-content/themes/aljmas/src/assets/images/album/img%20("
        );
        const otherPart = splitPart[1].replace(").jpg", "");
        displayImage(otherPart);
      });
      galleryWrapper.setAttribute("data-visible", isActive ? "false" : "true");
      galleryWrapper.appendChild(img);
    });
  });
});

// function createOverlay() {
//   newImgWindow = document.createElement("div");
//   newImgWindow.setAttribute("class", "overlay-gallery-image");

//   newImgWindow.addEventListener("click", (e) => {
//     if (e.target === e.currentTarget) {
//       e.currentTarget.remove();
//     }
//   });
//   document.body.append(newImgWindow);
// }

function removeImageClasses() {
  const currentImg = document.querySelector(".current-gallery-img");
  if (currentImg) {
    currentImg.classList.remove("right-image", "left-image");
  }
}

function createButtons() {
  if (!document.querySelector(".gallery-btn--prev")) {
    const prevBtn = document.createElement("button");
    prevBtn.setAttribute("class", "gallery-btn gallery-btn--prev");
    prevBtn.addEventListener("click", () => {
      changeImg("prev");
    });
    const prevImgIcon = document.createElement("i");
    prevImgIcon.setAttribute("class", "fa-solid fa-chevron-left");
    prevBtn.append(prevImgIcon);
    newImgWindow.append(prevBtn);
  }

  if (!document.querySelector(".gallery-btn--next")) {
    const nextBtn = document.createElement("button");
    nextBtn.setAttribute("class", "gallery-btn gallery-btn--next ");
    nextBtn.addEventListener("click", (e) => {
      changeImg("next");
    });
    const nextImgIcon = document.createElement("i");
    nextImgIcon.setAttribute("class", "fa-solid fa-chevron-right");
    nextBtn.append(nextImgIcon);
    newImgWindow.append(nextBtn);
  }
}

function createImageOverlay(element) {
  const existingOverlay = document.querySelector(".overlay-image");
  if (existingOverlay) {
    existingOverlay.innerHTML = "";
    existingOverlay.append(element);
    existingOverlay.setAttribute("data-visible", "true");
    newImgWindow = existingOverlay; // Update newImgWindow reference
  } else {
    newImgWindow = document.createElement("div");
    newImgWindow.setAttribute("class", "overlay-image");
    newImgWindow.setAttribute("data-visible", "true");
    document.body.append(newImgWindow);
    newImgWindow.append(element);
  }

  createButtons();

  newImgWindow.addEventListener("click", (e) => {
    if (e.target.matches(".overlay-image")) {
      newImgWindow.setAttribute("data-visible", "false");
      const firstChild = newImgWindow.firstElementChild;
      if (firstChild) {
        firstChild.remove();
      }
    }
  });
}

function displayImage(image) {
  removeImageClasses(); // Add this line

  currentImageIndex = tabImages
    .find((album) => album.id === currentTabId)
    .images.indexOf(image);

  const imgElement = document.createElement("img");
  imgElement.classList.add("current-gallery-img");
  imgElement.setAttribute(
    "src",
    `/wp-content/themes/aljmas/src/assets/images/album/img (${image}).jpg`
  );
  createImageOverlay(imgElement);
}

function changeImg(changeDir) {
  const currentAlbum = tabImages.find((album) => album.id === currentTabId);
  const totalImages = currentAlbum.images.length;

  if (changeDir === "prev") {
    currentImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;
  } else if (changeDir === "next") {
    currentImageIndex = (currentImageIndex + 1) % totalImages;
  }

  removeImageClasses();

  const newImage = currentAlbum.images[currentImageIndex];
  displayImage(newImage);

  const currentImg = document.querySelector(".current-gallery-img");
  if (changeDir === "prev") {
    currentImg.classList.add("left-image");
  } else if (changeDir === "next") {
    currentImg.classList.add("right-image");
  }
}
