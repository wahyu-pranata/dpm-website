<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>DPM Unud</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--custom css file-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <link rel="icon" href="{{asset('img/LOGO DPM 2.png')}}" />

   <!-- Favicon -->
    <!--animate-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body class="">
    <!--========================START HEADER AREA=====================-->
    <header class="header-area">
      <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-2 py-md-0 fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset('img/LOGO DPM 2.png')}}" alt="logo DPM UNUD" width="40" height="40" class="" /><span class="title-text-DPM"> DPM PM UNUD</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <div class="me-auto"></div>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#beranda" >Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#tentang-kami" >Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#fungsionaris" >Fungsionaris</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#perpustakaan" >Perpustakaan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#recent-postingan" >Informasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact" >Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!--========================END HEADER AREA=====================-->

    <!--========================START MAIN AREA=====================-->
    <main class="site-main bg-dpm" id="beranda">
      <!--========================START BANNER AREA=====================-->
      <section class="site-banner" style="background-image: url({{asset('img/BANNER.jpg'	)}})">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 site-title">
              <h2 class="title-text">Dewan Perwakilan Mahasiswa (DPM)</h2>
              <h2 class="title-text">Pemerintahan Mahasiswa</h2>
              <h2 class="title-text">Universitas Udayana 2022</h2>

              <div class="site-button">
                <div class="d-flex flex-row flex-wrap">
                  <button type="button" class="btn button primary-button mr-4 text-uppercase" style="background-color: rgb(0, 106, 166)">Scroll Down</button>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12 banner-image text-center">
              <img src="{{asset('img/HERO DPM.png')}}" alt="banner-image" class="img-fluid mx-auto d-block" />
            </div>
          </div>
        </div>
      </section>
      <!--========================END BANNER AREA=====================-->

      <!--========================START FUNGSI AREA=====================-->

      <section class="fungsi-area bg-dpm" id="tentang-kami" data-aos="fade-up"
      data-aos-duration="3000">
        <div class="container" >
          <div class="row">
            <div class="col-lg-12 text-center fungsi-title"  >
              <h1 class="text-uppercase title-text">Fungsi</h1>
              <h1 class="text-uppercase title-text">DPM PM UDAYANA</h1>
            </div>
          </div>
          <div class="container fungsi-list" data-aos="fade-up"
          data-aos-duration="3000" >
            <div class="row justify-content-md-center d-flex align-items-center">
              <div class="accordion accordion-flush" id="accordionFlushExample">

                <div class="accordion-item" data-aos="fade-up"
                data-aos-duration="3000">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      <img src="{{asset('img/fungsi icon/icon_01.png')}}" alt="" height="50">
                      <span class="title-text-DPM">LEGISLASI</span>
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <ul class="card-text text-secondary">
                      <li>
                        Melakukan pemeriksaan keuangan terhadap BEM PM Unud, UKM, dan LPM Unud.
                      </li>
                      <li>
                        Menetapkan anggaran dan belanja organisasi bersama Presiden BEM PM-Unud dengan memperhatikan pertimbangan Fakultas bersama BKM.
                      </li>
                      <li>
                        Memilih anggota badan kelengkapan internal DPM PM-Unud untuk pemeriksaan keuangan.
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="accordion-item" data-aos="fade-up"
                data-aos-duration="3000">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      <img src="{{asset('img/fungsi icon/icon_04.png')}}" alt="" height="50">
                      <span class="title-text-DPM">PENGAWASAN</span>
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <ul class="card-text text-secondary">
                      <li>Melakukan pengawasan terhadap kinerja PM (BEM PM-Unud, dan UKM) termasuk pengawasan
                        di bidang keuangan</li>
                      <li>
                        Melakukan pengawasan terhadap kinerja LPM Unud termasuk pengawasan di bidang keuangan, kecuali dalam ranah penerbitan
                      </li>
                      <li>
                        Mengajukan, memberikan persetujuan, pertimbangan dan/atau konsultasi dan pendapat kepada PM
                      </li>
                      <li>
                        Menyerap, menghimpun, menampung, dan menindak lanjuti aspirasi mahasiswa sebagai kontrol kepada PM
                      </li>
                      <li>
                        Mengevaluasi kinerja Badan Eksekutif di tingkat Universitas 
                      </li>
                      <li>
                        Dalam melaksanakan fungsi pengawasan, DPM PM-Unud juga turun ke lapangan dalam pelaksanaan kegiatan BEM PM-Unud serta bertanggung jawab bersama dengan Presiden Mahasiswa
                      </li>
                    </ul>
                  </div>
                </div>
                 
                <div class="accordion-item" data-aos="fade-up"
                data-aos-duration="3000">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      <img src="{{asset('img/fungsi icon/icon_03.png')}}" alt="" height="50">
                      <span class="title-text-DPM">ANGGARAN</span>
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <ul class="card-text text-secondary">
                      <li>
                        Melakukan pemeriksaan keuangan terhadap BEM PM Unud, UKM, dan LPM Unud.
                      </li>
                      <li>
                        Menetapkan anggaran dan belanja organisasi bersama Presiden BEM PM-Unud dengan memperhatikan pertimbangan Fakultas bersama BKM.
                      </li>
                      <li>
                        Memilih anggota badan kelengkapan internal DPM PM-Unud untuk pemeriksaan keuangan.
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="accordion-item" data-aos="fade-up"
                data-aos-duration="3000">
                  <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                      <img src="{{asset('img/fungsi icon/icon_02.png')}}" alt="" height="50">
                      <span class="title-text-DPM">ADVOKASI</span>
                    </button>
                  </h2>
                  <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <ul class="card-text text-secondary">
                      <li>
                        Menyerap, menghimpun, dan menampung segala bentuk aspirasi mahasiswa terkait permasalahan di internal kampus.
                      </li>
                      <li>
                        Menyalurkan dan mengkoordinasikan segala bentuk aspirasi mahasiswa kepada BEM
                        PM.                        
                      </li>
                      <li>
                        Melakukan advokasi bersama BEM PM sebagai bentuk tindak lanjut dari aspirasi mahasiswa yang sudah diserap, dihimpun, dan ditampung terkait permasalahan internal kampus.
                      </li>
                      <li>
                        Menjaring aspirasi mahasiswa dalam perumusan dan penyusunan rancangan Peraturan Pemerintahan Mahasiswa dan peraturan dibawahnya.
                      </li>
                      <li>
                        Menyerap dan menghimpun aspirasi fakultas masing - masing melalui kunjungan kerja secara berkala.
                      </li>
                      <li>
                        Ketentuan lebih lanjut mengenai fungsi aspirasi-advokasi DPM PM-Unud diatur pada
                        Ketetapan DPM PM-Unud.
                      </li>
                    </ul>
                  </div>
                </div>
                

              </div>
            </div>
          </div>
        </div>
      </section>
      <!--========================END FUNGSI AREA=====================-->

      <!--========================START VISI MISI AREA=====================-->
      <section class="visi-misi-area bg-dpm">
        <div class="container">
          <div class="row grid">
            <div class="col-lg-7 col-md-12 element-item visi mx-auto"  data-aos="fader-right" data-aos-duration="1000">
              <div class="visi-misi-title pb-5">
                <h1 class="text-uppercase title-h1">VISI & MISI</h1>
                <h2 class="text-capitalize title-h2">Parlemen Langkah Bersama</h2>
              </div>

              <div class="button-group">
                <button type="button" class="active" data-filter=".misi">Visi</button>
                <button type="button" data-filter=".visi">Misi</button>
              </div>
              <div class="text-visi-misi">
                <ul class="visi-misi-list misi">
                  <li class="">Langkah Bersama wujudkan DPM 
                    Universitas Udayana sebagai 
                    lembaga legislatif yang bersinergi, 
                    responsif dan nyata dengan asas 
                    kebersamaan dan kekeluargaan.</li> 
                </ul>

                <ul class="visi-misi-list visi">
                  <li class="">Menjalankan tugas dan fungsi DPM sesuai dengan GBHO,
                    dan AD/ART sebagai badan legislatif.</li>
                  <li class="">Memaksimalkan kinerja, independen dan profesionalitas
                    DPM dalam melaksanakan peran serta fungsinya.</li>
                  <li class="">Menjalankan peran dan fungsi berlandaskan asas
                    demokrasi dan kekeluargaan.</li>
                  <li class="">Menjadikan DPM sebagai lembaga yang responsif dan
                    terlibat bersama dalam menjalankan peran dan fungsinya.</li>
                  <li class="">Membangun harmonisasi lembaga mahasiswa dan
                    mahasiswa guna mewujudkan Universitas Udayana lebih
                    baik.
                    </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 element-item image-visi-misi text-center mx-auto" data-aos="fade-left" data-aos-duration="2000">
              <img src="{{asset('img/image-visi-misi.jpg')}}" alt="visi-misi" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>

      <!--========================END VISI MISI AREA=====================-->

      <!--========================START FUNGSIO AREA=====================-->

      <!--fungsio header-->
      <section class="jumlah-fungsio-area bg-dpm" id="fungsionaris" data-aos="zoom-in" data-aos-duration="2000">
        <div class="container bg-dpm">
          <div class="row grid bg-dpm">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="title-jumlah">
                <div class="jumlah-fungsio-title align-items-center">
                  <h1 class="text-uppercase title-h1">JUMLAH FUNGSIONARIS</h1>
                  <div class="text-uppercase title-h5">PARLEMENT LANGKAH BERSAMA</div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="jumlah">
                <div class="card text-center">
                  <div class="card-header">
                    <div class="row align-items-center card-jumlah-fungsio-staff">
                      <div class="col colm-icon">
                        <i class="fas fa-address-card fa-3x"></i>
                      </div>
                      <div class="col card-title">
                        <h3 class="display-5 counter">109</h3>
                        <h6>Staff</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="jumlah">
                <div class="card text-center">
                  <div class="card-header">
                    <div class="row align-items-center card-jumlah-fungsio">
                      <div class="col colm-icon">
                        <i class="fas fa-address-card fa-3x"></i>
                      </div>
                      <div class="col card-title">
                        <h3 class="display-5 counter">64</h3>
                        <h6>Dewan</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="jumlah">
                <div class="card text-center">
                  <div class="card-header">
                    <div class="row align-items-center card-jumlah-fungsio">
                      <div class="col colm-icon">
                        <i class="fas fa-address-card fa-3x"></i>
                      </div>
                      <div class="col card-title">
                        <h3 class="display-5 counter">45</h3>
                        <h6>Divisi</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--fungsio content-->
        <div class="container fungsio-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center fungsio-title">
                <h1 class="text-uppercase title-text">FUNGSIONARIS</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-10 fungsio-tabs mx-auto text-center">
                <ul class="nav nav-tabs nav-justified text-center" id="myTab">
                  <li class="nav-item">
                    <a href="#pimpinan" class="nav-link active">PIMPINAN</a>
                  </li>
                  <li class="nav-item">
                    <a href="#inti" class="nav-link" data-bs-toggle="tab">INTI</a>
                  </li>
                  <li class="nav-item">
                    <a href="#komisi-I" class="nav-link" data-bs-toggle="tab">KOMISI I</a>
                  </li>
                  <li class="nav-item">
                    <a href="#komisi-II" class="nav-link" data-bs-toggle="tab">KOMISI II</a>
                  </li>
                  <li class="nav-item">
                    <a href="#komisi-III" class="nav-link" data-bs-toggle="tab">KOMISI III</a>
                  </li>
                  <li class="nav-item">
                    <a href="#komisi-IV" class="nav-link" data-bs-toggle="tab">KOMISI IV</a>
                  </li>
                  <li class="nav-item">
                    <a href="#komisi-V" class="nav-link" data-bs-toggle="tab">KOMISI V</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="pimpinan">
                <div class="row justify-content-md-center d-flex align-items-center">
                  <div class="col-lg-3 col-md-6 col-sm-12 fungsio-col">
                    <div class="card-funsionaris p-0">
                      <div class="card-image"> <img src="{{asset('img/image-fungsionaris/Pimpinan/1-pimpinan.png')}}" height="700px" alt=""> </div>
                      <div class="card-content d-flex flex-column align-items-center">
                          <h4 class="pt-2">Ngurah Sentana</h4>
                          <h5>KETUA DPM PM</h5>
                          <ul class="social-icons d-flex justify-content-center">
                              <li style="--i:2"> <a href="#"> <span class="fab fa-whatsapp"></span> </a> </li>
                              <li style="--i:2"> <a href="#"> <span class="fab fa-instagram"></span> </a> </li>
                          </ul>
                      </div>
                  </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 fungsio-col">
                    <div class="card-funsionaris p-0">
                      <div class="card-image"> <img src="{{asset('img/image-fungsionaris/Pimpinan/2-pimpinan.png')}}" height="700px" alt=""> </div>
                      <div class="card-content d-flex flex-column align-items-center">
                          <h4 class="pt-2">Sabda Pujangga</h4>
                          <h5>WAKIL KETUA DPM PM</h5>
                          <ul class="social-icons d-flex justify-content-center">
                              <li style="--i:2"> <a href="#"> <span class="fab fa-whatsapp"></span> </a> </li>
                              <li style="--i:2"> <a href="#"> <span class="fab fa-instagram"></span> </a> </li>
                          </ul>
                      </div>
                  </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 fungsio-col">
                    <div class="card-funsionaris p-0">
                      <div class="card-image"> <img src="{{asset('img/image-fungsionaris/Pimpinan/3-pimpinan.png')}}" height="700px" alt=""> </div>
                      <div class="card-content d-flex flex-column align-items-center">
                          <h4 class="pt-2">Fajar</h4>
                          <h5>WAKIL KETUA DPM PM</h5>
                          <ul class="social-icons d-flex justify-content-center">
                              <li style="--i:2"> <a href="#"> <span class="fab fa-whatsapp"></span> </a> </li>
                              <li style="--i:2"> <a href="#"> <span class="fab fa-instagram"></span> </a> </li>
                          </ul>
                      </div>
                  </div>
                  </div>
           
                </div>
              </div>

              <div class="tab-pane fade" id="inti">
                <div class="row justify-content-md-center d-flex align-items-center">
                  <div class="col-lg-3 col-md-6 col-sm-12 fungsio-col">
                    <div class="fungsio-card">
                      <div class="fungsio-image text-center py-4">
                        <img src="{{asset('img/fungsi icon/icon_03.png')}}" alt="fungsi-3" srcset="" width="150" height="150" />
                      </div>
                      <div class="card-body text-center">
                        <h5 class="card-title text-uppercase font-raleway">ANGGARAN</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed tempus nisl. Sed nec vestibulum ipsum.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 fungsio-col">
                    <div class="fungsio-card">
                      <div class="fungsio-image text-center py-4">
                        <img src="{{asset('img/fungsi icon/icon_03.png')}}" alt="fungsi-3" srcset="" width="150" height="150" />
                      </div>
                      <div class="card-body text-center">
                        <h5 class="card-title text-uppercase font-raleway">ANGGARAN</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed tempus nisl. Sed nec vestibulum ipsum.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 fungsio-col">
                    <div class="fungsio-card">
                      <div class="fungsio-image text-center py-4">
                        <img src="{{asset('img/fungsi icon/icon_03.png')}}" alt="fungsi-3" srcset="" width="150" height="150" />
                      </div>
                      <div class="card-body text-center">
                        <h5 class="card-title text-uppercase font-raleway">ANGGARAN</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed tempus nisl. Sed nec vestibulum ipsum.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 fungsio-col">
                    <div class="fungsio-card">
                      <div class="fungsio-image text-center py-4">
                        <img src="{{asset('img/fungsi icon/icon_03.png')}}" alt="fungsi-3" srcset="" width="150" height="150" />
                      </div>
                      <div class="card-body text-center">
                        <h5 class="card-title text-uppercase font-raleway">ANGGARAN</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed tempus nisl. Sed nec vestibulum ipsum.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--========================END FUNGSIO AREA=====================-->

      <!--========================START PERPUSTAKAAN  AREA=====================-->
      <section class="perpustakaan-area" id="perpustakaan">
        <div class="container">
          <div class="row justify-content-md-center d-flex align-items-center">
            <div class="col-lg-3">
              <h1>Perpustakaan</h1>
            </div>
          </div>
          <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/BANNER.jpg')}}" alt="New York" height="1000px" class="d-block" style="width:100%">
                <div class="carousel-caption">
                  <img src="{{asset('img/LOGO DPM 2.png')}}" alt="">
                  <h3>Los Angeles</h3>
                  <p>We had such a great time in LA!</p>
                  <a class="btn btn-primary" href="#" role="button">Link</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/BANNER.jpg')}}" alt="New York" height="1000px" class="d-block" style="width:100%">
                <div class="carousel-caption">
                  <img src="{{asset('img/LOGO DPM 2.png')}}" alt="">
                  <h3>Chicago</h3>
                  <p>Thank you, Chicago!</p>
                  <a class="btn btn-primary" href="#" role="button">Link</a>
                </div> 
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/BANNER.jpg')}}" alt="New York" height="1000px" class="d-block" style="width:100%">
                <div class="carousel-caption">
                  <img src="{{asset('img/LOGO DPM 2.png')}}"  alt="">
                  <h3>New York</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed tempus nisl. Sed nec vestibulum ipsum.</p>
                  <a class="btn btn-primary" href="#" role="button">Link</a>
                </div> 
                <a class="btn btn-primary" href="#" role="button">Link</a> 
              </div>
            </div>
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </section>

      <!--========================START INFORMASI AREA=====================-->
      <section id="recent-postingan" class="recent-postingan p-2 m-2">

        <div class="container aos-init aos-animate" data-aos="fade-up">
          
            <header class="section-header">
                <h2>Postingan</h2>
                <p class="text-dark">Terbaru</p>
            </header>

            <div class="row">
                    <div class="col-lg-4  mb-4">
                        <div class="post-box">
                              <div class="post-img"><img src="{{asset('img/image-postingan/postingan 1.png')}}" class="img-fluid" alt=""></div>
                              <span class="post-date"><i class="bi bi-clock"></i>
                                  2022-05-12</span>
                              <h3 class="post-title">[SURAT KEPUTUSAN KETUA DPM PM UNIVERSITAS UDAYANA..</h3>
                              <a href="https://www.instagram.com/p/CdakEDmPt2f/" class="readmore stretched-link mt-auto text-dark"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                          </div>
                      </div>
                    <div class="col-lg-4  mb-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{asset('img/image-postingan/postingan 2.png')}}" class="img-fluid" alt=""></div>
                            <span class="post-date"><i class="bi bi-clock"></i>
                                2022-05-12</span>
                            <h3 class="post-title">[TELAH TERLAKSANA PENGAWASAN KEGIATAN GRAND CLOSING GELAPATA VII 2022..</h3>
                            <a href="https://www.instagram.com/p/CdaLYDyv9W1/" class="readmore stretched-link mt-auto text-dark"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                      <div class="col-lg-4  mb-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{asset('img/image-postingan/postingan 3.png')}}" class="img-fluid" alt=""></div>
                            <span class="post-date"><i class="bi bi-clock"></i>
                                2022-05-12</span>
                            <h3 class="post-title">[TELAH TERLAKSANA PENGAWASAN KEGIATAN PEMBUKAAN DESA DAMPINGAN BEM PM 2022..</h3>
                            <a href="https://www.instagram.com/p/CdaDJw4Pjaf/" class="readmore stretched-link mt-auto text-dark"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
            </div>
            <div class="btn-readmore text-center m-3">
                <a href="https://www.instagram.com/dpm_udayana/" class="btn-get-started btn btn-primary">Selengkapnya</a>
            </div>

        </div>

    </section>
       <!--========================END INFORMASI AREA=====================-->
      

  
      
      <!--========================START KOTAK ASPIRASI AREA=====================-->
      <section class="kotak-aspirasi-area">
        <div class="container">
          <div class="row">
            <h1 class="text-uppercase title-h1">KOTAK ASPIRASI DPM UNUD</h1>
            <h2 class="text-capitalize title-h2">AYO SUARAKAN ASPIRASIMU !</h2>
          </div>
          <div class="row">
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col"><img class="poster-aspirasi" src="{{asset('img/POSTER ASPIRASI.jpg')}}" alt="poster-aspirasi" /></div>
                  <div class="col">
                    <form action="" class="w-100" id="formData">
                      <table style="width: 30rem">
                        <tr>
                          <td>
                            <div class="mb-3">
                              <label for="nama" class="form-label">Nama</label>
                              <input type="text" class="form-control" id="nama" name="name" />
                            </div>
                            <div class="mb-3">
                              <label for="fakultas" class="form-label">Fakultas</label>
                              <input type="text" class="form-control" id="fakultas" name="faculity" />
                            </div>
                          </td>
                          <td>
                            <div class="mb-3">
                              <label for="angkatan" class="form-label">Angkatan</label>
                              <input type="text" class="form-control" id="angkatan" name="generation" />
                            </div>
                            <div class="mb-3">
                              <label for="program_studi" class="form-label">Program studi</label>
                              <input type="text" class="form-control" id="program_studi" name="study_program" />
                            </div>
                          </td>
                        </tr>
                      </table>
                      <div class="mb-3">
                        <label for="masukan" class="form-label">Masukan</label>
                        <input type="text" class="form-control" id="masukan" style="height: 20rem" name="submission" />
                      </div>
                      <div class="g-recaptcha my-3" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                      <button type="submit" class="btn btn-primary" id="BtnSubmit">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--========================END KOTAK ASPIRASI AREA=====================-->


    </main>
    <!--========================END MAIN AREA=====================-->

     <!--========================START FOOTER AREA=====================-->
     
      <footer class="text-center text-lg-start bg-light text-muted" id="contact">

        <!-- Section: Links  -->
        <section class="footer">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3" style="margin-top: 2rem;">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                
                  <a class="navbar-brand" href="#"><img src="{{asset('img/LOGO DPM 2.png')}}" alt="logo DPM UNUD" width="40" height="40" class="" /><span class="title-text-DPM"> DPM PM UNUD</span></a>
                </h6>
                <p>
                  DPM
                  dapat senantiasa melangkah bersama untuk memajukan DPM dan
                  Universitas Udayana
                </p>
                <div>
                  <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter fa-2x"></i>
                  </a>
                  <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram fa-2x"></i>
                  </a>
                  <a href="" class="me-4 text-reset">
                    <i class="fab fa-youtube fa-2x"></i>
                  </a>
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-6">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  SEKRETARIAT KAMI
                </h6>
                <p>
                  Jalan Dr. Goris No. 10, Student Center Lt. 2, Denpasar, Bali, Indonesia
                </p>
              </div>
              <!-- Grid column -->

         

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Kontak
                </h6>
                  <i class="fas fa-envelope me-3"></i>
                  info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i> 085 XXX XXX XXX</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2021 Copyright <span style="color:black;">DPM PM UNUD</span>  All Rights Reserved
        </div>
        <!-- Copyright -->
      </footer>
      <!--========================START FOOTER AREA=====================-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- boostrap js library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--isotope js library-->
    <script src="{{asset('js/vendor/isotope/isotope.min.js')}}"></script>

    <!--aos js-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--custom js file-->
    <script src="{{asset('js/main.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
      AOS.init();

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $("#BtnSubmit").click(function(e){
          e.preventDefault();

          var form = $("#formData");
          var data = new FormData(form[0]);
          var url  = "{{route('submission.store')}}";
          data.set('_method', 'POST');

          $.ajax({
              type: 'POST',
              url: url,
              data: data,
              cache: false,
              contentType:false,
              processData: false,
              success: function(data){;
                  swal({
                      title: "Success!",
                      text: data.message,
                      icon: "success",
                      value: true
                  }).then(function(confirmed){
                      location.reload();
                  });
              },
              error: function(data){
                  var errors = data.responseJSON.errors;
                  var element = '<div class="error-message alert alert-danger m-2" role="alert">';
                  for(const error in errors){
                      element += '<li>' + errors[error] + '</li>';
                  }
                  element += '</div>';
                  $("#formData").prepend(element);
              }
          });
      });
    </script>
  </body>
</html>