<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Notifikasi Destinasi Baru</title>
    <style>

        :root {
            --dark-green: #112a34;
            --green-color: #004047;
            --white-color: #ffffff;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            color: var(--white-color);
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ffffff;
            border-radius: 10px;
            background-color: #ffffff;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            color: var(--green-color);
        }
        .content p {
            margin: 10px 0;
        }
        .content p.title {
            font-weight: bold;
        }
        .content ul {
            list-style-type: disc;
            margin: 10px 0;
            padding-left: 20px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9em;
            color: var(--white-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Notifikasi Destinasi Baru di Nusa Travel</h1>
        </div>
        <div class="content">
            <p>Hallo Sahabat Nusa Travel!</p>
            <p>Kami sangat senang untuk memberi tahu Anda bahwa Nusa Travel baru saja menambahkan destinasi menarik ke koleksi kami! 🎉 Jika Anda selalu mencari tempat baru yang menakjubkan untuk dikunjungi, ini adalah kesempatan yang tidak boleh Anda lewatkan.</p>

            <p class="title">📍 Destinasi Baru:</p>
            <ul>
                <li><strong>Nama Tempat :</strong> {{ $nama_tempat }}</li>
                <li><strong>Lokasi :</strong> {{ $lokasi }}</li>

                <li><strong>Deskripsi :</strong> {{ $deskripsi }}</li>

                <li><strong>Kategori :</strong> {{ $kategori }}</li>
                <li><strong>Biaya Masuk :</strong> Rp. {{ number_format($biaya_masuk, 0, ',', '.') }}</li>
                <li><strong>Jam Buka :</strong> {{ $jam_buka }}</li>
                <li><strong>Jam Tutup :</strong> {{ $jam_tutup }}</li>
                <li><strong>Fasilitas :</strong> {{ $fasilitas }}</li>
                <li><strong>Rating :</strong> {{ $rating }} <strong>Tipe Ulasan:</strong> {{ $ulasan }}</li>
                <li><strong>Website :</strong> {{ $website }}</li>
                <li><strong>Telepon :</strong> {{ $telepon }}</li>
                <li><strong>Email :</strong> {{ $email }}</li>
                <li><strong>Latitude :</strong> {{ $latitude }}</li>
                <li><strong>Longitude :</strong> {{ $longitude }}</li>
            </ul>

            <p>Kami berharap destinasi ini dapat memenuhi semua ekspektasi Anda untuk perjalanan yang menyenangkan dan memuaskan. Jangan lewatkan kesempatan ini untuk mengeksplorasi lebih banyak tempat yang indah dan menarik!</p>

            <p>Terima kasih telah menjadi bagian dari komunitas Nusa Travel. Kami akan terus berusaha untuk membawa informasi dan penawaran terbaik untuk Anda.</p>
        </div>
        <div class="footer">
            <p>Selamat berpetualang dan semoga hari Anda menyenangkan!</p>
            <p>Salam hangat, Tim Nusa Travel</p>
        </div>
    </div>
    
</body>
</html>
