<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>Learning Redefined, the Zen Way</title>
  <meta name="title" content="ZenSu - Learning Redefined, the Zen Way">
  <meta name="description" content="This is an educational website that empowers your learning journey">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" as="image" href="./assets/images/zenlogo.png">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/bgbaru.png">
  <link rel="preload" as="image" href="./assets/images/hero.png">
  <link rel="preload" as="image" href="./assets/images/hero2.png">
  <link rel="preload" as="image" href="./assets/images/heroshape1.png">
  <link rel="preload" as="image" href="./assets/images/heroshape2.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/zenbanner.png" width="162" height="50" alt="Zen logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="./assets/images/zenbanner.png" width="162" height="50" alt="Zen logo">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

       <ul class="navbar-list">
  <li class="navbar-item">
    <a href="#home" class="navbar-link" data-nav-link style="color: black;" onmouseover="this.style.color='#C4A0ED'" onmouseout="this.style.color='black'">Home</a>
  </li>

  <li class="navbar-item">
    <a href="#about" class="navbar-link" data-nav-link style="color: black;" onmouseover="this.style.color='#C4A0ED'" onmouseout="this.style.color='black'">About</a>
  </li>

  <li class="navbar-item">
    <a href="#courses" class="navbar-link" data-nav-link style="color: black;" onmouseover="this.style.color='#C4A0ED'" onmouseout="this.style.color='black'">Courses</a>
  </li>

  <li class="navbar-item">
    <a href="#blog" class="navbar-link" data-nav-link style="color: black;" onmouseover="this.style.color='#C4A0ED'" onmouseout="this.style.color='black'">Blog</a>
  </li>


      </nav>

      <div class="header-actions">
	
        
 <a href="/login" class="btn has-before" style="background-color: #C4A0ED; color: black;">
    <span class="span">Login</span>
    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
  </a>
        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/herobg.jpg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
              Explore the Limitless World of Learning through <span class="span"> ZenSu</span> 
            </h1>

            <p class="hero-text">
            Nikmati kursus online dengan materi terkini dari para ahli. 
			Tingkatkan pengetahuan, capai tujuan, dan jadilah yang terbaik. Bergabunglah sekarang!
            </p>

  <a href="Course.index" class="btn has-before" style="background-color: #C4A0ED;">
  <span class="span" style="color: black;">Temukan Kursus</span>
  <ion-icon name="arrow-forward-outline" aria-hidden="true" style="color: black;"></ion-icon>
</a>

          </div>

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="./assets/images/hero.png" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="./assets/images/hero2.png" width="240" height="370" alt="hero banner" class="img-cover">
            </div>

            <img src="./assets/images/heroshape6.png" width="380" height="190" alt="" class="shape hero-shape-1">

            <img src="./assets/images/heroshape2.png" width="622" height="551" alt="" class="shape hero-shape-2">

          </figure>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <p class="section-subtitle">Categories</p>

          <h2 class="h2 section-title">
          Online <span class="span" style="color: #C4A0ED;">Classes</span> For Remote Learning
          </h2>

          <p class="section-text">
            Membuka Pengetahuan Tanpa Batas
          </p>

          <h2 class="h2 section-title">
            COMING SOON 
</h2>
          <ul class="grid-list">

            <li>
              <div class="category-card" style="background-color: rgb(247, 240, 255);">


                <div class="card-icon">
                  <img src="./assets/images/cat1.png" width="95" height="95" loading="lazy"
                    alt="Technology and Web Development" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Teknologi dan Pengembangan Web</a>
                </h3>

                <p class="card-text">
                Dapatkan keterampilan di bidang IT dan pengembangan web untuk solusi inovatif!
                </p>

                <span class="card-badge" style="background-color: #D2B9EF; color: inherit;">4 Courses</span>
              </div>
            </li>

            <li>
              <div class="category-card" style="background-color: rgb(247, 240, 255);">
                <div class="card-icon">
                  <img src="./assets/images/cat2.png" width="115" height="115" loading="lazy"
                    alt="Graphic Design and Multimedia" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Desain Grafis dan Multimedia</a>
                </h3>

                <p class="card-text">
                Dapatkan keterampilan dalam komunikasi visual dan buat desain yang kreatif!
                </p>

             <span class="card-badge" style="background-color: #D2B9EF; color: inherit;">6 Courses</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="background-color: rgb(247, 240, 255);">

                <div class="card-icon">
                  <img src="./assets/images/cat3.png" width="115" height="115" loading="lazy"
                    alt="Business and Entrepreneurship" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Bisnis dan Kewirausahaan</a>
                </h3>

                <p class="card-text">
