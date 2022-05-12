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
            <li class="nav-item dropdown">
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
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Work</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    </div>
    <!-- Heare comes the slider -->
    <div class="row ">
        <div class="col-6">col-left</div>
        <div class="col-6">
          <div class="right-header"></div>
        </div>
    </div>
    <div class="row">

    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">6</div>
    <div class="row">7</div>
  </div>
</body>