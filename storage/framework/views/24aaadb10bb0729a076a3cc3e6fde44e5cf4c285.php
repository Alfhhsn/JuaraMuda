<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logo.png" type = "image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>JuaraMuda | Homepage</title>
    </head>
    <style>
      body{
          background: linear-gradient(to bottom, #213346, #9a465e);
          background-size: cover;          
      }
      .btn-outline-go{
        background-color: white;
        color: black;
        border-color: rgb(136, 212, 255);
        border-width: medium;
      }
      .btn-outline-go:hover {
        background-color: rgb(136, 212, 255);
        color: white;
        border-color: black;
        border-width: medium;
      }
    </style>    
  <body>

  <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container" style="padding-top: 70px;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/beasiswa.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/lomba.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <div class="col"><div class="card-center">
                <img src="img/buttonbeasiswa.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Cari Beasiswa</a>
                </div>
              </div>
            </div>
            <div class="col"><div class="card-center">
                <img src="img/buttonlomba.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Cari Lomba</a>
                </div>
              </div>
            </div>
      </div>
    </div>

    <div class="container">
    <div class="text-center" style="color: white; margin-top: 100px; padding-top: 30px; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins); margin-bottom: 50px;">
      <h3><b>#KataMereka</b>
        <h3>
    </div>
  </div>

  <div class="custom_container" style="background-color: #213346; border-radius: 60px; padding-top: 5%; padding-bottom: 5%; margin-left: 5%; margin-right: 5%; margin-bottom: 5%; font-family: 'Pridi'; src: url(https://fonts.google.com/specimen/Pridi?query=pridi);">
    <div class="container text-justify"> 
      <div class="row row-cols">
        <div class="col">
            <div class="card-body" style="background-color: #213346;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/buttonbeasiswa.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body"  style="color: white;">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="row row-cols">
        <div class="col">
            <div class="card-body" style="background-color: #213346;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/buttonbeasiswa.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body"  style="color: white;">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="row row-cols">
        <div class="col">
            <div class="card-body" style="background-color: #213346;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/buttonbeasiswa.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body"  style="color: white;">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <ul class="menu" style="center">
        <li class="menuu" >
          <a class="nav-link" aria-current="page"  style= "color : white; padding-right: 20px; padding-top: 50px; text-decoration: none; list-style-type: none;" href="/postingan"><b>See more in #KataMereka</b></a>
        </li>
      </ul>
    </div>
  </div>

  </div>

    <?php echo $__env->make('topbutton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\application\JuaraMuda\resources\views/dashboard.blade.php ENDPATH**/ ?>