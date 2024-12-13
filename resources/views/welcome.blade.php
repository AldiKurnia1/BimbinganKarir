<html>
<head>
    <title>Sistem Temu Janji Pasien - Dokter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header {
            background-color: green;
            color: white;
            padding: 20px;
            text-align: right;
        }
        .header h1 {
            margin: 0;
            text-align: center;
        }
        .main-content {
            text-align: center;
            padding: 50px 20px;
        }
        .main-content h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .main-content p {
            font-size: 1.2em;
            color: #666;
        }
        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card i {
            font-size: 2em;
            color: black;
        }
        .card h3 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .card p {
            color: #666;
        }
        .card a {
            color: #0d47a1;
            text-decoration: none;
            font-weight: bold;
        }
        .testimonials {
            text-align: center;
            padding: 50px 20px;
        }
        .testimonials h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .testimonials p {
            font-size: 1.2em;
            color: #666;
        }
        .testimonial-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        .testimonial-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .testimonial-card i {
            font-size: 2em;
            color: black;
        }
        .testimonial-card p {
            color: #666;
            margin: 10px 0;
        }
        .testimonial-card .author {
            font-weight: bold;
            color: #333;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
        }
        .footer a {
            color: #0d47a1;
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .cards, .testimonial-cards {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Sistem Temu Dokter</h1>
    </div>
    <div class="main-content">
        <h2>Poliklinik</h2>
        <p>Tugas Bimbingan Karir</p>
        <div class="cards">
            <div class="card">
                <i class="fas fa-user"></i>
                <h3>Registrasi Pasien</h3>
                <p>Apabila Anda adalah seorang Pasien, silahkan login terlebih dahulu untuk melakukan pendaftaran sebagai Pasien!</p>
                <a href="{{ route('register.pasien') }}">Klik Link Berikut ></a>
            </div>
            <div class="card">
                <i class="fas fa-user"></i>
                <h3>Login Dokter</h3>
                <p>Apabila Anda adalah seorang Dokter, silahkan login terlebih dahulu untuk memulai layanan Anda!</p>
                <a href="{{ route('logindokter') }}">Klik Link Berikut ></a>
            </div>
            <div class="card">
            <i class="fas fa-user-shield"></i>
            <h3>Login Admin</h3>
            <p>Apabila Anda adalah seorang Admin, silahkan login untuk mengelola sistem!</p>
            <a href="#">Klik Link Berikut ></a>
        </div>
        </div>
    </div>
    <div class="testimonials">
        <h2>Testimoni Pasien</h2>
        <p>Para Pasien yang Setia</p>
        <div class="testimonial-cards">
            <div class="testimonial-card">
                <i class="fas fa-quote-left"></i>
                <p>Pelayanan di web ini sangat cepat dan mudah. Detail histori tercatat lengkap, termasuk catatan diet. Harga pelayanan terjangkau, Dokter ramah, pokok mantap pol!</p>
                <p class="author">- Afa, Semarang</p>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-left"></i>
                <p>Aku tidak pernah merasakan mudahnya berobat sebelumnya! Aku mengeluh web ini. Web yang mudah digunakan dan dokter yang sangat membantu! Berobat menjadi lebih menyenangkan!</p>
                <p class="author">- Ika, Semarang</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright © 2024 <a href="#">Aldi</a>. All rights reserved.</p>
    </div>
</body>
</html>