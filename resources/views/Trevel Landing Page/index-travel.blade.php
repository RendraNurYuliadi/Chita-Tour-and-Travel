<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusa-Travel</title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                    <li><a href="#home">home</a></li>
                    <li><a href="{{ route('about.nusa-travel') }}">about</a></li>
                    <li><a href="{{ route('package.nusa-travel') }}">destinations</a></li>
                    <li><a href="#feedback">review</a></li>
                    <li><a href="#article">article</a></li>
                    <li><a href="#contact-message">contact</a></li>
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
            <h1>let's embark on your dream journey</h1>
            <p>discover inspiring destinations, create unforgettable memories, and travel with confidence - adventure starts here</p>

            <div class="Lets">
                <a href="#travel" class="home-btn">Let's go now</a>
                <a href="#package" class="btn2">Find Destination</a>
            </div>
        </div>

        <!-- Switch Buttons -->
        <div class="switch-buttons" id="switchButtons"></div>
    </div>
</section>
<!-- home section ends here  -->



<div class="back_button" id="back_button">
    <a href="#home"><span><img src="/img/arrowback.png" alt=""></span></a>
</div>



<!-- travel section starts here  -->
<section class="travel" id="travel">
    <div class="container">
        <div class="box box1">
            <img src="/img/planning.png" alt="">
            <div class="content">
                <h4>Seamless Travel Planning</h4>
                <p>Mengatur perjalanan Anda menjadi lebih mudah dan efisien dengan layanan perencanaan perjalanan kami yang mulus. Dari pemesanan tiket hingga reservasi hotel, kami memastikan setiap detail diurus dengan baik, memberikan Anda pengalaman perjalanan yang bebas stres.</p>
            </div>
        </div>
        <div class="box box2">
            <img src="/img/map.png" alt="">
            <div class="content">
                <h4>Tailored Experiences</h4>
                <p>Kami memahami bahwa setiap perjalanan unik. Oleh karena itu, kami menawarkan pengalaman yang disesuaikan dengan kebutuhan dan keinginan Anda. Apakah Anda mencari petualangan ekstrem atau liburan santai, kami akan merancang perjalanan yang sempurna untuk Anda.</p>
            </div>
        </div>
        <div class="box box3">
            <img src="/img/trust.png" alt="">
            <div class="content">
                <h4>Reliable and Trustworthy</h4>
                <p>Kepercayaan Anda adalah prioritas kami. Dengan layanan yang dapat diandalkan dan tim profesional yang berpengalaman, kami memastikan setiap aspek perjalanan Anda berjalan lancar dan aman. Anda dapat menikmati liburan Anda dengan tenang, mengetahui bahwa kami selalu siap membantu.</p>
            </div>
        </div>
    </div>


</section>
<!-- travel section ends here  -->


<section class="about" id="about">

    
    <div class="about-cover">
        <div class="about-content" id="halaman1">
            <!-- <div class="box-about">
                <div class="about-img">
                    <img class="img1" src="img/about--content.jpg" alt="">
                </div>
            </div> -->
            <div class="box-about">
                <img src="/img/beautiful-spot.jpg" alt="Avatar" class="img1">
                <div class="overlay">
                  <div class="text-slide">Menjelajah Keindahan & Mengukir Kenangan.</div>
                </div>
              </div>
            <div class="box-about-text">
                <h1>Tentang Nusa-Travel</h1>
                <p>Selamat datang di Nusa Travel, penyedia layanan perjalanan terdepan yang berkomitmen untuk menghadirkan pengalaman liburan yang tak terlupakan di seluruh penjuru Nusantara. Didirikan dengan semangat untuk memperkenalkan keindahan alam dan budaya Indonesia, Nusa Travel telah menjadi mitra terpercaya bagi ribuan pelancong domestik dan internasional. Kami Memberikan pelayanan perjalanan yang berkualitas tinggi, aman, dan memuaskan, sekaligus mendukung pariwisata berkelanjutan dan memberdayakan komunitas lokal. Kami percaya bahwa setiap perjalanan adalah kesempatan untuk menciptakan kenangan berharga dan memperkaya hidup Anda.</p>
                <a href="{{ route('about.nusa-travel') }}" class="custom-button-more">Selengkapnya <img src="/img/arrow_outward_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
            </div>
        </div>

        
    </div>
