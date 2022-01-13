<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amlak Pelak</title>
    <script src="https://kit.fontawesome.com/b8b9db618b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- <section class="app"> -->
    <header class="header-container">
        <nav class="logo-button-container">
            <img src="../img/LOGO.png" alt="logo" class="header-logo">
            <button class="header-menu-burger" id="button-bar" onclick="showMenu()">
                <i class="fas fa-bars" onclick="changeIcon(this)"></i></button>
        </nav>
        <nav class="menu-container" id="menu">
            <ul class="header-menu ">
                <li class="header-menu-item">   <a class="header-menu-item-link" href=""> ورود </a></li>
                <li class="header-menu-item"><a class="header-menu-item-link" href="#app"> خرید </a></li>
                <li class="header-menu-item"><a class="header-menu-item-link" href="#app"> رهن و اجاره </a></li>
                <li class="header-menu-item" onclick="openNav()"><a class="header-menu-item-link"
                        style="cursor: pointer;"> تماس با ما </a></li>
            </ul>
        </nav>
    </header>
    <section class="bg-banner-container">
        <section class="bg-banner"></section>
        <section class="bg-caption">
            <h2 class="bg-caption-title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که</h2>
        </section>
    </section>



    <section class="app" id="app">

        <h2 class="app-title">خرید، فروش و اجاره ملک در جهرم</h2>



        @foreach ($posts as $key => $post)

        <section class="app-item-container">


         <article class="app-item">


             <section class="item-img">
                 <section class="img-slider fade">
                    <img src="{{asset($post->file)}}" alt="{{$post->title}}">


                 </section>
                 <section class="img-slider fade">
                    <img src="../img/img1.jpg" alt="a">


                 </section>
                 <section class="img-slider fade">
                     <img src="../img/img3.jpg" alt="d">
                 </section>
                 <a class="prev" style="color: red">&#10095;</a>
                 <a class="next"style="color: red" >&#10094;</a>
             </section>


            <section class="item-info">
                 <section>
                     <section class="item-caption">
                         <ul>
                             <li class="price">شماره : {{$key+1}} </li>
                             <li class="price"> {{$post->price}} تومان </li>
                             <li class="area">{{$post->address}}</li>
                             <li class="type">{{$post->type}}</li>
                             <li class="caption">{{$post->description}}</li>
                         </ul>
                     </section>
                     <section class="item-info-list">
                         <section class="item-info-list-container">
                             <ul>
                                 <li><img src="/img/mycollection/png/001-meter.png" alt="">
                                     <span>{{$post->measurement}}متر</span></li>
                                 <li><img src="/img/mycollection/png/002-double-bed.png" alt="">
                                     <span>{{$post->rooms}}خواب</span></li>
                                 <li><img src="/img/mycollection/png/003-calendar.png" alt="">
                                     <span>{{$post->year}}</span></li>
                             </ul>
                         </section>
                     </section>
                 </section>
                 <section class="item-contact">
                     <button onclick="openNav()">
                         <i class="fas fa-phone"></i>
                         <span>تماس</span>
                     </button>
                 </section>
             </section>


         </article>




     </section>

        @endforeach



    </section>





    <footer class="footer">
        <section class="footer-container">
            <section class="social-media">
                <h3>مارا در شبکه های اجتماعی دنبال کنید</h3>
                <ul>
                    <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li> <a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                </ul>
            </section>
            <section class="contact">
                <ul>
                    <li> <img src="./img/LOGO2.png" alt=""></li>
                    <li> <span>071-54123456</span> </li>
                    <li> <span>info@example.com</span> </li>
                </ul>
            </section>
        </section>
    </footer>


    <section id="myNav" class="overlay">
        <section class="contact-us-container">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <h3>مشاور املاک پلاک</h3>
            <ul>
                <li>شماره تماس :</li>
                <li><a href="tel:09171234567">09171234567</a></li>
                <li>نام مشاور :</li>
                <li>اقای پلاک</li>
            </ul>
        </section>
    </section>
    <script src="../js/available-item.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>
