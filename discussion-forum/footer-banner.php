 <div id="testimonials-placeholder"></div>
 <!-- CTA Section -->
 <div class="cta-section text-center bg-primary text-white py-4 my-5">
     <h2 class="mb-3" style="color: #fdc500;">Ready to Simplify Maintenance?</h2>
     <p class="fs-18 mb-4">
         Join hundreds of satisfied customers who have transformed their maintenance processes.
         <br>Sign up today and start optimizing your workflow.
     </p>
     <a href="" class="btn btn-lg btn-light rounded-pill text-primary fw-bold" onclick=" Calendly.initPopupWidget({url: 'https://calendly.com/oxmaintapp/30min' });return false;">Request Demo &nbsp;→</a>
 </div>

 <script>
     // JavaScript to Load Testimonials
     document.addEventListener("DOMContentLoaded", function() {
         var testimonialsPlaceholder = document.getElementById("testimonials-placeholder");

         // Fetch and load the testimonials HTML
         fetch("../testimonials.html") // Replace with the actual path to testimonials.html
             .then(response => response.text())
             .then(html => {
                 testimonialsPlaceholder.innerHTML = html;

                 // Initialize Swiper after HTML content is loaded
                 var swiper = new Swiper(".swiper-container", {
                     slidesPerView: 3, // Default for large screens
                     spaceBetween: 20,
                     loop: true,
                     autoplay: {
                         delay: 0, // Continuous autoplay
                         disableOnInteraction: false,
                     },
                     speed: 15000,
                     allowTouchMove: true,
                     navigation: {
                         nextEl: '.swiper-button-next',
                         prevEl: '.swiper-button-prev',
                     },
                     breakpoints: {
                         0: {
                             slidesPerView: 1, // Extra-small screens (e.g., phones)
                         },
                         576: {
                             slidesPerView: 1, // Small screens (e.g., small tablets)
                         },
                         768: {
                             slidesPerView: 2, // Medium screens (e.g., larger tablets)
                         },
                         992: {
                             slidesPerView: 2, // Large tablets and small laptops
                         },
                         1200: {
                             slidesPerView: 3, // Desktops and larger screens
                         }
                     },
                     on: {
                         init: function() {
                             let swiperEl = document.querySelector(".swiper-container");
                             swiperEl.addEventListener("mouseenter", () => {
                                 swiper.autoplay.stop();
                             });
                             swiperEl.addEventListener("mouseleave", () => {
                                 swiper.autoplay.start();
                             });
                         },
                     },
                 });
             })
             .catch(error => console.error("Error loading testimonials:", error));
     });

     document.addEventListener("DOMContentLoaded", () => {
         const toggleLink = document.querySelector(".toggle-more-replies");
         const moreRepliesContent = document.querySelector(".more-replies-content");
         const noRepliesMessage = document.querySelector(".no-replies-message");

         // Check if there are replies in the "more-replies-content"
         if (!moreRepliesContent.children.length) {
             noRepliesMessage.style.display = "block"; // Show "No More Replies" if empty
             toggleLink.style.display = "none"; // Hide the link if there are no replies
         }

         toggleLink.addEventListener("click", (event) => {
             event.preventDefault(); // Prevent default anchor behavior
             if (moreRepliesContent.style.display === "none") {
                 moreRepliesContent.style.display = "block";
                 toggleLink.textContent = "Hide More Replies";
             } else {
                 moreRepliesContent.style.display = "none";
                 toggleLink.textContent = "More Replies";
             }
         });
     });
 </script>