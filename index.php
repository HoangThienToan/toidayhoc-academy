<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
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
        <link rel="stylesheet" href="./menu-mobile/style.css">
    </head>
    <?php
        session_start();
        // var_dump(isset($_SESSION["Email"]));
        if(!!$_SESSION){
            include_once 'dp.php';
            if (isset($_SESSION["Email"])){
                if(!!$_SESSION["Email"]) {
                    $mail = $_SESSION["Email"];
                    $get = new take();
                    $query = "SELECT * FROM account where Email='$mail'";
                    $result = $get->getData($query);
                    $_SESSION["idacc"] = $result[0]['id'];
                    $_SESSION["permis"] = $result[0]['permis'];
                }
            } else if (isset($_SESSION["uid"])) {
                if(!!$_SESSION["uid"]) {
                    $uid = $_SESSION["uid"];
                    $get = new take();
                    $query = "SELECT * FROM account where uid='$uid'";
                    $result = $get->getData($query);
                    $_SESSION["idacc"] = $result[0]['id'];
                    $_SESSION["permis"] = $result[0]['permis'];
                }
                
            } else if (isset($_SESSION["fone"])) {
                if(!!$_SESSION["fone"]) {
                    $fone = $_SESSION["fone"];
                    $get = new take();
                    $query = "SELECT * FROM account where Phone='$fone'";
                    $result = $get->getData($query);
                    $_SESSION["idacc"] = $result[0]['id'];
                    $_SESSION["permis"] = $result[0]['permis'];
                }
                
            }
            
        }
    ?>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <div class="loader"></div>
    </div>
    <body>
        <header>
            <!-- Sidenav -->
            <div class="offcanvas offcanvas-start w-25" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
                <div class="offcanvas-header">
                    <h6 class="offcanvas-title d-none d-sm-block" id="offcanvas">Menu</h6>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body px-0">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-truncate">
                                <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="collapse" class="nav-link text-truncate">
                                <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">About</span> </a>
                        </li>
                        <li>
                            <a href="listcourses.php" class="nav-link text-truncate">
                                <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">List Courses</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle  text-truncate" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Pages</span>
                            </a>
                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="signout.php">Sign out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-truncate">
                                <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Blog</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-truncate">
                                <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline">Contact</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end -->
            <div class="tp-header__main" id="tp-header__main">
                <div class="container d-flex">
                    <div class="align-items-center justify-content-around w-100 d-flex">
                        <div class="">
                            <div class="logo has-border">
                                <a href="index.php">
                                    <img src="./img/toidayhoc-logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <div class="main-menu">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul class="d-flex">
                                        <li class="has-dropdown" >
                                            <a href="index.php">Home 
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">About</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="listcourses.php">Courses <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-caret-down-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                            </svg></a>
                                            <ul class="submenu">
                                                <li><a href="listcourses.php">Courses List</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Pages <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-caret-down-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                            </svg></a>
                                            <ul class="submenu">
                                                <li><a href="signin.php">Sign In</a></li>
                                                <li><a href="sigup.php">Sign Up</a></li> 
                                                <li><a href="signout.php">Sign Out</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Blog <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-caret-down-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                            </svg></a>
                                            <ul class="submenu">
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="justify-content-end w-100 d-flex">
                            <div class="tp-header__main-right d-flex justify-content-end align-items-center pl-30">
                                <div class="">
                                    <a href="tel:+(84)935070243" class="tp-phone-btn"><span class="material-symbols-outlined">
                                        call
                                    </span>+(84)935070243<span></span></a>
                                    <a href="#" class="tp-btn br-0">
                                        <span class="book">Book a Visit <span class="material-symbols-outlined">
                                            east
                                        </span></span>
                                        <div class="transition"></div>
                                    </a>
                                </div>
                            </div>
                            <button  class="btn icon_menu_mobile" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                            </button>
                        </div>   
                    </div>
                </div>
            </div>
        </header>
        <div class="" style="height: 2000px;"></div>
        <div class="content" style="display: none;"></div>
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
                                            <span><a href="#" style="background: #0d88f0;"><i class="fab fa-facebook-f"></i></a></span>
                                            <span><a href="#" style="background: #d2173f;" ><i class="fab fa-youtube"></i></a></span>
                                            <span><a href="#" style="background-color: #03a9f4;"><i class="fab fa-twitter"></i></a></span>
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
                                                    <input type="email" class="footer-form-input" id="email" placeholder="Email address">
                                                    <button type="submit" class="footer-form-button btn btn-primary mb-3">Subscribe</button></input>
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
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>
        <script src="./home/js/main.js"></script>
        <script src="./menu-mobile/main.js"></script>
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
    </body>

</html>