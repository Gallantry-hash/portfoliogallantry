<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Portofolio Gallantry</title>
<!-- 
Moonlight Template 
http://www.templatemo.com/tm-512-moonlight
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{asset('depan')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('depan')}}/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{asset('depan')}}/css/fontAwesome.css">
        <link rel="stylesheet" href="{{asset('depan')}}/css/light-box.css">
        <link rel="stylesheet" href="{{asset('depan')}}/css/templatemo-main.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="{{asset('depan')}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    
    <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div>
    
  
    <nav>
      <div class="logo">
          <img src="{{asset('depan')}}/img/11111.jpeg" alt="" style="width: 100px; height: auto; border-radius: 8px;">
      </div>
      <ul style="display: flex; list-style: none; justify-content: space-around; padding: 0; margin: 0; border-radius: 90px;">
          <li><a href="#1"><i class="fa fa-home"></i> <em>Saya & Kontak</em></a></li>
          <li><a href="#2"><i class="fa fa-user"></i> <em>Tentang Saya</em></a></li>
          <li><a href="#3"><i class="fa fa-pencil"></i> <em>Pendidikan</em></a></li>
          <li><a href="#4"><i class="fa fa-briefcase"></i> <em>Pengalaman</em></a></li>
          <li><a href="#5"><i class="fa fa-image"></i> <em>Project & Penghargaan</em></a></li>
          
      </ul>
  </nav>
  
        
        <div class="slides">
            <div class="slide" id="1" style=" position: relative;">
                <div class="content first-content" style="border-radius: 10px;">
                    <div class="container-fluid">
                        <div class="col-md-3">
                            <div class="author-image"><img src="{{ asset('foto') . '/' . get_meta_value('_foto') }}" alt="..."></div>
                        </div>
                        <div class="col-md-9">
                            <h2>{!! set_about_nama($about->judul) !!}</h2>
                            <div class="subheading mb-5" style="font-size: 18px; color: white;">
                                {{ get_meta_value('_kota') }} · {{ get_meta_value('_provinsi') }} · {{ get_meta_value('_nohp') }} ·
                                <a href="{{ get_meta_value('_email') }}" style="color: #007bff; text-decoration: none;">{{ get_meta_value('_email') }}</a>
                            </div>
                            <div class="main-btn" style="margin-top: 20px;"><a href="#2">Baca Lebih</a></div>
                            <div class="fb-btn" style="margin-top: 10px;"><a href="https://www.instagram.com/gallntry/" target="_blank">Halaman IG Saya</a></div>
                            
                        </div>
                    </div>
                </div>
            </div>
          <div class="slide" id="2">
            <div class="content second-content" style="border-radius: 10px;">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>Tentang Saya Dan Hobby Saya</h2>
                            <p>{!! $about->isi !!}</p> <br>
                           <p> {{ $interest->isi }}</p>
                          <div class="main-btn"><a href="#3">Baca Lagi</a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                          <img src="{{asset('depan')}}/img/gallan.jpeg" alt="">
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="3">
            <div class="content first-content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Bagian pertama: Pendidikan -->
                        <div class="col-md-6">
                            <section class="resume-section" id="education">
                                <div class="resume-section-content">
                                    <h2 class="mb-5" style="font-size: 24px;">Pendidikan</h2> <!-- Membuat judul lebih besar -->
                                    @foreach ($education as $item)
                                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                            <div class="flex-grow-1">
                                                <h3 class="mb-0" style="font-size: 20px;">{{ $item->judul }}</h3> <!-- Membuat sub-judul lebih besar -->
                                                <div class="subheading mb-3" style="font-size: 18px;">{{ $item->info1 }}</div> <!-- Membuat informasi lebih besar -->
                                                <div style="font-size: 16px;">{{ $item->info2 }}</div> <!-- Membuat informasi lebih besar -->
                                                <p style="font-size: 16px;">{{ $item->info3 }}</p> <!-- Membuat informasi lebih besar -->
                                            </div>
                                            <div class="flex-shrink-0">
                                                <span class="text-primary" style="font-size: 16px;">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
        
                        <!-- Kolom untuk Foto pertama dan kedua dalam satu baris vertikal -->
                        <div class="col-md-6 d-flex flex-column align-items-stretch">
                            <!-- Foto pertama di atas -->
                            <div class="right-image mb-4">
                                <img src="{{ asset('depan') }}/img/poltesa.jpeg" alt="first service" style="width: 100%; border-radius: 8px;">
                            </div>
                            <!-- Foto kedua di bawah -->
                            <div class="second-image"  style="margin-top: 20px;">
                                <img src="{{ asset('depan') }}/img/smk2.jpeg" alt="second image" style="width: 100%; border-radius: 8px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="slide" id="4">
          <div class="content first-content">
              <div class="container-fluid">
                  <div class="row">
                      <!-- Bagian pertama: Pengalaman -->
                      <div class="col-md-6">
                          <section class="resume-section" id="experience">
                              <div class="resume-section-content">
                                  <h2 class="mb-5" style="color: white;">Pengalaman</h2> <!-- Membuat judul berwarna putih -->
                                  @foreach ($experience as $item)
                                      <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                          <div class="flex-grow-1">
                                              <h3 class="mb-0" style="color: white;">{{ $item->judul }}</h3> <!-- Membuat sub-judul berwarna putih -->
                                              <div class="subheading mb-3" style="color: blue;">{{ $item->info1 }}</div> <!-- Membuat subheading berwarna biru -->
                                              <div style="color: white;">{!! $item->isi !!}</div> <!-- Membuat isi berwarna putih -->
                                          </div>
                                          <div class="flex-shrink-0">
                                              <span class="text-primary" style="color: blue;">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span> <!-- Membuat tanggal berwarna biru -->
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          </section>
                      </div>
      
                      <!-- Kolom untuk Foto pertama dan kedua dalam satu baris vertikal -->
                      <div class="col-md-6 d-flex flex-column align-items-stretch">
                          <!-- Foto pertama di atas -->
                          <div class="right-image mb-4" style="margin-top: 50px;">
                              <img src="{{ asset('depan') }}/img/serti.jpeg" alt="first service" style="width: 100%; border-radius: 8px;">
                          </div>
                          <!-- Foto kedua di bawah -->
                          <div class="second-image" style="margin-top: 500px;">
                              <img src="{{ asset('depan') }}/img/ojek.jpeg" alt="second image" style="width: 100%; border-radius: 8px;">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      
        
      <div class="slide" id="5">
        <div class="content fourth-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('depan')}}/img/fp.jpeg" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Flappy Superman</h2>
                                            <p>Flappy Superman adalah versi adaptasi dari game populer Flappy Bird dengan karakter dan tema yang lebih heroik.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="{{asset('depan')}}/img/fp.jpeg" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('depan')}}/img/11.png" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>E-Commerce My</h2>
                                            <p>Proyek ini menggunakan teknologi web terbaru untuk memberikan pengalaman berbelanja yang cepat dan aman.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="{{asset('depan')}}/img/11.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('depan')}}/img/bnsp.jpeg" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Sertifikat BNSP</h2>
                                            <p>Saya berhasil menyelesaikan pelatihan dan mendapatkan sertifikat BNSP di bidang profesi Junior Programmer. Sertifikat ini menjadi bukti keahlian saya dalam pemrograman dan telah memberikan saya pemahaman yang lebih mendalam tentang standar industri.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="{{asset('depan')}}/img/bnsp.jpeg" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('depan')}}/img/12.jpeg" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Juara 1 Rekayasa Perangkat Lunak</h2>
                                            <p>Saya dengan bangga menerima Sertifikat Juara 1 dalam kelas Rekayasa Perangkat Lunak di SMKN 3 Banjarbaru untuk angkatan 2022/2023.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="{{asset('depan')}}/img/12.jpeg" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('depan')}}/img/13.png" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Aplikasi Perpustakaan</h2>
                                            <p>Saya Membuat aplikasi pendataan untuk perpustkaan kota Banjarbaru</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="{{asset('depan')}}/img/13.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{asset('depan')}}/img/loo.jpg" data-lightbox="image-1"><div class="hover-effect">
                                    <div class="hover-content">
                                        <h2>Sertifikat Toeic</h2>
                                        <p>Saya mendapatkan sertifikat ini dengan nilai baik, karena saya baik dan mahir dalam bahasa inggris </p>
                                    </div>
                                </div></a>
                                <div class="image">
                                    <img src="{{asset('depan')}}/img/loo.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div> <!-- End of row -->
            </div> <!-- End of container-fluid -->
        </div> <!-- End of content -->
    </div> <!-- End of slide id="5" -->
    
    

</div>
    

    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('depan')}}/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="{{asset('depan')}}/js/vendor/bootstrap.min.js"></script>
    
    <script src="{{asset('depan')}}/js/datepicker.js"></script>
    <script src="{{asset('depan')}}/js/plugins.js"></script>
    <script src="{{asset('depan')}}/js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>