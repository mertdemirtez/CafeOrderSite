<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Meşhur Niğde Kahvecisi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.php" class="navbar-brand px-lg-4 m-0">
                <img width=15% src="img/logo.png">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link active">Anasayfa</a>
                    <a href="about.html" class="nav-item nav-link">Hakkımızda</a>
                    <a href="menu.html" class="nav-item nav-link">Ürünlerimiz</a>
                    <a href="service.php" class="nav-item nav-link">Sipariş</a>
                       <li class="nav-item dropdown header-profile active">
                    <a class="nav-link" role="button" data-toggle="dropdown">
                        <div class="header-info">
                            <span>HOŞGELDİNİZ</span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="index.php" class="dropdown-item ai-icon">
                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span class="ml-2">Profil </span>
                        </a>
                        <a href="index.php" class="dropdown-item ai-icon">
                            <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <span class="ml-2">Bildirimler </span>
                        </a>
                        <a href="cikisyap.php" class="dropdown-item ai-icon">
                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                            <span class="ml-2">Çıkış </span>
                        </a>
                    </div>
                </li>

               
                    
                    
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Unutulamayan Lezzet</h2>
                        <h1 style="font-size: 6rem" class="display-1 text-white m-0">Meşhur Niğde Kahvecisi</h1>
                        <h2 class="text-white m-0">Since 2023</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Unutulamayan Lezzet</h2>
                        <h1 style="font-size: 6rem" class="display-1 text-white m-0">Meşhur Niğde Kahvecisi</h1>
                        <h2 class="text-white m-0">Since 2023</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Hakkımızda</h4>
                <h1 class="display-4">Since 2023</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Misyonumuz</h1>
                    <h5 class="mb-3">Kurulduğumuz günden buyana;</h5>
                    <p>Yenilikçi, akılcı, ilkeli ve sorumlu yaklaşımımızla kahve ve kahve çeşitleri üretimi ve satışında dünya lideri olmak.</p>
                    <br><br><br><br><br>
                    <h5 class="mb-3">Meşhur Niğde Kahvemiz;</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Kolay nefes almayı sağlar.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>%50 siroz riskini azaltır.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>3 fincan kahve içmek astım riskini azaltır.</h5>
                    
                    
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Vizyonumuz</h1>
                    <p>Başta Türk Kahvesi üretmenin ve kahve keyfini hissetmenin 7’den 70’e herkesin hakkı olduğuna inanıyoruz. Meşhur Niğde Kahvecisi ailesi olarak müşterilerimizin yudumladıkları kahve sonrası yüzlerdeki mutluluğuna katkı sağlamak için varız. Bizler, kahve ve kahve çeşitleri üretimi, satışı ile stressiz ve huzurlu bir yaşamı paylaşmak için var gücümüzle çalışıyoruz.</p>
                    <br>
                    <h5 class="mb-3">Meşhur Niğde Kahvemiz;</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Kolesterolü düşürür.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>%40 ağrı kesici etkisi yaratır.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Diyabet ve parkinson rahatsızlıklarını önlemeye yardımcı olur.</h5>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3"></h1>
            <h1 class="text-white mb-3"></h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3"></h4>
            <form class="form-inline justify-content-center mb-4">
              
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Geçmiş ile geleceği birleştiren lezzet</h4>
                <h1 class="display-4">Neden Bizi Tercih Etmelisiniz ?</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Hızlı Kargo </h4>
                            <p class="m-0">Dilediğiniz siparişinizi en kısa sürede sizlere ulaştırıyoruz.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Ekonomik Fiyat</h4>
                            <p class="m-0">Bu lezzeti herkesin tatması için,kâr amacı gütmeden cep dostu fiyatlarımızla hizmetinizdeyiz. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Eşsiz Lezzet </h4>
                            <p class="m-0">Müşteri memnuniyetinin yüksek olduğu,tadı damaklarda kalan ve unutulamayan lezzetlerle hizmetinizdeyiz.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Rezervasyon Sistemi</h4>
                            <p class="m-0">Bu lezzete sıra beklemeden ulaşmanız için sizler için rezervasyon sistemi oluşturduk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3"></h1>
            <h1 class="text-white mb-3"></h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3"></h4>
            <form class="form-inline justify-content-center mb-4">
              
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">MENÜ</h4>
                <h1 class="display-4">Yerel&Ulusal Kahve Çeşitlerimiz</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Yerel Kahveler</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                            <h5 class="menu-price">5₺</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Menengiç Kahvesi</h4>
                            <p class="m-0">Menengiç ağacından üretilen  lezzetli kahve.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-2.jpg" alt="">
                            <h5 class="menu-price">7₺</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Kül Kahvesi</h4>
                            <p class="m-0">Klasik usülde Türk kahvesi hazırlarken kullanılan bakır cezvenin, mangalda veya köz üzerinde ısıtılması ile elde edilen eşsiz kahve.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-3.jpg" alt="">
                            <h5 class="menu-price">9₺</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Cilveli Kahve</h4>
                            <p class="m-0">Fincana dökülen bol köpüklü türk kahvesinin üzerine çifte kavrulmuş, öğütülmüş badem ve iki çeşit baharattan oluşan karışım dökülüyor.</p>
                        </div>
                        
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-4.jpg" alt="">
                            <h5 class="menu-price">9₺</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Süvari Kahvesi</h4>
                            <p class="m-0">İnce belli çay bardağında ikram edilen ve normal kahveye göre daha az köpüğü bulunan bir kahve türüdür.</p>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Ulusal Kahveler</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-5.jpg" alt="">
                            <h5 class="menu-price">5₺</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Americano</h4>
                            <p class="m-0">Sıcak su ekleyerek espresso kaynatmak yöntemi ile hazırlanan kahve çeşitidir.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-6.jpg" alt="">
                            <h5 class="menu-price">7₺</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Mocha</h4>
                            <p class="m-0">Mocha'da çikolata şurubu, tatlı kakao tozu, dövülmüş kakao kullanılarak yapılan kahve çeşitidir.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-7.jpg" alt="">
                            <h5 class="menu-price">9₺</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Latte</h4>
                            <p class="m-0">İtalyanca'da Süt anlamına gelmektedir. Asıl adı Caffe Latte Machiatodur. Espresso, buharla ısıtılmış kıvamlı süt dolu bir kupaya eklenir.</p>
                        </div>

                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-8.jpg" alt="">
                            <h5 class="menu-price">9₺</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Macchiato</h4>
                            <p class="m-0">Caffè macchiato, diğer adıyla espresso macchiato, az miktarda genellikle köpürtülen süt içeren espresso kahve türüdür. İtalyanca'da macchiato "lekeli, "benek benek" anlamına gelir.</p>
                        </div>
                        
                </div>
                
            </div>
            
                
        </div>
     
        </div>
    </div>
