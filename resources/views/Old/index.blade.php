<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Apps</title> 

    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <link rel="stylesheet"
     href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head> 
<body>

    <!--Header nya-->
     
    <header>
        {{-- <img class="iml"  src="/img/map_7997622.png" alt=""> --}}
        <a href="#" class="logo"><img class="logo-img"  src="/img/map_7997622.png" alt="" > <span></span> Travel Apps</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home">Lobi</a></li>
            <li><a href="#about">Tentang</a></li> 
            <li><a href="#package">Destinasi</a></li>
            <!-- <li><a href="#destination">Wisata Terbaik</a></li> -->
            <li class="dropdown">
                <a href="#artikel">Artikel</a>
                <ul class="dropdown-content">
                    <li><a id="dalam" href="detail_artikel.html">Wisata Populer</a></li>
                    <li><a id="dalam"  href="detail_artikel.html">Acara Terbaru</a></li>
                    <li><a id="dalam" href="detail_artikel.html">Wisata Terbaik</a></li>
                </ul>
            </li>
            <li><a href="#news">Review</a></li>     
            <li><a href="#contact-message">Kontak</a></li>
           
        </ul>
     </header>


         <!--home nya-->
           <!--home nya-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Jelajahi Dunia  <br>dengan Mudah</h1>
            <p>Rencanakan perjalanan sempurna Anda, temukan tempat-tempat tersembunyi, dan nikmati pengalaman perjalanan yang mulus, semuanya di ujung jari Anda.</p>
            <a href="#" class="home-btn">Let's go now</a>
            <a href="#" class="btn2">Daftar Sekarang</a>
        </div>
    </section>
    <!-- <section class="home" id="home">
        <div class="home-text">
            <h1>Travel Apps <br>aplikasi</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br> Ipsam esse distinctio tempore architecto quaerat </p>
            <a href="#" class="home-btn">Let's go now</a>
            <a href="#" class="btn2">Daftar Sekarang</a>
        </div>
    </section> -->


          <!--container nya-->

    <section  class="container" id="container">
        <div class="text">
            <h2>Star Your Vacation <br> With Lots Services </h2>
            <h4 class="sub">Travel - Apps</h4>
        </div>

        <div class="row-items">

            <div class="container-box">
                <div class="container-img">
                    <img class="icon-img" src="img/Icon/kapal-hitam.png" alt="">
                </div>
                <h4>Ship Cruisess</h4>
                <p>150 Properties</p>
            </div>


            <div class="container-box">
                <div class="container-img">
                    <img class="icon-img" src="img/Icon/makanan.png" alt="">
                </div>

                <h4>Food Tours</h4>
                <p>150 Properties</p>

            </div>


            <div class="container-box">
                <div class="container-img">
                    <img class="icon-img" src="img/Icon/summer.png" alt="">
                </div>

                <h4>Summer Rest</h4>
                <p>150 Properties</p>

            </div>


            <div class="container-box">
                <div class="container-img">
                    <img class="icon-img" src="img/Icon/gunung.png" alt="">
                </div>

                <h4>Montaints Tours</h4>
                <p>150 Properties</p>

            </div>




        </div>

    </section>


       <!--Jam Kerja nya-->


       <section class="jam-kerja" id="jam-kerja">
        <div class="container-kerja">

            <div class="box-kerja">
                <img src="img/Icon/back-time_1584808.png" alt="">
                <h3>07:00 - 18:20</h3>
                <a href="#">Jam Kerja</a>
            </div>

            <div class="box-kerja">
                <img src="img/Icon/location_3037821.png" alt="">
                <h3>Sumedang, No24</h3>
                <a href="#">Lokasi</a>
            </div>

            <div class="box-kerja">
                <img src="img/Icon/phone_1959251.png" alt="">
                <h3>(+62)821-8434-8538</h3>
                <a href="#">Panggil Sekarang</a>
            </div>

        </div>
       </section>






    
       <!--About nya-->
 <!-- <div class="title">
            <h2>Tentang <br> Kami</h2>
        </div> -->
        <section class="about" id="about">
            <div class="about-content">
              <div class="box-about">
                <div class="about-img">
                  <img class="img1" src="img/bg16.jpg" alt="">
                </div>
              </div>
              <div class="box-about-text">
                <h1>Travel Apps</h1>
                <p>Travel Apps dirancang untuk memudahkan dan membuat perjalanan Anda lebih menyenangkan. Temukan destinasi baru, rencanakan perjalanan Anda, dan dapatkan tips perjalanan terbaik di satu tempat. Baik Anda seorang traveler berpengalaman atau baru memulai, Travel Apps siap membimbing Anda di setiap langkah.
                Dengan fitur-fitur canggih seperti panduan destinasi, rekomendasi penginapan, dan pemesanan tiket yang cepat dan aman, Travel Apps memastikan Anda mendapatkan pengalaman perjalanan yang tak terlupakan. Jelajahi budaya baru, nikmati kuliner lokal, dan temukan tempat-tempat tersembunyi yang menakjubkan, semua dengan bantuan Travel Apps.</p>
                <a href="{{ route('about') }}" class="custom-button">Lainnya</a>
              </div>
            </div>
          </section>
          
          
            <!-- <div class="about-content">
              <div class="box-about-text">
                <h1>2018 - 2020</h1>
                <p>Dari tahun 2018 hingga 2020, kami mengalami pertumbuhan yang signifikan. Kami memperkenalkan berbagai paket wisata tematik, seperti wisata kuliner, wisata budaya, dan wisata petualangan, yang dirancang untuk memberikan pengalaman unik dan tak terlupakan bagi para wisatawan. Kami juga mulai menggunakan teknologi terbaru untuk memudahkan pelanggan dalam merencanakan dan memesan perjalanan mereka, termasuk aplikasi mobile dan situs web interaktif.</p>
              </div>
              <div class="box-about">
                <div class="about-img">
                  <img class="img2" src="img/bg18.jpg" alt="">
                </div>
              </div>
            </div>
          
            <div class="about-content">
              <div class="box-about">
                <div class="about-img">
                  <img class="img3" src="img/bg20.jpg" alt="">
                </div>
              </div>
              <div class="box-about-text">
                <h1>2021 - 2024</h1>
                <p>Memasuki periode 2021 hingga 2024, kami terus berkomitmen untuk memberikan layanan pariwisata yang lebih baik dan lebih beragam. Kami meluncurkan program eco-tourism untuk mendukung pariwisata berkelanjutan dan menjaga kelestarian alam. Selain itu, kami juga memperluas jangkauan kami ke destinasi-destinasi baru yang eksotis dan jarang dikunjungi. Dengan tim yang profesional dan berdedikasi, kami siap membawa Anda menjelajahi keajaiban dunia dengan cara yang belum pernah Anda bayangkan sebelumnya.</p>
                <a href="about.html" class="custom-button">Lainya</a>
              </div>
            </div> -->
          </section>
          

     <!-- <div class="about-container" id="gallery-container">
                    <img src="img/bg5.jpg" alt="Background 1">
                    <img src="img/bg6.jpg" alt="Background 2">
                    <img src="img/bg3.jpg" alt="Background 3">
                    <img src="img/bg8.jpg" alt="Background 4">
                    <img src="img/bg9.jpg" alt="Background 5">
                    <img src="img/bg15.jpg" alt="Background 5">
                    <img src="img/bg16.jpg" alt="Background 5">
                    <img src="img/bg17.jpg" alt="Background 5">
                    <img src="img/bg18.jpg" alt="Background 5">
                    <img src="img/bg19.jpg" alt="Background 5">
                    <img src="img/bg20.jpg" alt="Background 5">
                    <img src="img/bg21.jpg" alt="Background 5">
                
                </div> -->

                <section class="gallerynya" id="gallerynya">
                    <div class="gallery">
                        <h1>Gallery :</h1>
                        <div class="gallery-container" id="gallery-container">
                            <img src="img/bg5.jpg" alt="Background 1">
                            <img src="img/bg6.jpg" alt="Background 2">
                            <img src="img/bg3.jpg" alt="Background 3">
                            <img src="img/bg8.jpg" alt="Background 4">
                            <img src="img/bg9.jpg" alt="Background 5">
                            <img src="img/bg15.jpg" alt="Background 5">
                            <img src="img/bg16.jpg" alt="Background 5">
                            <img src="img/bg17.jpg" alt="Background 5">
                            <img src="img/bg18.jpg" alt="Background 5">
                            <img src="img/bg19.jpg" alt="Background 5">
                            <img src="img/bg20.jpg" alt="Background 5">
                            <img src="img/bg21.jpg" alt="Background 5">
                        </div>               
                    </div>
                    <a href="about.html" class="custom-button2">Lebih Banyak</a>
                </section>
                
            
     <section class="question" id="question">
        
        <div class="dropdown2">
            <h2>Apa saja yang perlu Anda ketahui dalam Tour Travel?</h2>
            <div class="dropdown-item">
              <div class="dropdown-question">Apa itu Paket Wisata?</div>
              <div class="dropdown-answer">Paket wisata adalah layanan perjalanan yang mencakup berbagai komponen seperti transportasi, akomodasi, dan kunjungan ke tempat-tempat wisata tertentu yang disusun menjadi satu paket lengkap.</div>
            </div>
            <div class="dropdown-item">
              <div class="dropdown-question">Apa yang termasuk dalam Biaya Perjalanan?</div>
              <div class="dropdown-answer">Biaya perjalanan biasanya mencakup tiket transportasi, akomodasi, makanan, dan tiket masuk ke atraksi wisata. Namun, biaya tambahan seperti belanja pribadi, asuransi perjalanan, dan biaya visa sering kali tidak termasuk.</div>
            </div>
            <div class="dropdown-item">
              <div class="dropdown-question">Apa itu Itinerary?</div>
              <div class="dropdown-answer">Itinerary adalah rencana perjalanan yang detail mencakup jadwal aktivitas harian, tempat-tempat yang akan dikunjungi, waktu perjalanan, dan informasi penting lainnya yang perlu diketahui oleh wisatawan.</div>
            </div>
            <div class="dropdown-item">
              <div class="dropdown-question">Apa yang dimaksud dengan Visa?</div>
              <div class="dropdown-answer">Visa adalah izin yang diberikan oleh sebuah negara kepada seseorang untuk masuk dan tinggal di negara tersebut untuk jangka waktu tertentu. Jenis visa dan persyaratannya bervariasi tergantung pada tujuan kunjungan dan negara tujuan.</div>
            </div>
            <div class="dropdown-item">
              <div class="dropdown-question">Mengapa Asuransi Perjalanan Penting?</div>
              <div class="dropdown-answer">Asuransi perjalanan penting karena memberikan perlindungan finansial terhadap risiko tak terduga selama perjalanan, seperti pembatalan perjalanan, kehilangan barang bawaan, kecelakaan, atau masalah kesehatan.</div>
            </div>
            <div class="dropdown-item">
              <div class="dropdown-question">Apa yang dimaksud dengan High Season dalam Pariwisata?</div>
              <div class="dropdown-answer">High season adalah periode waktu tertentu dalam setahun di mana permintaan untuk layanan pariwisata sangat tinggi, biasanya karena faktor cuaca, liburan sekolah, atau acara khusus. Harga biasanya lebih tinggi dan tempat-tempat wisata lebih ramai selama high season.</div>
            </div>
          </div>
     </section>


       <!--package nya-->

       <section class="package" id="package">
        <div class="title">
            <h2>Destinasi Wisata</h2>
            <h4 class="sub">Travel - Apps</h4>
        </div>

        <div class="package-content">

            @foreach ($TampilData as $row )
            
            @csrf
            <div class="box">
                <div class="thum">
                    <img src="{{$row->img}} " alt="">
                    <h3>{{ $row->biaya_masuk }}</h3>
                </div>
                <div class="dest-content">
                    <div class="location">
                        <h4>{{ $row->nama_tempat }}</h4>
                        <p>{{ $row->kategori }}</p>
                    </div>
                    <div class="stars">
                        <a href="" style="color: rgb(255, 255, 255); font-weight: bold; display:none;">{{ $row->rating }}</a>
                        <a href=""> 
                              @for ($i = 0; $i < $row->rating; $i++)
                              <i class='bx bxs-star'></i>
                              @endfor
                        </a>
                    </div>
                </div>
            </div>
    
            @endforeach 
        

            

        </div>
        <a href="{{ route('travel_wisata.showAllData') }}" class="custom-button">Lebih Banyak</a>
       </section>



          <!--Destinasi nya-->

          <section class="destination" id="destination">
            <div class="title">
                <h2>Wisata Terbaik</h2>
                <h4 class="sub">Travel - Apps</h4>
            </div>

            <div class="destination-content">
                <div class="col-content"> 
                    <img src="img/bg21.jpg" alt="">
                    <h5>Alam Bali</h5>
                    <p>Pantai Bali</p>
                </div>

                <div class="col-content"> 
                    <img src="img/bg22.jpg" alt="">
                    <h5>Alam Bali</h5>
                    <p>Pantai Bali</p>
                </div>

                <div class="col-content"> 
                    <img src="img/bg10.jpg" alt="">
                    <h5>Alam Bali</h5>
                    <p>Pantai Bali</p>
                </div>
            </div>
            
          </section>


     
      <!--Testimoni-->

      <section class="news" id="news">
        <div class="title">
            <h2>Review Penunjung</h2>
            <h4 class="sub">Travel - Apps</h4>
        </div>

        <div class="news-content">

            <div class="review">
                <div class="news-text">
                    <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero natus mollitia tempore expedita, modi vitae id pariatur neque blanditiis sequi similique quisquam sunt. Maiores, tempora! Dicta aperiam quo officiis explicabo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem commodi neque odit, vitae consequuntur magni deleniti obcaecati tempora dolore? Odit ullam fugiat veniam iure eaque neque assumenda asperiores cumque voluptates?</p>           
                </div>
                <div class="box-news">
                    <div class="news-img">
                        <img src="img/u1.jpg" alt="">
                    </div>   
                    <div class="news-user">
                        <h4>Rendra Nur Yuliadi</h4>
                        <h6> Vloger</h6>
                        <a href=""><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>

            <div class="review">
                <div class="news-text">
                    <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero natus mollitia tempore expedita, modi vitae id pariatur neque blanditiis sequi similique quisquam sunt. Maiores, tempora! Dicta aperiam quo officiis explicabo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem commodi neque odit, vitae consequuntur magni deleniti obcaecati tempora dolore? Odit ullam fugiat veniam iure eaque neque assumenda asperiores cumque voluptates?</p>           
                </div>
                <div class="box-news">
                    <div class="news-img">
                        <img src="img/u2.jpg" alt="">
                    </div>   
                    <div class="news-user">
                        <h4>Rendra Nur Yuliadi</h4>
                        <h6> Vloger</h6>
                        <a href=""><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>

            <div class="review">
                <div class="news-text">
                    <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero natus mollitia tempore expedita, modi vitae id pariatur neque blanditiis sequi similique quisquam sunt. Maiores, tempora! Dicta aperiam quo officiis explicabo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem commodi neque odit, vitae consequuntur magni deleniti obcaecati tempora dolore? Odit ullam fugiat veniam iure eaque neque assumenda asperiores cumque voluptates?</p>           
                </div>
                <div class="box-news">
                    <div class="news-img">
                        <img src="img/u3.jpg" alt="">
                    </div>   
                    <div class="news-user">
                        <h4>Rendra Nur Yuliadi</h4>
                        <h6> Vloger</h6>
                        <a href=""><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
   

        </div>
        <a href="Review.html" class="custom-button">Lebih Banyak</a>
        
       </section>




       <section id="contact-message" class="contact-message">
      
        <div class="title">
            <h2>Contact Us</h2>
            <h4 class="sub">Travel - Apps</h4>
        </div>

        <div class="container-message">
            <h3>Contact Us</h3>
            <form action="#" method="post">
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
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </section>


    <section class="map" id="map">
        <!-- <div class="title">
            <h2>Alamat <br> Kami</h2>
        </div> -->
        <div class="lokasi">
            <h3>Sumedang</h3>
            <h3>0812-3293-2332</h3>
            <h3>rendraa@email.com</h3>
            <h3>Sumedang 2024 Wisata</h3>
        </div>

        <div class="mapnya">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.436805102393!2d107.92495747606038!3d-6.838118793159953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d10067a9a0e9%3A0x7454e53d06596d8c!2sWisata%20sumedang%20Hendriana!5e0!3m2!1sid!2sid!4v1717060557241!5m2!1sid!2sid"   width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</body>
</html>