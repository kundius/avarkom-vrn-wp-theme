import { modal } from "./modal";

function init(reviews) {
  const wrapper = document.querySelector(".reviews");
  const preview = document.querySelector(".reviews-preview");
  const details = document.querySelector(".reviews-details");

  // const previewMoreWrap = preview.querySelector('.reviews-preview__more')

  // const infoButtonMore = document.querySelector('.reviews-info__more')
  // const infoImage = document.querySelector('.reviews-info__image')
  const buttonLeft = document.querySelectorAll(".reviews-nav__left") || [];
  const buttonRight = document.querySelectorAll(".reviews-nav__right") || [];

  const previewName = preview.querySelector(".reviews-figure__title");
  const previewDescription = preview.querySelector(".reviews-figure__desc");
  const previewMore = preview.querySelector(".reviews-more");
  const previewDate = preview.querySelector(".reviews-date");
  const previewContent = preview.querySelector(".reviews-content");
  const previewImage = preview.querySelector(".reviews-figure__image");
  const previewVideo = preview.querySelector(".reviews-video");

  const detailsClose = details.querySelector(".reviews-details__close");
  const detailsImage = details.querySelector(".reviews-figure__image");
  const detailsVideo = details.querySelector(".reviews-video");
  const detailsDate = details.querySelector(".reviews-date");
  const detailsName = details.querySelector(".reviews-figure__title");
  const detailsDescription = details.querySelector(".reviews-figure__desc");
  const detailsContent = details.querySelector(".reviews-content");

  let duration = 400;
  let active = 0;
  let animating = false;

  const renderReview = (index) => {
    wrapper.classList.add("reviews_animation-out");
    preview.classList.add("reviews-preview_animation-out");
    details.classList.add("reviews-details_animation-out");
    animating = true;
    setTimeout(() => {
      previewName.innerHTML = reviews[index].name;
      previewDescription.innerHTML = reviews[index].description;
      previewDate.innerHTML = reviews[index].date;
      previewContent.innerHTML = reviews[index].excerpt;
      previewVideo.innerHTML = reviews[index].video;
      previewImage.style.backgroundImage = reviews[index].image
        ? `url('${reviews[index].image.url}')`
        : null;
      previewContent.parentNode.style.display = reviews[index].excerpt
        ? "block"
        : "none";
      previewVideo.parentNode.style.display = reviews[index].video
        ? "block"
        : "none";
      previewMore.parentNode.style.display = reviews[index].content
        ? "block"
        : "none";

      detailsName.innerHTML = reviews[index].name;
      detailsDescription.innerHTML = reviews[index].description;
      detailsDate.innerHTML = reviews[index].date;
      detailsContent.innerHTML = reviews[index].content;
      detailsVideo.innerHTML = reviews[index].video;
      detailsImage.style.backgroundImage = reviews[index].image
        ? `url('${reviews[index].image.url}')`
        : null;
      detailsContent.parentNode.style.display = reviews[index].content
        ? "block"
        : "none";
      detailsVideo.parentNode.style.display = reviews[index].video
        ? "block"
        : "none";

      wrapper.classList.remove("reviews_animation-out");
      wrapper.classList.add("reviews_animation-in");

      preview.classList.remove("reviews-preview_animation-out");
      preview.classList.add("reviews-preview_animation-in");

      details.classList.remove("reviews-details_animation-out");
      details.classList.add("reviews-details_animation-in");

      setTimeout(() => {
        wrapper.classList.remove("reviews_animation-in");
        preview.classList.remove("reviews-preview_animation-in");
        details.classList.remove("reviews-details_animation-in");
        animating = false;
      }, duration);
    }, duration);
  };

  const alignDetails = () => {
    const rect = preview.getBoundingClientRect();

    let top = rect.top;
    let left = rect.left;
    let width = rect.width;
    let height = rect.height;

    if (window.matchMedia("(max-width: 959px)").matches) {
      width = window.innerWidth - left * 2;
    }

    details.style.top = `${top}px`;
    details.style.left = `${left}px`;
    details.style.width = `${width}px`;
    details.style.minHeight = `${height}px`;
  };

  const showDetails = () => {
    alignDetails();
    details.style.display = "block";
    window.addEventListener("scroll", alignDetails);
  };

  const hideDetails = () => {
    details.style.display = "none";
    window.removeEventListener("scroll", alignDetails);
  };

  buttonLeft.forEach((el) => {
    el.addEventListener("click", () => {
      if (animating) return;

      active = active === 0 ? reviews.length - 1 : active - 1;

      renderReview(active);
    });
  });

  buttonRight.forEach((el) => {
    el.addEventListener("click", () => {
      if (animating) return;

      active = active === reviews.length - 1 ? 0 : active + 1;

      renderReview(active);
    });
  });

  previewMore.addEventListener("click", () => {
    if (window.matchMedia("(max-width: 639px)").matches) {
      const modalTitle = document.getElementById("modal-review-title");
      const modalContent = document.getElementById("modal-review-content");

      modalTitle.innerHTML = reviews[active].name;
      modalContent.innerHTML = reviews[active].video + reviews[active].content;

      modal.open("#modal-review");
    } else {
      showDetails();
    }
  });

  detailsClose.addEventListener("click", () => {
    hideDetails();
  });
}

if (typeof theme_reviews) {
  init(theme_reviews);
}
