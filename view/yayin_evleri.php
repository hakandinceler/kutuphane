<h1 class="page-header">Yayınevleri</h1>

<div class="row">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>İsim</th>
			</tr>
		</thead>
		<tbody>

			<a href="yayinevi_ekle.php">Yayın Evi Ekle</a>

			<?php foreach ($yayinEvleri as $yayinevi) : ?>
			<tr>
				<td><?php echo $yayinevi['id'] ?></td>
				<td><?php echo $yayinevi['isim'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