Dapatkan keterampilan penting untuk kesuksesan di bisnis dan kewirausahaan!
                </p>

             <span class="card-badge" style="background-color: #D2B9EF; color: inherit;">6 Courses</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="background-color: rgb(247, 240, 255);">

                <div class="card-icon">
                  <img src="./assets/images/cat4.png" width="115" height="115" loading="lazy"
                    alt="Hybrid Distance Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Bahasa Asing dan Komunikasi</a>
                </h3>

                <p class="card-text">
                Dapatkan keterampilan komunikasi dan kemampuan bahasa yang penting!
                </p>

             <span class="card-badge" style="background-color: #D2B9EF; color: inherit;">4 Courses</span>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
              <img src="./assets/images/aboutbanner.jpg" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>

            <img src="./assets/images/aboutshape1.png" width="360" height="420" loading="lazy" alt=""
              class="shape about-shape-1">

            <img src="./assets/images/aboutshape2.png" width="371" height="220" loading="lazy" alt=""
              class="shape about-shape-2">

            <img src="./assets/images/aboutshape3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">
              Over 10 Years in <span class="span">Distant learning</span> for Skill Development
            </h2>


            <p class="section-text">
            ZenSu adalah platform kursus online dengan pengalaman lebih dari 
			 10 tahun dalam membantu pengguna mencapai kesuksesan melalui pembelajaran online. Bergabunglah dengan 
			 komunitas kami dan mulailah perjalanan belajar Anda hari ini! 
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Expert Trainers</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Online Remote Learning</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Lifetime Access</span>
              </li>

            </ul>

            <img src="./assets/images/aboutshape4.png" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">

          </div>

        </div>
      </section>





      <!-- 
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course" style="background-color: #F9ECFF;">
        <div class="container">

          <p class="section-subtitle">Popular Courses</p>

          <h2 class="h2 section-title">Pick A Course To Get Started</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-1.jpg" width="370" height="220" loading="lazy"
                    alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Minggu</span>
                </div>

                <div class="card-content">

                  <span class="badge">Beginner</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Build Responsive Real- World Websites with HTML and CSS</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(5.0/7 Rating)</p>

                  </div>

                  <data class="price" value="29">IDR 100.000</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">8 Modul</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">20 Murid</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-2.jpg" width="370" height="220" loading="lazy"
                    alt="Java Programming Masterclass for Software Developers" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">8 Minggu</span>
                </div>

                <div class="card-content">

                  <span class="badge">Advanced</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Java Programming Masterclass for Software Developers</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.5 /9 Rating)</p>

                  </div>

                  <data class="price" value="49">IDR 250.000</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">15 Modul</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">35 Murid</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-3.jpg" width="370" height="220" loading="lazy"
                    alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Minggu</span>
                </div>

                <div class="card-content">

                  <span class="badge">Intermediate</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">The Complete Camtasia Course for Content Creators</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.9 /7 Rating)</p>

                  </div>

                  <data class="price" value="35">IDR 350.000</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">13 Modul</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">18 Murid</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

<a href="{{ route('login') }}" class="btn has-before" style="background-color: #C4A0ED; color: black;">
  <span class="span">Temukan Pembelajaran Lainnya</span>
  <ion-icon name="arrow-forward-outline" aria-hidden="true" style="color: black;"></ion-icon>
</a>

        </div>
      </section>





      <!-- 
        - #VIDEO
      -->
<section class="video has-bg-image" aria-label="video" style="background-image: url('./assets/images/videobg.png')">
  <div class="container">
    <div class="video-card">
      <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
        <img src="./assets/images/thumbnailep.png" width="970" height="550" loading="lazy" alt="video banner" class="img-cover">
        <a href="https://youtu.be/y5YslrjQEpE" class="play-btn" aria-label="play video" target="_blank">
          <ion-icon name="play" aria-hidden="true"></ion-icon>
        </a>
      </div>
      <img src="./assets/images/videoshape1.png" width="1089" height="605" loading="lazy" alt="" class="shape video-shape-1">
      <img src="./assets/images/videoshape2.png" width="158" height="174" loading="lazy" alt="" class="shape video-shape-2">
    </div>
  </div>
</section>






      <!-- 
        - #STATE
      -->

      <section class="section stats" aria-label="stats">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="stats-card" style="--color: 170, 75%, 41%">
                <h3 class="card-title">29.3k</h3>

                <p class="card-text">Student Enrolled</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 351, 83%, 61%">
                <h3 class="card-title">32.4K</h3>

                <p class="card-text">Class Completed</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 260, 100%, 67%">
                <h3 class="card-title">100%</h3>

                <p class="card-text">Satisfaction Rate</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 42, 94%, 55%">
                <h3 class="card-title">354+</h3>

                <p class="card-text">Top Instructors</p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog has-bg-image" id="blog" aria-label="blog"
        style="background-image: url('./assets/images/blogbg.jpg')">
        <div class="container">

          <p class="section-subtitle">Latest Articles</p>

          <h2 class="h2 section-title">Get News With ZenSu</h2>

          <ul class="grid-list">

