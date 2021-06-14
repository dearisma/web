<style>
	table {
		border-collapse: collapse;
		width: 100%;
	}

	th,
	td {
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #f2f2f2;
	}
</style>
<center>
	<h1> </h1>
</center>
<div style="overflow-x:auto;">
	<table>
		<tr>
			<th>NO</th>
			<th>TGL TITIP</th>
			<th>TGL AMBIL</th>
			<th>NAMA PEMILIK</th>
			<th>HEWAN</th>
		</tr>
		<?php $no = 1;
		foreach ($penitipan as $dt) : ?>
			<tr>
			<td><?= $no ?></td>
			<td><?php $myDateTime = DateTime::createFromFormat('Y-m-d', $dt->tgl_titip); $a = $myDateTime->format('d-m-Y'); echo $a ?></td>
			<td><?php $myDateTime = DateTime::createFromFormat('Y-m-d', $dt->tgl_diambil); $a = $myDateTime->format('d-m-Y'); echo $a ?></td>										
			<td><?= $dt->id_wali ?></td>
			<td><?= $dt->hewan ?></td>
									
			</tr>
		<?php $no++;
		endforeach ?>
	</table>
</div>
