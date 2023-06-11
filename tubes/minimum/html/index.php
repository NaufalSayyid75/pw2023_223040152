<?php 
// konekin ke file functions.php
require '../functions.php';

// ambil table home_content
$home_content =  query("SELECT * FROM home_content");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link href="https://fonts.googleapis.com/css?family=Caveat|Montserrat:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">SEPEN BROTHER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="../login/loginpage.php" class="nav-link">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <!-- ***************  ABOUT / PROFILE  **************** -->
      <header>
        <div class="content-wrap">
          <h1>E-Commerce</h1>
          <h2>SEPEN BROTHER</h2>

          <p>E-Commerce SEPEN BROTHER adalah toko online yang menjual official merchandise dari SEPEN BROTHER OFFICIAL</p>
          
        </div>
      </header>

      <!-- ************ PROJECTS / PORTFOLIO  ************** -->
      <section class="projects">
        <div class="content-wrap divider">
          <h2>Merchandise</h2>

          <?php foreach($home_content as $home_cont) :?>
          <!-- Merchandise 1 -->
          <section class="project-item">
            <img src="../images/<?=$home_cont['gambar'] ;?>" alt="Baju SEPEN BROTHER">
            <h3><?=$home_cont['judul']; ?></h3>
            <p><?=$home_cont['isi']; ?></p>
            <a href="../hapus.php?id=<?=$home_cont['id']; ?>" onclick="return confirm('apakah anda yakin?')";>Hapus</a>
            <a href="../edit.php?id=<?=$home_cont['id']; ?>">edit</a>
          </section>
          <?php endforeach ; ?>
        </section>
        

      <!-- ****************  WORK EXPERIENCE  ******************** -->
      <section class="work-experience">
        <div class="content-wrap item-details divider">
          <h2>Pengiriman</h2>
          

          <!-- Job 1 -->
          <section class="job-item">
            <div class="job-details">
              <p>Jnt Express</p>
              <p>Si Cepat Express</p>
            </div>
            <div class="job-summary"> 
            </div>
          </section>

          <!-- Job 2 -->
          <section class="job-item">
            <div class="job-details">
              <p>Cash On Delivery</p>
            </div>
          </section>

              
            </div>
          </section>
        </div>
      </section>

      <!-- ************  CONTACT INFO / SOCIAL MEDIA  ************ -->
      <footer>
        <div class="content-wrap">
          <h2>Let's Keep in Touch!</h2>

          <!-- Social media and contact links. Add or remove any networks. -->
          <ul class="contact-list">
            <li><a href="mailto:naufalsayyid75@gmail.com">naufalsayyid75@gmail.com</a></li>
            <li><a href="http://instagram.com/naufal.akbrrr_" target="_blank">Instagram</a></li>
          </ul>
        </div>
      </footer>
    </main>
  </body>
</html>
