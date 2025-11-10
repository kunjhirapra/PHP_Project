// const loadMoreBtn = document.querySelector(".loadmore-btn");

// let currentItem = 6;

// loadMoreBtn.onclick = () => {
//   let boxes = [...document.querySelectorAll(".item-container")];
//   for (let i = currentItem; i < currentItem + 6 && i < boxes.length; i++) {
//     boxes[i].style.display = "block";
//   }
//   currentItem += 6;
//   if (currentItem >= boxes.length) {
//     loadMoreBtn.style.display = "none";
//   }
// };

// btns

const loadMoreBtn = document.querySelector(".loadmore-btn");
const seeLessBtn = document.querySelector(".see-less-btn");

let currentItem = 6;
if (loadMoreBtn) {
  loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll(".item-container")];
    for (let i = currentItem; i < currentItem + 6 && i < boxes.length; i++) {
      boxes[i].style.display = "block";
    }
    currentItem += 6;
    if (currentItem >= boxes.length) {
      loadMoreBtn.style.display = "none";
      seeLessBtn.style.display = "inline-block";
    }
  };
}
if (seeLessBtn) {
  seeLessBtn.onclick = () => {
    let boxes = [...document.querySelectorAll(".item-container")];
    currentItem -= 6;
    for (let i = currentItem; i < boxes.length; i++) {
      boxes[i].style.display = "none";
    }
    loadMoreBtn.style.display = "inline-block";
    seeLessBtn.style.display = currentItem > 6 ? "inline-block" : "none";
  };
  document.addEventListener("DOMContentLoaded", () => {
    let boxes = [...document.querySelectorAll(".item-container")];
    boxes.forEach((box, index) => {
      if (index >= 6) {
        box.style.display = "none";
      }
    });
    seeLessBtn.style.display = "none";
  });
}

// Progress-btn

let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let stickyMenu = document.getElementsByClassName("product-add-menu")[0];
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);

  if (scrollProgress) {
    if (pos > 100) {
      scrollProgress.style =
        "opacity: 1; pointer-events: auto; visibility: visible; animation-duration: 1s; animation-name: slideup;";
    } else {
      scrollProgress.style =
        "opacity: 0; pointer-events: none; visibility: hidden; animation-duration: 1s; animation-name: slidedown;";
    }

    scrollProgress.addEventListener("click", () => {
      document.documentElement.scrollTop = 0;
    });

    scrollProgress.style.background = `conic-gradient(#777 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
  }
  if (stickyMenu) {
    if (pos > 100) {
      stickyMenu.style =
        "opacity: 1; pointer-events: auto; visibility: visible; animation-duration: 1s; animation-name: slideup;";
    } else {
      stickyMenu.style =
        "opacity: 0; pointer-events: none; visibility: hidden; animation-duration: 1s; animation-name: slidedown; transition: all 1s ease;";
    }
  }
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;
