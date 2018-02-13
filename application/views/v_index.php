 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 $url=base_url().'asset/';
 ?>
 <!-- navbar-->
 <header class="header">
  <nav class="navbar navbar-expand-lg fixed-top"><a href="<?php base_url().'c_data'; ?>" class="navbar-brand">Nazar Batuah</a>
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
        <li class="nav-item"><a href="#extra-features" class="nav-link link-scroll">Home</a></li>
        <li class="nav-item"><a href="#testimonials" class="nav-link link-scroll">Writings</a></li>
        <li class="nav-item"><a href="#browser" class="nav-link link-scroll">My Galery</a></li>
        <!-- <li class="nav-item"><a href="text.html" class="nav-link">Text Page</a></li> -->
      </ul>
      <div class="navbar-text">   
        <!-- Button trigger modal--><a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Login</a>
      </div>
    </div>
  </nav>
</header>
<div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="exampleModalLabel" class="modal-title">Login Admin</h5>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <form id="signupform" form action="<?php echo base_url('c_login/cek_login'); ?>" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" maxlength="16" placeholder="Username" id="username" required="">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" maxlength="12" placeholder="Password" id="password" required="">
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="submit btn btn-primary btn-shadow btn-gradient">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<section id="extra-features" class="extra-features bg-primary">
  <div class="container text-center">
    <header>
      <h2>{ nazarudinsyah.com }            </h2>
      <div class="row">
        <p class="lead col-lg-8 mx-auto">Ngaji -> Ngoding -> Ngajar</p>
      </div>
    </header>
    <div class="grid row">

      <?php foreach($user as $u){ ?>
      <div class="item col-lg-4 col-md-6">
        <div class="icon"> <i class="icon-quality"></i></div>
        <h3 class="h5"><?php echo $u->nama_kategori ?></h3>
        <p><?php echo $u->rincian ?></p>
        <a href="<?php echo base_url().'c_data/kategori/'.$u->id_kategori ; ?>" class="btn btn-light">Kunjungi</a>
      </div>

      <?php } ?>
    </div>
  </div>
</section>

<section id="testimonials" class="testimonials">
  <div class="container">
    <header class="text-center no-margin-bottom">   
      <h2>Bacalah!</h2>
      <p class="lead">Kumpulan artikel yang saya buat</p>
    </header>
    <div class="owl-carousel owl-theme testimonials-slider"> 
              <?php
        foreach($artikel as $x){?>
                   <div class="item-holder">
        <div class="item">
          <a href="<?php echo base_url().'c_data/konten/'.$x->id_artikel ; ?>" class="avatar"><img src="http://localhost/maju/asset/img/<?php echo $x->gambar ; ?>" alt="..." class="img-fluid">></a>
          <div class="text">
            <strong class="name"><?php echo $x->judul; ?></strong>
            <p><?php echo substr($x->isi_artikel, 0, 75) . '...';?></p>
            <a align="right" href="<?php echo base_url().'c_data/konten/'.$x->id_artikel ; ?>" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
        <?php } ?>
    </div>
  </div>
</section>
<section id="browser" class="browser">
  <div class="container">
    <div class="row d-flex justify-content-center"> 
      <div class="col-lg-8 text-center">
        <h2 class="h3 mb-5">Lihatlah!</h2>
        <div class="browser-mockup">
          <div id="nav-tabContent" class="tab-content">
            <div id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab" class="tab-pane fade show active">
              <img src="http://localhost/maju/asset/img/preview-3.jpg" width="70%" alt="..." class="img-fluid">
            </div>
            <div id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab" class="tab-pane fade">
              <img src="http://localhost/maju/asset/img/preview-2.jpg" width="70%" alt="..." class="img-fluid">
            </div>
            <div id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab" class="tab-pane fade">
              <img src="http://localhost/maju/asset/img/preview-1.jpg" width="70%" alt="..." class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="myTab" role="tablist" class="nav nav-tabs">
      <div class="row">
        <div class="col-md-4">
          <a id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-expanded="true" class="nav-item nav-link active"> <span class="number">1</span>Tukang koding pengen naik haji yang mempunyai garuda di laptopnya</a>
        </div>

        <div class="col-md-4">
          <a id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" class="nav-item nav-link"> <span class="number">2</span>Pemimpi Besar yang berjuang dan bekerja keras untuk meeraih mimpi-mimpinya</a>
        </div>
        <div class="col-md-4">
          <a id="nav-third-tab" data-toggle="tab" href="#nav-third" role="tab" aria-controls="nav-third" class="nav-item nav-link"> <span class="number">3</span>Pemuda nekat yang tidak peduli dengan pedasnya pedang kehidupan</a>
        </div>
      </div>
    </div>
  </section>