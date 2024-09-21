<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="x-icon" href="{{ asset('/Latihan-002/public/img/fshub.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion-Hub</title>
 <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
    scroll-padding-top: 3rem;

}

:root {

    
    --main-color: #F4A460;
    --main-color1: #ff9f0d;

    --text-color:black;
    --text-color1:#FFE0C0;

    --other-color:#FFC080;
    --other-color2:#212121;
    --other-color1:#FFE0C0;

    --second-color: black;

    --bg-color1:#111111;
    --bg-color2:rgba(0, 0, 0, 0.4);
    --bg-color:#FFE0C0;

    --big-font: 4.5rem;
    --h2-font:2.6rem;
    --p-font:1.1rem;
}


body{
    background: var(--bg-color);
    color: var(--text-color);
}


header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: transparent;
    padding: 30px 14%;
    transition: all .50s ease;
}

header a img{
    height: 60px;
    width: 60px;
}
.logo{
    display: flex;
    align-items: center;
    color: var(--text-color);
    font-size: 33px;
    font-weight: 1000;
}

.logo i{
    vertical-align: middle;
    margin-right: 8px;
    color: var(--main-color);
}

.navlist{
    display: flex;
}

.navlist a{
    color: var(--text-color);
    font-size: var(--p-font);
    font-weight: 600;
    margin: 0 30px;
    transition: all .50s ease;
}

.navlist a:hover{
    color: var(--main-color);
}

.navlist a.active{
    color: var(--main-color);
}

.nav-icons{
    display: flex;
    align-items: center;
    padding: 8px 15px;
    background: black;
    border-radius: 3rem;
    box-shadow: var(--main-color) 0px 1pt 25px;
    transition: all .50s ease;
}

/* .nav-icons:hover{
 
    padding: 10px 20px;
    background: var(--main-color1);
    border-radius: 3rem;
    box-shadow: #EA7C69 0px 1pt 25px;
} */

.nav-icons i{
    vertical-align: middle;
    font-size: 25px;
    color: var(--bg-color);
    margin-right: 8px;
    margin-left: 5px;
    transition: all .50s ease;
}

/* .nav-icons a{
    color: var(--text-color);
        font-size: var(--p-font);
        font-weight: 600;
        margin: 0 30px;
        transition: all .50s ease;
    } */

#menu-icon{
    font-size: 32px;
    color:var(--bg-color);
    z-index: 10001;
    cursor: pointer;
    display: none;
}

.nav-icons i:hover {
    transform: scale(1.1);
    color: var(--text-color);
}

.hilang{
    color: transparent;
}

section{
    padding: 70px 14% 60px;
    margin-top: 200px;
}

.home{
    position: relative;
    height: 100hv;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items:center;
    gap: 2rem;
}

.home-img img{
    width: 100%;
    height: auto;
}

.home-text h1{
    font-size: var(--big-font);
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 3rem;
}

span{
    color: var(--main-color);
    font-weight: bolder;
    /* font-weight: bolder; */
}

.btn {
    display: inline-block;
    padding: 15px 35px;
    background: black;
    color: var(--main-color);
    font-size: var(--p-font);
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 3rem;
    transition: all .50s ease;
}

.btn:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: var(--main-color) 0px 1pt 25px;
    /* border: 3px solid #EA7C69; */

}

.btn i{
    vertical-align: middle;
    margin-left: 9px;
    font-size: 22px;
}

.btn2{
    display: inline-block;
    margin-left: 30px;
    font-size: var(--p-font);
    font-weight: 500;
    letter-spacing: 1px;
    border-bottom: 3px solid var(--main-color);
    color: var(--main-color);
    transition: all .50s ease;
}

.btn2:hover{
    transform: scale(1.1) translate(12px);
}

header.sticky{
    padding: 12px 14%;
    background: var(--other-color);
    border-radius: 0 0 20px 20px;
    border-bottom: 5px solid var(--bg-color) ;
    /* box-shadow: 0 5px 5px  var(--main-color1); */
}

.container{
    padding: 30px 14% 70px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, auto));
    gap: 2rem;
    text-align: center;
    /* background: linear-gradient(90deg,#ffffff,#f1e9e9,#d9d9d9,#c4c4c4,#f1e9e9,#d9d9d9); */
}

