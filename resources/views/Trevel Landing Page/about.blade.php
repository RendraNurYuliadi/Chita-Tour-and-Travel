<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusa-Travel</title>
    <link rel="stylesheet" href="/css/about.css">
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
                  <li><a href="#about">about</a></li>
                  <li><a href="{{ route('package.nusa-travel') }}">destinations</a></li>
                  <li><a href="#faq">FAQ</a></li>
                  <li><a href="#contact-message">contact</a></li>
                </ul>
            </div>
            <div class="signup-login">
              <a href="https://wa.me/6281385839876?text=Hello" target="_blank">Chat Admin</a>
            </div>
        </nav>

        <!-- Content Section -->
        <div class="content">
          <h5>Nusa-Travel</h5>
          <h1>Experience the World Like Never Before</h1>
          <p>Unlock hidden gems, enjoy seamless travel planning, and embark on extraordinary adventures. With Nusa-Travel, your next great escape is just a click away. Let's make every journey unforgettable.</p>

          <div class="Lets">
              <a href="#about" class="home-btn">Explore Now</a>
              <a href="#contact-message" class="btn2">Contact Us</a>
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
      


      <section class="about" id="about">
        <div class="title-2">
          <h2>Tentang Kami</h2>
          <h4 class="sub">Nusa-Travel</h4>
        </div>
      

        
        <div class="about-content">
          <div class="box-about">
            <div class="about-img">
              <img class="img1" src="/img/destinations-1.jpg" alt="Nusa-Travel Image 1">
              <img class="img2" src="/img/destinations-3.jpg" alt="Nusa-Travel Image 3">
            </div>
          </div>

          <div class="box-about-text">

            <div class="box-xx">
              <h1>Nusa-Travel</h1>
              <p>
                Selamat datang di <strong>Nusa-Travel</strong>, portal perjalanan Anda menuju keajaiban Nusantara! Kami adalah platform yang dirancang khusus untuk menghubungkan Anda dengan berbagai destinasi wisata menakjubkan di seluruh Indonesia. Dari pantai yang memukau di Bali hingga keindahan alam pegunungan di Papua, Nusa-Travel berkomitmen untuk membantu Anda merencanakan liburan yang tak terlupakan dengan mudah dan nyaman.
              </p>
            </div>

            <div class="box-xx">
            <h1>Visi Kami</h1>
            <p>
              Menjadi platform perjalanan terdepan yang memudahkan wisatawan dalam menjelajahi keindahan Nusantara dan merasakan pengalaman perjalanan yang autentik serta berkesan.
            </p>
            </div>

            <div class="box-xx">
            <h1>Misi Kami</h1>
            <ul>
              <li><strong>Memfasilitasi perjalanan yang menyenangkan: <br> </strong> memberikan informasi lengkap dan akurat tentang destinasi wisata.</li>
              <li><strong>Menyediakan layanan pelanggan yang prima: <br> </strong> memprioritaskan kepuasan dan kenyamanan wisatawan.</li>
              <li><strong>Mempromosikan pariwisata lokal: <br> </strong> mengangkat destinasi dan budaya Indonesia kepada wisatawan domestik maupun mancanegara.</li>
              <li><strong>Menghubungkan wisatawan dengan agen lokal terpercaya: <br> </strong> memastikan setiap perjalanan terlaksana dengan aman dan lancar.</li>
            </ul>
          </div>

          </div>
        
        </div>
      
        <div class="about-content">
          <div class="box-about-text">

            <div class="box-xx">
            <h1>Tujuan Kami</h1>
            <ul>
              <li><strong>Meningkatkan kesadaran: <br> </strong> tentang potensi wisata Indonesia di kalangan wisatawan domestik dan internasional.</li>
              <li><strong>Mempermudah proses perencanaan liburan: <br> </strong> menyediakan layanan pemesanan yang cepat dan ramah pengguna.</li>
              <li><strong>Mendorong pengembangan pariwisata berkelanjutan: <br> </strong> bekerja sama dengan komunitas lokal dan mempromosikan praktik perjalanan yang bertanggung jawab.</li>
              <li><strong>Menyediakan pilihan paket wisata yang variatif: <br> </strong> untuk berbagai tipe wisatawan, mulai dari backpacker hingga keluarga.</li>
            </ul>
          </div>

            <div class="box-xx">
            <h1>Cara Pembelian</h1>
            <p>
              Untuk kenyamanan Anda, Nusa-Travel menawarkan cara pembelian paket wisata yang mudah dan aman melalui aplikasi WhatsApp. Berikut langkah-langkahnya:
            </p>
            <ol>
              <li><strong>Kunjungi website kami: <br> </strong> Temukan paket wisata yang Anda inginkan.</li>
              <li><strong>Klik tombol "Beli Sekarang": <br> </strong> Pada halaman paket wisata tersebut.</li>
              <li><strong>WhatsApp: <br> </strong> Anda akan diarahkan ke aplikasi WhatsApp untuk berdiskusi langsung dengan admin kami.</li>
              <li><strong>Diskusikan kebutuhan dan preferensi perjalanan: <br> </strong> Dengan admin kami, yang akan membantu mengonfirmasi detail pemesanan.</li>
              <li><strong>Lakukan pembayaran: <br> </strong> Sesuai dengan instruksi yang diberikan oleh admin.</li>
              <li><strong>Terima e-tiket dan voucher perjalanan: <br> </strong> Setelah pembayaran terkonfirmasi, melalui email atau WhatsApp.</li>
            </ol>
          </div>

          </div>
          <div class="box-about">
            <div class="about-img">
              <img class="img3" src="/img/destinations-2.jpg" alt="Nusa-Travel Image 2">
              <img class="img4" src="/img/destinations-3.jpg" alt="Nusa-Travel Image 3">
            </div>
          </div>
        </div>
      
        <div class="about-content">
          <div class="box-about">
            <div class="about-img">
              <img class="img5" src="/img/destinations-3.jpg" alt="Nusa-Travel Image 3">
              <img class="img6" src="/img/destinations-3.jpg" alt="Nusa-Travel Image 3">
            </div>
          </div>
          <div class="box-about-text">

            <div class="box-xx">
            <h1>Keunggulan Nusa-Travel</h1>
            <ul>
              <li><strong>Destinasi Eksklusif: <br> </strong> Kami menawarkan akses ke lokasi-lokasi wisata eksklusif yang jarang diketahui banyak orang, memberikan pengalaman berbeda dari kebanyakan paket wisata lainnya.</li>
              <li><strong>Layanan Personal: <br> </strong> Setiap wisatawan memiliki kebutuhan unik, dan kami berkomitmen untuk memberikan pelayanan yang personal dan ramah. Tim kami siap membantu Anda merencanakan perjalanan yang sesuai dengan minat dan anggaran Anda.</li>
              <li><strong>Harga Kompetitif: <br> </strong> Kami menawarkan paket wisata dengan harga yang terjangkau tanpa mengurangi kualitas layanan. Nikmati liburan impian Anda tanpa khawatir melebihi budget.</li>
              <li><strong>Pemandu Wisata Profesional: <br> </strong> Setiap perjalanan Anda akan dipandu oleh pemandu wisata profesional yang memiliki pengetahuan mendalam tentang destinasi yang Anda kunjungi.</li>
              <li><strong>Ulasan dan Rekomendasi: <br> </strong> Baca ulasan dari wisatawan lain dan dapatkan rekomendasi untuk pengalaman perjalanan yang lebih kaya dan memuaskan.</li>
            </ul>
          </div>

            <div class="box-xx">
            <h1>Mengapa Memilih Nusa-Travel?</h1>
            <p>Nusa-Travel bukan hanya sekadar platform pemesanan wisata. Kami adalah mitra perjalanan Anda yang berdedikasi untuk memberikan pengalaman wisata terbaik. Dengan tim profesional dan berpengalaman, kami memastikan setiap perjalanan Anda aman, nyaman, dan tak terlupakan.</p>
            <p> Kami mengundang Anda untuk menjelajahi keindahan Nusantara bersama kami dan menjadi bagian dari komunitas wisatawan yang mencintai Indonesia. Nikmati berbagai penawaran menarik dan pastikan perjalanan Anda bersama Nusa-Travel menjadi kenangan indah.</p>
          </div>

          
            
      
          
          </div>
        </div>
      </section>
      
      
      

      
      <section class="foto-kami" id="foto-kami">
        <div class="title-2">
          <h2>Galeri Kami</h2>
          <h4 class="sub">Nusa-Travel</h4>
        </div>

       
       <!-- Container for the image gallery -->
          <div class="container">

            <!-- Full-width images with number text -->
            <div class="mySlides">
              <div class="numbertext">1 / 7</div>
                <img src="/img/destinations-1.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 7</div>
                <img src="/img/destinations-2.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 7</div>
                <img src="/img/destinations-3.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 7</div>
                <img src="/img/destinations-4.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">5 / 7</div>
                <img src="/img/featured-1.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">6 / 7</div>
                <img src="/img/featured-2.jpg" style="width:100%">
            </div>

            <!-- <div class="mySlides">
              <div class="numbertext">6 / 7</div>
              <video width="100%" controls>
                  <source src="video/AURORA_-_Cure_For_Me_(Lyrics)(720p).mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          </div> -->
          

            <div class="mySlides">
              <div class="numbertext">7 / 7</div>
                <img src="/img/featured-3.jpg" style="width:100%">
            </div>



            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <div class="caption-container">
              <p id="caption"></p>
            </div>

            <!-- Thumbnail images -->
            <div class="row">
              <div class="column">
                <img class="demo cursor" src="/img/destinations-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
              </div>
              <div class="column">
                <img class="demo cursor" src="/img/destinations-2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
              </div>
              <div class="column">
                <img class="demo cursor" src="/img/destinations-3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
              </div>
              <div class="column">
                <img class="demo cursor" src="/img/destinations-4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
              </div>
              <div class="column">
                <img class="demo cursor" src="/img/featured-1.jpg" style="width:100%" onclick="currentSlide(5)" alt="Cinque Terre">
              </div>
              <div class="column">
                <img class="demo cursor" src="/img/featured-2.jpg" style="width:100%" onclick="currentSlide(6)" alt="Mountains and fjords">
              </div>
              <div class="column">
                <img class="demo cursor" src="/img/featured-3.jpg" style="width:100%" onclick="currentSlide(7)" alt="Northern Lights">
              </div>
            </div>
          </div>
      </section>






  <!-- faq section starts here  -->
    
