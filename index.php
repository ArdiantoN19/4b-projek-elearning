<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guruku</title>
    <link rel="icon" href="assets/img/graduation.png">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-success fw-bold fs-3" href="#"><img src="assets/img/study.png" width=60/> Guruku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                    <div class="dropdown">
                    <button type="button" class="btn text-white success dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Masuk
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="back/guru/login.php">Guru</a>
                        </li> 
                        <li>
                            <a class="dropdown-item" href="back/siswa/login.php">Siswa</a>
                        </li>
                    </ul>
                    </div>             
                </ul>
            </div>
        </div>
    </nav>
    <!-- Awal home -->
    <section id="home">
        <div class="container">
            <div class="row justify-content-center pt-5">
                <div class="col-12 col-lg-6 mb-3">
                        <h5 class="display-5 fw-light">Belajar Mudah Dimana Saja & Kapan Saja dengan <span class="logo fw-bold">Guruku</span></h5>
                        <p class="mt-3">Guruku menawarkan pembelajaran yang terstruktur dan efektif. Nikmati kemudahan belajar dan materi terlengkap disini!</p>
                        <button class="btn success btn-lg mt-4"><a href="back/siswa/register.php" class="text-decoration-none text-white">Daftar Sekarang</a></button>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                        <img src="assets/img/undraw_book_lover_re_rwjy.svg" alt="Guru" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir home -->
    

    


    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>$(document).ready(function () {
        $(".navbar-nav").on("click", "a", function () {
          $(".navbar-nav a.active").removeClass("active");
          $(this).addClass("active");
        });
      });
      </script>
</body>

</html>