.container-box{
    padding: 50px 50px 50px 50px;
    background: var(--other-color);
    border-radius: 3rem;
    transition: all .50s ease;
    /* box-shadow: 0 5px 5px  var(--main-color); */
}

.container-box:hover{
    padding: 60px 60px 60px 60px;
    background: var(--other-color);
    border-radius: 3rem;
    /* box-shadow: 0 5px 5px  var(--main-color); */
}

.container-box img{
    width: 100%;
    max-width: 50px;
    height: auto;
}

.container-box h3{
    font-size: 21;
    font-weight: bold;
    margin: 16px 0;
}

.container-box a{
    color: var(--second-color);
    font-size: var(--p-font);
    letter-spacing: 1px;
    transition: all .50s ease;

}

.container-box a:hover{
    color: var(--main-color);
    font-weight: bolder;
}

.about {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 4rem;
    /* background: linear-gradient(90deg,#ffffff,#f1e9e9,#d9d9d9,#c4c4c4,#f1e9e9,#d9d9d9); */
}

.about-img img{
    width: 100%;
    height: auto;
}

.about-text h2{
    font-size: var(--h2-font);
    line-height: 1.3;
    margin-bottom: 2rem;
}

.about-text p{
    color: var(--second-color);
    font-size: var(--p-font);
    line-height: 30px;
    margin-bottom: 3rem;

}

.middle-text{
    text-align: center;
    
}

.middle-text h4{
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
    color: var(--main-color);
    /* font-weight: bolder; */
}

.middle-text h2{
    font-size: var(--h2-font);
}

.shop-content{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(310px,auto));
    gap: 2rem;
    align-items: center;
    margin-top: 4rem;
    
}

.row {
    width: 100%;
    position: relative;
    padding: 10px 35px 40px;
    background: var(--other-color);
    border-radius: 3rem;
    /* box-shadow: 10px 10px #EA7C69; */
}

.row img{
    width: 100%;
    height: auto;
    transition: transform .50s ease;
    cursor: pointer;
    border-radius: 999;
}

.row h3{
    font-size: 18px;
    margin-bottom: 5px;
    font-weight: 700;
    /* text-align: center; */
}

.row p{
    color: var(--second-color);
    font-size: var(--p-font);
    line-height: 30px;
    margin-bottom: 1.1rem;
}

.in-text{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.in-text .price h6{
    font-size: 17px;
    color: red;
    font-weight: 600;
}

.in-text .s-btn a{
     display: inline-block;
     padding: 9px 23px;
     background: black;
     color: #F4A460;
     font-size: 14px;
     font-weight: 500;
     letter-spacing: 1px;
     border-radius: 3rem;
     transition: all .50s ease;
 }


 .in-text .s-btn a:hover{
    background: #F4A460;
    color:white;
    box-shadow: #F4A460 0px 1pt 25px;
}






.search-box {
    margin-bottom: 20px;
    margin-top: 50px;
}

.search-box input[type="text"] {
    width: 280px;
    padding: 10px;
    border: 1px solid black;
    border-radius: 50px;
    font-size: 16px;
    outline: none;
}

.search-box button {
    padding: 10px 25px;
    background-color: black;
    color: #F4A460;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.search-box button:hover {
    background-color: #F4A460;
    color: white;
}














.tambahkan {
    display: inline-block;
    padding: 9px 23px;
    background: black;
    color: var(--main-color);
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 3rem;
    transition: all .50s ease;
    border: 1px solid var(--main-color) ;
}

.tambahkan:hover {
    background: var(--main-color);
    color: white;
    box-shadow: var(--main-color) 0px 1pt 25px;
}

.top-icon{
    position: absolute;
    top: 30px;
    left: 35px;
}

.top-icon i{
    font-size: 22px;
    color: var(--main-color);
}

.row-btn {
    text-align: center;
    margin-top: 6rem;
}

.row img:hover{
    transform: scale(1.1);
}

.review-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, auto));
    gap: 2rem;
    align-items: center;
    margin-top: 4rem;
}

