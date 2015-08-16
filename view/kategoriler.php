<h1 class="page-header">Kategoriler</h1>

<div class="row">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>İsim</th>
			</tr>
		</thead>
		<tbody>

			<a href="kategori_ekle.php">Kategori Ekle</a>

			<?php foreach ($kategoriler as $kategori) : ?>
			<tr>
				<td><?php echo $kategori['id'] ?></td>
				<td><?php echo $kategori['isim'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
