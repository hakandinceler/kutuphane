<h1 class="page-header">Yazarlar</h1>

<div class="row">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>İsim</th>
			</tr>
		</thead>
		<tbody>

			<a href="yazar-ekle.php">Yazar Ekle</a>

			<?php foreach ($yazarlar as $yazar) : ?>
			<tr>
				<td><?php echo $yazar['id'] ?></td>
				<td><?php echo $yazar['isim'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
