<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Toko Ikan Hias</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            text-align: center;
            padding: 3rem 1rem;
            background-color: #4CAF50;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 3rem;
        }

        header p {
            font-size: 1.5rem;
            margin-top: 10px;
        }

        main {
            margin: 3rem auto;
            max-width: 900px;
            padding: 1rem;
        }

        footer {
            text-align: center;
            padding: 1.5rem;
            background-color: #4CAF50;
            color: white;
            margin-top: 3rem;
        }

        /* Gaya untuk Profile Overview */
        .profile-overview {
            text-align: center;
            background: white;
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .profile-card img {
            max-width: 200px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 4px solid #4CAF50;
        }

        .profile-card h3 {
            margin: 0.5rem 0;
            font-size: 1.8rem;
            color: #333;
        }

        .profile-card p {
            font-size: 1.2rem;
            color: #555;
        }

        /* Gaya untuk Profile Details */
        .profile-details {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .profile-details ul {
            list-style: none;
            padding: 0;
        }

        .profile-details ul li {
            margin-bottom: 1rem;
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
        }

        .profile-details ul li strong {
            color: #4CAF50;
            font-weight: bold;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            header p {
                font-size: 1rem;
            }

            .profile-overview,
            .profile-details {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Profil Toko Ikan Hias</h1>
        <p>Mengenal lebih dekat siapa kami.</p>
    </header>

    <main>
        <section class="profile-overview">
            <h2>Tentang Pemilik</h2>
            <div class="profile-card">
                <img src="img/profile.jpg" alt="Foto Adelia, Pemilik Toko Ikan Hias">
                <h3>Adelia</h3>
                <p>Pendiri Toko Ikan Hias</p>
                <p>
                    Adelia memiliki kecintaan yang mendalam terhadap ikan hias sejak kecil. 
                    Dengan pengalaman lebih dari 12 tahun, ia mendirikan toko ini untuk berbagi 
                    keindahan dan kebahagiaan dunia ikan hias kepada semua orang.
                </p>
            </div>
        </section>

        <section class="profile-details">
            <h2>Informasi Toko</h2>
            <ul>
                <li><strong>Nama Toko:</strong> Toko Ikan Hias Adelia</li>
                <li><strong>Didirikan:</strong> 2023</li>
                <li><strong>Lokasi:</strong> Jl. Jendral Soedirman No. 123, Purbalingga</li>
                <li><strong>Spesialisasi:</strong> Ikan Guppy, Koi, Cupang, dan lainnya</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>© 2024 Toko Ikan Hias. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
