<?php
include 'functions.php';
$user = mysqli_fetch_assoc ($hasil)
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron-->
    <div class="jumbotron text-center">
      <img src="img/ria.jpg" alt="" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4"><?= $user["nama"];?> </h1>
      <p class="lead">Siswa | SMKN 4 Tasikmalaya</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,256L34.3,224C68.6,192,137,128,206,117.3C274.3,107,343,149,411,181.3C480,213,549,235,617,229.3C685.7,224,754,192,823,160C891.4,128,960,96,1029,101.3C1097.1,107,1166,149,1234,160C1302.9,171,1371,149,1406,138.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </div>
      <!-- Akhir Jumbotron-->
    <!-- About -->
    <section>
      <div id="About">
        <div class="row text-center">
        <h2>About</h2>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-sm-4">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo doloribus, quibusdam esse dolores maxime modi repellat, eveniet similique iure itaque ducimus. Aperiam atque dolorem fugiat rem enim nesciunt, ad ducimus!</p>
        </div>
        <div class="col-sm-4">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam illo, deserunt sunt officiis perferendis facere ipsam vel amet! Tempore quis a, neque laborum explicabo quia sed atque ipsa id voluptatum.</p>
        </div>
      </div>
    </section>
    <!-- Akhir About -->
     <!-- project -->
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill=" rgb(88, 185, 185)"
        fill-opacity="1"
        d="M0,64L34.3,58.7C68.6,53,137,43,206,80C274.3,117,343,203,411,202.7C480,203,549,117,617,112C685.7,107,754,181,823,181.3C891.4,181,960,107,1029,69.3C1097.1,32,1166,32,1234,48C1302.9,64,1371,96,1406,112L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
      ></path>
    </svg>
    <section id="project">
      <div class="container">
        <div class="row text-center">
          <h2>Project</h2>
        </div>

        <div class="row justify-content-center fs-5">
          <div class="container"></div>
          <div class="col-sm-4">
            <div class="card">
              <img src="img/ria.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card">
              <img src="img/ria.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card">
              <img src="img/yya.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- akhir project -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill=" rgb(88, 185, 185)"
        fill-opacity="1"
        d="M0,64L34.3,58.7C68.6,53,137,43,206,80C274.3,117,343,203,411,202.7C480,203,549,117,617,112C685.7,107,754,181,823,181.3C891.4,181,960,107,1029,69.3C1097.1,32,1166,32,1234,48C1302.9,64,1371,96,1406,112L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
      ></path>
    </svg>
<!-- contact -->
<section id="Contact">
  <div id="container pt-5">
    <div class="row justify-text-center">
      <div class="row text-center">
        <h2>Contact</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-6">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleInputPassword1" />
            </div>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Comments</label>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path
      fill="#6c757d"
      fill-opacity="1"
      d="M0,64L34.3,58.7C68.6,53,137,43,206,80C274.3,117,343,203,411,202.7C480,203,549,117,617,112C685.7,107,754,181,823,181.3C891.4,181,960,107,1029,69.3C1097.1,32,1166,32,1234,48C1302.9,64,1371,96,1406,112L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
    ></path>
  </svg>
</section>
<footer class="text-center bg-secondary text-black pb-5">
  <p>Create with <i class="bi bi-heart-fill"></i> by <a href="">SR</a></p>
  <p><i class="bi bi-telegram"></i> <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a></i> <i class="bi bi-whatsapp"></i> <i class="bi bi-twitter"></i></p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>