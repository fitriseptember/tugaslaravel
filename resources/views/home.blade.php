<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fce4ec; /* Latar belakang pink lembut */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            background: #ffffff; /* Warna latar belakang putih untuk konten */
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 500px;
            width: 90%;
            animation: fadeInUp 1s ease-out;
        }
        h1 {
            font-size: 2.5em;
            margin: 0;
            color: #e91e63; /* Warna pink cerah untuk teks */
            animation: fadeIn 1s ease-out;
        }
        blockquote {
            font-size: 1.3em;
            color: #555;
            margin: 20px 0;
            padding: 20px;
            border-left: 5px solid #e91e63; /* Garis kiri pink cerah */
            background-color: #fce4ec; /* Latar belakang pink lembut */
            border-radius: 8px;
            font-style: italic;
            animation: fadeIn 1s ease-out 0.5s;
        }
        blockquote footer {
            font-size: 1.1em;
            color: #888;
            margin-top: 10px;
        }
        .btn {
            display: inline-block;
            padding: 12px 25px;
            font-size: 1.2em;
            color: #ffffff;
            background-color: #e91e63; /* Warna pink cerah untuk tombol */
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s, transform 0.3s;
            animation: fadeIn 1s ease-out 1s;
        }
        .btn:hover {
            background-color: #c2185b; /* Warna pink lebih gelap untuk efek hover */
            transform: translateY(-3px);
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #e91e63; /* Warna pink cerah untuk footer */
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.9em;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        <blockquote>
            "Jangan pernah menyerah pada sesuatu yang benar-benar anda inginkan. Ini sulit untuk menunggu, tetapi lebih sulit untuk menyesali."

        </blockquote>
        <a href="/about" class="btn">Masuk</a>
        <h1>Pesan dari Form</h1>

        <!-- Cek jika pesan ada -->
    @if(isset($message))
        <p>Pesan: {{ $message }}</p>
    @else
        <p>Tidak ada pesan yang dikirim.</p>
    @endif
    </div>



</body>
</html>