.box{
    padding: 35px;
    background: var(--other-color);
    border-radius: 3rem;
    transition: all .50s ease;
    /* box-shadow: 10px 10px #EA7C69; */
    /* border: 5px solid var(--main-color1); */
} 

.box:hover{
    padding: 45px;
    background: var(--other-color);
    border-radius: 3rem;
    /* box-shadow: 10px 10px #EA7C69; */
    /* border: 5px solid var(--main-color1); */
}

.box p{
    color: var(--second-color);
    font-size: var(--p-font);
    line-height: 30px;
    margin-bottom: 1.5rem ;
}

.in-box{
    display: flex;
    align-items: center;
    gap: 30px;
}

.bx-img img{
    width: 100%;
    height: auto;
    border-radius: 3rem;
}

.bxx-text h4{
    margin: 5px 0;
    font-size: 18px;
}

.bxx-text h5{
    color: var(--second-color);
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    margin-bottom: 10px;

}

.ratings i{
    color: var(--main-color);
    font-size: 18px;
    margin-right: 5px;

}

.contact-content{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: column;
}

.contact-img{
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    gap: 4rem;
    margin-bottom: 5rem;
}


.contact-img img{
    width: 100%;
    max-width: 200px;
    height: auto;
    cursor: pointer;
    transition: all .50s ease;
}

.contact-img img:hover{
    transform: scale(0.9);
}

.contact-text{
    text-align: center;
    margin-bottom: 4rem;
}

.contact-text h2{
    font-size: var(--h2-font);
    margin-bottom: 10px;
}

.contact-text p{
    color: var(--second-color);
    font-size: var(--p-font);
    max-width: 950px;
    line-height: 30px;
    margin-bottom: 3rem;
}


.social i{
    display: inline-block;
    font-size: 32px;
    color: var(--second-color);
    margin: 0 20px;
    transition: all .50s ease;
}

.social .clr i{
    color: var(--main-color);
}

.social i:hover{
    color: var(--main-color);
}

.details{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 3rem;
}

.main-d a{
    display: flex;
    align-items: center;
    color: var(--text-color);
    font-size: 20px;
    font-weight: 600;
}

.main-d i{
    vertical-align: middle;
    margin-right: 12px;
    font-size: 28px;
    color: var(--main-color);
}

.scroll{
    position: fixed;
    bottom: 2.2rem;
    border-top: 2rem;
    right: 3.2rem;
}


.scroll i{
    font-size: 22px;
    color: var(--bg-color);
    background: var(--main-color);
    padding: 10px;
    border-radius: 2rem;

}

@media (max-width: 1545px){
    header{
        padding: 22px 4%;
        transition: .2s;
    }
    header.sticky{
        padding: 14px 4%;
        transition: .2s;
    }
    section{
        padding: 50px 4% 40px;
        transition: .2s;
    }
    .container{
        padding: 30px 4% 50px;
        
    }
}

@media (max-width: 1180px){
    :root{
        --big-font: 4rem;
        --h2-font: 2.2rem;
        --p-font:15px;
    }

    .home{
        height: 85vh;
    }
}

@media (max-width: 1060px){
    #menu-icon{
        display: initial;
    }
    .navlist{
        position: absolute;
        top: -1000px;
        left: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        text-align: left;
        background: var(--other-color);
        transition: all .50s ease;
    }
    .navlist a{
        display: block;
        padding: 0.5rem;
        margin: 1rem;
        border-left: 2px solid var(--main-color);

    }
    .navlist.open{
        top: 100%;
    }   
}


@media (max-width: 1045px){
    :root{
        --big-font: 3.3rem;
        --h2-font: 2rem;
    }
    .home-img img{
    width: 100%;
    max-width: 490px;
    height: auto;
    }
    .about-img img{
    width: 100%;
    max-width: 490px;
    height: auto;
    }
    .home{
        height: 70vh;
    }
}

@media (max-width: 860px){
    .home{
        grid-template-columns: 1fr;
        height: 118vh;
    }
   .home-text{
        padding-top: 60px;

    }
    .home-img{
        text-align: center;
     
    }
     .about{
        grid-template-columns: 1fr;
    }
    .about-img{
        text-align: center;
    }

}


