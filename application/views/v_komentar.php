<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url=base_url().'asset/';
?>
<header class="header">
	<nav class="navbar navbar-expand-lg fixed-top"><a href="<?php base_url().'c_data'; ?>" class="navbar-brand">Hai, <?php echo $this->session->userdata("nama"); ?></a>
		<button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
		<div id="navbarSupportedContent" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
				<li class="nav-item"><a href="<?php echo base_url('c_admin'); ?>" class="nav-link link-scroll">Artikel</a></li>
				<li class="nav-item"><a href="<?php echo base_url('c_admin/data_kategori'); ?>" class="nav-link link-scroll">Kategori</a></li>
				<li class="nav-item"><a href="<?php echo base_url('c_admin/data_komentar'); ?>" class="nav-link link-scroll">Komentar</a></li>
				<!-- <li class="nav-item"><a href="text.html" class="nav-link">Text Page</a></li> -->
			</ul>
			<div class="navbar-text">   
				<!-- Button trigger modal--><a href="<?php echo base_url('c_login/logout'); ?>" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Logout</a>
			</div>
		</div>
	</nav>
</header>      
<section>
	<div class="container">
		<h4 align="center">Data Komentar !</h4>
		<table border="1" align="center">
			<tr>
				<th>Username</th>
				<th>Komentar</th>
				<th>Waktu</th>
				<th>Aksi</th>
			</tr>
			<?php foreach($komentar as $u){ ?>
			<tr>
				<td><?php echo $u->username ?></td>
				<td><?php echo $u->isi_komentar ?></td>
				<td><?php echo $u->tgl_komentar ?></td>
				<td>
					<?php echo anchor('c_data/hapus_komentar/'.$u->id_komentar,'Hapus');?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</section>