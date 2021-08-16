<?php
    include 'layout/Head.php';
?>
<body>
    <!-- 1StartNavbar --> 
<?php 
    include 'layout/Header.php'
?>
<!-- 1EndNavbar -->

<!--- Startcarousel -->  
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Smoke.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="Gyuri Fromis_9 WE GO.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="seulgi.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--EndCarousel-->

<!--StartCard-->
<div class="container">
    <div class = "row ml-auto">
        <div class = "col">
            <div class="card" style="width: 18rem;">
                <img src="asset/img/saerom.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Lee Saerom</p>
                </div>
            </div>
        </div>
        <div class = "col">
            <div class="card" style="width: 18rem;">
                <img src="asset/img/hayoung.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Son Hayoung</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--EndCard-->

<!--StartTest-->
<div class = "container">
    <div class = "row">
        <div class = "col-4">
            <div class="card" style="width: 18rem;">
                <img src="asset/img/gyuri.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" >Jang Gyuri</p>
                </div>
              </div>
        </div>
        <div class = "col-4">
            <div class="card" style="width: 18rem;">
                <img src="asset/img/jiwon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Park Jiwon</p>
                </div>
              </div>
        </div>
        <div class = "col-4">
            <div class="card" style="width: 18rem;">
                <img src="asset/img/jisun.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Roh Jisun</p>
                </div>
              </div>
        </div>
    <div class = "row">
        <div class = "col-3">
            <div class="card" style="width: 18rem;">
                <img src="asset/img/seoyeon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lee Seoyoen</p>
                </div>
              </div>
        </div>
        <div class = "col-3">
            <div class="card" style="width: 18rem;">
                <img src="asset/img/chaeyoung.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lee Chaeyoung</p>
                </div>
              </div>
        </div>
        <div class = "col-3">
            <div class="card" style="width: 18rem;">
                <img src="asset/img/nagyung.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lee Nagyung</p>
                </div>
              </div>
        </div>
        <div class = "col-3">
            <div class="card" style="width: 18rem;">
                <img src="asset/img/jiheon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Baek jiheon</p>
                </div>
              </div>
        </div>
    </div>    
    </div>
</div>
<!--EndTest-->

<!--Startfooter-->
<?php 
    include 'layout/footer.php'
?>
<!--Endfooter-->
</body>


</script>
</html>