</div>
    </div>
    <!-- Menu End -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3"></h1>
            <h1 class="text-white mb-3"></h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3"></h4>
            <form class="form-inline justify-content-center mb-4">
              
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Reservation Start -->
    
    <!-- Reservation End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sizden Gelenler</h4>
                <h1 class="display-4">Görüşleriniz</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                        <div class="ml-3">
                            <h4>Sadi Payaslı</h4>
                            <i>Coğrafya Öğretmeni</i>
                        </div>
                    </div>
                    <p class="m-0">Hayatımda içtiğim en güzel kahve! Menengiç kahvesi artık benim için vazgeçilmez bir lezzet.Teşekkürler Meşhur Niğde Kahvecisi :)</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                        <div class="ml-3">
                            <h4>Ramiz Karaeski</h4>
                            <i>İş Adamı</i>
                        </div>
                    </div>
                    <p class="m-0">Böyle yöresel tatları yaşattıkları için yeğenlerime teşekkür ederim :)</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                        <div class="ml-3">
                            <h4>İrfan Can Kahveci</h4>
                            <i>Profesyonel Futbolcu</i>
                        </div>
                    </div>
                    <p class="m-0">Gol attığım maçlardan sonra yaptığım kahve içme sevinci Meşhur Niğde Kahvecisine bir göndermedir.Soyadımdan da anlaşılabileceği gibi kahvenin en iyisini ben bilirim o da Meşhur Niğde Kahvecisidir!</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="img/testimonial-4.jpg" alt="">
                        <div class="ml-3">
                            <h4>Alpaslan Özmol</h4>
                            <i>Oyuncu</i>
                        </div>
                    </div>
                    <p class="m-0">Yıllardan beri "Çaylaaar!" repliği ile tanındım.Bu lezzeti tattıktan sonra artık "Kahveleer!" demeye başladım.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">İletişim Adreslerimiz</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Niğde'de bir yerlerde </p>
                <p><i class="fa fa-phone-alt mr-2"></i>+905151515151</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>Biz size ulaşırız :)</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Sosyal Medyadan Bizleri Takip Edin!</h4>
                <p></p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Açılış Saatleri</h4>
                <div>
                    <h6 class="text-white text-uppercase">Pazartesi-Cuma</h6>
                    <p>8.00 - 20.00</p>
                    <h6 class="text-white text-uppercase">Cumartesi-pazar</h6>
                    <p>8.00 - 24.00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Web Sitemizi İnceleyen Takipçilerimize Özel </h4>
                <div>
                    <h6 class="text-white text-uppercase">Çok Yakında Türkiye'nin Heryerinde</h6>
                  
                    <h6 class="text-white text-uppercase">Sizinle Olacağız :)</h6>
                    
                    
                </div>
            </div>
            
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" >MERT DEMİR</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>




