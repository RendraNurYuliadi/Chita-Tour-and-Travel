<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusa-Travel</title>
    <link rel="stylesheet" href="/css/detail-package.css">
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
            <h1>let's embark on your dream journey</h1>
            <p>discover inspiring destinations, create unforgettable memories, and travel with confidence - adventure starts here</p>

            <div class="Lets">
                <a href="#about" class="home-btn">More Detail</a>
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
 
<section class="about" id="about">
  <div class="title">
      <h2>Detail Wisata</h2>
      <h4 class="sub">Nusa-Travel</h4>
  </div>


  <div class="about-content">
    <div class="box-about">
      <div class="about-img">
        <img class="img"  src="/{{$Wisata_Travel->img}}" alt="">
      </div>
    </div>
    
    <div class="box-about-text">
        <h1>{{ $Wisata_Travel->nama_tempat }}</h1>
        <p>Deskripsi : {{ $Wisata_Travel->deskripsi }} </p>
        <h2 class="Website">Harga : Rp.{{ number_format($Wisata_Travel->biaya_masuk, 0, ',', '.') }}</h2> 

        <a href="https://wa.me/6281292731092?text=Halo%20Admin%20Nusa-Travel,%20saya%20ingin%20memesan%20paket%20wisata%20dengan%20detail%20sebagai%20berikut:%0A%0A*Nama%20Tempat:*%20{{ urlencode($Wisata_Travel->nama_tempat) }}%0A*Deskripsi:*%20{{ urlencode($Wisata_Travel->deskripsi) }}%0A*Harga:*%20Rp.{{ number_format($Wisata_Travel->biaya_masuk, 0, ',', '.') }}%0A*Lokasi:*%20{{ urlencode($Wisata_Travel->lokasi) }}%0A*Kategori:*%20{{ urlencode($Wisata_Travel->kategori) }}%0A*Jam%20Operasional:*%20{{ $Wisata_Travel->jam_buka }}%20-%20{{ $Wisata_Travel->jam_tutup }}%0A%0A*Fasilitas:*%0A{{ urlencode($Wisata_Travel->fasilitas) }}%0A%0A*Koordinat:*%0ALatitude:%20{{ urlencode($Wisata_Travel->latitude) }}%0ALongitude:%20{{ urlencode($Wisata_Travel->longitude) }}%0A%0A*Pihak%20Terkait:*%0A- %20Telepon:%20{{ urlencode($Wisata_Travel->telepon) }}%0A- %20Email:%20{{ urlencode($Wisata_Travel->email) }}%0A%0A*Website:*%20{{ urlencode($Wisata_Travel->website) }}%0A%0AMohon%20diproses.%20Terima%20kasih!" 
            class="custom-button-buy">Pesan Destinasi</a>
         
         

      
    
    </div>
  </div>

  <div class="datanya">
      
  <div class="box-data">
    <div class="box-xx">
      <h2>Detail Wisata :</h2>
      <p>Lokasi : {{ $Wisata_Travel->lokasi }}</p>
      <p>Kategori : {{ $Wisata_Travel->kategori }}  <a href="" style="color: gold; font-weight: bold; display :none;">{{ $Wisata_Travel->rating }}</a></p>
      <p>Rating : <div class="stars"> @for ($img = 0; $img < $Wisata_Travel->rating; $img++)<img src="/img/starIcon.png" alt="">@endfor</div></p>
      <p>Buka Pada Jam :{{ $Wisata_Travel->jam_buka }} - {{ $Wisata_Travel->jam_tutup }}</p> 
      <p>Latitude : {{ $Wisata_Travel->latitude }}</p>
      <p>longitude : {{ $Wisata_Travel->longitude }}</p>

    </div>
  </div>

  <div class="box-data">
    <div class="box-xx">
      <h2>Fasilitas :</h2>
      <p> {{ $Wisata_Travel->fasilitas }}</p>

    </div>
  </div>
         
  <div class="box-data">
      <div class="box-xx">
        <h2>Pihak Terkait : </h2>
        <p>{{ $Wisata_Travel->telepon }}</p>
        <p>{{ $Wisata_Travel->email }}</p>
        <a class="custom-button2" href="{{ $Wisata_Travel->website }}">Website</a>
      </div>
    </div>



  
</div>




{{-- <div class="datanya">
                
  <div class="box-data2">
    <h2>Ulasan :</h2>

      <div class="review">
         
          <div class="box-news">
              <div class="news-img">
                  <img src="/img/photo1.jpg" alt="">
              </div>   
              <div class="news-user">
                  <h4>Rafli Maulana Herman</h4>
                  <h6> Vloger</h6>
                  <a href="" style="color: gold; font-weight: bold; display :none;">{{ $Wisata_Travel->rating }}</a>                           
                  <div class="stars">
                    @for ($img = 0; $img < $Wisata_Travel->rating; $img++)
                    <img src="/img/starIcon.png" alt="">
                    @endfor
                </div>
              </div>
          </div>
          <div class="news-text">
            <p class="news-description">{{ $Wisata_Travel->ulasan }}</p>           
        </div>
        
      </div>

      

   
  </div>
</div> --}}
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