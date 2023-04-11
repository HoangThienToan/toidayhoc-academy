<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>toidayhoc-academy</title>
        <!-- CSS only -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,700,0,0" />

        <script src="https://kit.fontawesome.com/1330f21d64.js" crossorigin="anonymous"></script>

        <script>
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
            import { initializeApp } from "firebase/app";
                import { getStorage } from "firebase/storage";
                // TODO: Replace the following with your app's Firebase project configuration
                // See: https://firebase.google.com/docs/web/learn-more#config-object
                const firebaseConfig = {
                    // ...
                    storageBucket: 'gs://academy-1d095.appspot.com/'
                };
                // Initialize Firebase
                const app = initializeApp(firebaseConfig);
                // Initialize Cloud Storage and get a reference to the service
                const storage = getStorage(app);

        </script>
        <script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"></script>
        <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
        <link rel="stylesheet" href="./courses/css/style.css">
    </head>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <button type="button" class="btn bg-primary text-white btn-floating btn-lg" id="btn_edit">
        <span class="material-symbols-outlined">
            edit_note
        </span>
    </button><button type="button" class="btn text-white bg-primary btn-floating btn-lg" id="btn_add">
        <span class="material-symbols-outlined">
            note_add
        </span>
    </button>
    <div id="modal" >
        <div class="modal-content container">
            <div class=" modal-close"> <img class="close" width="50px" src=".\img\close.png" alt=""></div>
            <div class="card mt-5 ">
                <div class="card-header">
                     Edit Box
                </div>
                <form id="form" class="card-body" method="post" enctype="multipart/form-data" runat="server">
                    <div class="form-group">
                        <label for="content">Lesson content:</label>
                        <input type="text" class="form-control" id="content" placeholder="no change, leave it blank!">
                    </div>
                    <div class="form-group">
                        <label for="content">Embed link video of the lesson::</label>
                        <input type="text" class="form-control" id="content" placeholder="no change, leave it blank!">
                    </div>
                    <div class="d-flex pt-1 flex-wrap w-100">
                        <label for="exampleFormControlTextarea1" class="form-label">Exercise: </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div> 
                </form>
                <div class="p-3">
                    <button class="close btn btn-primary submit" id="submit" name="submit">submit</button>
                </div>
            </div>
        </div>
    </div>
    <body>
        <header>
            <div class="tp-header__main" id="header__main">
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
                                            <a href="index.html">Home <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                    height="10" fill="currentColor" class="bi bi-caret-down-fill"
                                                    viewBox="0 0 16 16">
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
                                            <a href="course.html">Courses <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="10" height="10" fill="currentColor"
                                                    class="bi bi-caret-down-fill" viewBox="0 0 16 16">
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
                                            <a href="#">Pages <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                    height="10" fill="currentColor" class="bi bi-caret-down-fill"
                                                    viewBox="0 0 16 16">
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
                                            <a href="blog.html">Blog <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                    height="10" fill="currentColor" class="bi bi-caret-down-fill"
                                                    viewBox="0 0 16 16">
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
                                    <a href="tel:+(443)003030266" class="tp-phone-btn"><span
                                            class="material-symbols-outlined">
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
        <div class="" style="height: 1000px;"></div> 
        <main>
            <div class="" style="width: 760px; margin: 0 auto;">
                <div class="">
                    <div class="course-details ">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" >
                            <option selected></option>
                            <?php  
                            if (!!$result) {
                                $i = 0;
                                while ($i < count($result)) {
                                    $row = $result[$i];    
                                    $name = $row["Name"];
                                    // var_dump($name);die;
                                    echo '<option value="">'.$name.'</option>
                                ';
                                $i++;
                                }} else {
                                    echo "0 results";
                                }
                            ?>
                        </select>
                        <div class="d-flex  border p-3 flex-wrap">
                            <h3 class="fs-4 mb-0">Lesson content: </h3>
                            <p class="mb-0 ps-2" style=" line-height: 32px">Professional image and video design </p>
                        </div>
                        <div class="d-flex border p-3 flex-wrap">
                            <h3 class="fs-4">Video of the lesson: </h3>
                            <div class="">
                                <iframe src="https://drive.google.com/file/d/1Ma2WLq9B6NIgGMycz1whjhxFZegdmDfE/preview" width="720" height="480"
                                    allow="autoplay"></iframe>
                            </div>
                        </div>
                        <div class="d-flex border p-3 flex-wrap">
                            <label for="exampleFormControlTextarea1" class="form-label">Exercise: </label>
                            
                        </div>
                        <div class="d-flex border rounded-bottom p-3 flex-wrap">
                            <p class="w-100">*Please compress to fire zip before send</p>
                            <div class="">
                                <label type="button" for="formFile" class="btn btn-primary">Add fire
                                <input accept=".zip" class="d-lg-none" type="file" id="formFile">
                            </label>
                            </div>
                            <div class="">
                                <div class="">
                                    <img class="d-lg-none" width="100" id="blah" src="./img/zipfire.jpg" alt="your fire" />
                                    <span id="zip_title"></span>
                                </div>
                            </div>
                            <div class="d-flex pt-1 flex-wrap w-100">
                                <label for="exampleFormControlTextarea1" class="form-label">Note: </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="pt-2" id="zip_send">
                                <button class="btn btn-primary ">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer__area grey-bg">
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
                                            <span><a href="#" style="background: #d2173f;"><i
                                                        class="fab fa-youtube"></i></a></span>
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
                                            href="https://themeforest.net/user/theme_pure/portfolio"
                                            target="_blank">Theme
                                            Pure</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>
        <script src="./courses/js/main.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script>
            $(document).ready(function () {
                window.onscroll = function () { bar() };
                function bar() {
                    if (document.body.scrollTop > 400) {
                        mybutton.style.display = "block";
                        header__main.className = "tp-header__main header-sticky";
                    } else if (document.body.scrollTop < 400) {
                        header__main.className = "tp-header__main";
                        mybutton.style.display = "none";
                    }
                }
                let mybutton = document.getElementById("btn-back-to-top"); 
                mybutton.addEventListener("click", backToTop);
                function backToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
                formFile.onchange = evt => {
                    const [file] = formFile.files
                    if (file) {
                        blah.className = ''
                        console.log(file.name)
                        zip_title.innerHTML = file.name
                        zip_send.style.display = 'block'
                        // blah.src = URL.createObjectURL(file)
                    }
                }
                var modal = $('#modal');
                var span = $('.close');
                span.click(function () {
                    modal.hide();
                });
                btn_edit.onclick = evt => {
                    modal.show();
                    $("#name").val("");
                    $("#mail").val("");
                    $("#frames").html("");
                    $("#frames_vd").html("");
                }
            });
        </script>
    </body>

</html>