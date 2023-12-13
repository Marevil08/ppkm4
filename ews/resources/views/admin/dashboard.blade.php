@include('layouts.header')


<body class="">
  
  <div class="wrapper">
   


    <div class="main-panel">
      
      <!-- Navbar -->
     
@include('layouts.navbar')

     
<!-- ... -->
<center>
  <div class="image-container">
    <div class="ugtp">
      <img width="200px" src="../assets/img/ugtechnopark.png" >
    </div>
  
    <div class="merdeka">
      <img width="100px" src="../assets/img/merdeka.png" >
    </div>
  
    <div class="gundar">
      <img width="100px" src="../assets/img/gundar.png" >
    </div>
  
    <div class="kartanagari">
      <img width="100px" src="../assets/img/kartanagari.png" >
    </div>
  </div>
</center>
<!-- ... -->

  
<div class="container py-2 mt-2">
  <div class="row">
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Akselerasi</h5>
          <p class="card-text" id="randomAkselerasi">-</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Rotasi</h5>
          <p class="card-text" id="randomRotasi">-</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Temperatur</h5>
          <p class="card-text" id="randomTemperatur">-</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Kelembapan</h5>
          <p class="card-text" id="randomKelembapan">-</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-lg-12 d-flex justify-content-center">
      <button class="btn btn-primary" onclick="generateRandomNumbers()">Generate Angka Acak</button>
    </div>
  </div>
</div>



    <div class="container-fluid py-2 mt-2">
      <div class="row">
        <div class="col-lg-6">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Graphic</h6>
              <p class="text-sm">
                <span class="font-weight-bold">Getaran</span>
              </p>
            </div>
            <div class="card-body p-2">
              <div class="chart">
                <canvas id="chart-line-accel" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Graphic</h6>
              <p class="text-sm">
                <span class="font-weight-bold">Kemiringan</span>
              </p>
            </div>
            <div class="card-body p-2">
              <div class="chart">
                <canvas id="chart-line-rota" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    

  <div class="container-fluid py-2 mt-2">
    <div class="row">
      <div class="col-lg-6">
        <div class="card z-index-2">
          <div class="card-header pb-0">
            <h6>Graphic</h6>
            <p class="text-sm">
              <span class="font-weight-bold">Suhu</span>
            </p>
          </div>
          <div class="card-body p-2">
            <div class="chart">
              <canvas id="chart-line-temp" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card z-index-2">
          <div class="card-header pb-0">
            <h6>Graphic</h6>
            <p class="text-sm">
              <span class="font-weight-bold">Kelembapan</span>
            </p>
          </div>
          <div class="card-body p-2">
            <div class="chart">
              <canvas id="chart-line-humi" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Akhir Graph -->

  




  @include('layouts.script')

  <script>
    function generateRandomNumbers() {
      // Menghasilkan angka acak untuk masing-masing card
      let randomAkselerasi = Math.floor(Math.random() * 100) + 1;
      let randomRotasi = Math.floor(Math.random() * 100) + 1;
      let randomTemperatur = Math.floor(Math.random() * 100) + 1;
      let randomKelembapan = Math.floor(Math.random() * 100) + 1;
  
      // Menampilkan angka acak pada masing-masing card
      document.getElementById('randomAkselerasi').innerText = randomAkselerasi;
      document.getElementById('randomRotasi').innerText = randomRotasi;
      document.getElementById('randomTemperatur').innerText = randomTemperatur;
      document.getElementById('randomKelembapan').innerText = randomKelembapan;
    }
  </script>
  </body>

</html>