<html lang="en">


<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>toidayhoc-academy</title>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   <link rel="stylesheet" href="./style-1.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,700,0,0" />

   <script src="https://kit.fontawesome.com/1330f21d64.js" crossorigin="anonymous"></script>
   <script>
      // Initialize Firebase
      var config = {
         apiKey: "AIzaSyDCJFRzZgHXRowkd_nJq6QMHs8Has0S_oU",
         authDomain: "testsms-c9c70.firebaseapp.com",
         projectId: "testsms-c9c70",
         storageBucket: "testsms-c9c70.appspot.com",
         messagingSenderId: "903925407410",
         appId: "1:903925407410:web:195cc493d8f8a9c1c1b3ab",
         measurementId: "G-DQQ6F35CNT"
      };
      firebase.initializeApp(config);
   </script>
   <script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"></script>
   <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
   <link rel="stylesheet" href="./home/css/style.css">
</head>
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
   <i class="fas fa-arrow-up"></i>
</button>

<body>
   <header>
      <div class="tp-header__main" id="tp-header__main">
         <div class="container d-flex">
            <div class="row align-items-center w-100">
               <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                  <div class="logo has-border">
                     <a href="index.html">
                        <img src="./img/toidayhoc-logo.png" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-7">
                  <div class="main-menu">
                     <nav id="mobile-menu" style="display: block;">
                        <ul class="d-flex">
                           <li class="has-dropdown">
                              <a href="index.html">Home <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                    fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                 </svg>
                                 <ul class="submenu">
                                    <li><a href="index.html">Home Style 1</a></li>
                                    <li><a href="#">Home Style 2</a></li>
                                    <li><a href="#">Home Style 3</a></li>
                                 </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="about-us.html">About</a>
                           </li>
                           <li class="has-dropdown">
                              <a href="course.html">Courses <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                    height="10" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                 </svg></a>
                              <ul class="submenu">
                                 <li><a href="course-list.html">Courses List</a></li>
                                 <li><a href="course.html">Courses Grid</a></li>
                                 <li><a href="course-details.html">Course Details</a></li>
                                 <li><a href="cart.html">Cart</a></li>
                                 <li><a href="checkout.html">Checkout</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="#">Pages <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                    fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                 </svg></a>
                              <ul class="submenu">
                                 <li><a href="event.html">Events</a></li>
                                 <li><a href="event-details.html">Event Details</a></li>
                                 <li><a href="instructor.html">Instructor V1</a></li>
                                 <li><a href="instructor-2.html">Instructor V2</a></li>
                                 <li><a href="instructor-details.html">Instructor Details</a></li>
                                 <li><a href="wishlist.html">Wishlist</a></li>
                                 <li><a href="sign-in.html">Sign In</a></li>
                                 <li><a href="sign-up.html">Sign Up</a></li>
                                 <li><a href="faq.html">Faq</a></li>
                                 <li><a href="404.html">404</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="blog.html">Blog <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                    fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                 </svg></a>
                              <ul class="submenu">
                                 <li><a href="blog.html">Blog</a></li>
                                 <li><a href="blog-details.html">Blog Details</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="contact.html">Contact</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-6">
                  <div class="tp-header__main-right d-flex justify-content-end align-items-center pl-30">
                     <div class="">
                        <a href="tel:+(443)003030266" class="tp-phone-btn"><span class="material-symbols-outlined">
                              call
                           </span>+(443)00 303 0266 <span></span></a>
                        <a href="contact.html" class="tp-btn br-0">
                           <span class="book">Book a Visit <span class="material-symbols-outlined">
                                 east
                              </span></span>
                           <div class="transition"></div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <div class="tp-hero__section pt-130 theme-bg p-relative fix">
      <div class="container">
         <div class="row">
            <div class="col-lg-7">
               <div class="tp-hero__content pt-200">
                  <span class="tp-hero__subtitle text-white mb-10">Education Goal</span>
                  <h3 class="tp-hero__title text-white mb-15">Free online courses
                     from the experts.</h3>
                  <p class="mb-45 text-white ">Presenting Academy, the tech school of the future.</p>
                  <div class="tp-hero__btn-wrappper d-md-flex align-items-center">
                     <div class="hero-btn-1 mr-20 p-relative z-index-1">
                        <a href="course.html" class="tp-btn br-0 text-white ">
                           <span class="hero-btn-span">Explore Coureses</span>
                           <div class="transition"></div>
                        </a>
                     </div>
                     <div class="hero-btn-2 text-white ">
                        <a href="https://www.youtube.com/watch?v=vQD4YAgc7PE"
                           class="tp-play-btn d-flex align-items-center popup-video">

                           <i class="arrow_triangle-right"></i>
                           <span class="hero-btn-span-1">Watch it Now</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="tp-hero__img">
                  <img style="    width: 100%;"
                     src="https://data.themeim.com/html/tutorgo/assets/img/hero/hero-img-1.png" alt="hero">
               </div>
            </div>
         </div>
      </div>
      <div class="tp-hero__shapes">
         <div class="tp-hero__shapes-1">
            <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/book-shape.png" alt="">
         </div>
         <div class="tp-hero__shapes-2">
            <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/circle-shape.png" alt="">
         </div>
         <div class="tp-hero__shapes-3">
            <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/dots-shapes.png" alt="">
         </div>
         <div class="tp-hero__shapes-4">
            <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/line-shape.png" alt="">
         </div>
         <div class="tp-hero__shapes-5">
            <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/lines-shape.png" alt="">
         </div>
         <div class="tp-hero__shapes-6">
            <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/role-shape.png" alt="">
         </div>
      </div>
   </div>
   <div class="" style="margin-bottom: 100px;">
   </div>
   <div class="tp-brand__section">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="tp-brand__box white-bg pt-40">
                  <div class="row pad-near-hear" style="    margin-left: 90px;">
                     <div class="col-xl-4 col-md-6">
                        <h3>Tutorgo</h3>
                        <p>Join over 1490+ partners around the world</p>
                     </div>
                     <div class="col-xl-4 col-md-6">
                        <span>
                           <i class="fas fa-star color"></i>
                           <i class="fas fa-star color"></i>
                           <i class="fas fa-star color"></i>
                           <i class="fas fa-star color"></i>
                           <i class="fas fa-star color"></i>
                        </span>
                        <p class=" bt-star">4.5 Star Rating (20+ Review)</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="tp-brand_slider slick-initialized slick-slider" style="    margin-left: 90px;">
                           <div aria-live="polite" class="slick-list draggable">
                              <div class="slick-track">
                                 <div class="slideshow1-container">

                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-4.png"
                                          style="width:150px">

                                    </div>

                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-5.png"
                                          style="width:150px">

                                    </div>

                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-6.png"
                                          style="width:150px">

                                    </div>
                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-2.png"
                                          style="width:150px">

                                    </div>
                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-1.png"
                                          style="width:150px">

                                    </div>
                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-3.png"
                                          style="width:150px">

                                    </div>
                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-4.png"
                                          style="width:150px">

                                    </div>

                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-5.png"
                                          style="width:150px">

                                    </div>

                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-6.png"
                                          style="width:150px">

                                    </div>
                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-2.png"
                                          style="width:150px">

                                    </div>
                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-1.png"
                                          style="width:150px">

                                    </div>
                                    <div class="mySlides1 fade1">

                                       <img src="https://data.themeim.com/html/tutorgo/assets/img/brand/brand-3.png"
                                          style="width:150px">

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
   </div>

   <script>
      let slide1 = 0;
      showSlides();
   
      function showSlides() {
      let j;
      let slides = document.getElementsByClassName("mySlides1");
       console.log("slides.length");
     for (j = 0; j < slides.length; j++) {
        slides[j].style.display = "none";  
      }
       slide1++;
        
    
       slides[slide1 - 1].style.display = "block";
         slides[slide1].style.display = "block";
         slides[slide1 + 1].style.display = "block";
         slides[slide1 + 2].style.display = "block";
         slides[slide1 + 3].style.display = "block";

         slides[slide1 + 4].style.display = "block"; 
       if (slide1 > slides.length-6) {slide1 = 1}  
       
      
   
       setTimeout(showSlides, 500); // 
    }
      
     
   </script>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="tp-section__title-wrapper text-center mb-40">
               <h3 class="tp-section__title">Popular Topic, Which are Most <br> Favourite To Students</h3>
            </div>
         </div>
      </div>
      <div class="row gx-70">
         <div class="col-lg-3 col-md-4">
            <div class="tp-feature__item before-color-1 mb-30">
               <div class="tp-feature__icon">
                  <img class="img-design" src="https://img.icons8.com/office/256/design.png" alt="">
               </div>
               <h3 class="tp-feature__title"><a href="course.html">Design</a></h3>
               <p>400+ Course</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4">
            <div class="tp-feature__item before-color-2 mb-40">
               <div class="tp-feature__icon">
                  <img class="img-design"
                     src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/256/external-management-management-kiranshastry-lineal-color-kiranshastry-1.png"
                     alt="">
               </div>
               <h3 class="tp-feature__title"><a href="course.html">Management</a> </h3>
               <p>400+ Course</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4">
            <div class="tp-feature__item before-color-3 mb-40">
               <div class="tp-feature__icon">
                  <img class="img-design"
                     src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/256/external-program-news-flatart-icons-lineal-color-flatarticons.png"
                     alt="">
               </div>
               <h3 class="tp-feature__title"><a href="course.html">Programming</a></h3>
               <p>400+ Course</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4">
            <div class="tp-feature__item before-color-4 mb-40">
               <div class="tp-feature__icon">
                  <img class="img-design" src="https://img.icons8.com/fluency/256/online-order.png" alt="">
               </div>
               <h3 class="tp-feature__title"><a href="course.html">Business</a></h3>
               <p>400+ Course</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4">
            <div class="tp-feature__item before-color-5 mb-40">
               <div class="tp-feature__icon">
                  <img class="img-design" src="https://img.icons8.com/fluency/256/musical-notes.png" alt="">
               </div>
               <h3 class="tp-feature__title"><a href="course.html"> Audio + Music</a></h3>
               <p>400+ Course</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4">
            <div class="tp-feature__item before-color-6 mb-40">
               <div class="tp-feature__icon">
                  <img class="img-design" src="https://img.icons8.com/fluency/256/money-bag-shekel-.png" alt="">
               </div>
               <h3 class="tp-feature__title"><a href="course.html">Finance</a></h3>
               <p>400+ Course</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4">
            <div class="tp-feature__item before-color-7 mb-40">
               <div class="tp-feature__icon">
                  <img class="img-design" src="https://img.icons8.com/fluency/256/guest-male.png" alt="">
               </div>
               <h3 class="tp-feature__title"><a href="course.html">Accounting</a> </h3>
               <p>400+ Course</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-4">
            <div class="tp-feature__item before-color-8 mb-40">
               <div class="tp-feature__icon">
                  <img class="img-design" src="https://img.icons8.com/dusk/256/view-details.png" alt="">
               </div>
               <h3 class="tp-feature__title"><a href="course.html">Content Writing</a></h3>
               <p>400+ Course</p>
            </div>
         </div>
      </div>
   </div>
   <div class="tp-about__section pt-120 pb-90">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-7">
               <div class="tp-about__img-wrapper d-md-flex p-relative">
                  <div class="tp-about__img-large w-img mb-30">
                     <img src="https://data.themeim.com/html/tutorgo/assets/img/about/about-1.jpg" alt="">
                  </div>
                  <div class="tp-about__img-sm w-img mb-30">
                     <img src="https://data.themeim.com/html/tutorgo/assets/img/about/about-2.jpg" alt="">
                  </div>

                  <div class="tp-about-shapes">
                     <div class="tp-about__shapes-1">
                        <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/about-shapes.png" alt="">
                        <div class="tp-about__shapes-2 ">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/ring-shape.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="tp-section__title-wrapper">
                  <h3 class="tp-section__title mb-15">Benefit From Our <br>
                     Online Learning Experties
                     Earn professional.</h3>
                  <p class="mb-40">Lorem ipsum dolor sit amet, consectetur aliqua adipiscing
                     elit, sed do eiumod tempor.</p>

                  <div class="tp-about__feature-list mb-40">
                     <ul style="    list-style: none;">
                        <li><span><i class="fa-sharp fa-solid fa-circle-check icon-get"></i></span>Upskill your
                           organization.</li>
                        <li><span><i class="fa-sharp fa-solid fa-circle-check icon-get"></i></span>Access more
                           then 100K
                           online courses</li>
                        <li><span><i class="fa-sharp fa-solid fa-circle-check icon-get"></i></i></span>Access
                           more then
                           1M online Video</li>
                     </ul>
                  </div>
                  <div style="
                       height: 48px;
                   ">
                     <a href="" class="">
                        <span class="get-border">Get Started</span>
                        <div class=""></div>
                     </a>
                  </div>
               </div>
            </div>

         </div>

      </div>
   </div>
   <div class="tp-courses__section grey-bg-2 pt-120 pb-90">
      <div class="container">>
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="tp-section__title-wrapper mb-40">
                  <h3 class="tp-section__title mb-15">Our Popular Courses.</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur aliqua adipiscing
                     elit, sed do eiumod tempor.</p>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="tp-courses__buttons d-flex justify-content-lg-end mb-60">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                           aria-selected="true">All</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design"
                           aria-selected="false">Popularity</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-popularity-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-popularity" type="button" role="tab" aria-controls="pills-popularity"
                           aria-selected="false">Design</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-featured-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-featured" type="button" role="tab" aria-controls="pills-featured"
                           aria-selected="false">Featured</button>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="container tp-courses__tab-content">
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
               <div class="row">
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-2.jpg" alt="">
                           <span class="tp-courses__cat cat-color-2"><a href="#">Development</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i> 4.5 (100)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>1800</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>325</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">Everything You Need
                                 to Know
                                 About Business.</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-2.jpg"
                                 alt="">
                              <span><a href="#">David Bruse</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>16 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$49.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-1.jpg" alt="">
                           <span class="tp-courses__cat cat-color-1"><a href="#">Web Design</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i>4.5 (110)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>1200</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>155</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">The Most Complete
                                 Design-
                                 Thinking Course</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-1.jpg"
                                 alt="">
                              <span><a href="#">Jennifer Powell</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>7 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$39.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-4.jpg" alt="">
                           <span class="tp-courses__cat cat-color-4"><a href="#">Art &amp; Design</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i> 4.5 (60)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>400</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>135</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified
                                 Solutions
                                 Architect
                                 Associate.</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-4.jpg"
                                 alt="">
                              <span><a href="#">Peter Sidle</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>14 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>Free</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-3.jpg" alt="">
                           <span class="tp-courses__cat cat-color-3"><a href="#">Mechanical</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i>4.5 (88)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>200</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>165</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">Statistics Data
                                 Scince and
                                 Business Analysis</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-3.jpg"
                                 alt="">
                              <span><a href="#">Natasha Pawel</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>10 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$69.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-5.jpg" alt="">
                           <span class="tp-courses__cat cat-color-5"><a href="#">Marketing</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i> 4.5 (100)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>800</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>365</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">Learn Essentials of
                                 User
                                 Interface
                                 Design in Figma.</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-5.jpg"
                                 alt="">
                              <span><a href="#">Mary Vaun</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>16 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>Free</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-6.jpg" alt="">
                           <span class="tp-courses__cat cat-color-6"><a href="#">Audio &amp;
                                 Music</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i>4.5 (100)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>18,400</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>365</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX
                                 Designer
                                 Everything You need</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-6.jpg"
                                 alt="">
                              <span><a href="#">Auston Ager</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>10 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$59.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
               <div class="row">
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-4.jpg" alt="">
                           <span class="tp-courses__cat cat-color-4"><a href="#">Art &amp; Design</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i>4.5 (60)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>400</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>135</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified
                                 Solutions
                                 Architect
                                 Associate.</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-4.jpg"
                                 alt="">
                              <span><a href="#">Peter Sidle</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>14 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>Free</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-5.jpg" alt="">
                           <span class="tp-courses__cat cat-color-5"><a href="#">Marketing</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i> 4.5 (100)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>800</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>365</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">Learn Essentials of
                                 User
                                 Interface
                                 Design in Figma.</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-5.jpg"
                                 alt="">
                              <span><a href="#">Mary Vaun</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>16 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>Free</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-3.jpg" alt="">
                           <span class="tp-courses__cat cat-color-3"><a href="#">Mechanical</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i> 4.5 (88)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>200</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>165</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">Statistics Data
                                 Scince and
                                 Business Analysis</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-3.jpg"
                                 alt="">
                              <span><a href="#">Natasha Pawel</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>10 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$69.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-2.jpg" alt="">
                           <span class="tp-courses__cat cat-color-2"><a href="#">Development</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i>4.5 (100)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>1800</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>325</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">Everything You Need
                                 to Know
                                 About Business.</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-2.jpg"
                                 alt="">
                              <span><a href="#">David Bruse</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>16 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$49.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-1.jpg" alt="">
                           <span class="tp-courses__cat cat-color-1"><a href="#">Web Design</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i> 4.5 (110)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>1200</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>155</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">The Most Complete
                                 Design-
                                 Thinking Course</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-1.jpg"
                                 alt="">
                              <span><a href="#">Jennifer Powell</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>7 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$39.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-6.jpg" alt="">
                           <span class="tp-courses__cat cat-color-6"><a href="#">Audio &amp;
                                 Music</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i>4.5 (100)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>18,400</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>365</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX
                                 Designer
                                 Everything You need</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-6.jpg"
                                 alt="">
                              <span><a href="#">Auston Ager</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>10 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$59.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-popularity" role="tabpanel" aria-labelledby="pills-popularity-tab">
               <div class="row">
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-1.jpg" alt="">
                           <span class="tp-courses__cat cat-color-1"><a href="#">Web Design</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i>4.5 (110)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>1200</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>155</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">The Most Complete
                                 Design-
                                 Thinking Course</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-1.jpg"
                                 alt="">
                              <span><a href="#">Jennifer Powell</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>7 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$39.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-2.jpg" alt="">
                           <span class="tp-courses__cat cat-color-2"><a href="#">Development</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i>4.5 (100)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>800</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>325</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">Everything You Need
                                 to Know
                                 About Business.</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-2.jpg"
                                 alt="">
                              <span><a href="#">David Bruse</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>16 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>$49.65</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


                  <div class="col-lg-4 col-md-4">
                     <div class="tp-courses__item mb-30">
                        <div class="tp-courses__thumb w-img fix p-relative">
                           <img style="    height: 282px;"
                              src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-4.jpg" alt="">
                           <span class="tp-courses__cat cat-color-4"><a href="#">Art &amp; Design</a></span>
                        </div>
                        <div class="tp-courses__content">
                           <div class="tp-courses__meta">
                              <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-sharp fa-solid fa-star"></i>4.5 (60)</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-heart"></i>400</span>
                              <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                    class="fa-solid fa-user"></i>135</span>
                           </div>
                           <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified
                                 Solutions
                                 Architect
                                 Associate.</a></h3>
                           <div class="tp-courses__avata">
                              <img
                                 src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-4.jpg"
                                 alt="">
                              <span><a href="#">Peter Sidle</a></span>
                           </div>
                           <div class="tp-courses__price d-flex justify-content-between">
                              <div class="tp-courses__time">
                                 <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>14 Week</span>
                              </div>
                              <div class="tp-courses__value">
                                 <span>Free</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4>
                                             <div class=" tp-courses__item mb-30 ">
                                                <div class=" tp-courses__thumb w-img fix p-relative">
                     <img style="    height: 282px;"
                        src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-5.jpg" alt="">
                     <span class="tp-courses__cat cat-color-3"><a href="#">Mechanical</a></span>
                  </div>
                  <div class="tp-courses__content">
                     <div class="tp-courses__meta">
                        <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                              class="fa-sharp fa-solid fa-star"></i> 4.5 (88)</span>
                        <span><i style="    margin-right: 8px; color: #ffc2a3;" class="fa-solid fa-heart"></i>200</span>
                        <span><i style="    margin-right: 8px; color: #ffc2a3;" class="fa-solid fa-user"></i>165</span>
                     </div>
                     <h3 class="tp-courses__title"><a href="course-details.html">Statistics Data Scince and
                           Business Analysis</a></h3>
                     <div class="tp-courses__avata">
                        <img src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-5.jpg"
                           alt="">
                        <span><a href="#">Natasha Pawel</a></span>
                     </div>
                     <div class="tp-courses__price d-flex justify-content-between">
                        <div class="tp-courses__time">
                           <span><i style="    font-size: 18px;
                                    margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>10 Week</span>
                        </div>
                        <div class="tp-courses__value">
                           <span>$69.65</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="tp-courses__item mb-30">
                     <div class="tp-courses__thumb w-img fix p-relative">
                        <img style="    height: 282px;"
                           src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-3.jpg" alt="">
                        <span class="tp-courses__cat cat-color-5"><a href="#">Marketing</a></span>
                     </div>
                     <div class="tp-courses__content">
                        <div class="tp-courses__meta">
                           <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-sharp fa-solid fa-star"></i> 4.5 (100)</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-heart"></i>800</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-user"></i>365</span>
                        </div>
                        <h3 class="tp-courses__title"><a href="course-details.html">Learn Essentials of User
                              Interface
                              Design in Figma.</a></h3>
                        <div class="tp-courses__avata">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-3.jpg"
                              alt="">
                           <span><a href="#">Mary Vaun</a></span>
                        </div>
                        <div class="tp-courses__price d-flex justify-content-between">
                           <div class="tp-courses__time">
                              <span><i style="    font-size: 18px;
                                       margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>16 Week</span>
                           </div>
                           <div class="tp-courses__value">
                              <span>Free</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="col-lg-4 col-md-4">
                  <div class="tp-courses__item mb-30">
                     <div class="tp-courses__thumb w-img fix p-relative">
                        <img style="    height: 282px;"
                           src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-5.jpg" alt="">
                        <span class="tp-courses__cat cat-color-6"><a href="#">Audio &amp; Music</a></span>
                     </div>
                     <div class="tp-courses__content">
                        <div class="tp-courses__meta">
                           <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-sharp fa-solid fa-star"></i> 4.5 (100)</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-heart"></i>18,400</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-user"></i>365</span>
                        </div>
                        <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX Designer
                              Everything You need</a></h3>
                        <div class="tp-courses__avata">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-5.jpg"
                              alt="">
                           <span><a href="#">Auston Ager</a></span>
                        </div>
                        <div class="tp-courses__price d-flex justify-content-between">
                           <div class="tp-courses__time">
                              <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>10 Week</span>
                           </div>
                           <div class="tp-courses__value">
                              <span>$59.65</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


         </div>
         <div class="tab-pane fade" id="pills-featured" role="tabpanel" aria-labelledby="pills-featured-tab">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="tp-courses__item mb-30">
                     <div class="tp-courses__thumb w-img fix p-relative">
                        <img style="    height: 282px;"
                           src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-2.jpg" alt="">
                        <span class="tp-courses__cat cat-color-5"><a href="#">Marketing</a></span>
                     </div>
                     <div class="tp-courses__content">
                        <div class="tp-courses__meta">
                           <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-sharp fa-solid fa-star"></i> 4.5 (100)</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-heart"></i>800</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-user"></i>365</span>
                        </div>
                        <h3 class="tp-courses__title"><a href="course-details.html">Learn Essentials of User
                              Interface
                              Design in Figma.</a></h3>
                        <div class="tp-courses__avata">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-1.jpg"
                              alt="">
                           <span><a href="#">Mary Vaun</a></span>
                        </div>
                        <div class="tp-courses__price d-flex justify-content-between">
                           <div class="tp-courses__time">
                              <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>16 Week</span>
                           </div>
                           <div class="tp-courses__value">
                              <span>Free</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="tp-courses__item mb-30">
                     <div class="tp-courses__thumb w-img fix p-relative">
                        <img style="    height: 282px;"
                           src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-3.jpg" alt="">
                        <span class="tp-courses__cat cat-color-2"><a href="#">Development</a></span>
                     </div>
                     <div class="tp-courses__content">
                        <div class="tp-courses__meta">
                           <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-sharp fa-solid fa-star"></i> 4.5 (100)</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-heart"></i>1800</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-user"></i>325</span>
                        </div>
                        <h3 class="tp-courses__title"><a href="course-details.html">Everything You Need to
                              Know
                              About Business.</a></h3>
                        <div class="tp-courses__avata">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-3.jpg"
                              alt="">
                           <span><a href="#">David Bruse</a></span>
                        </div>
                        <div class="tp-courses__price d-flex justify-content-between">
                           <div class="tp-courses__time">
                              <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>16 Week</span>
                           </div>
                           <div class="tp-courses__value">
                              <span>$49.65</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="tp-courses__item mb-30">
                     <div class="tp-courses__thumb w-img fix p-relative">
                        <img style="    height: 282px;"
                           src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-2.jpg" alt="">
                        <span class="tp-courses__cat cat-color-6"><a href="#">Audio &amp; Music</a></span>
                     </div>
                     <div class="tp-courses__content">
                        <div class="tp-courses__meta">
                           <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-sharp fa-solid fa-star"></i>4.5 (100)</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-heart"></i>18,400</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-user"></i>365</span>
                        </div>
                        <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX Designer
                              Everything You need</a></h3>
                        <div class="tp-courses__avata">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-2.jpg"
                              alt="">
                           <span><a href="#">Auston Ager</a></span>
                        </div>
                        <div class="tp-courses__price d-flex justify-content-between">
                           <div class="tp-courses__time">
                              <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>10 Week</span>
                           </div>
                           <div class="tp-courses__value">
                              <span>$59.65</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="tp-courses__item mb-30">
                     <div class="tp-courses__thumb w-img fix p-relative">
                        <img style="    height: 282px;"
                           src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-6.jpg" alt="">
                        <span class="tp-courses__cat cat-color-4"><a href="#">Art &amp; Design</a></span>
                     </div>
                     <div class="tp-courses__content">
                        <div class="tp-courses__meta">
                           <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-sharp fa-solid fa-star"></i> 4.5 (60)</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-heart"></i>400</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-user"></i>135</span>
                        </div>
                        <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified Solutions
                              Architect
                              Associate.</a></h3>
                        <div class="tp-courses__avata">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-6.jpg"
                              alt="">
                           <span><a href="#">Peter Sidle</a></span>
                        </div>
                        <div class="tp-courses__price d-flex justify-content-between">
                           <div class="tp-courses__time">
                              <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>14 Week</span>
                           </div>
                           <div class="tp-courses__value">
                              <span>Free</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="tp-courses__item mb-30">
                     <div class="tp-courses__thumb w-img fix p-relative">
                        <img style="    height: 282px;"
                           src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-4.jpg" alt="">
                        <span class="tp-courses__cat cat-color-1"><a href="#">Web Design</a></span>
                     </div>
                     <div class="tp-courses__content">
                        <div class="tp-courses__meta">
                           <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-sharp fa-solid fa-star"></i>4.5 (110)</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-heart"></i>1200</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-user"></i>155</span>
                        </div>
                        <h3 class="tp-courses__title"><a href="course-details.html">The Most Complete
                              Design-
                              Thinking Course</a></h3>
                        <div class="tp-courses__avata">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-4.jpg"
                              alt="">
                           <span><a href="#">Jennifer Powell</a></span>
                        </div>
                        <div class="tp-courses__price d-flex justify-content-between">
                           <div class="tp-courses__time">
                              <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>7 Week</span>
                           </div>
                           <div class="tp-courses__value">
                              <span>$39.65</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-4">
                  <div class="tp-courses__item mb-30">
                     <div class="tp-courses__thumb w-img fix p-relative">
                        <img style="    height: 282px;"
                           src="https://data.themeim.com/html/tutorgo/assets/img/courses/courses-6.jpg" alt="">
                        <span class="tp-courses__cat cat-color-3"><a href="#">Mechanical</a></span>
                     </div>
                     <div class="tp-courses__content">
                        <div class="tp-courses__meta">
                           <span class="tp-ratting"><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-sharp fa-solid fa-star"></i>4.5 (88)</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-heart"></i>200</span>
                           <span><i style="    margin-right: 8px; color: #ffc2a3;"
                                 class="fa-solid fa-user"></i>165</span>
                        </div>
                        <h3 class="tp-courses__title"><a href="course-details.html">Statistics Data Scince
                              and
                              Business Analysis</a></h3>
                        <div class="tp-courses__avata">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/courses/avata/course-avata-6.jpg"
                              alt="">
                           <span><a href="#">Natasha Pawel</a></span>
                        </div>
                        <div class="tp-courses__price d-flex justify-content-between">
                           <div class="tp-courses__time">
                              <span><i style="    font-size: 18px;
                                          margin-right: 9px;" class="fa-sharp fa-solid fa-clock"></i>10 Week</span>
                           </div>
                           <div class="tp-courses__value">
                              <span>$69.65</span>
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
   <div class="tp-event__section pt-120 pb-90 p-relative">
      <div class="tp-event__shape">
         <div class="event-1">
            <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/event-circle.png" alt="">
         </div>
         <div class="event-2">
            <img src="https://data.themeim.com/html/tutorgo/assets/img/icons/event-line-1.png" alt="">
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tp-section__title-wrapper mb-40 text-center">
                  <h3 class="tp-section__title mb-15">Upcoming Events</h3>
                  <p>You can relay on our amazing features list and also our customer services <br> will be great
                     experience for you without doubt.</p>
               </div>
            </div>
         </div>
         <div class="tp-event__wrapper">
            <div class="row">
               <div class="col-lg-3 col-md-3">
                  <div class="tp-event__item mb-30">
                     <div class="tp-event__thumb w-img fix">
                        <img src="https://data.themeim.com/html/tutorgo/assets/img/event/event-thumb-1.jpg" alt="">
                     </div>
                     <div class="tp-event__content">
                        <div class="tp-event__meta mb-10">
                           <span class="event-date"><i style="    font-size: 13px;
                                       color: #2c79ff;" class="fa-solid fa-circle"></i> February 13, 2022</span>
                           <span class="event-cat"><i style="    font-size: 13px;
                                       color: #0acc86;" class="fa-solid fa-circle"></i> Marketing</span>
                        </div>
                        <h3 class="tp-event__title mb-30"><a href="event-details.html">Learn By Doing A Real
                              World Projects.</a></h3>
                        <a href="event-details.html" class="more-btn">Read More </a>
                     </div>

                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="tp-event__item mb-30">
                     <div class="tp-event__thumb w-img fix">
                        <img src="https://data.themeim.com/html/tutorgo/assets/img/event/event-thumb-2.jpg" alt="">
                     </div>
                     <div class="tp-event__content">
                        <div class="tp-event__meta mb-10">
                           <span class="event-date"><i style="    font-size: 13px;
                                       color: #2c79ff;" class="fa-solid fa-circle"></i> February 13, 2022</span>
                           <span class="event-cat"><i style="    font-size: 13px;
                                       color: #0acc86;" class="fa-solid fa-circle"></i> Marketing</span>
                        </div>
                        <h3 class="tp-event__title mb-30"><a href="event-details.html">Find The Right Learning
                              for your Group.</a></h3>
                        <a href="event-details.html" class="more-btn">Read More </a>
                     </div>

                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="tp-event__item mb-30">
                     <div class="tp-event__thumb w-img fix">
                        <img src="https://data.themeim.com/html/tutorgo/assets/img/event/event-thumb-3.jpg" alt="">
                     </div>
                     <div class="tp-event__content">
                        <div class="tp-event__meta mb-10">
                           <span class="event-date"><i style="    font-size: 13px;
                                       color: #2c79ff;" class="fa-solid fa-circle"></i></i> February 13, 2022</span>
                           <span class="event-cat"><i style="    font-size: 13px;
                                       color: #0acc86;" class="fa-solid fa-circle"></i></i> Marketing</span>
                        </div>
                        <h3 class="tp-event__title mb-30"><a href="event-details.html">While the lovely valley
                              team work today.</a></h3>
                        <a href="event-details.html" class="more-btn">Read More </a>
                     </div>

                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="tp-event__item mb-30">
                     <div class="tp-event__thumb w-img fix">
                        <img src="https://data.themeim.com/html/tutorgo/assets/img/event/event-thumb-4.jpg" alt="">
                     </div>
                     <div class="tp-event__content">
                        <div class="tp-event__meta mb-10">
                           <span class="event-date"><i style="    font-size: 13px;
                                       color: #2c79ff;   margin-right: 8px;" class="fa-solid fa-circle"></i>February
                              13,
                              2022</span>
                           <span class="event-cat"><i style="    font-size: 13px;
                                       color: #0acc86;" class="fa-solid fa-circle"></i> Marketing</span>
                        </div>
                        <h3 class="tp-event__title mb-30"><a href="event-details.html">Strategic Social Media
                              Marketing
                              Policy.</a>
                        </h3>
                        <a href="event-details.html" class="more-btn">Read More</a>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="tp-testimonial__section pb-120">
      <div class="container" style="    background-color: #f5f5f5;">
         <div class="grey-bg pb-150 pt-60 tp-testimonial__bg">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-section__title-wrapper mb-40 text-center">
                     <h3 class="tp-section__title mb-15">What our clients Say <br>
                        About us</h3>
                     <p>Etiam Porttitor risus massa nec condiment gravida nibh.</p>
                  </div>
               </div>
            </div>
            <div>
               <div class="slideshow-container">

                  <div class="mySlides fade">
                     <div class="numbertext">1 / 3</div>
                     <div class="text_flex">
                        <div>
                           <img
                              src="https://cdn.baogiaothong.vn/upload/2-2022/images/2022-05-25/1653446036-488-thumbnail-width740height555.jpg"
                              style="height: 200px;">

                        </div>
                        <div>
                           <div class="tp-testimonial__review">
                              <span class="tp-testimonial__quote"><i class="fa-solid fa-quote-left"></i></span>
                              <p>I would also like to say thank you to all your staff. It's the perfect <br>
                                 solution
                                 for
                                 our business. Education is the most valuable <br> business resource we have EVER
                                 purchased.</p>
                              <h3>Olive Yew.</h3>
                              <span>CEO, Psdboss</span>
                           </div>
                        </div>
                     </div>


                  </div>

                  <div class="mySlides fade">
                     <div class="numbertext">2 / 3</div>
                     <div class="text_flex">
                        <div>
                           <img
                              src="https://cdn.baogiaothong.vn/upload/2-2022/images/2022-05-25/2-1653445668-926-width740height481.jpg"
                              style="height: 200px;">

                        </div>
                        <div>
                           <div class="tp-testimonial__review">
                              <span class="tp-testimonial__quote"><i class="fa-solid fa-quote-left"></i></span>
                              <p>I would also like to say thank you to all your staff. It's the perfect <br>
                                 solution
                                 for
                                 our business. Education is the most valuable <br> business resource we have EVER
                                 purchased.</p>
                              <h3>Olive Yew.</h3>
                              <span>CEO, Psdboss</span>
                           </div>
                        </div>
                     </div>


                  </div>

                  <div class="mySlides fade">
                     <div class="numbertext">3 / 3</div>
                     <div class="text_flex">
                        <div>
                           <img
                              src="https://znews-photo.zingcdn.me/w660/Uploaded/kbd_bcvi/2019_11_23/5d828d976f24eb1a752053b5.jpg"
                              style="height: 200px;">

                        </div>
                        <div>
                           <div class="tp-testimonial__review">
                              <span class="tp-testimonial__quote"><i class="fa-solid fa-quote-left"></i></span>
                              <p>I would also like to say thank you to all your staff. It's the perfect <br>
                                 solution
                                 for
                                 our business. Education is the most valuable <br> business resource we have EVER
                                 purchased.</p>
                              <h3>Olive Yew.</h3>
                              <span>CEO, Psdboss</span>
                           </div>
                        </div>
                     </div>


                  </div>

                  <a style="font-size:25px ;" class="prev" onclick="plusSlides(-1)">❮</a>
                  <a style="    font-size: 25px;
                           color: black;" class="next" onclick="plusSlides(1)">❯</a>

               </div>
               <br>

               <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
               </div>
            </div>


         </div>
      </div>
   </div>
   <script>
      let slideIndex = 1;
      showSlides();


      function showSlides() {
         let i;
         let slides = document.getElementsByClassName("mySlides");
         let dots = document.getElementsByClassName("dot");
         for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
         }
         slideIndex++;
         if (slideIndex > slides.length) { slideIndex = 1 }
         for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[slideIndex - 1].style.display = "block";
         dots[slideIndex - 1].className += " active";
         setTimeout(showSlides, 3000); // Change image every 2 seconds
      }


      let slide = 0;
      showSlide(slide);

      function plusSlides(n) {
         showSlide(slide += n);
      }

      function currentSlide(n) {
         showSlide(slide = n);
      }

      function showSlide(n) {
         let i;
         let slides = document.getElementsByClassName("mySlides");
         let dots = document.getElementsByClassName("dot");
         if (n > slides.length) { slide = 1 }
         if (n < 1) { slide = slides.length }
         for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
         }
         for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[slide - 1].style.display = "block";
         dots[slide - 1].className += " active";
      }




   </script>
   <div class="tp-team__section pb-130">
      <div class="container">
         <div class="row">
            <div class="tp-section__title-wrapper mb-40 text-center">
               <h3 class="tp-section__title mb-15">Become A Instruction <br>
                  Instructor.</h3>
               <p>Etiam porttitor risus massa nec condiment gravida.</p>
            </div>
         </div>
         <div class="tp-team__wrapper mb-30">
            <div class="row">
               <div class="col-lg-3 col-md-3">
                  <div class="tp-team__member fix mb-30 showhim">
                     <div class="tp-team__img w-img tp-team__overlay p-relative">
                        <a href="instructor-details.html">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/team/team-1.1.jpg" alt="">
                        </a>
                        <div style="color: #fd7e14;" class="tp-team__info text-center ok">
                           <h3 class="tp-team__name">Andra Flatcher</h3>
                           <span>Teacher MBA</span>
                        </div>
                        <div class=" showme ">
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-facebook-f icon_seeall"></i></a></span>
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-youtube icon_seeall"></i></a></span>
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-linkedin icon_seeall"></i></a></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="tp-team__member fix mb-30 showhim">
                     <div class="tp-team__img w-img tp-team__overlay p-relative">
                        <a href="instructor-details.html">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/team/team-1.2.jpg" alt="">
                        </a>
                        <div style="color: #fd7e14;" class="tp-team__info text-center ok">
                           <h3 class="tp-team__name">Morgan Key</h3>
                           <span>Teacher MBA</span>
                        </div>
                        <div class="showme">
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-facebook-f icon_seeall"></i></a></span>
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-youtube icon_seeall"></i></a></span>
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-linkedin icon_seeall"></i></a></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="tp-team__member fix mb-30 showhim">
                     <div class="tp-team__img w-img tp-team__overlay p-relative">
                        <a href="instructor-details.html">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/team/team-1.3.jpg" alt="">
                        </a>
                        <div style="color: #fd7e14;" class="tp-team__info text-center ok">
                           <h3 class="tp-team__name">Andra Flatcher</h3>
                           <span>Course Mentor</span>
                        </div>
                        <div class="showme">
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-facebook-f icon_seeall"></i></a></span>
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-youtube icon_seeall"></i></a></span>
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-linkedin icon_seeall"></i></a></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3">
                  <div class="tp-team__member fix mb-30 showhim">
                     <div class="tp-team__img w-img tp-team__overlay p-relative">
                        <a href="instructor-details.html">
                           <img src="https://data.themeim.com/html/tutorgo/assets/img/team/team-1.4.jpg" alt="">
                        </a>
                        <div style="color: #fd7e14;" class="tp-team__info text-center ok">
                           <h3 class="tp-team__name">Andra Flatcher</h3>
                           <span>Teacher MBA</span>
                        </div>
                        <div class="showme">
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-facebook-f icon_seeall"></i></a></span>
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-youtube icon_seeall"></i></a></span>
                           <span class="div_span_seeall"><a href="#"><i
                                    class="fab fa-linkedin icon_seeall"></i></a></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="tp-hero__btn-wrappper text-center seeall">
                  <a href="instructor-2.html" class="tp-border-btn br-0">
                     <span class="in_seeall">See all Team</span>
                     <div class="transition"></div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="tp-cta__section p-relative nearft">

      <div class="container">
         <div class="tp-cta-wrapper">
            <div class="tp-box__shadow ">
               <div class="tp-cta__box z-index-11 p-relative "
                  data-background="https://data.themeim.com/html/tutorgo/assets/img/bg/newsletter-bg-1.jpg"
                  style="background-image: url(&quot;https://data.themeim.com/html/tutorgo/assets/img/bg/newsletter-bg-1.jpg&quot; );height: 200px;">
                  <div class="row align-items-center">
                     <div class="col-lg-9 col-md-8">
                        <h3 style="font-size: 35;
                           padding-left: 80px;" class="tp-cta__title text-white">Want to study at Online <br> program ?
                        </h3>
                     </div>
                     <div class="col-lg-3 col-md-4">
                        <div class="tp-cta__btn-wrappper d-flex justify-content-md-end">
                           <a href="contact.html" class="tp-white-btn">
                              <span class="span-apply">Apply now</span>
                              <div class="transition"></div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <footer>
      <div class="footer__area grey-bg foot-pad">
         <div class="container">
            <div class="footer__top ">
               <div class="row">
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                     <div class="footer__widget mb-50 footer-col-1">
                        <div class="footer__widget-logo d-flex mb-4">
                           <a href="index.html"><img src="./img/toidayhoc-logo.png" alt=""></a>
                           <h2 class="pt-2">Toidayhoc</h2>
                        </div>
                        <div class="footer__widget-content">
                           <p>Aut cum mollitia reprehenderit.
                              Eos cumque dicta adipisci amet
                              architecto culpa.</p>
                           <div class="footer__social">
                              <span><a href="#" style="background: #0d88f0;"><i
                                       class="fab fa-facebook-f"></i></a></span>
                              <span><a href="#" style="background: #d2173f;"><i class="fab fa-youtube"></i></a></span>
                              <span><a href="#" style="background-color: #03a9f4;"><i
                                       class="fab fa-twitter"></i></a></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-2 col-lg-3 col-6">
                     <div class="footer__widget mb-50 footer-col-2">
                        <h3 class="footer__widget-title">Information</h3>
                        <div class="footer__widget-content">
                           <ul>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Careers</a></li>
                              <li><a href="#">Customer</a></li>
                              <li><a href="#">Privacy</a></li>
                              <li><a href="#">Service</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-6">
                     <div class="footer__widget mb-50 footer-col-3">
                        <h3 class="footer__widget-title">Courses</h3>
                        <div class="footer__widget-content">
                           <ul>
                              <li><a href="#">Masters Degree</a></li>
                              <li><a href="#">Post GraduateU</a></li>
                              <li><a href="#">Ndergraduate</a></li>
                              <li><a href="#">Engineering</a></li>
                              <li><a href="#">Ph.D Degree</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6">
                     <div class="footer__widget mb-50 footer-col-4">
                        <h3 class="footer__widget-title">Sign Up for Our Newsletter</h3>
                        <div class="footer__widget-content">
                           <div class="footer__subscribe">
                              <p>Receive weekly newsletter with educational,
                                 popular books and much more!</p>
                              <form class="row g-3">
                                 <div class="col-auto" style="position: relative;">
                                    <input type="email" class="footer-form-input" id="email"
                                       placeholder="Email address">
                                    <button type="submit"
                                       class="footer-form-button btn btn-primary mb-3">Subscribe</button></input>
                                 </div>

                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer__bottom">
               <div class="row">
                  <div class="col-12">
                     <div class="footer__copyright text-center">
                        <p> © 2022 Toidayhoc, All Rights Reserved. Design By <a
                              href="https://themeforest.net/user/theme_pure/portfolio" target="_blank">Theme
                              Pure</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>


   <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
      </script>
   <script src="./js/main.js"></script>
   <!-- JavaScript Bundle with Popper -->
   <script>
      $(document).ready(function () {
         window.onscroll = function () { bar() };
         function bar() {
            if (document.body.scrollTop > 400) {
               mybutton.style.display = "block";
               document.getElementById("tp-header__main").className = "tp-header__main header-sticky";
            } else if (document.body.scrollTop < 400) {
               document.getElementById("tp-header__main").className = "tp-header__main";
               mybutton.style.display = "none";
            }
         }
         let mybutton = document.getElementById("btn-back-to-top");
         mybutton.addEventListener("click", backToTop);
         function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
         }
      });
   </script>



</html>