@media (max-width: 520px){
    .contact-img{
        gap: 1.5rem;
    }

    .contact-img img{
        width: 100%;
        max-width: 170px;
        height: auto;
    }

    .social i{
        margin: 0 10px;

    }
    .contact-text p{
        max-width: 100%;
    }

    .details{
        gap: 1.5rem;

    }
}

@media (max-width: 475px){
    :root{
        --big-font: 2.8rem;
        --h2-font: 2rem;
    }
}

@media (max-width: 440px){
    .home{
        height: 110vh;
        gap: 0.1rem;
    }
}
  </style>

    <!-- BoxIcons -->

    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<!---Google Fonts--->

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap" rel="stylesheet">


</head>
<body>

    <!-- Header Page -->

    <header>
    
        <a href="#" class="logo"> <i class='bx bxs-home' ></i>Fashion-Hub</a>
 
         <ul class="navlist">
             <li><a href="{{ route('products.showData') }}">Lobi</a></li>
             <li><a href="{{ route('products.showAllData') }}" class="active">Semua Produk</a></li>
           <li><a href="{{ route('products.diskon') }}">Diskon</a></li>
             <li><a href="{{ route('products.KategoriData') }}">Kategori</a></li>
             <li><a href="#contact">Kontak Kami</a></li>
         </ul>
 
         <div class="nav-icons">
            <a href="{{ route('products.showAllData') }}"><i class='bx bx-search-alt' ></i></a>
            <a href="{{ route('products.KategoriData') }}"><i class='bx bx-cart-alt' ></i></a>
             <div class="bx bx-menu" id="menu-icon"></div>
         </div>
 
     </header>
 
     <!-- Home Page -->
 
     <section class="home" id="home">
         <div class="home-text">
            <h1>Temukan <span>Gaya dan juga</span><br>Hobimu, <span>FashionHub </span> <br>Gaya di Ujung Jari!</h1>
             <a href="{{ route('products.showAllData') }}" class="btn">Lihat Produk<i class='bx bxs-right-arrow' ></i></a>
             <a href="#contact" class="btn2">Informasi Lain</a> 
 
         </div>
 
         <div class="home-img">
             <img src="{{ asset('/Latihan-002/public/img/all1.png')}}" alt="">
         </div>
 
     </section>
    <!-- Container Page -->

    <section class="container">
        
        <div class="container-box">
            <img src="{{ asset('/Latihan-002/public/img/c1.png')}}" alt="">
            <h3>11:00 am - 08:00 pm</h3>
            <a href="#">Jam Kerja Toko</a>
        </div>

        <div class="container-box">
            <img src="{{ asset('/Latihan-002/public/img/c2.png')}}" alt="">
            <h3>Sumedang.Margacinta</h3>
            <a href="#">Lokasi Toko</a>
        </div>

        <div class="container-box">
            <img src="{{ asset('/Latihan-002/public/img/c3.png')}}" alt="">
            <h3>(+62) 812-9273-1092</h3>
            <a href="#">Kontak Pihak Terkait</a>
        </div>
    </section>

{{-- 
    <!-- About Page -->

    <section class="about" id="about">
        <div class="about-img">
            <img src="/img/a11.png" alt="">
        </div>

        <div class="about-text">
            <h2>Tentang <br> Toko Fashion-Hub.</h2>
            <p>Toko Fashion Hub adalah sebuah platform daring yang menyediakan berbagai macam produk fashion dari berbagai merek terkenal. Di sini, pengguna dapat menjelajahi dan membeli pakaian, sepatu, aksesori, dan item fashion lainnya dengan mudah melalui aplikasi atau situs web. <br><br> Fashion Hub juga sering menawarkan koleksi terbaru, promosi, dan rekomendasi gaya untuk membantu pengguna menemukan produk yang sesuai dengan preferensi dan kebutuhan mereka. Dengan fitur-fitur seperti ulasan produk, panduan ukuran, dan layanan pelanggan yang responsif, Fashion Hub bertujuan untuk memberikan pengalaman belanja yang menyenangkan dan memuaskan bagi para penggemar mode.</p>
            <a href="https://www.jakartafashionhub.com/" class="btn">About Store<i class='bx bxs-right-arrow' ></i></a>

        </div>
    </section> --}}

    <!-- Shop Page -->

    <section class="shop" id="shop">
        <div class="middle-text">
            <h4>Produk Fashion-Hub</h4>
            <h2>List Semua Produk Toko Fashion Fashion-Hub</h2>
        </div>



      
         <!-- Tambahkan textbox pencarian di sini -->
