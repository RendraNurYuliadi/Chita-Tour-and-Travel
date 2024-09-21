<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shorcut icon" type="x-icon" href="/img/map_7997622.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <style>
        /* Style untuk pesan sukses */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');


        :root {
        --dark-green: #112a34;
        --green-color: #004047;
        --white-color: #fff;
        }

        .success-message {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid whitesmoke;
            background-color: var(--white-color);
            box-shadow: 5px 30px 56.1276px rgb(55 55 55 / 12%);
            color: black;
            font-family: 'Poppins', sans-serif;
            border-radius: 10px;
            text-align: center;
        }

        /* Style untuk tombol Back to Home */
        .success-message a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: #fff;
            background-color: var(--green-color);
            font-family: 'Poppins', sans-serif;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            transition: ease .40s;
        }

        .success-message a:hover {
            background-color: black;
            transform: scale(1.1);
        }

        @media (max-width: 450px) {
            .success-message {
            max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="success-message">
        <h1>Selamat!</h1>
        <p>Pesan Anda telah berhasil dikirim.</p>
        <a href="{{ route('welcome.nusa-travel') }}">Back to Home</a>
    </div>
</body>
</html>
