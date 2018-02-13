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
				<li class="nav-item"><a href="" class="nav-link link-scroll">Kategori</a></li>
				<li class="nav-item"><a href="" class="nav-link link-scroll">Komentar</a></li>
				<!-- <li class="nav-item"><a href="text.html" class="nav-link">Text Page</a></li> -->
			</ul>
			<div class="navbar-text">   
				<!-- Button trigger modal--><a href="<?php echo base_url('c_login/logout'); ?>" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Logout</a>
			</div>
		</div>
	</nav>
</header>
<div class="container">
	<br>
	<h4 align="center">Edit Artikel!</h4>
	<?php foreach($artikel as $u){
	echo form_open_multipart('c_data/update');?>
		<table>
			<tr>
				<input type="hidden" name="id_artikel" value="<?php echo $u->id_artikel ?>">
				<td>Judul</td>
				<td><input type="text" name="judul" placeholder="Masukkan Judul" value="<?php echo $u->judul ?>"></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td><textarea class="ckeditor" id="isi_artikel" name="isi_artikel"><?php echo $u->isi_artikel ?></textarea></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><select name="id_kategori">
				<?php
				echo "<option>- Pilih Kategori-</option>";
				foreach($kategori as $k)
				{
					echo "<option value='".$k->id_kategori."'>$k->nama_kategori</option>";
				}
				?>
			</select></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td><input type="file" name="gambar"></td>
			</tr>
		</table>
		<td>
			<input type="submit" value="Simpan" class="btn btn-primary navbar-btn btn-shadow btn-gradient">
		</td>
	<?php echo form_close();
	} ?>
</div>