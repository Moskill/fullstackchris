<?php get_header(); ?>

<body>
  <div class="container-fluid">
    <!-- Navbar-row -->
    <div class="row justify-content-center">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container-fluid">
        <button 
          class="navbar-toggler" 
          type="button" 
          data-toggle="collapse" 
          data-target="#ftco-nav" 
          aria-controls="ftco-nav" 
          aria-expanded="false" 
          aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <img src="<?php echo get_theme_file_uri('images/logo-400px.png'); ?>" alt="Full Stack Chris Company Logo" height="auto" width="200">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
            <!-- <li class="nav-item dropdown">
            <a 
              class="nav-link dropdown-toggle" 
              href="#" 
              id="dropdown04" 
              data-toggle="dropdown" 
              aria-haspopup="true" 
              aria-expanded="false">Page
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="#">Page 1</a>
              <a class="dropdown-item" href="#">Page 2</a>
              <a class="dropdown-item" href="#">Page 3</a>
              <a class="dropdown-item" href="#">Page 4</a>
            </div>
            </li> -->
            <li class="nav-item"><a href="#" class="nav-link">About me</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Stack</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Portfolio</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
          </ul>
          <i class="fa fa-phone"></i><p class="header-phone">  +49 (0) 152 - 221 694 70</p>
        </div>
      </div>
    </nav>
    </div>
    <!-- Heare comes the slider -->
    <div class="row align-items-end">
        <div class="col-2 align-self-center">
          <div class="d-flex flex-column align-items-center align-center fixed-socials" id="social">
            <i class="fab fa-facebook social-bar"></i>
            <i class="fab fa-twitter social-bar"></i>
            <i class="fab fa-linkedin-in social-bar"></i>
          </div>
        </div>
        <div class="col-4">
          <div class="left-header align-text-bottom">
            <h1 class="text-center font-light">Hi, my name is Chris</h1>
            <h1 class="text-center font-lighter header-text2">I'am a full stack web and app developer and designer from germany.</h1>
            <p class="header-text">I love to design pretty UI's by using modern technologies. I also design logos and print media for your business. Get in touch now!</p>
            <div class="row justify-content-center">
              <div class="col-6">
                <div class="center">
                  <button class="btn2">
                    <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                      <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line"></polyline>
                      <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line"></polyline>
                    </svg>
                    <span>Read more</span> 
                  </button>
                  
                </div>
              </div>
              <div class="col-6">
                <span class="link-sm">View my projects -></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="right-header"></div>
        </div>
    </div>
    <div class="row">
      <div class="col-6"></div>
      <div class="col-6"></div>
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">6</div>
    <div class="row"><br/><br/><br/><br/><br/><br/><br/><br/><br/>7</div>
  </div>
</body>