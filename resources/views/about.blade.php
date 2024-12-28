<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Toko Ikan Hias</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            text-align: center;
            padding: 4rem 1rem;
            background-color: #006994;
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
            background-color: #006994;
            color: white;
            margin-top: 3rem;
        }

        /* Gaya untuk About Section */
        .about-section {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .about-section h2 {
            font-size: 2rem;
            color: #006994;
            margin-bottom: 1rem;
        }

        .about-section p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Gaya untuk Mission & Vision */
        .mission-vision {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3rem;
        }

        .mission, .vision {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 48%;
        }

        .mission h3, .vision h3 {
            font-size: 1.6rem;
            color: #006994;
            margin-bottom: 1rem;
        }

        .mission p, .vision p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Gaya untuk Tim */
        .team {
            text-align: center;
        }

        .team h2 {
            font-size: 2rem;
            color: #006994;
            margin-bottom: 2rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .team-member {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 4px solid #006994;
        }

        .team-member h4 {
            font-size: 1.4rem;
            margin: 10px 0;
            color: #333;
        }

        .team-member p {
            font-size: 1.1rem;
            color: #555;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mission-vision {
                flex-direction: column;
                align-items: center;
            }

            .mission, .vision {
                width: 90%;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Tentang Kami</h1>
        <p>Kenali lebih dekat tentang Toko Ikan Hias.</p>
    </header>

    <main>
        <section class="about-section">
            <h2>Siapa Kami?</h2>
            <p>
                Toko Ikan Hias adalah tempat terbaik untuk menemukan berbagai macam ikan hias berkualitas tinggi. 
                Kami telah berdiri sejak tahun 2023 dan berkomitmen untuk menyediakan ikan hias terbaik dengan layanan pelanggan yang ramah.
            </p>
        </section>

        <section class="mission-vision">
            <div class="mission">
                <h3>Misi Kami</h3>
                <p>Memberikan kebahagiaan kepada para pecinta ikan hias melalui koleksi ikan yang indah dan sehat.</p>
            </div>
            <div class="vision">
                <h3>Visi Kami</h3>
                <p>Menjadi toko ikan hias terpercaya di seluruh Indonesia.</p>
            </div>
        </section>

        <section class="team">
            <h2>Tim Kami</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="{{ asset('img/adelia.jpg') }}" alt="Anggota Tim">
                    <h4>Adelia</h4>
                    <p>Founder & CEO</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('img/marya.jpg') }}" alt="Anggota Tim">
                    <h4>Marya</h4>
                    <p>Manager Operasional</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('img/ningsih.jpg') }}" alt="Anggota Tim">
                    <h4>Ningsih</h4>
                    <p>Ahli Akuarium</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 Toko Ikan Hias. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
