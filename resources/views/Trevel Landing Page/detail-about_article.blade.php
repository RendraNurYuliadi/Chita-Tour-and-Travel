<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusa-Travel</title>
    <link rel="stylesheet" href="/css/detail-readArticle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <!-- home section starts here  -->
   <section class="home" id="home">
    <div class="home-box">
        <!-- Video Background -->
        <div class="video-container" id="videoContainer">
            <video autoplay muted loop class="background-video" id="backgroundVideo">
                <source src="/video/vin(1080p).mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
        <!-- Navigation Bar -->
        <nav class="navbar" id="navbar">
            <div class="logo bars">
                <div class="bar" id="menuToggle">
                    <i class="fa fa-bars"></i>
                </div>
                <img class="logo-img" src="/img/map_7997622.png" style="height: 30px; width: 30px;" alt="">
                <h3>Nusa-Travel</h3>
            </div>
            <div class="menu" id="menu">
                <div class="close" id="menuClose">
                    <i class="fa fa-close"></i>
                </div>
                <ul>
                    <li><a href="{{ route('index-travel.nusa-travel') }}">home</a></li>
                    <li><a href="#about">detail</a></li>
                    <li><a href="{{ route('package.nusa-travel') }}">destinations</a></li>
                    <li><a href="{{ route('about.nusa-travel') }}">about</a></li>
                </ul>
            </div>
            <div class="signup-login">
                <!-- Link ke FAQ -->
                <a href="{{ route('about.nusa-travel') }}#faq">FAQ</a>
                <a href="https://wa.me/6281385839876?text=Hello" target="_blank">Chat Admin</a>
            </div>
        </nav>

        <!-- Content Section -->
        <div class="content">
            <h5>Nusa-Travel</h5>
            <h1>Ayo Mulai Membaca Artikel!</h1>
            <p>discover inspiring destinations, create unforgettable memories, and travel with confidence - adventure starts here</p>

            <div class="Lets">
                <a href="#article-detail" class="home-btn">Read Article</a>
                <a href="https://wa.me/6281385839876?text=Hello" target="_blank" class="btn2">Contact Admin</a>
            </div>
        </div>

        <!-- Switch Buttons -->
        <div class="switch-buttons" id="switchButtons"></div>
    </div>
</section>
<!-- home section ends here  -->


<div class="back_button" id="back_button">
    <a href="{{ route('index-travel.nusa-travel') }}"><span><img src="/img/Icon/reply_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""></span></a>
</div>
 
<section class="article-detail" id="article-detail">

    <div class="first-box" id="first-box" style="background-image: url('/{{ $Artikel->img0 }}'); object-fit: cover;">
        <h1 class="title">{{ $Artikel->title }}</h1>
        
      
    </div>

        <div class="conten-cover">

                <div class="content-box">
                    <div class="pic">
                        <img src="/{{ $Artikel->img1 }}" alt="Image 1">
                        <img src="/{{ $Artikel->img2 }}" alt="Image 2">
                    </div>
                    <div class="artikel-content" id="content-box">
                        <h1>Detail Artikel : </h1>
                        <br>
                        <p>{{ $Artikel->content0 }}</p>
                        <br>
                        <p>{{ $Artikel->content1 }}</p>
                    </div>
                </div>
                
                <div class="content-box" id="content-box">
                    <div class="artikel-content">
                        <p>{{ $Artikel->content2 }}</p>
                        <br>
                        <p>{{ $Artikel->content3 }}</p>
                        
                    </div>
                    <div class="pic">
                        <img src="/{{ $Artikel->img3 }}" alt="Image 3">
                        <img src="/{{ $Artikel->img4 }}" alt="Image 4">
                    </div>
                </div>

                <div class="content-box" id="content-box">
                    <div class="pic">
                        <img class="lash-img" src="/{{ $Artikel->img5 }}" alt="Image 5">
                    </div>
                    <div class="artikel-content">
                        <h1>Kesimpulan :</h1>
                        <br>
                        <p>{{ $Artikel->content4 }}</p>
                        <br>
                        <p>{{ $Artikel->content5 }}</p>
                        
                    </div>
                </div>

    </div>
        
        <footer class="article-footer" id="article-footer">
            <div class="informasi">
                <p class="author">Author: {{ $Artikel->author }}</p>
                <p class="created-date">Published on: {{ $Artikel->created_date }}</p>
            </div>
        </footer>

    </section>
 





    



    <!-- footer section starts here  -->
    <footer>
        <section class="footer">
            <div class="container">
                <div class="detail">
                    <h3>Nusa-Travel</h3>
                    <p>kami menawarkan lebih dari sekadar perjalanan—kami memberikan pengalaman yang akan bertahan seumur hidup. Dengan destinasi yang menakjubkan, layanan pelanggan yang ramah, dan paket wisata yang dirancang untuk setiap kebutuhan, Anda dapat mempercayakan liburan Anda pada kami.</p>
                    <h5>get in touch</h5>
                    <a href="#">example@mail.com</a>
                    <div class="social">
                        <a href="#"><i class="fa fa-linkedin-square"></i></a>
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                    </div>
                </div>
                <div class="about-us">
                    <h4 class="about-us-title">about us</h4>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our term</a></li>
                    <li><a href="#">careers <span>we're hiring!</span></a></li>
                    <li><a href="#">mission and values</a></li>
                    <li><a href="#">partnerships</a></li>
                </div>
                <div class="about-us">
                    <h4 class="about-us-title">help</h4>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">booking guide</a></li>
                    <li><a href="#">cancellation policy</a></li>
                    <li><a href="#">site map</a></li>
                </div>
                <div class="about-us">
                    <h4 class="about-us-title">Resources</h4>
                    <li><a href="#">newsletter</a></li>
                    <li><a href="#">blog</a></li>
                    <li><a href="#">gallery</li>
                    <li><a href="#">offers</a></li>
                </div>
            </div>

            <div class="copyright">
                <div>
                    &copy;2024 - Nusa-Travel, inc, all rights reserved
                </div>
                <div>
                    <a href="#">term & conditions</a>
                    <a href="#">privacy policy</a>
                </div>
            </div>
        </section>
    </footer>
    <!-- footer section ends here  -->







  
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/Travel-Script.js"></script>
</body>
</html>