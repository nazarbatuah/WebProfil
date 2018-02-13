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
		<br>
		<h4 align="center">Buat Kategori !</h4>
		<?php echo form_open_multipart('c_data/tambah_kategori');?>
		<table>
			<tr>
				<td>Nama Kategori</td>
				<td><input type="text" name="nama_kategori" placeholder="Masukkan Judul"></td>
			</tr>
			<tr>
				<td>Rincian</td>
				<td><textarea name="rincian"></textarea></td>
			</tr>
			<tr colspan="2">
				<td></td>
				<td align="right">
					<input type="submit" value="Simpan" class="btn btn-primary navbar-btn btn-shadow btn-gradient">
				</td>
			</tr>
		</table>
		<?php echo form_close(); ?>
	</div>
</section>
<div class="block">       
	<blockquote class="blockquote">
		<table border="1" align="center">
			<tr>
				<th>Nama Kategori</th>
				<th>Rincian</th>
				<th>Aksi</th>
			</tr>
			<?php foreach($kategori as $u){ ?>
			<tr>
				<td><?php echo $u->nama_kategori ?></td>
				<td><?php echo $u->rincian ?></td>
				<td>
					<?php echo anchor('c_data/hapus_kategori/'.$u->id_kategori,'Hapus');
					echo " | | ";
					echo anchor('c_admin/edit_kategori/'.$u->id_kategori,'Edit');?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</blockquote>
</div>