<!-- 
    <div class="tombol">
        <div class="switch-buttons-about" id="switchButtonsAbout"></div>
    </div> -->

</section>


<!-- style="display: none; -->


<!-- 
    <section class="about" id="about">
        <h2 style="color: white;">-</h2>
        <h4 class="sub" style="color: white">-</h4>
        
        <div class="about-cover">

        <div class="about-content">
          <div class="box-about">
            <div class="about-img">
              <img class="img1" src="img/destinations-4.jpg" alt="">
            </div>
          </div>
          <div class="box-about-text">
            <h1>Nusa Travel</h1>
            <p>Travel Apps dirancang untuk memudahkan dan membuat perjalanan Anda lebih menyenangkan. Temukan destinasi baru, rencanakan perjalanan Anda, dan dapatkan tips perjalanan terbaik di satu tempat. Baik Anda seorang traveler berpengalaman atau baru memulai, Travel Apps siap membimbing Anda di setiap langkah.
                Dengan fitur-fitur canggih seperti panduan destinasi, rekomendasi penginapan, dan pemesanan tiket yang cepat dan aman, Travel Apps memastikan Anda mendapatkan pengalaman perjalanan yang tak terlupakan. Jelajahi budaya baru, nikmati kuliner lokal, dan temukan tempat-tempat tersembunyi yang menakjubkan, semua dengan bantuan Travel Apps.</p>
            <a href="about.html" class="custom-button">Lainnya</a>
          </div>
        </div>

    </div>
      </section> -->


    <!-- destinatons section starts here  -->
    <section class="destinations" id="destinations">
        <h4 class="label">destinations</h4>
        <div class="container">
            <div class="container-box">
                <h2 class="heading">Jelajahi Destinasi Alam Nusantara</h2>
                <div class="content">
                    <p>Jelajahi keseimbangan sempurna antara keramaian kota dan ketenangan alam. Kami menawarkan paket pelarian kota yang memungkinkan Anda menikmati kehidupan urban yang dinamis, sekaligus memberikan kesempatan untuk menemukan ketenangan di alam terbuka. Dari wisata perkotaan yang menarik hingga retret alam yang menenangkan, temukan destinasi yang memenuhi semua keinginan Anda.</p>
                    <a href="package.html">Explore more <i class="fa fa-arrow-right"></i></a>
                </div>
                
            </div>
            <div class="gallery">
                <div class="box box1">
                    <img src="/img/home-background.jpg" alt="">
                    <div class="text">
                        <h2>Pulau Bali</h2>
                    </div>
                </div>
                <div class="box box2">
                    <img src="/img/destinations-1.jpg" alt="">
                    <div class="text">
                        <h2>Taman Nasional Komodo, Nusa Tenggara Timur</h2>
                    </div>
                </div>
                <div class="box box3">
                    <img src="/img/destinations-2.jpg" alt="">
                    <div class="text">
                        <h2>Danau Toba, Sumatera Utara</h2>
                    </div>
                </div>
                <div class="box box4">
                    <img src="/img/destinations-3.jpg" alt="">
                    <div class="text">
                        <h2>Raja Ampat, Papua Barat</h2>
                    </div>
                </div>
                <div class="box box5">
                    <img src="/img/destinations-1.jpg" alt="">
                    <div class="text">
                        <h2>Gunung Bromo, Jawa Timur</h2>
                    </div>
                </div>
               
              
            </div>
        </div>
    </section>
    <!-- destinatons section ends here  -->

    <!-- Destination Section -->

    <section class="package" id="package">
        <div class="title">
            <h2>Destinasi Wisata</h2>
            <h4 class="sub">Nusa-Travel</h4>
        </div>

        <div class="package-content">


            @foreach ($TampilData as $wisata)
            @csrf
            <div class="box">
                <div class="thum">
                    <img src="{{ $wisata->img }}" alt="">
                    <h3>IDR {{ number_format($wisata->biaya_masuk, 0, ',', '.') }}</h3>
                </div>
                <div class="dest-content">
                    <div class="location">
                        <h4>{{ $wisata->nama_tempat }}</h4>
                        <p>{{ $wisata->kategori }}</p>
                    </div>
                    <div class="stars">
                        <a href="" style="color: rgb(255, 0, 0); font-weight: bold; display:none;">{{ $wisata->rating }}</a>
                        <div class="stars">
                            @for ($img = 0; $img < $wisata->rating; $img++)
                                <img src="/img/starIcon.png" alt="">
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        

            {{-- <div class="box">
                <div class="thum">
                    <img src="/img/featured-2.jpg" alt="">
                    <h3>IDR 343.000</h3>
                </div>
                <div class="dest-content">
                    <div class="location">
                        <h4>Pantai Bali</h4>
                        <p>4h - 5h</p>
                    </div>
                    <div class="stars">
                        <img src="/img/starIcon.png" alt=""><img src="/img/starIcon.png" alt=""><img src="/img/starIcon.png" alt=""><img src="/img/starIcon.png" alt=""><img src="/img/starIcon.png" alt="">
                    </div>
                </div>
            </div> --}}

        


    

        </div>
        <a href="{{ route('package.nusa-travel') }}" class="custom-button-more2">Lebih Banyak <img src="/img/travel_explore_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
       </section>
       <!--End Destination Section -->






    <!-- featured section starts here  -->
    <section class="featured">
        <div class="gallery">
            <div class="box box1">
                <div class="first-box">
                    <h4 class="label">Paket Wisata Terbaik</h4>
                    <h2 class="heading">Unlock Exclusive Travel Deals</h2>
                    <p>
                        Jelajahi wisata terbaik bersama Nusa Travel <br> dan ciptakan kenangan indah yang akan <br> bertahan seumur hidup. Segera hubungi kami <br>untuk mendapatkan penawaran eksklusif.
                    </p>
                    
                    <a href="{{ route('package.nusa-travel') }}">Lihat Semua Paket</a>
                    <div class="image">
                        <img src="img/plane.png" alt="">
                    </div>
                </div>
            </div>
            <div class="box box2">
                <img src="img/featured-1.jpg" alt="">
                <div class="content">
                    <h2>yuliaya hotel</h2>
                    <p>gill trawangan, lombok</p>
                    <div class="review-and-idr">
                        <div class="review"><i class="fa fa-star"></i> 4.9 | 853 review</div>
                        <p>idr 343.000</p>
                    </div>
                </div>
            </div>
            <div class="box box3">
                <img src="img/featured-2.jpg" alt="">
                <div class="content">
                    <h2>feranndo hotel</h2>
                    <p>gill trawangan, lombok</p>
                    <div class="review-and-idr">
                        <div class="review"><i class="fa fa-star"></i> 4.9 | 853 review</div>
                        <p>idr 343.000</p>
                    </div>
                </div>
            </div>
            <div class="box box3">
                <img src="img/destinations-2.jpg" alt="">
                <div class="content">
                    <h2>feranndo hotel</h2>
                    <p>gill trawangan, lombok</p>
                    <div class="review-and-idr">
                        <div class="review"><i class="fa fa-star"></i> 4.9 | 853 review</div>
                        <p>idr 343.000</p>
                    </div>
                </div>
            </div>
            <div class="box box4">
                <img src="img/featured-3.jpg" alt="">
                <div class="content">
                    <h2>evin's hotel</h2>
                    <p>gill trawangan, lombok</p>
                    <div class="review-and-idr">
                        <div class="review"><i class="fa fa-star"></i> 4.9 | 853 review</div>
                        <p>idr 343.000</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- featured section ends here  -->






    <!-- feedback section starts here  -->
    <section class="feedback" id="feedback">

        <video autoplay muted loop id="backgroundVideo">
            <source src="video/Good-Resolution/Video-Sunset-Best.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <div class="container">
            <h4 class="label">adventure's voices</h4>
            <h2 class="heading">adventurer's voices</h2>
            <p class="paragraph">
                real stories from our sdenturours community
            </p>
        </div>

        <div class="voices">
            <div class="voice box1">
                <div class="profile">
                    <img src="/img/photo2.jpg" alt="">
                    <div class="detail">
                        <li>Ayu Pratiwi</li>
                        <li>Manajer Proyek</li>
                    </div>
                </div>
                <div class="description">
                <p>“Sebagai seorang manajer proyek yang sering bepergian, saya selalu mencari layanan wisata yang bisa diandalkan. Nusa Travel benar-benar memenuhi ekspektasi saya dengan layanan yang sangat responsif dan profesional. Proses pemesanan sangat mudah dan cepat, dan semua detail perjalanan diatur dengan sangat baik. Saya sangat puas dengan pengalaman saya dan akan terus menggunakan layanan ini untuk perjalanan mendatang.”</p>
            </div>
            </div>
            <div class="voice box2">
                <div class="profile">
                    <img src="/img/photo1.jpg" alt="">
                    <div class="detail">
                        <li>Budi Santoso</li>
                        <li>Pengacara</li>
                    </div>
                </div>
                <div class="description">
                <p>“Saya memutuskan untuk menggunakan Nusa Travel untuk liburan keluarga saya ke Bali. Dari awal hingga akhir, semua berjalan lancar. Website mereka mudah dinavigasi, dan tim layanan pelanggan sangat membantu dalam menyesuaikan paket sesuai dengan kebutuhan kami. Semua reservasi hotel dan aktivitas sudah terkoordinasi dengan baik. Nusa Travel membuat liburan kami menjadi sangat menyenangkan.”</p>
                </div>
            </div>
            <div class="voice box3">
                <div class="profile">
                    <img src="/img/photo6.jpg" alt="">
                    <div class="detail">
                        <li>Rina Sari</li>
                        <li>Pengusaha</li>
                    </div>
                </div>
                <div class="description">
                <p>“Sebagai pengusaha yang sibuk, saya menghargai efisiensi dan kenyamanan. Nusa Travel menyediakan pengalaman pemesanan yang sangat efisien dan tanpa stres. Saya terkesan dengan bagaimana mereka dapat menyesuaikan paket wisata untuk perjalanan bisnis saya yang juga menyertakan waktu istirahat yang optimal. Layanan mereka sangat profesional dan membuat perjalanan bisnis saya menjadi lebih menyenangkan.”</p>
                </div>
            </div>
            <div class="voice box4">
                <div class="profile">
                    <img src="/img/photo3.jpg" alt="">
                    <div class="detail">
                        <li>Hendra Wijaya</li>
                        <li>Dokter</li>
                    </div>
                </div>
                <div class="description">
                <p>“Saya dan keluarga saya baru-baru ini menggunakan layanan Nusa Travel untuk perjalanan liburan ke Yogyakarta. Saya sangat terkesan dengan kualitas layanan mereka. Semua aktivitas yang kami pilih sangat terorganisir dengan baik dan kami tidak mengalami masalah selama perjalanan. Situs web mereka sangat informatif dan membantu kami membuat keputusan yang tepat. Sangat direkomendasikan!”</p>
                </div>
            </div>
            <div class="voice box5">
                <div class="profile">
                    <img src="/img/photo6.jpg" alt="">
                    <div class="detail">
                        <li>Maya Lestari</li>
                        <li>Guru</li>
                    </div>
                </div>
                <div class="description">
                <p>“Nusa Travel menawarkan berbagai paket wisata yang sangat menarik. Sebagai seorang guru yang sering merencanakan perjalanan untuk kelompok, saya menemukan bahwa Nusa Travel sangat membantu dalam menangani detail-detail yang seringkali merepotkan. Mereka menyediakan layanan pelanggan yang luar biasa dan memastikan bahwa semua kebutuhan kami terpenuhi dengan baik.”</p>
                </div>
            </div>
            <div class="voice box6">
                <div class="profile">
                    <img src="/img/photo4.jpg" alt="">
                    <div class="detail">
                        <li>Johan Setiawan</li>
                        <li>Artis</li>
                    </div>
                </div>
                <div class="description">
                <p>“Sebagai seorang artis yang sering bepergian untuk berbagai acara, saya membutuhkan layanan yang dapat dipercaya dan fleksibel. Nusa Travel memberikan solusi yang tepat dengan proses pemesanan yang sederhana dan mudah. Mereka juga menawarkan berbagai opsi yang sesuai dengan kebutuhan saya dan selalu siap untuk membantu kapan saja. Pengalaman saya sangat positif dan saya akan menggunakan layanan mereka lagi di masa depan.”</p>
                </div>
            </div>
        </div>
    </section>
    <!-- feedback section ends here  -->

    <!-- article section starts here  -->
    <section class="article" id="article">
        <h4 class="label">resources</h4>
        <h2 class="heading">Daftar Article</h2>
        <div class="container">
            
            @foreach ($TampilDataArticleNew as $articleNew)
            @csrf
           
            <a href="Nusa-Travel/Article/{{ $articleNew->title }}" class="latest-article" >
                <img src="{{ $articleNew->img0 }}" alt="">
                <p>Artikel Terbaru</p>
                <h3 style="color: black">{{ $articleNew->title }}</h3>
                <div class="author">
                    <img src="/img/map_7997622.png" alt="">
                    <p>{{ $articleNew->author }} - {{ $articleNew->created_date }}</p>
                </div>
            </a>
            @endforeach

            <div class="more-article">

                @foreach ($TampilDataArticle as $article)
                @csrf
                <a href="Nusa-Travel/Article/{{ $article->title }}" class="box box1" >
                    <div class="image">
                        <img src="{{ $article->img0 }}" alt="">
                    </div>
                    <div class="text">
                        <h3 style="color: black">{{ $article->title }}</h3>
                        <li>{{ $article->author }} - {{ $article->created_date }}</li>
                    </div>
                </a>
                
            @endforeach
            
               
               
        
               
                
                {{-- <div class="box box2">
                    <div class="image">
                        <img src="/img/food-article.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>culinary adventure: exploring world cuisines on your travels</h3>
                        <li>food and travel - 5 min</li>
                    </div>
                </div>
                <div class="box box3">
                    <div class="image">
                        <img src="/img/budget-travel.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>traveling on budget: tips for affordable advne</h3>
                        <li>budget travel - 7 min read</li>
                    </div>
                </div>
                <div class="box box4">
                    <div class="image">
                        <img src="/img/tips.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>traveling with kids: tips for stress-free family adventures</h3>
                        <li>travel tips - 7 min read</li>
                    </div>
                </div> --}}
                
            </div>

        </div>
    </section>
    <!-- article section ends here  -->


    <section id="contact-message" class="contact">
      
        <div class="title">
            <h2>Contact Us</h2>
            <h4 class="sub">Nusa-Travel</h4>
        </div>


        <div class="inbox">

        <div class="container-message-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.436805102393!2d107.92495747606038!3d-6.838118793159953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d10067a9a0e9%3A0x7454e53d06596d8c!2sWisata%20sumedang%20Hendriana!5e0!3m2!1sid!2sid!4v1717060557241!5m2!1sid!2sid"  border-radius="30px" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container-message">
            <h3>Contact Us</h3>
            <form action="{{ route('contact.submit') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Send  <img src="/img/forward_to_inbox_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""></button>
                </div>
            </form>
            
            
        </div>
        
     
    </div>
        
    </section>
    
          <!--Newsletter-->
 
          <section class="newsletter" id="newsletter">
            <div class="news-text">
                <h2>Newsletter </h2>
                <p>Subscribe For more Information <br> Nusa-Travel </p>
            </div>

            <div class="send">
                <form action="{{ route('subscribers.store') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Write Your Email" required>
                    <input class="btnnya" type="submit" value="Submit">
                </form>
            </div>
            

          </section>
        <!--Newsletter End-->


    <!-- footer section starts here  -->
    <footer>
        <section class="footer">
            <div class="container">
                <div class="detail">
                    <h3>Nusa-Travel</h3>
                    <p>kami menawarkan lebih dari sekadar perjalanan—kami memberikan pengalaman yang akan bertahan seumur hidup. Dengan destinasi yang menakjubkan, layanan pelanggan yang ramah, dan paket wisata yang dirancang untuk setiap kebutuhan, Anda dapat mempercayakan liburan Anda pada kami.</p>
                    <h5>get in touch</h5>
                    <a href="#">rendra_education@gmail.com</a>
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