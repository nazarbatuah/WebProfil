<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url=base_url().'asset/';
?>
<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top"><a href="<?php echo base_url('c_data'); ?>" class="navbar-brand">Nazar Batuah</a>
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
        <li class="nav-item"><a href="<?php echo base_url('c_data'); ?>" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Kembali</a></li>
      </ul>
    </div>
  </nav>
</header>
<section>
  <div class="container">
    <div class="row block">
      <div class="col-lg-9">
        <?php foreach ($artikel as $u) { ?>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href=""><?php echo $u->username ?></a></li>
          <li class="breadcrumb-item"><?php echo $u->waktu_artikel ?></li>
        </ul>
        <h1><?php echo $u->judul ?></h1>
        <img src="<?php echo $url.'img/'.$u->gambar ; ?>">
        <p><?php echo $u->isi_artikel ?></p>
      </div>
    </div>

  </div>
</section>
<?php } ?>
<section class="newsletter bg-gray">
  <div class="container text-center">
    <div class="form-holder has-shadow">
      <h2>Form Komentar</h2>
      <form id="newsletterForm" action="<?php echo base_url('c_data/tambah_komen'); ?>" method="post">
         <div class="form-group">
            <input type="text" name="user_komen" placeholder="Masukkan Username">
         </div>
        <div class="form-group">
            <input type="text" name="isi_komen" placeholder="Masukkan Isi Komentar">
        </div>
        <div class="form-group">
            <input type="hidden" name="id_artikel" value="<?php echo $this->uri->segment('3'); ?>">
           <button type="submit" class="btn btn-primary btn-gradient submit">Komentar</button>
        </div>
        
      </form>
    </div>
  </div>
</section>
<div class="block">
      <?php foreach ($komentar as $k) { ?>       
          <blockquote class="blockquote">
            <p class="mb-0"><?php echo $k->isi_komentar ?></p>
            <footer class="blockquote-footer"><?php echo $k->username ?>
              <cite title="Source Title"><?php echo $k->tgl_komentar ?></cite>
            </footer>
          </blockquote>
        <?php } ?>
        </div>