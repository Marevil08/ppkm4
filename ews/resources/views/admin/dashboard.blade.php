@include('layouts.header')


<body class="">
  
  <div class="wrapper">
   


    <div class="main-panel">
      
      <!-- Navbar -->
     
@include('layouts.navbar')


 <br> 
<div class="container py-2 mt-2" style="background-color: #5e2e81; border-radius: 22px;" > <br>
  <div class="row" style="padding-right: 11px;">
  <div class="col-lg-3">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div>
          <h5 class="card-title">Akselerasi</h5>
          <p class="card-text" id="randomAkselerasi">-</p>
        </div>
        <div class="col-auto">
          <img src="../assets/img/vibr.png" class="img-fluid" style="width: 100px; height: auto;">
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
          <h5 class="card-title">Rotasi</h5>
          <p class="card-text" id="randomRotasi">-</p>
        </div>
        <div class="col-auto">
          <img src="../assets/img/rts.png" class="img-fluid" style="width: 100px; height: auto;">
        </div>
      </div>
    </div>
</div>
</div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
          <h5 class="card-title">Temperatur</h5>
          <p class="card-text" id="randomTemperatur">-</p>
        </div>
        <div class="col-auto">
          <img src="../assets/img/tp.png" class="img-fluid" style="width: 100px; height: auto;">
        </div>
      </div>
    </div>
    </div>
</div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
          <h5 class="card-title">Kelembapan</h5>
          <p class="card-text" id="randomKelembapan">-</p>
        </div>
        <div class="col-auto">
          <img src="../assets/img/klmb.png" class="img-fluid" style="width: 100px; height: auto;">
        </div>
      </div>
    </div>
    </div>
</div>
  </div> <br> 
  
</div> 
<div class="row mt-3">
    <div class="col-lg-12 d-flex justify-content-center">
      <button class="btn btn-primary" onclick="generateRandomNumbers()">Memasukkan Data Dummy</button>
    </div>
  </div>

<br>
    <div class="container-fluid py-2 mt-2" > 
      <div class="row">
        <div class="col-lg-6">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Graphic</h6>
              <p class="text-sm">
                <span class="font-weight-bold">Getaran</span> <!-- Getaran -->
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

  <div class="container-fluid py-2 mt-2" >
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
    let randomTemperatur = Math.floor(Math.random() * (60 - (-60) + 1) + (-60)); // Range: -60 to 60
    let randomKelembapan = Math.floor(Math.random() * 100) + 1;

    // Menampilkan angka acak pada masing-masing card
    setCardValue('randomAkselerasi', randomAkselerasi);
    setCardValue('randomRotasi', randomRotasi);
    setCardValue('randomTemperatur', randomTemperatur);
    setCardValue('randomKelembapan', randomKelembapan);
  }

  function setCardValue(elementId, value) {
    let element = document.getElementById(elementId);
    let indicator;

    if (elementId === 'randomTemperatur') {
      // Menetapkan penanda untuk temperatur
      if (value < 5) {
        indicator = 'Dingin';
        element.style.color = 'blue';  // Blue for cold
      } else if (value < 37) {
        indicator = 'Hangat';
        element.style.color = 'orange';  // Orange for warm
      } else {
        indicator = 'Panas';
        element.style.color = 'red';  // Red for hot
      }
    } else if (elementId === 'randomKelembapan') {
      // Menetapkan penanda untuk kelembapan
      if (value < 33) {
        indicator = 'Rendah';
        element.style.color = 'yellow';  // Yellow for low
      } else if (value < 66) {
        indicator = 'Ideal';
        element.style.color = 'green';  // Green for ideal
      } else {
        indicator = 'Tinggi';
        element.style.color = 'red';  // Blue for high
      }
    } else {
      // Menetapkan penanda untuk parameter lainnya
      if (value < 33) {
        indicator = 'Aman';
        element.style.color = 'green';
      } else if (value < 66) {
        indicator = 'Siaga';
        element.style.color = 'orange';
      } else {
        indicator = 'Bahaya';
        element.style.color = 'red';
      }
    }

    // Menambahkan penanda ke teks card
    element.innerText = `${value} (${indicator})`;
  }
  </script>

<footer class="footer">
  <center>
    <p>&copy; Kartanagari 2023</p>
    
  </center>
</footer>

  </body>

</html>

