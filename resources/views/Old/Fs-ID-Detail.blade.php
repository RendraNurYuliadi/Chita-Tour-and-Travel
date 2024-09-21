<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link rel="shorcut icon" type="x-icon" href="{{ asset('/Latihan-002/public/img/fshub.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotak</title>
 
<style>
    .container {
  display: flex;
  flex-direction: column; /* Mengubah orientasi menjadi vertikal */
  justify-content: center;
  background-color: #FFE0C0;
  align-items: center;
  height: 100vh;
}

.box1 {
  width: 300px;
  height: 100px;
  background-color: #FFC080;
  margin-bottom: 20px; /* jarak antara kotak */
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all .50s ease;
}

.box1:hover {
  width: 350px;
  height: 120px;
  font-size: 20px;
}

.box1 h2 {
  color: black; /* Warna teks putih */
  font-weight: bolder;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0; /* Menghapus margin default */
}

.box2 {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 1400px;
  height: 700px;
  background-color: #FFC080; /* warna hijau */
  border-radius: 50px;
}

.box2 img {
  width: 650px;
  height: 650px;
  border-radius: 50px;
  margin-left: 30px;
  transition: all .50s ease;
}
.box2 img:hover {
  transform: scale(1.1);
}


.box3 {
  width: 600px;
  height: 400px;
  border-radius: 50px;
  background-color: #FFE0C0; /* warna merah */
  margin-bottom: 250px;
  margin-right: 30px;
}

.font{
  
  margin-top: 30px;
  margin-left: 30px;

}

.font p{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 700;
  font-size: 15px;
}

button {
  /* Menggeser tombol ke kiri sejauh 50% dari lebar tombol itu sendiri */
  margin-top: 50px;
  font-size: 20px;
  padding: 20px 30px; /* Padding di dalam tombol */
  background-color: black; /* Warna latar belakang tombol */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #FFC080; /* Warna teks tombol */
  font-size: 16px; /* Ukuran teks */
  border-radius: 50px; /* Sudut melengkung */
  cursor: pointer; /* Kursor tangan saat dihover */
  transition: all .50s ease;
  font-weight: bold;
}

/* Gaya tombol saat dihover */
button:hover {
  padding: 22px 32px; /* Padding di dalam tombol */
  background-color: #FFC080;
  font-size: 22px;
  color: black;
  border: #FFC080; /* Warna latar belakang tombol saat dihover */
}


@media (max-width: 1545px){

  
    .box2 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 1350px;
      height: 650px;
      background-color: #FFC080; /* warna hijau */
      border-radius: 50px;
      transition: .2s;
    }
    .box2 img {
      width: 550px;
      height: 550px;
      border-radius: 50px;
      margin: 40px;
      transition: .2s;
    }

    .box3 {
      width: 550px;
      height: 550px;
      border-radius: 50px;
      background-color: #FFE0C0; /* warna merah */
      margin: 40px;
      transition: .2s;
    }
}





@media (max-width: 1180px){
  .box2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 900px;
    height: 500px;
    background-color: #FFC080; /* warna hijau */
    border-radius: 50px;
    transition: .2s;
  }
  .box2 img {
    width: 400px;
    height: 400px;
    border-radius: 50px;
    margin: 40px;
    transition: .2s;
  }

  .box3 {
    width: 450px;
    height: 450px;
    border-radius: 50px;
    background-color: #FFE0C0; /* warna merah */
    margin: 40px;
    transition: .2s;
  }
}

@media (max-width: 1060px){
  .box2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 850px;
    height: 500px;
    background-color: #FFC080; /* warna hijau */
    border-radius: 50px;
    transition: .2s;
  }
  .box2 img {
    width: 390px;
    height: 390px;
    border-radius: 50px;
    margin: 40px;
    transition: .2s;
  }

  .box3 {
    width: 450px;
    height: 450px;
    border-radius: 50px;
    background-color: #FFE0C0; /* warna merah */
    margin: 40px;
    transition: .2s;
  }
}


@media (max-width: 950px){
  .container {
    display: flex;
    flex-direction: column; /* Mengubah orientasi menjadi vertikal */
    justify-content: center;
    background-color: #FFE0C0;
    align-items: center;
    height: 1400px; /* Tinggi disesuaikan dengan konten */
  }

  .box1 {
    width: 80%;
    height: 100px;
    background-color: #FFC080;
    margin-bottom: 20px; /* jarak antara kotak */
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all .50s ease;
  }
  .box2 {
    display: flex;
    flex-direction: column; /* Mengubah orientasi menjadi vertikal */
    justify-content: center;
    align-items: center;
    width: 80%; /* Lebar box2 berdasarkan persentase lebar layar */
    max-width: 850px; /* Lebar maksimum box2 */
    height: 1200px;
    background-color: #FFC080; /* warna hijau */
    border-radius: 50px;
    transition: .2s;
  }

  .box2 img {
    width: 450px;
    height: 450px;
    border-radius: 50px;
    margin: 40px;
    transition: .2s;
  }

  .box3 {
    width: 450px;
    height: 450px;
    border-radius: 50px;
    background-color: #FFE0C0; /* warna merah */
    margin: 40px;
    transition: .2s;
  }

  .box3 p {
    margin: 20px; /* Mengatur margin untuk paragraf di dalam .box3 */
  }
}

