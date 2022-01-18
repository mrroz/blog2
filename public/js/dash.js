// //slider
// (function() {
//     init(); //on page load - show first slide, hidethe rest

//     function init() {
//         parents = document.getElementsByClassName("item-img");

//         for (j = 0; j < parents.length; j++) {
//             var slides = parents[j].getElementsByClassName("img-slider");
//             slides[0].classList.add("active-slide");
//         }
//     }

//     //prev/next functionality
//     links = document.querySelectorAll(".item-img a");

//     for (i = 0; i < links.length; i++) {
//         links[i].onclick = function() {
//             current = this.parentNode;

//             var slides = current.getElementsByClassName("img-slider");
//             curr_slide = current.getElementsByClassName("active-slide")[0];
//             curr_slide.classList.remove("active-slide");
//             if (this.className == "next") {
//                 if (curr_slide.nextElementSibling.classList.contains("img-slider")) {
//                     curr_slide.nextElementSibling.classList.add("active-slide");
//                 } else {
//                     slides[0].classList.add("active-slide");
//                 }
//             }

//             if (this.className == "prev") {
//                 if (curr_slide.previousElementSibling) {
//                     curr_slide.previousElementSibling.classList.add("active-slide");
//                 } else {
//                     slides[slides.length - 1].classList.add("active-slide");
//                 }
//             }
//         };
//     }
// })();