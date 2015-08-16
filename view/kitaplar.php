<h1 class="page-header">Kitaplar</h1>

<div class="row">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>İsim</th>
				<th>Yazar</th>
				<th>Raf</th>
				<th>Yayınevi</th>
				<th>Kategori</th>
				<th>Basım Yılı</th>
				<th>Giris Tarihi</th>
			</tr>
		</thead>
		<tbody>

			<a href="kitap-ekle.php">Kitap Ekle</a>

			<?php foreach ($kitaplar as $kitap) : ?>
			<tr>
				<td><?php echo $kitap['kitapId'] ?></td>
				<td><?php echo $kitap['kitapIsim'] ?></td>
				<td><?php echo $kitap['yazarIsim'] ?></td>
				<td><?php echo $kitap['kitapRafYeri']  ?></td>
				<td><?php echo $kitap['basimEviIsim'] ?></td>
				<td><?php echo $kitap['kategoriIsim'] ?></td>
				<td><?php echo $kitap['basim_yili'] ?></td>
				<td><?php echo $kitap['giris_tarihi'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
