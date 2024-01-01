<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8f14b8;">
  <div class="container-fluid">
    <!-- Navbar brand/logo -->
    <a class="navbar-brand" style="color: white;">Earthquake Early Warning System</a>
    
    <!-- Navbar toggler for responsive design -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <!-- Home -->
        <li class="nav-item">
          <a class="nav-link" href="/" style="color: white;">Home</a>
        </li>
        <!-- About -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}" style="color: white;">About</a>
        </li>
        <!-- Contact -->
        <li class="nav-item">
          <a class="nav-link" href="mailto:shintameidytaputri@gmail.com" style="color: white;">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
