<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Ikan Hias</title>
    <style>
        /* Reset margin and padding for a clean layout */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and general styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
        }

        /* Header Section */
        header {
            background-color: #006994;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
            font-weight: 300;
        }

        /* Main Section */
        main {
            padding: 40px 20px;
        }

        .fish-collection h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
            color: #006994;
        }

        .fish-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .fish-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            width: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .fish-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .fish-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .fish-card h3 {
            font-size: 1.5rem;
            margin: 15px 0;
            color: #333;
        }

        .fish-card p {
            font-size: 1.1rem;
            color: #006994;
            margin-bottom: 20px;
        }

        /* Navigation links */
        nav {
            text-align: center;
            margin: 20px 0;
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #006994;
            font-size: 1.2rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Footer Section */
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #006994;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer p {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Toko Ikan Hias</h1>
        <p>Tempat terbaik untuk menemukan ikan hias impian Anda!</p>
    </header>

    <main>
        <section class="fish-collection">
            <h2>Koleksi Ikan Hias Kami</h2>
            <div class="fish-grid">
                <div class="fish-card">
                    <img src="{{ asset('img/ikan guppy.jpg') }}" alt="Ikan Guppy">
                    <h3>Ikan Guppy</h3>
                    <p>Harga: Rp3.000/ekor</p>
                </div>
                <div class="fish-card">
                    <img src="{{ asset('img/ikan koi.jpg') }}" alt="Ikan Koi">
                    <h3>Ikan Koi</h3>
                    <p>Harga: Rp50.000/ekor</p>
                </div>
                <div class="fish-card">
                    <img src="{{ asset('img/ikan cupang.jpg') }}" alt="Ikan Cupang">
                    <h3>Ikan Cupang</h3>
                    <p>Harga: Rp10.000/ekor</p>
                </div>
                <div class="fish-card">
                    <img src="{{ asset('img/ikan molly.jpg') }}" alt="Ikan Molly">
                    <h3>Ikan Molly</h3>
                    <p>Harga: Rp5.000/ekor</p>
                </div>
            </div>
            <nav>
                <a href="http://127.0.0.1:8000/">Home</a>
                <a href="http://127.0.0.1:8000/about">About</a>
                <a href="http://127.0.0.1:8000/contact">Contact</a>
                <a href="http://127.0.0.1:8000/profile">Profile</a>
            </nav>
        </section>
    </main>

    <footer>
        <p>© 2024 Toko Ikan Hias. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
