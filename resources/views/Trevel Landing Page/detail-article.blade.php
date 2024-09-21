<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel - Nusa-Travel</title>
    <link rel="stylesheet" href="/css/article-detail.css">
</head>
<body>


  



    <section class="article-detail">

    <div class="first-box" id="first-box">
        <h1 class="title"></h1>
        
        <div class="images">
            <img src="/{{ $Artikel->img0 }}" alt="Image 0">
        </div>
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

    <div class="back_button">
        <a href="{{ route('index-travel.nusa-travel') }}"><span><img src="/img/Icon/reply_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""></span></a>
    </div>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const titleText = "{{ $Artikel->title }}"; // Ganti dengan teks dinamis dari server
            const titleElement = document.querySelector('.title');
            let index = 0;

            function typeWriter() {
                if (index < titleText.length) {
                    titleElement.textContent += titleText.charAt(index);
                    index++;
                    setTimeout(typeWriter, 50); // Kecepatan pengetikan
                }
            }

            typeWriter();
        });


        const sr = ScrollReveal({
            origin:'top',
            distance:'85px',
            duration: 2500,
            reset: true
        })

        sr.reveal ('.article-detail',{delay:50});
        sr.reveal ('.first-box',{delay:50});
        sr.reveal ('.conten-cover',{delay:50});
        sr.reveal ('.content-box',{delay:50});
        sr.reveal ('.article-footer',{delay:50});


        sr.reveal ('.images',{delay:50});
        sr.reveal ('.artikel-content',{delay:50});
        sr.reveal ('.pic',{delay:50});
    </script>
</body>
</html>


{{-- 
<div class="button">
    <a class="btn-back" href="">Kembali</a>
</div> --}}