<li>
  <div class="blog-card">

    <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
      <img src="./assets/images/blog1.jpg" width="370" height="370" loading="lazy"
        alt="Become A Better Blogger: Content Planning" class="img-cover">
    </figure>

    <div class="card-content">

      <a href="https://www.djkn.kemenkeu.go.id/kpknl-pamekasan/baca-artikel/14449/Desain-Grafis-untuk-Memaksimalkan-Konten-di-Media-Sosial.html" class="card-btn" aria-label="read more">
        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
      </a>

      <a href="#" class="card-subtitle">Article</a>

      <h3 class="h3">
        <a href="https://www.djkn.kemenkeu.go.id/kpknl-pamekasan/baca-artikel/14449/Desain-Grafis-untuk-Memaksimalkan-Konten-di-Media-Sosial.html" class="card-title">Desain Grafis untuk Konten Media Sosial</a>
      </h3>

      <ul class="card-meta-list">

        <li class="card-meta-item">
          <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
          <span class="span">Jul 30, 2023</span>
        </li>

        <li class="card-meta-item">
          <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>
          <span class="span">Com 300</span>
        </li>

      </ul>

      <p class="card-text">
        Pentingnya Desain Grafis dalam Meningkatkan Minat dan Pemahaman Konten di Media Sosial
      </p>

    </div>

  </div>
</li>


<li>
  <div class="blog-card">

    <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
      <img src="./assets/images/blog2.jpg" width="370" height="370" loading="lazy"
        alt="Become A Better Blogger: Content Planning" class="img-cover">
    </figure>

    <div class="card-content">

      <a href="https://sertifikasiku.com/tips-sukses-belajar-bahasa-asing-dengan-mudah/" class="card-btn" aria-label="read more">
        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
      </a>

      <a href="#" class="card-subtitle">Tips & Tricks</a>

      <h3 class="h3">
        <a href="https://sertifikasiku.com/tips-sukses-belajar-bahasa-asing-dengan-mudah/" class="card-title">Tips Belajar Bahasa Asing, Efektif Juga Menyenangkan!</a>
      </h3>

      <ul class="card-meta-list">

        <li class="card-meta-item">
          <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
          <span class="span">Jul 22, 2023</span>
        </li>

        <li class="card-meta-item">
          <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>
          <span class="span">Com 100</span>
        </li>

      </ul>

      <p class="card-text">
        Tips belajar bahasa asing secara efektif dan menyenangkan untuk kuasai bahasa asing lebih baik.
      </p>

    </div>

  </div>
</li>


           <li>
  <div class="blog-card">

    <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
      <img src="./assets/images/blog3.jpg" width="370" height="370" loading="lazy"
        alt="Become A Better Blogger: Content Planning" class="img-cover">
    </figure>

    <div class="card-content">

      <a href="https://www.dicoding.com/blog/kenal-pemrograman-web/" class="card-btn" aria-label="read more">
        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
      </a>

      <a href="#" class="card-subtitle">Article</a>

      <h3 class="h3">
        <a href="https://www.dicoding.com/blog/kenal-pemrograman-web/" class="card-title">Berkenalan Dengan Pemrograman Web</a>
      </h3>

      <ul class="card-meta-list">

        <li class="card-meta-item">
          <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
          <span class="span">Jul 11, 2023</span>
        </li>

        <li class="card-meta-item">
          <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>
          <span class="span">Com 6</span>
        </li>

      </ul>

      <p class="card-text">
         Peran penting bahasa pemrograman dalam menciptakan halaman web interaktif dan menarik.
      </p>

    </div>

  </div>
</li>


          </ul>

          <img src="./assets/images/blogshape.png" width="186" height="186" loading="lazy" alt=""
            class="shape blog-shape">

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/zenbanner.png" width="162" height="50" alt="Zen logo">
          </a>

          <p class="footer-brand-text">
            Your Path to Zen Learning
          </p>

          <div class="wrapper">
            <span class="span" data-footer-link style="color: white;">Add:</span>

            <address class="address" data-footer-link style="color: white;">Jl. Airlangga No. 4-6, Surabaya, East Java 60115</address>
          </div>

          <div class="wrapper">
            <span class="span" data-footer-link style="color: white;">Call:</span>

            <a href="tel:+011234567890" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">+62 812 345 678</a>
          </div>

          <div class="wrapper">
            <span class="span" data-footer-link style="color: white;">Email:</span>

            <a href="mailto:info@zensu.com" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">info@zensu.com</a>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title" >Online Platform</p>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">About</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">Courses</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">Instructor</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">Events</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">Instructor Profile</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">Purchase Guide</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">Gallery</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">News & Articles</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">FAQ's</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">Sign In/Registration</a>
          </li>

          <li>
            <a href="#" class="footer-link" data-footer-link style="color: white;" onmouseover="this.style.color='#C4A0ED'" 
			onmouseout="this.style.color='white'">Coming Soon</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Contacts</p>

          <p class="footer-list-text" data-footer-link style="color: white;">
            Enter your email address to register to our newsletter subscription
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Your email" required class="input-field">

 <button type="submit" class="btn has-before" style="background-color: #C4A0ED;">
  <span class="span" style="color: black;">Subscribe</span>
  <ion-icon name="arrow-forward-outline" aria-hidden="true" style="color: black;"></ion-icon>
</button>

          </form>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

<p class="copyright">
  Copyright 2023 All Rights Reserved by <a href="#" class="copyright-link"
    style="color: #C4A0ED;">ZenSu Projek PPL</a>
</p>


      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

<a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn style="background-color: #C4A0ED;">
  <ion-icon name="chevron-up" aria-hidden="true" style="color: black;"></ion-icon>
</a>






  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>