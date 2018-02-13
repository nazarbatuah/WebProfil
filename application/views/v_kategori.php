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
<section id="features" class="features">

			<?php foreach ($artikel as $u) {?>
	<div class="container">
		
		<div class="row d-flex align-items-center">
			<div class="image col-lg-6"><img src="<?php echo $url.'img/'.$u->gambar ; ?>" alt="..." class="img-fluid"></div>
			<div class="text col-lg-6">
				<div class="icon"><img src="<?php echo base_url('asset/img/medal.svg'); ?>" alt="..." class="img-fluid"></div>
				<h4><?php echo $u->judul ?></h4>
				<p><?php echo substr($u->isi_artikel, 0, 250) . '...';?></p><a href="<?php echo base_url().'c_data/konten/'.$u->id_artikel ; ?>" class="btn btn-primary btn-shadow btn-gradient">Baca Selengkapnya</a>
			</div>
		</div>
	</div>
			<?php } ?>
</section>