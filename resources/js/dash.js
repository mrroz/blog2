// let addItem = [];
// const addTo = (ev) => {
//   ev.preventDefault();
//   let item = {
//     price: document.getElementById("price").value,
//     address: document.getElementById("address").value,
//     type: document.getElementById("type").value,
//     measurement: document.getElementById("measurement").value,
//     rooms: document.getElementById("rooms").value,
//     year: document.getElementById("year").value,
//     description: document.getElementById("description").value,
//     file: document.getElementById("file").value,
//     imgDefault: "img/Default.png"
//   };
//   addItem.push(item);
//   document.forms[0].reset();
// };
// document.addEventListener("DOMContentLoaded", () => {
// document.getElementById("send-btn").addEventListener("click", addTo);
// document.getElementById("send-btn").addEventListener("click", renderItems);
// });

// const itemEL = document.querySelector(".app-item-container");
// function renderItems() {
//   availableItem.forEach((item) => {
//     itemEL.innerHTML += `
//  <article class="app-item"> 
//      <section class="item-img">
//          <section class="img-slider fade">
//              <img src="${item.imgSrc}"  alt="">
//          </section>
//          <section class="img-slider fade">
//              <img src="${item.imgSrc2}"  alt="">
//          </section>
//          <section class="img-slider fade">
//              <img src="${item.imgSrc3}"  alt="">
//          </section>
//          <a class="prev" >&#10095;</a>
//          <a class="next" >&#10094;</a>
//      </section>
//      <section class="item-info">
//          <section>
//              <section class="item-caption">
//                  <ul>
//                      <li class="price"> ${item.price} تومان </li>
//                      <li class="area">${item.address}</li>
//                      <li class="type">${item.type}</li>
//                      <li class="caption">${item.description}</li>
//                  </ul>
//              </section>
//              <section class="item-info-list">
//                  <section class="item-info-list-container">
//                      <ul>
//                          <li><img src="./img/mycollection/png/001-meter.png" alt="">
//                              <span>${item.measurement}متر</span></li>
//                          <li><img src="./img/mycollection/png/002-double-bed.png" alt="">
//                              <span>${item.rooms}خواب</span></li>
//                          <li><img src="./img/mycollection/png/003-calendar.png" alt="">
//                              <span>${item.year}</span></li>
//                      </ul>
//                  </section>
//              </section>
//          </section>
//          <section class="item-contact">
//              <button >
//                  <span>حذف</span>
//              </button>
//          </section>
//      </section>
//  </article>
    
//      `;
//   });
// }
// renderItems();

//slider
(function () {
  init(); //on page load - show first slide, hidethe rest

  function init() {
    parents = document.getElementsByClassName("item-img");

    for (j = 0; j < parents.length; j++) {
      var slides = parents[j].getElementsByClassName("img-slider");
      slides[0].classList.add("active-slide");
    }
  }

  //prev/next functionality
  links = document.querySelectorAll(".item-img a");

  for (i = 0; i < links.length; i++) {
    links[i].onclick = function () {
      current = this.parentNode;

      var slides = current.getElementsByClassName("img-slider");
      curr_slide = current.getElementsByClassName("active-slide")[0];
      curr_slide.classList.remove("active-slide");
      if (this.className == "next") {
        if (curr_slide.nextElementSibling.classList.contains("img-slider")) {
          curr_slide.nextElementSibling.classList.add("active-slide");
        } else {
          slides[0].classList.add("active-slide");
        }
      }

      if (this.className == "prev") {
        if (curr_slide.previousElementSibling) {
          curr_slide.previousElementSibling.classList.add("active-slide");
        } else {
          slides[slides.length - 1].classList.add("active-slide");
        }
      }
    };
  }
})();
