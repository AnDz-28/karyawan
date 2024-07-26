<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LSP PERTAKONAS - {{ $title }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top navbar-expand-lg bg-dark shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/') }}assets/img/kecil.png" alt="Bootstrap" width="45" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#kerjasama">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#footer">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/skema">Skema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/asesor">Asesor</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sertifikasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Persyaratan</a></li>
                            <li><a class="dropdown-item" href="#">Harga</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <b>Welcome Back, {{ auth()->user()->name }}</b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard">
                                    <i class="fas fa-columns"></i> My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Signin' ? 'active' : '' }}" href="signin">
                            <i class="fas fa-sign-in-alt"></i> Signin</a>
                    </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>

    {{-- CAROUSEL --}}

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="margin-top: 3rem">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="{{ asset('/') }}assets/img/bg2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="{{ asset('/') }}assets/img/bg1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="{{ asset('/') }}assets/img/kiat.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}assets/img/34.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- END CAROUSEL --}}

    <section id="about">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fffff" fill-opacity="1"
                d="M0,224L60,218.7C120,213,240,203,360,165.3C480,128,600,64,720,42.7C840,21,960,43,1080,53.3C1200,64,1320,64,1380,64L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <div class="row text-center">
                <div class=>
                    <h2>Profil LSP PERTAKONAS</h2>
                </div>
            </div>
            <div class="row justify-content-around">
                <style>
                    .col mt-3 {
                        text-align: justify;
                        text-justify: inter-word;
                    }
                </style>

                {{-- <div class="col-4 fs-5">
                    <p class="text-center f2-4">
                        <b>VISI</b>
                    </p>
                    Menjadi Lembaga Sertifikasi Profesi unggul, bermutu berwawasan inovatif dan koperatif yang
                    kompetitif, andal, dan terpercaya di bidang sertifikasi kompetensi tenaga kerja bidang jasa
                    Konstruksi di Indonesia pada era digitalisasi dan globalisasi.
                </div>
                <div class="col-4 fs-5">
                    <p class="text-center f2-4">
                        <b>MISI</b>
                    </p>
                    Untuk mewujudkan Visi tersebut LSP – PERTAKONAS akan menjalankan Misi sebagai berikut:
                    <ul type="square">
                        <li>Menjadi mitra para pemangku kepentingan bidang konstruksi</li>
                        <li>Menyediakan skema berkualitas sesuai kebutuhan lapangan kerja dan Asosiasi Profesi Jasa
                            Konstruksi</li>
                        <li>Membangun kerjasama/kemitraan sektor Konstruksi dengan Pemerintah dan Dunia Usaha swasta dan
                            BUMN/BUMD</li>
                        <li>Menyediakan asesor kompetensi tangguh dan terpercaya</li>
                        <li>Memfasilitasi proses uji asesmen berkualitas bernilai jual tinggi</li>
                        <li>Mendayagunakan Teknologi Informasi Komunikasi pada era digital dan globalisasi</li>
                    </ul>
                </div>
                <div class="col-4 fs-5">
                    <p class="text-center f2-4">
                        <b>TUJUAN</b>
                    </p>
                </div> --}}
                <div class="col-md mt-1">
                    PT. LSP PERTAHKINDO KONSTRUKSI NASIONAL (LSP PERTAKONAS) didirikan oleh Asosiasi Profesi
                    Terakreditasi (APT) PERTAHKINDO (Perkumpulan tenaga ahli Konstruksi Indonesia) yang telah
                    mendapatkan Rekomendasi Lisensi LSP Bidang Jasa Konstruksi_Pertahkindo dari Lembaga Pengembangan
                    Jasa Konstruksi (LPJK) Kementrian Pekerjaan Umum dan Perumahan Rakyat (PUPR) dengan no surat
                    BK.0401-LK/1142

                    PT. LSP PERTAHKINDO KONSTRUKSI NASIONAL (LSP PERTAKONAS) Telah mendapatkan Pengesahan melalui
                    Keputusan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia No.AHU-0057320.AH.01.01 Tahun 2021
                    tentang Pengesahan Pendirian Badan Hukum Perseroan Terbatas PT. LSP PERTAHKINDO KONSTRUKSI NASIONAL
                    pada tanggal 14 Septembar 2021. Dengan akte no 1 tahun 2021 oleh Notaris Tuti Tjahjono.

                    Sebagai Pemegang Saham LSP PERTAKONAS tercatat 37 Unsur Pemegang Saham yang mewakili Anggota
                    PERTAHKINDO di 34 Provinsi
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fffff" fill-opacity="1"
                d="M0,192L60,192C120,192,240,192,360,208C480,224,600,256,720,245.3C840,235,960,181,1080,149.3C1200,117,1320,107,1380,101.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </section>

    <section id="kerjasama" style="background-color: #000000; margin: 0; padding: 0;">
        <div class="container">
            <div class="row text-center">
                <div class="col m-4">
                    <h2 style="color: white ">- Link -</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card align-items-center">
                        <!-- Tambahkan kelas "align-items-center" di sini -->
                        <img src="{{ asset('/') }}assets/img/pertahkindo.png" class="card-img-top" alt="pertahkindo">
                        <div class="card-body">
                            <a href="https://docs.google.com/forms/d/13OaSNHJHTDiRlWIo7doBjN5_G59C1JfizhoGLfa-M3M/"
                                class="btn btn-sm btn-dark" target="_blank">KTA PERTAHKINDO</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card align-items-center">
                        <!-- Tambahkan kelas "align-items-center" di sini -->
                        <img src="{{ asset('/') }}assets/img/pupr.png" class="card-img-top" alt="pertahkindo">
                        <div class="card-body">
                            <a href=" https://lisensijakon.pu.go.id/lsp/login" class="btn btn-sm btn-dark"
                                target="_blank">LPJK</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card align-items-center">
                        <!-- Tambahkan kelas "align-items-center" di sini -->
                        <img src="{{ asset('/') }}assets/img/bnsp.png" class="card-img-top" alt="pertahkindo">
                        <div class="card-body">
                            <a href="https://sisfo.bnsp.go.id/login" class="btn btn-sm btn-dark"
                                target="_blank">BNSP</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card align-items-center">
                        <!-- Tambahkan kelas "align-items-center" di sini -->
                        <img src="{{ asset('/') }}assets/img/simpan.png" class="card-img-top" alt="simpan">
                        <div class="card-body">
                            <a href="https://simpan.pu.go.id/client-e-pengalaman/epengalaman/auth/login_simpan"
                                class="btn btn-sm btn-dark" target="_blank">E-Simpan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card align-items-center">
                        <!-- Tambahkan kelas "align-items-center" di sini -->
                        <img src="{{ asset('/') }}assets/img/portal.png" class="card-img-top" alt="portal_pu">
                        <div class="card-body">
                            <a href="https://perizinan.pu.go.id/portal/" class="btn btn-sm btn-dark"
                                target="_blank">Portal PU</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card align-items-center">
                        <!-- Tambahkan kelas "align-items-center" di sini -->
                        <img src="{{ asset('/') }}assets/img/survey.png" class="card-img-top" alt="survey">
                        <div class="card-body">
                            <a href="https://www.jotform.com/232960203712448" class="btn btn-sm btn-dark"
                                target="_blank">Survey Kepuasan Asesi</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card align-items-center">
                        <!-- Tambahkan kelas "align-items-center" di sini -->
                        <img src="{{ asset('/') }}assets/img/surveillan.png" class="card-img-top" alt="survey">
                        <div class="card-body">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc1V8oYyfDYm9816rLw1mUuWak1BsnHIm0Y8RG-EE1n6LE4VA/viewform"
                                class="btn btn-sm btn-dark" target="_blank">Surveillance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,160L60,138.7C120,117,240,75,360,80C480,85,600,139,720,149.3C840,160,960,128,1080,117.3C1200,107,1320,117,1380,122.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg> --}}

    </section>

    <section id="footer" style="background: white">

        <div class="container">
            <div class="row text-center">
                <div class="col mt-5">
                    <h2> HUBUNGI KAMI </h2>
                </div>
            </div>
            <div class="row mt-3 justify">
                <div class="col-sm mb-3">
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.862902928553!2d106.91678077556148!3d-6.149107893837916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bc41d6bad11%3A0xdb3af9b16ee8d227!2sPT%20LSP%20PERTAHKINDO%20Konstruksi%20Nasional%20(LSP%20PERTAKONAS)!5e0!3m2!1sid!2sid!4v1697609239441!5m2!1sid!2sid"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <p>
                    <h4>PT LSP PERTAHKINDO KONSTRUKSI NASIONAL</h4>
                    Kompleks Perkantoran Gading Orchard Square Blok B No. 01</br>
                    Jl. Terusan Kelapa Hybrida Raya Summarecon Kelapa Gading</br>
                    Jakarta Utara 14140</br>


                    Email: info@lsp-pertakonas.co.id</br>
                    Telp : 021-21056316
                    </p>
                    <img src="{{ asset('/') }}assets/img/544new.png" style="left">
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
</body>

</html>