<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusa-Travel</title>
    <link rel="stylesheet" href="/css/package.css">
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
                        <li><a href="#package">destinations</a></li>
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
                <h1>Explore Our Top Destinations</h1>
                <p>
                    From bustling cities to serene beaches, discover a world of possibilities with our handpicked travel destinations.
                    Whether you're seeking adventure, relaxation, or cultural experiences, we have the perfect spot for you. Let Nusa-Travel be your guide to unforgettable journeys.
                </p>
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" id="homeSearchInput" placeholder="your journey begins with a search...">
                    <button id="homeSearchButton">search</button>
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




       <!--package nya-->

       <section class="package" id="package">
        <div class="title">
            <h2>Destinasi Wisata</h2>
            <h4 class="sub">Nusa-Travel</h4>
        </div>



        <div class="options-content">

            <!-- Search Box -->
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Cari destinasi...">
                   <img src="/img/search-Icon.png" alt="Search Icon" id="searchIcon">
                   <!-- <i class="fa fa-search"></i> -->
                </div>
        
                    <!-- Dropdown for Categories -->
               
                <div class="dropdown">
                    <select id="categorySelect">
                        <option value="">Semua Kategori</option>
                        <option value="Alam">Alam</option>
                        <option value="Budaya dan Sejarah">Budaya dan Sejarah</option>
                        <option value="Tempat Rekreasi">Tempat Rekreasi</option>
                        <option value="Petualangan dan Olahraga">Petualangan dan Olahraga</option>
                        <option value="Tempat Relaksasi">Tempat Relaksasi</option>
                        <option value="Kuliner">Kuliner</option>
                        <option value="Edukasi">Edukasi</option>
                        <option value="Kegiatan Musiman">Kegiatan Musiman</option>
                        
                        
                   
                        <!-- Tambahkan lebih banyak kategori sesuai kebutuhan -->
                        <img src="/img/arrow-chevron-down-solid-24.png" alt="">
                    </select>
                </div>
          </div>


<!-- <div class="package-content-cover"> -->

        <div class="package-content">

            @foreach ($TampilAllData as $row )
            
            @csrf
            <div class="box-package">
                <div class="thum">
                    <img src="/{{$row->img}} " alt="">
                    <h3>IDR {{ number_format($row->biaya_masuk, 0, ',', '.') }}</h3>
                </div>
                <div class="dest-content">
                    <div class="location">
                        <h4>{{ $row->nama_tempat }}</h4>
                        <p>{{ $row->kategori }}</p>
                        <div class="stars">
                            <a href="" style="color: rgb(255, 0, 0); font-weight: bold; display:none;">{{ $row->rating }}</a>
                            <div class="stars">
                                @for ($img = 0; $img < $row->rating; $img++)
                                <img src="/img/starIcon.png" alt="">
                                @endfor
                            </div>
                        </div>
                    </div>

                    
                    
                    <a href="Detail/{{ $row->nama_tempat }}" class="btn3">Lihat <img src="/img/distance_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""></a>
                </div>
            </div>
    
            @endforeach 
           
            {{-- <div class="box">
                <div class="thum">
                    <img src="/img/destinations-2.jpg" alt="">
                    <h3>IDR 234.500</h3>
                </div>
                <div class="dest-content">
                    <div class="location">
                        <h4>Pantai Bali</h4>
                        <p>alam</p>
                        <div class="stars">
                            <img src="/img/starIcon.png" alt=""><img src="/img/starIcon.png" alt=""><img src="/img/starIcon.png" alt=""><img src="/img/starIcon.png" alt=""><img src="/img/starIcon.png" alt="">
                        </div>
                    </div>
                    <a href="detail.html" class="btn3">Lihat</a>
                </div>  
            </div> --}}

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
                    <h4>about us</h4>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our term</a></li>
                    <li><a href="#">careers <span>we're hiring!</span></a></li>
                    <li><a href="#">mission and values</a></li>
                    <li><a href="#">partnerships</a></li>
                </div>
                <div class="about-us">
                    <h4>help</h4>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">booking guide</a></li>
                    <li><a href="#">cancellation policy</a></li>
                    <li><a href="#">site map</a></li>
                </div>
                <div class="about-us">
                    <h4>Resources</h4>
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