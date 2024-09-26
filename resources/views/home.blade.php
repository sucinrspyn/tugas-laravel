<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #ffffff;
        }
        .navbar {
            background-color: #6c757d;
        }
        .navbar a {
            color: #fff !important;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
        .table th, .table td {
            vertical-align: middle; /* Aligns text vertically in the center */
        }
        .hero-section {
            background-color: grey; /* Change this to your desired color */
            color: white; /* Text color for contrast */
            padding: 200px 0; /* Extra padding for the hero section */
        }
        .table-section {
            background-color: #ffffff; /* Change this to your desired color */
            padding: 40px 0; /* Padding for the table section */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#home">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#book">Buku</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Perpustakaan</h1>
            <p class="lead">Jelajahi koleksi buku dan sumber daya kami.</p>
            <a href="#book" class="btn btn-primary btn-lg">Lihat Buku</a> <!-- Add your button here -->
        </div>
    </section>

    <!-- Table of Books -->
    <section id="book" class="container py-5">
        <h2 class="text-center mb-4">Daftar Buku</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Deskripsi</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Laskar Pelangi</td>
                    <td>Andrea Hirata</td>
                    <td>Laskar Pelangi mengisahkan tentang sebelas anak yang berasal dari keluarga miskin, di mana mereka harus selalu berjuang dalam
                        menempuh pendidikannya di sekolah sederhana yang ada di desa Balitong.</td>
                    <td>2005</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cantik Itu Luka</td>
                    <td>Eka Kurniawan</td>
                    <td>Seorang perempuan yang bangkit dari kuburannya setelah dua puluh satu tahun kematiannya.
                        Kebangkitannya ini menguak kutukan dan tragedi keluarga yang menimpanya di akhir masa kolonial.</td>
                    <td>2002</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Laut Bercerita</td>
                    <td>Leila S. Chudori</td>
                    <td>Keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat,
                        sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur oleh waktu.</td>
                    <td>2017</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Tenggelamnya Kapal Van Der Wijck</td>
                    <td>Abdul Malik Karim Amrullah(Buya Hamka)</td>
                    <td>kisah ibu baik hati dan penuh harapan akan sambutan gembira, saat ia dan keluarga kecilnya kembali ke tanah kelahiran ayahnya di Padang Panjang, Mengkasar.</td>
                    <td>1935</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ronggeng Dukuh Paruk</td>
                    <td>Ahmad Tohari</td>
                    <td>Ronggeng Dukuh Paruk kisahkan penari ronggeng baru bernama Srintil, yang baru saja dinobatkan sebagai ronggeng terakhir setelah kematian 12 tahun ronggeng lamanya</td>
                    <td>1982</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2024 PerpustakaanKu.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
