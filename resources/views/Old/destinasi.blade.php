<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Apps</title> 

    <link rel="stylesheet" type="text/css" href="/css/style2.css">

    <link rel="stylesheet"
     href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head> 
<body>

    <!--Header nya-->

     
    <header>
        <a href="#" class="logo">Travel Apps</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="{{ route('travel_wisata.showData') }}">Kembali</a></li>
            <li><a href="#destination">Wisata Terbaik</a></li>
            <li><a  href="#package">Destinasi</a></li>
           
        </ul>
     </header>


         <!--home nya-->
         <section class="home" id="home">
            <div class="home-text">
                <h1>Jelajahi Dunia  <br>dengan Mudah</h1>
                <p>Rencanakan perjalanan sempurna Anda, temukan tempat-tempat tersembunyi, dan nikmati pengalaman perjalanan yang mulus, semuanya di ujung jari Anda.</p>
                <a href="#" class="home-btn">Let's go now</a>
                <a href="#" class="btn2">Daftar Sekarang</a>
            </div>
        </section>
  
  



        
          
<!--About nya-->
        <section class="about" id="about">
            <div class="about-content">
            
              <div class="box-about-text">
                <h1>Travel Apps</h1>
                <p>Travel Apps dirancang untuk memudahkan dan membuat perjalanan Anda lebih menyenangkan. Temukan destinasi baru, rencanakan perjalanan Anda, dan dapatkan tips perjalanan terbaik di satu tempat. Baik Anda seorang traveler berpengalaman atau baru memulai, Travel Apps siap membimbing Anda di setiap langkah.
                Dengan fitur-fitur canggih seperti panduan destinasi, rekomendasi penginapan, dan pemesanan tiket yang cepat dan aman, Travel Apps memastikan Anda mendapatkan pengalaman perjalanan yang tak terlupakan. Jelajahi budaya baru, nikmati kuliner lokal, dan temukan tempat-tempat tersembunyi yang menakjubkan, semua dengan bantuan Travel Apps.</p>
                <a href="{{ route('about') }}" class="custom-button">Lainnya</a>
              </div>
            </div>
          </section>


          <section>
            <div class="lane-section">
                 <div class="lane"></div>
            </div>
          </section>
          
       <!--package nya-->

       <section class="package" id="package">
        <div class="title">
            <h2>Destinasi Wisata</h2>
            <h4 class="sub">Travel - Apps</h4>
        </div>



        <div class="search">
            <form action="{{ route('search.destinasi') }}" method="POST">
                @csrf
                <input type="text" id="searchInput" name="searchKeyword" class="search-input" placeholder="Cari Destinasi Wisata...">
                <input class="btnnya search-button" type="submit" value="Cari">
            </form>
        </div>
        


        <div class="package-content">


            @foreach ($TampilAllData as $row )
            
            @csrf
            <div class="box">
                <div class="thum">
                    <img src="/{{$row->img}} " alt="">
                    <h3>{{ $row->biaya_masuk }}</h3>
                </div>
                <div class="dest-content">
                    <div class="location">
                        <h4>{{ $row->nama_tempat }}</h4>
                        <p>{{ $row->kategori }}</p>
                    </div>
                  
                    <a href="/Destination/Detail/{{ $row->nama_tempat }}" class="btn3">Lihat</a>{nama_tempat}
                </div>

                <div class="stars">
                    <a href="" style="color: rgb(255, 255, 255); font-weight: bold;">{{ $row->rating }}</a>
                            <a href=""> 
                                  @for ($i = 0; $i < $row->rating; $i++)
                                  <i class='bx bxs-star'></i>
                                  @endfor
                            </a>
                </div>
                
            </div>
    
            @endforeach 



        

          

        </div>
       </section>


 <!--Destinasi terbaik nya-->

 <section class="destination" id="destination">
    <div class="title">
        <h2>Wisata Terbaik</h2>
        <h4 class="sub">Travel - Apps</h4>
    </div>

    <div class="destination-content">
        <div class="col-content"> 
            <img src="/img/bg21.jpg" alt="">
            <h5>Alam Bali</h5>
            <p>Pantai Bali</p>
        </div>

        <div class="col-content"> 
            <img src="/img/bg22.jpg" alt="">
            <h5>Alam Bali</h5>
            <p>Pantai Bali</p>
        </div>

        <div class="col-content"> 
            <img src="/img/bg10.jpg" alt="">
            <h5>Alam Bali</h5>
            <p>Pantai Bali</p>
        </div>
    </div>
    
  </section>


     
     

          <!--Newsletter nya-->
 
          <section class="newsletter" id="newsletter">
            <div class="news-text">
                <h2>Newsletter </h2>
                <p>Subscribe For more Information <br> Travel Spot </p>
            </div>

            <div class="send">
                <form action=""> 
                <input type="email" placeholder="Write Your Email" required>
                <input class="btnnya"  type="submit" value="Submit">
                </form>

            </div>

          </section>




       



            <!--Contact Footer nya-->
 
            <section id="contact">
                <div class="footer">
                    <div class="main">


                        <div class="list"> 
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Tour</a></li>
                            </ul>
                        </div>


                        <div class="list"> 
                            <h4>Support</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Tour</a></li>
                            </ul>
                        </div>

                        <div class="list"> 
                            <h4>Contact Info</h4>
                            <ul>
                                <li><a href="#">Sumedang Jalan Nangorak No.23</a></li>
                                <li><a href="#">Margacinta, Margamekar</a></li>
                                <li><a href="#">(+64) 812-9273-1092</a></li>
                                <li><a href="#">rendraa@gmail.com</a></li>
                                <li><a href="#">Rendra Nur Yuliadi</a></li>
                            </ul>
                        </div>

                        <div class="list"> 
                            <h4>Connect</h4>
                            <div class="social"> 
                                <a href=""><i class='bx bxl-facebook' ></i></a>
                                <a href=""><i class='bx bxl-instagram-alt' ></i></a>
                                <a href=""><i class='bx bxl-twitter' ></i></a>
                                <a href=""><i class='bx bxl-tiktok' ></i></a>
                                <a href=""><i class='bx bxl-discord-alt' ></i></a>
                            </div>
                        </div>
                        <!-- <div class="list">
                            <h4>Connect</h4>
                            <div class="social"> 
                                <a href=""><i class='bx bxl-facebook-circle' ></i></a>
                                <a href=""><i class='bx bxl-instagram-alt' ></i></a>
                                <a href=""><i class='bx bxl-twitter' ></i></a>
                                <a href=""><i class='bx bxl-tiktok' ></i></a>
                                <a href=""><i class='bx bxl-discord-alt' ></i></a>
                            </div>
                        </div> -->

                    </div>
                </div>

                <div class="end-text">
                    <p>Copyright @2024 All rights reserved | Made with by Rendra N.Y
                </div>
            </section>



    <!--Link Buat Javascrip nya-->

    <script src="https://unpkg.com/scrollreveal"></script>

    <script type="text/Javascript" src="/js/script.js"></script> 

    <script>
     
        @if (isset($scrollToPackage) && $scrollToPackage)
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('package').scrollIntoView();
            });
        @endif
    </script>

</body>
</html>