@media (max-width: 600px){
  .container {
    display: flex;
    flex-direction: column; /* Mengubah orientasi menjadi vertikal */
    justify-content: center;
    background-color: #FFE0C0;
    align-items: center;
    height: 1350px; /* Tinggi disesuaikan dengan konten */
  }

  .box1 {
    width: 80%;
    height: 100px;
    background-color: #FFC080;
    margin-bottom: 20px; /* jarak antara kotak */
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all .50s ease;
  }

  .box2 {
    display: flex;
    flex-direction: column; /* Mengubah orientasi menjadi vertikal */
    justify-content: center;
    align-items: center;
    width: 80%; /* Lebar box2 berdasarkan persentase lebar layar */
    max-width: 850px; /* Lebar maksimum box2 */
    height: 1100px;
    background-color: #FFC080; /* warna hijau */
    border-radius: 50px;
    transition: .2s;
  }

  .box2 img {
    width: 450px;
    height: 450px;
    border-radius: 50px;
    margin: 40px;
    transition: .2s;
  }

  .box3 {
    width: 450px;
    height: 450px;
    border-radius: 50px;
    background-color: #FFE0C0; /* warna merah */
    margin: 40px;
    transition: .2s;
  }

  .box3 p {
    margin: 20px; /* Mengatur margin untuk paragraf di dalam .box3 */
  }
}
@media (max-width: 520px){
  .container {
    display: flex;
    flex-direction: column; /* Mengubah orientasi menjadi vertikal */
    justify-content: center;
    background-color: #FFE0C0;
    align-items: center;
    height: 1200px; /* Tinggi disesuaikan dengan konten */
  }

  .box1 {
    width: 90%;
    height: 100px;
    background-color: #FFC080;
    margin-bottom: 20px; /* jarak antara kotak */
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all .50s ease;
  }

  .box2 {
    display: flex;
    flex-direction: column; /* Mengubah orientasi menjadi vertikal */
    justify-content: center;
    align-items: center;
    width: 90%; /* Lebar box2 berdasarkan persentase lebar layar */
    max-width: 450px; /* Lebar maksimum box2 */
    height: 800px; /* Mengurangi tinggi box2 */
    background-color: #FFC080; /* warna hijau */
    border-radius: 50px;
    transition: .2s;
  }

  .box2 img {
    width: 350px; /* Mengurangi ukuran gambar */
    height: 350px; /* Mengurangi ukuran gambar */
    border-radius: 50px;
    margin: 20px; /* Mengurangi margin */
    transition: .2s;
  }

  .box3 {
    width: 350px; /* Mengurangi lebar box3 */
    height: 450px;
    border-radius: 50px;
    background-color: #FFE0C0; /* warna merah */
    margin: 20px; /* Mengurangi margin */
    transition: .2s;
  }

  .box3 p {
    margin: 10px; /* Mengurangi margin untuk paragraf di dalam .box3 */
  }
}


@media (max-width: 452px){
  .container {
    display: flex;
    flex-direction: column; /* Mengubah orientasi menjadi vertikal */
    justify-content: center;
    background-color: #FFE0C0;
    align-items: center;
    height: 980px; /* Tinggi disesuaikan dengan konten */
  }
  .box1 {
    width: 90%;
    height: 100px;
    background-color: #FFC080;
    margin-bottom: 20px; /* jarak antara kotak */
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all .50s ease;
  }
  .box2 {
    display: flex;
    flex-direction: column; /* Mengubah orientasi menjadi vertikal */
    justify-content: center;
    align-items: center;
    width: 90%; /* Lebar box2 berdasarkan persentase lebar layar */
    max-width: 450px; /* Lebar maksimum box2 */
    height: 700px; /* Mengurangi tinggi box2 */
    background-color: #FFC080; /* warna hijau */
    border-radius: 50px;
    transition: .2s;
  }

  .box2 img {
    width: 320px; /* Mengurangi ukuran gambar */
    height: 320px; /* Mengurangi ukuran gambar */
    border-radius: 50px;
    margin: 20px; /* Mengurangi margin */
    transition: .2s;
  }

  .box3 {
    width: 320px; /* Mengurangi lebar box3 */
    height: 450px;
    border-radius: 50px;
    background-color: #FFE0C0; /* warna merah */
    margin: 20px; /* Mengurangi margin */
    transition: .2s;
  }

  .box3 p {
    margin: 10px; /* Mengurangi margin untuk paragraf di dalam .box3 */
  }
}


</style>
</head>
<body>
    <div class="container">
        <div class="box1">
            <h2>Detail Produk</h2>
        </div>
        <div class="box2">
            <img src="{{ asset('/Latihan-002/public')}}/{{$produk->img}}" alt="">
            <div class="box3">
                <div class="font">
                    <p>Nama Produk : {{ $produk->nama }}</p>
                    <p>Tipe Produk : {{ $produk->tipe }}</p>
                    <p>Status : {{ $produk->status }}</p>
                    <p>Harga Awal : Rp.{{ number_format($produk->harga, 0, ',', '.') }}</p>
                    <p>Diskon : {{ $produk->diskon }}%</p>
                    <p>Tanggal Akhir Diskon : {{ $produk->tglakhirdiskon }}</p>
                    <p>Harga Diskon : Rp.{{ number_format($produk->harga2, 0, ',', '.') }}</p>

                    <p>Stok : {{ $produk->stok }}</p>
                    <p>Deskripsi : {{ $produk->deskripsi }}</p>
                </div>
            </div>
        </div>
      
       

        <button type="button" onclick="history.back()">Kembali</button>



    </div>
</body>
</html>
