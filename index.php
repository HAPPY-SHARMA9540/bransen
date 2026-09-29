
   <meta name="description" content="The Bransen Pharmaceuticals is a Bransen pharmaceutical company providing medicines for Vertigo, Migraine and Neuropathy care with high-quality formulations.">
   <meta name="keyboard" content="Bransen Pharmaceuticals, Bransen pharma company, neuro pharma company, vertigo medicine company, migraine medicine company, neuropathy pharma, Bransen range pharma, neurological pharma company.">
   <meta name="title" content="The Bransen Pharmaceuticals | Bransen Pharmaceutical Company | Neuro & Vertigo Care"> 
   <title>The Bransen Pharmaceuticals | Bransen Pharmaceutical Company | Neuro & Vertigo Care</title>
   <?php include "common/header.php"?>
      <main>
         <!-- hero-area-start -->
            <div class="slider">

         <div class="slide">
            <img src="assets/img/banner/bransen-trusted-CNS-care.webp">
         </div>

         <div class="slide">
            <img src="assets/img/banner/banner2.webp">
         </div>

         <div class="slide">
            <img src="assets/img/banner/banner3.webp">
         </div>

         <button class="prev">❮</button>
         <button class="next">❯</button>

            </div>

      <style>
      /* Slider */
      .slider {
         position: relative;
         width: 100%;
         height: 78vh;
         overflow: hidden;
      }

      /* Slides */
      .slide {
         position: absolute;
         width: 100%;
         /* height: 100%; */
         opacity: 0;
         transition: opacity 1s ease-in-out;
      }

      .slide.active {
         opacity: 1;
         z-index: 1;
      }

      /* Image */
      .slide img {
         width: 100%;
         object-fit: cover;
         transform: scale(1.1);
         transition: transform 4s ease;
      }

      .slide.active img {
         transform: scale(1);
      }

      /* Overlay */
      .overlay {
         position: absolute;
         width: 100%;
         height: 100%;
         background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));
      }

      /* Content */
      .content {
         position: absolute;
         top: 50%;
         left: 8%;
         transform: translateY(-50%);
         color: #fff;
         max-width: 500px;
      }

      .content h1 {
         font-size: 50px;
         margin-bottom: 10px;
      }

      .content p {
         font-size: 18px;
         margin-bottom: 20px;
      }

      .content button {
         padding: 12px 25px;
         border: none;
         background: #ff4d4d;
         color: #fff;
         border-radius: 30px;
         cursor: pointer;
      }

      /* Arrows */
      .prev, .next {
         position: absolute;
         top: 50%;
         transform: translateY(-50%);
         font-size: 22px;
         background: rgba(0,0,0,0.4);
         color: #fff;
         border: none;
         padding: 0px 9px;
         cursor: pointer;
         border-radius: 50%;
         z-index: 10;
      }

      .prev { left: 15px; }
      .next { right: 15px; }

      /* Responsive */
      @media (max-width: 768px) {
         .slider {
            height: 43vh;
         }

         .content {
            left: 5%;
            right: 5%;
            text-align: center;
         }

         .content h1 {
            font-size: 28px;
         }

         .content p {
            font-size: 14px;
         }

         .content button {
            padding: 10px 20px;
         }
      }

      @media (max-width: 550px) {
         .slider {
            height: 25vh;
         }

         .content {
            left: 5%;
            right: 5%;
            text-align: center;
         }

         .content h1 {
            font-size: 28px;
         }

         .content p {
            font-size: 14px;
         }

         .content button {
            padding: 10px 20px;
         }
      }


      </style>

      <script>
         document.addEventListener("DOMContentLoaded", function () {

   let slides = document.querySelectorAll(".slide");
   let current = 0;

   const prevBtn = document.querySelector(".prev");
   const nextBtn = document.querySelector(".next");

   function showSlide(index) {
      slides.forEach(slide => slide.classList.remove("active"));
      slides[index].classList.add("active");
   }

   function changeSlide(step) {
      current += step;

      if (current >= slides.length) current = 0;
      if (current < 0) current = slides.length - 1;

      showSlide(current);
   }

   // 👇 IMPORTANT (ye add karo)
   showSlide(current);

   prevBtn.addEventListener("click", () => changeSlide(-1));
   nextBtn.addEventListener("click", () => changeSlide(1));

   let interval = setInterval(() => changeSlide(1), 2500);

   const slider = document.querySelector(".slider");

   slider.addEventListener("mouseenter", () => clearInterval(interval));

   slider.addEventListener("mouseleave", () => {
      interval = setInterval(() => changeSlide(1), 2500);
   });

});
      </script>
         <!-- hero-area-end -->

         <!-- about-area-start -->
         <div class="it-about-2-area it-about-style-2 p-relative pt-120 pb-120">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6 order-1 order-lg-0 wow itfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="it-about-4-left p-relative">
                        <div class="it-about-4-thumb-1">
                           <img src="assets/img/about/about.png" alt="Bransen Pharmaceuticals Pvt Ltd">
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 order-0 order-lg-1 wow itfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                     <div class="it-about-2-right">
                        <div class="it-about-2-content">
                           <div class="it-about-2-title-box mb-20">
                              <span class="it-section-subtitle">About us</span>
                              <h1 class="it-section-title">Modern Caring Mental Health & BehavioralTo Sciences.</h1>
                           </div>
                           <span>We continuously work towards expanding our CNS range and building long-term relationships with healthcare professionals and distribution partners.</span>
                           <p class="mb-30">The Bransen Pharmaceuticals is a growing pharmaceutical company focused on the Central Nervous System (CNS) therapeutic segment. We aim to deliver high-quality formulations for Migraine, Neuropathy and Vertigo.
                              <br>
                           Our commitment to quality, innovation, and reliability helps us provide effective pharmaceutical solutions. We follow strict manufacturing standards and ethical business practices to ensure safe and trusted products.
                           </p>
                           <div class="it-about-2-tel-wrap mt-30 flex-wrap d-sm-flex align-items-center">
                              <a class="it-btn-theme grey-bg mr-55" href="contact_us.php">
                                 <span class="btn-wrap">
                                    <span class="text-one">
                                       Our Counseling
                                    </span>
                                    <span class="text-two">
                                       Our Counseling
                                    </span>
                                 </span>
                              </a>
                              <div class="it-about-2-tel-box d-flex align-items-center">
                                 <div class="it-about-2-tel-icon">
                                    <span><i class="flaticon-message"></i></span>
                                 </div>
                                 <div class="it-about-2-tel-text">
                                    <a class="hover-anim"><?php echo "$phone"?></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- about-area-end -->

         <!-- shop-area-start -->
         <div class="it-shop-area fix pb-90">
            <div class="container">
               <div class="it-shop-title-wrap mb-20">
                  <div class="row align-items-end">
                     <div class="col-xl-6 col-md-6">
                        <div class="it-shop-title-box">
                           <span class="it-section-subtitle">product</span>
                           <h3 class="it-section-title">Featured Products</h3>
                        </div>
                     </div>
                     <div class="col-xl-6 col-md-6">
                        <div class="it-shop-button text-md-end">
                           <a class="it-btn-theme" href="product.php">
                              <span class="btn-wrap">
                                 <span class="text-one">
                                    View all items
                                 </span>
                                 <span class="text-two">
                                    View all items
                                 </span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
                  <style>
                  @media (max-width: 576px) {
      .hover-anim {
         font-size: 13px;
      }

      .it-btn-theme.shop-btn{
         font-size: 10px;
      }   
         
   }
   </style>
                  <div class="row">
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay="1.2s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product10.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover10.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim ">Naposen-D 250</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹74
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn" data-img="assets/img/product/product10.png"data-name="Naposen-D 250" data-price="74">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay="1.6s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product12.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover12.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Naposen-D 500</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹120
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn"data-img="assets/img/product/product12.png"data-name="Naposen-D 500" data-price="120">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay=".7s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product3.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover3.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Neubanfo-CD3</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹221
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn"data-img="assets/img/product/product3.png"data-name="Neubanfo-CD3" data-price="221">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay="1s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product5.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover5.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Neubanfo-Q10</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹422
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn" data-img="assets/img/product/product5.png"data-name="Neubanfo-Q10"data-price="422">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay="1.2s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product6.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover6.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Neubanfo softgel Capsules</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹113
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn"data-img="assets/img/product/product6.png"data-name="Neubanfo softgel Capsules" data-price="113">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay="1.6s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product8.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover8.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Neubanfo Syrup</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹186
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn"data-img="assets/img/product/product8.png"data-name="Neubanfo Syrup" data-price="186">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay="1.4s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product11.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover11.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Branleva-500</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹135
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn"data-img="assets/img/product/product11.png"data-name="Branleva-500" data-price="135">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay="1.6s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product15.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover15.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Branspram-Plus</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹154
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn" data-img="assets/img/product/product15.png"data-name="Branspram-Plus" data-price="154">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay="1.6s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product17.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover17.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Branspram-Lite</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹75
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn"data-img="assets/img/product/product17.png"data-name="Branspram-Lite" data-price="75">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                     data-wow-delay="1.6s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product13.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover13.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Branspram-10</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹96
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn" data-img="assets/img/product/product13.png"data-name="Branspram-10" data-price="96">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product1.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover1.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim fs-5 fs-md-5 fs-lg-4">Quitvert-16</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹131
                                 </div>
                                 <div class="it-shop-btn">
                                       <button class="shop-btn it-btn-theme cart-btn" data-img="assets/img/product/product1.png"data-name="Quitvert-16"data-price="131">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                           data-wow-delay=".5s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product2.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover2.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Patrick-Plus</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹145
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn" data-img="assets/img/product/product2.png"data-name="Patrick-Plus" data-price="145">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                           data-wow-delay=".8s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product4.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover4.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Esantro-D</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹147
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn"data-img="assets/img/product/product4.png"data-name="Esantro-D" data-price="147">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                           data-wow-delay="1.4s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product7.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover7.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Valbran CR-500</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹97
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn"data-img="assets/img/product/product7.png"data-name="Valbran CR-500" data-price="97">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                           data-wow-delay="1s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product9.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover9.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Valbran CR-300</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹73
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn" data-img="assets/img/product/product9.png"data-name="Valbran CR-300" data-price="73">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                           data-wow-delay="1.6s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product14.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover14.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Braneto-MR</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹240
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn" data-img="assets/img/product/product14.png"data-name="Braneto-MR" data-price="240">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-10 col-6 wow itfadeUp" data-wow-duration=".9s"
                           data-wow-delay="1.6s">
                           <div class="it-shop-item p-relative">
                              <div class="it-shop-thumb fix p-relative">
                                 <img src="assets/img/product/product16.png" class="img-default" alt="">
                                 <img src="assets/img/product/hover16.png" class="img-hover" alt="">
                              </div>
                              <div class="it-shop-content ">
                                 <h3 class="it-shop-title">
                                       <a href="#" class="hover-anim">Quitvert-8</a>
                                 </h3>
                                 <div class="it-shop-price">
                                       <span class="fw-bold fs-5">Price:</span> ₹75
                                 </div>
                                 <div class="it-shop-btn">
                                 <button class="shop-btn it-btn-theme cart-btn"data-img="assets/img/product/product16.png"data-name="Quitvert-8" data-price="75">
                                       <span class="btn-wrap">
                                          <span class="text-one">Shop Now</span>
                                          <span class="text-two">Shop Now</span>
                                       </span>
                                 </button>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>
            </div>
         </div>
         <!-- shop-area-end -->

         <!-- funfact area start  -->
         <div class="it-funfact-area  fix z-index-3">
            <div class="container">
               <div class="it-funfact-wrapper green-bg z-index p-relative">
                  <div class="it-funfact-shape-1">
                     <img src="assets/img/funfact/shape-4-1.png" alt="Bransen Pharmaceuticals Pvt Ltd">
                  </div>
                  <div class="it-funfact-shape-2">
                     <img src="assets/img/funfact/shape-4-2.png" alt="Bransen Pharmaceuticals Pvt Ltd">
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="it-funfact-item-box flex-wrap text-center d-md-flex align-content-center justify-content-md-between">
                           <div class="it-funfact-item border-style-1">
                              <h5 class="it-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                                    data-purecounter-end="1000">0</i>+</h5>
                              <span>Patients</span>
                           </div>
                           <div class="it-funfact-item border-style-1">
                              <h5 class="it-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                                    data-purecounter-end="500">0</i>+</h5>
                              <span>Expert Doctors</span>
                           </div>
                           <div class="it-funfact-item border-style-1">
                              <h5 class="it-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                                    data-purecounter-end="100">0</i>+</h5>
                              <span>Hospital & Dispensary</span>
                           </div>
                           <div class="it-funfact-item">
                              <h5 class="it-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                                    data-purecounter-end="3">0</i>+</h5>
                              <span>Years of Experience</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- funfact area end  -->

         <!-- testimonial-area-start -->
         <div class="it-testimonial-area it-testimonial-style-2 it-testimonial-style-4 fix pt-120 pb-120">
            <div class="container">
               <div class="it-testimonial-title-wrap mb-20">
                  <div class="row align-items-end">
                     <div class="col-xl-8 col-lg-6 col-md-6">
                        <div class="it-testimonial-left">
                           <div class="it-testimonial-title-box">
                              <span class="it-section-subtitle">Testimonial</span>
                              <h3 class="it-section-title">What Our Customers Says?</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="it-testimonial-arrow-box text-md-end">
                           <button class="slider-prev">
                              <span>
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.57031 5.92969L3.50031 11.9997L9.57031 18.0697" stroke="currentcolor"
                                       stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                       stroke-linejoin="round" />
                                    <path d="M20.5 12H3.67" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10"
                                       stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                              </span>
                           </button>
                           <button class="slider-next">
                              <span>
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4297 5.92969L20.4997 11.9997L14.4297 18.0697" stroke="currentcolor"
                                       stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                       stroke-linejoin="round" />
                                    <path d="M3.5 12H20.33" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10"
                                       stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                              </span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-12">
                     <div class="it-testimonial-2-wrapper">
                        <div class="swiper-container it-testimonial-2-active">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="it-testimonial-item">
                                    <div class="it-testimonial-text-wrap">
                                       <div class="it-testimonial-ratting">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                       <div class="it-testimonial-text">
                                          <p>We have experienced good response with the neurological formulations. The compositions are well designed and the quality is consistent. It has been a reliable addition to our prescription support in CNS-related conditions.</p>
                                       </div>
                                       <div class="it-testimonial-quote">
                                          <span><i class="flaticon-quote"></i></span>
                                       </div>
                                    </div>
                                    <div class="it-testimonial-author-box d-flex align-items-center">
                                       <div class="it-testimonial-author mr-15">
                                             <span style="background:#cacaca; border-radius:50%; padding:10px 15px;">H</span>
                                       </div>
                                       <div class="it-testimonial-author-info">
                                          <h5>— Healthcare Professional</h5>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="it-testimonial-item">
                                    <div class="it-testimonial-text-wrap">
                                       <div class="it-testimonial-ratting">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                       <div class="it-testimonial-text">
                                          <p>The product range is focused and practical for neurological care. We appreciate the quality standards and the professional approach. The brand is gaining trust among healthcare professionals</p>
                                       </div>
                                       <div class="it-testimonial-quote">
                                          <span><i class="flaticon-quote"></i></span>
                                       </div>
                                    </div>
                                    <div class="it-testimonial-author-box d-flex align-items-center">
                                       <div class="it-testimonial-author mr-15">
                                          <span style="background:#cacaca; border-radius:50%; padding:10px 15px;">M</span>
                                       </div>
                                       <div class="it-testimonial-author-info">
                                          <h5>— Medical Practitioner</h5>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="it-testimonial-item">
                                    <div class="it-testimonial-text-wrap">
                                       <div class="it-testimonial-ratting">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                       <div class="it-testimonial-text">
                                          <p>We are satisfied with the pharmaceutical quality and packaging. The formulations are well accepted in the market and the company provides good support. Looking forward to long-term association.</p>
                                       </div>
                                       <div class="it-testimonial-quote">
                                          <span><i class="flaticon-quote"></i></span>
                                       </div>
                                    </div>
                                    <div class="it-testimonial-author-box d-flex align-items-center">
                                       <div class="it-testimonial-author mr-15">
                                       <span style="background:#cacaca; border-radius:50%; padding:10px 15px;">D</span>
                                       </div>
                                       <div class="it-testimonial-author-info">
                                          <h5>— Distributor</h5>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="it-testimonial-item">
                                    <div class="it-testimonial-text-wrap">
                                       <div class="it-testimonial-ratting">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                       <div class="it-testimonial-text">
                                          <p>The CNS-focused range is thoughtfully developed. We have seen encouraging feedback and steady demand. The company maintains consistency in supply and quality.</p>
                                       </div>
                                       <div class="it-testimonial-quote">
                                          <span><i class="flaticon-quote"></i></span>
                                       </div>
                                    </div>
                                    <div class="it-testimonial-author-box d-flex align-items-center">
                                       <div class="it-testimonial-author mr-15">
                                          <span style="background:#cacaca; border-radius:50%; padding:10px 15px;">S</span>
                                       </div>
                                       <div class="it-testimonial-author-info">
                                          <h5>— Stockist</h5>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="it-testimonial-item">
                                    <div class="it-testimonial-text-wrap">
                                       <div class="it-testimonial-ratting">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                       <div class="it-testimonial-text">
                                          <p>A promising pharmaceutical company with a strong focus on neurological care. The formulations are reliable and the overall experience working with the team has been smooth.</p>
                                       </div>
                                       <div class="it-testimonial-quote">
                                          <span><i class="flaticon-quote"></i></span>
                                       </div>
                                    </div>
                                    <div class="it-testimonial-author-box d-flex align-items-center">
                                       <div class="it-testimonial-author mr-15">
                                          <span style="background:#cacaca; border-radius:50%; padding:10px 15px;">H</span>
                                       </div>
                                       <div class="it-testimonial-author-info">
                                          <h5>— Healthcare Partner</h5>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- testimonial-area-end -->

         <!-- faq-area-start -->
         <div class="it-faq-area  pb-90">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="it-faq-title-box text-center mb-65" style="justify-items:center;">
                        <span class="it-section-subtitle">FREQUENTLY ASKED QUESTIONS</span>
                        <h3 class="it-section-title">Get Every Single Answer <br> There If You Want</h3>
                     </div>
                  </div>
               </div>
               <div class="row gx-20">
                  <div class="col-lg-6">
                     <div class="it-faq-wrap mb-30">
                        <div class="it-custom-accordion it-custom-accordion-style-3 inner-style">
                           <div class="accordion" id="accordionExample">
                              <div class="accordion-items tp-faq-active">
                                 <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       <i>1.</i>What therapeutic segment does your company specialize in?
                                    </button>
                                 </h2>
                                 <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body d-flex align-items-center">
                                       <p class="mb-0">We specialize in Central Nervous System (CNS) pharmaceutical formulations.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-items">
                                 <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       <i>2.</i>What categories do you offer?
                                    </button>
                                 </h2>
                                 <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body d-flex align-items-center">
                                       <p class="mb-0">We offer formulations for Vertigo, Migraine, and Neuropathy care.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-items">
                                 <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       <i>3.</i> Are your products quality tested?
                                    </button>
                                 </h2>
                                 <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body d-flex align-items-center">
                                       <p class="mb-0">Yes, all products follow standard pharmaceutical quality guidelines.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="it-faq-wrap mb-30">
                        <div class="it-custom-accordion it-custom-accordion-style-3 inner-style">
                           <div class="accordion" id="accordionExample2">
                              <div class="accordion-items tp-faq-active">
                                 <h2 class="accordion-header" id="headingOne1">
                                    <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                       <i>4.</i>Do you offer distribution opportunities?
                                    </button>
                                 </h2>
                                 <div id="collapseOne1" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body d-flex align-items-center">
                                       <p class="mb-0">Yes, we welcome distribution and partnership enquiries.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-items">
                                 <h2 class="accordion-header" id="headingTwo2">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                       <i>5.</i>Are your medicines doctor recommended?
                                    </button>
                                 </h2>
                                 <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body d-flex align-items-center">
                                       <p class="mb-0">Our formulations are designed for use under medical supervision.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-items">
                                 <h2 class="accordion-header" id="headingThree3">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                       <i>6.</i>How can I contact your company?
                                    </button>
                                 </h2>
                                 <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body d-flex align-items-center">
                                       <p class="mb-0">You can contact us through phone, email, or contact form.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- faq-area-end -->

         <!-- blog-area-start -->
         <div class="it-blog-area it-blog-style-2 fix p-relative">
            <div class="container">
               <div class="it-blog-title-box mb-20">
                  <div class="row align-items-end">
                     <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="it-blog-title-box">
                           <span class="it-section-subtitle green">Blog</span>
                           <h3 class="it-section-title">Our recent Post</h3>
                        </div>
                     </div>
                     <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="it-blog-button text-md-end">
                           <a href="blog.php" class="it-btn-theme grey-bg">
                              <span class="btn-wrap">
                                 <span class="text-one">
                                    All Blog
                                 </span>
                                 <span class="text-two">
                                    All Blog
                                 </span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 mb-10 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="it-blog-item">
                           <div class="it-blog-thumb p-relative">
                              <img src="https://images.apollo247.in/pd-cms/cms/2025-09/AdobeStock_510667823.webp" alt="Bransen Pharmaceuticals Pvt Ltd">
                           </div>
                           <div class="it-blog-content">
                              <div class="it-blog-meta">
                              <span><i class="flaticon-user"></i>Admin</span>
                              </div>
                              <h4 class="it-blog-title"><a class="hover-anim">Understanding Vertigo and Balance Disorders</a></h4>
                           </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 mb-10 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="it-blog-item">
                           <div class="it-blog-thumb p-relative">
                              <img src="https://www.health.com/thmb/SQb7Jjc_43QYXyAVo5r8ZVKhSwk=/2121x0/filters:no_upscale():max_bytes(150000):strip_icc()/migraine-causes-GettyImages-1369915896-3b04511bf2374073b90208f198830b84.jpg" alt="Bransen Pharmaceuticals Pvt Ltd">
                           </div>
                           <div class="it-blog-content">
                              <div class="it-blog-meta">
                              <span><i class="flaticon-user"></i>Admin</span>
                              </div>
                              <h4 class="it-blog-title"><a class="hover-anim">Migraine Causes and Prevention</a></h4>
                           </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 mb-10 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <div class="it-blog-item">
                           <div class="it-blog-thumb p-relative">
                              <img src="https://psrihospital.com/wp-content/uploads/2025/06/neuropathic-pain.png.webp" alt="Bransen Pharmaceuticals Pvt Ltd">
                           </div>
                           <div class="it-blog-content">
                              <div class="it-blog-meta">
                              <span><i class="flaticon-user"></i>Admin</span>
                              </div>
                              <h4 class="it-blog-title"><a class="hover-anim">What is Neuropathy and Nerve Damage</a></h4>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- blog-area-end -->
      </main>

   <?php include "common/footer.php" ?>