<!-- faq section starts here  -->
<section class="section__container faq__container" id="faq">
  <h2 class="section__header">FAQ</h2>
  <div class="faq__grid">

   

    <!-- New FAQ for Nusa-Travel -->
    <div class="faq__card">
      <div class="faq__header">
        <h4>Bagaimana cara membeli paket wisata di Nusa-Travel?</h4>
        <span><img src="/img/arrow-chevron-down-solid-24.png" alt=""></span>
      </div>
      <div class="faq__content">
        Untuk membeli paket wisata di Nusa-Travel, kunjungi situs web kami dan pilih paket yang Anda minati. Setelah itu, klik "Beli Sekarang" dan Anda akan diarahkan ke WhatsApp untuk berdiskusi dengan admin kami. Admin akan membantu Anda dalam proses pembelian hingga selesai.
      </div>
    </div>

    <div class="faq__card">
      <div class="faq__header">
        <h4>Apa saja jenis wisata yang ditawarkan oleh Nusa-Travel?</h4>
        <span><img src="/img/arrow-chevron-down-solid-24.png" alt=""></span>
      </div>
      <div class="faq__content">
        Nusa-Travel menawarkan berbagai jenis wisata, termasuk wisata budaya, kuliner, petualangan, dan eco-tourism. Kami menyediakan pengalaman unik yang dapat disesuaikan dengan minat dan preferensi Anda.
      </div>
    </div>

    <div class="faq__card">
      <div class="faq__header">
        <h4>Apakah Nusa-Travel menyediakan layanan pemandu wisata?</h4>
        <span><img src="/img/arrow-chevron-down-solid-24.png" alt=""></span>
      </div>
      <div class="faq__content">
        Ya, Nusa-Travel menyediakan layanan pemandu wisata profesional yang akan mendampingi Anda selama perjalanan. Pemandu wisata kami memiliki pengetahuan mendalam tentang destinasi yang Anda kunjungi dan siap membantu Anda menikmati liburan Anda sepenuhnya.
      </div>
    </div>

    <div class="faq__card">
      <div class="faq__header">
        <h4>Bagaimana cara menghubungi layanan pelanggan Nusa-Travel?</h4>
        <span><img src="/img/arrow-chevron-down-solid-24.png" alt=""></span>
      </div>
      <div class="faq__content">
        Anda dapat menghubungi layanan pelanggan Nusa-Travel melalui WhatsApp di nomor +62 812-3456-7890 atau email kami di info@nusa-travel.com. Tim kami siap membantu Anda 24/7.
      </div>
    </div>

    <div class="faq__card">
      <div class="faq__header">
        <h4>Apakah saya bisa mendapatkan pengembalian dana jika membatalkan paket wisata?</h4>
        <span><img src="/img/arrow-chevron-down-solid-24.png" alt=""></span>
      </div>
      <div class="faq__content">
        Kebijakan pengembalian dana kami bervariasi tergantung pada jenis paket wisata dan waktu pembatalan. Silakan Admin kami untuk informasi lebih lanjut mengenai pengembalian dana.
      </div>
    </div>

  </div>
</section>
<!-- faq section ends here -->

<!-- faq section ends here  -->



    <section id="contact-message" class="contact-message">
      
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