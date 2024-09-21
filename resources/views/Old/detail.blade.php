<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Apps</title> 

    <link rel="stylesheet" type="text/css" href="/css/style5.css">

    <link rel="stylesheet"
     href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head> 
<body>

    <!--Header nya-->
     
    <!-- <header>
        <a href="#" class="logo">Travel Apps</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="index.html">Kembali</a></li>
            <li><a href="#about">Detail</a></li>   
            <button type="button" onclick="history.back()">Kembali</button>
        </ul>
     </header> -->


         <!--home nya-->
           <!--home nya-->
    <!-- <section class="home" id="home">
        <div class="home-text">
            <h1>Travel Apps <br>aplikasi</h1>
            <p>Selamat datang di Layanan Travel kami, di mana impian perjalanan Anda menjadi kenyataan. Kami menyediakan berbagai paket wisata menarik yang siap membawa Anda menjelajahi keindahan alam Indonesia. Mari bersama-sama menciptakan momen-momen berharga yang tak terlupakan.</p>
            <a href="#" class="home-btn">Let's go now</a>
            <a href="#" class="btn2">Daftar Sekarang</a>
        </div>
    </section> -->
 
    
       <!--About nya-->

      

 
        <section class="about" id="about">
            <div class="title">
                <h2>Detail Wisata</h2>
                <h4 class="sub">Travel - Apps</h4>
            </div>


            <div class="about-content">
              <div class="box-about">
                <div class="about-img">
                  <img class="img1"  src="/{{$Wisata_Travel->img}}" alt="">
                </div>
              </div>
              
              <div class="box-about-text">
                <h1>Nama Tempat : {{ $Wisata_Travel->nama_tempat }}</h1>
                <p>Deskripsi : {{ $Wisata_Travel->deskripsi }} </p>
                <h2 class="Website">Harga : Rp.{{ $Wisata_Travel->biaya_masuk }}</h2>
                <button class="custom-button" type="button" onclick="window.location.href='https://wa.me/6283897851969?text=Halo,%20saya%20ingin%20memesan%20tiket.'">Beli Tiket</button>
              </div>
              
            </div>
          
            <div class="datanya">
                
            <div class="box-data">
              <div class="box-xx">
                <h2>Detail Wisata :</h2>
               <p>Lokasi : {{ $Wisata_Travel->lokasi }}</p>
                <p>Kategori : {{ $Wisata_Travel->kategori }}</p>
                 <p>{{ $Wisata_Travel->jam_buka }} - {{ $Wisata_Travel->jam_tutup }}</p> 

              </div>
            </div>

            <div class="box-data">
              <div class="box-xx">
                <h2>Fasilitas :</h2>
                <p> {{ $Wisata_Travel->fasilitas }}</p>
                <p>Latitude : {{ $Wisata_Travel->latitude }}</p>
                <p>longitude : {{ $Wisata_Travel->longitude }}</p>
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


             <div class="datanya">
                
             <!--<div class="box-data">
                  <div class="box-xx">
                    <h2>Ulasan :</h2>
                   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis, a, temporibus illum aliquid quaerat asperiores unde enim voluptate in sit provident corporis, veniam doloremque vel quibusdam est dolorem laudantium tempore!</p>
                    <h3>Rendra Nur Yuliadi</h3>
                    <h1 style="font-size: 50px; color: orange;">*****</h1>
                  </div>
                </div>-->
  
                
                <div class="box-data2">
                  <h2>Ulasan :</h2>

                    <div class="review">
                        <div class="news-text">
                            <p class="news-description">{{ $Wisata_Travel->ulasan }}</p>           
                        </div>
                        <div class="box-news">
                            <div class="news-img">
                                <img src="/img/u1.jpg" alt="">
                            </div>   
                            <div class="news-user">
                                <h4>Rafli Maulana Herman</h4>
                                <h6> Vloger</h6>
                                <a href="" style="color: gold; font-weight: bold; display :none;">{{ $Wisata_Travel->rating }}</a>
                                <a href=""> 
                                      @for ($i = 0; $i < $Wisata_Travel->rating; $i++)
                                      <i class='bx bxs-star'></i>
                                      @endfor</a>
                            </div>
                        </div>
                    </div>
{{-- 
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

                  <div class="review">
                    <div class="news-text">
                        <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero natus mollitia tempore expedita, modi vitae id pariatur neque blanditiis sequi similique quisquam sunt. Maiores, tempora! Dicta aperiam quo officiis explicabo! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem commodi neque odit, vitae consequuntur magni deleniti obcaecati tempora dolore? Odit ullam fugiat veniam iure eaque neque assumenda asperiores cumque voluptates?</p>           
                    </div>
                    <div class="box-news">
                        <div class="news-img">
                            <img src="img/u2.jpg" alt="">
                        </div>   
                        <div class="news-user">
                            <h4>Fadil Fadilah</h4>
                            <h6> Vloger</h6>
                            <a href=""><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></a>
                        </div>
                    </div>
                </div> --}}

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
            <button class="custom-button" type="button" onclick="history.back()">Kembali</button>
            
          </section>




            <!--Contact Footer nya-->
 
            <!-- <section id="contact">
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
                 

                    </div>
                </div>

                <div class="end-text">
                    <p>Copyright @2024 All rights reserved | Made with by Rendra N.Y
                </div>
            </section> -->



    <!--Link Buat Javascrip nya-->

    <script src="https://unpkg.com/scrollreveal"></script>

    <script type="text/Javascript" src="/js/script.js"></script> 
</body>
</html>