<div class="search-box">
    <form action="{{ route('products.search') }}" method="POST">
        @csrf
        <input type="text" id="searchInput" name="searchKeyword" placeholder="Cari produk...">
        <button type="submit">Cari</button>
    </form>
</div>

      


        
        <div class="shop-content">
        @foreach ($TampilMenu as $row )
        
        <form action="" method="post"enctype="multipart/form-data" >
    @csrf
            <div class="row">
            <!-- <h5 required name="tipe_makanan">{{ $row->tipe_makanan }} </h5> -->

      
                <img name="img" src="{{ asset('/Latihan-002/public')}}/{{$row->img}}" alt=""  style="width: 245px; height: 245px; object-fit: cover; border-radius: 18px; margin-top : 20px;  ">
                <h3  name="nama">  {{ $row->nama }}  </h3>
                
                <p name="deskripsi">{{$row->deskripsi}}</p>
                <h5  name="status">{{ $row->status }}</h5>
                <div class="in-text">
                    <div class="price">
                        <h6 required name="harga">Rp.{{ number_format($row->harga2, 0, ',', '.') }}</h6>

                    </div>

               
                    <div class="s-btn">
           <a href="/produk/nama/{{ $row->nama }}">Detail</a>
          
                </div>


               
        </div>
      </form>



                    <div class="top-icon">
                        <a href="#"><i class='bx bx-heart'></i></a>
                    </div>
            </div>
            @endforeach   
             



        </div>


        <div class="row-btn">
            <a href="{{ route('products.KategoriData') }}" class="btn">Kategori<i class='bx bxs-right-arrow' ></i></a>
        </div>
    
</section>

    
   
<!-- Contact Page -->


<section class="contact" id="contact">
    <div class="contact-content">
        <div class="contact-img">
            <div class="c-one">
                <img src="{{ asset('/Latihan-002/public/img/f1.png')}}" alt="">
            </div>
            <div class="c-one">
                <img src="{{ asset('/Latihan-002/public/img/f2.png')}}" alt="">
            </div>
        </div>

        <div class=" contact-text">
            <h2>Kontak Kami</h2>
            
            <p> Temukan pilihan terbaik dari merek-merek terkenal dan desainer ternama di sini. Dukungan pelanggan kami yang ramah dan profesional siap membantu Anda dalam setiap langkah perjalanan belanja Anda. Jadikan kami mitra terpercaya Anda dalam mengeksplorasi dunia fashion yang tak terbatas. Mulailah petualangan gaya Anda sekarang di Fashion Hub!</p>
            <div class="social">
                <a href="#" class="clr"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-github' ></i></a>
                <a href="#"><i class='bx bxl-discord-alt' ></i></a>

            </div>
        </div>

        <div class="details">
            <div class="main-d">
                <a href="#"><i class='bx bxs-location-plus' ></i>Sumedang, Jalan Katini No.17 Kabupaten Sumedang JawaBarat</a>
            </div>
            <div class="main-d">
                <a href="#"><i class='bx bx-phone' ></i>(+62) 812-9273-1092</a>
            </div>
            <div class="main-d">
                <a href="#"><i class='bx bxl-youtube' ></i>Honey</a>
            </div>
            <div class="main-d">
                <a href="#"><i class='bx bxs-bell' ></i>Follow</a>
            </div>

        </div>
    </div>

</section>


<!-- Sroll Toolls -->

<a href="#" class="scroll">
    <i class='bx bxs-up-arrow' ></i>
</a>




<script>
    // Jika variabel scrollToShop ada, arahkan halaman ke bagian shop
    @if (isset($scrollToShop) && $scrollToShop)
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('shop').scrollIntoView();
        });
    @endif
</script>

<script src="https://unpkg.com/scrollreveal"></script>

       <!--ini Jsnya-->

       <script src="{{ asset('/Latihan-002/public/js/script.js')}}"></script>
</body>
</html>