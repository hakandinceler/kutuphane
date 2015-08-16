<h1 class="page-header">Raflar</h1>

<div class="row">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Kat</th>
				<th>Seri</th>
			</tr>
		</thead>
		<tbody>

			<a href="raf_ekle.php">raf Ekle</a>

			<?php foreach ($raflar as $raf) : ?>
			<tr>
				<td><?php echo $raf['id'] ?></td>
				<td><?php echo $raf['kat'] ?></td>
				<td><?php echo $raf['seri'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
