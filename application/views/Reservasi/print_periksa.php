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
	<h1>Data Grooming </h1>
</center>
<div style="overflow-x:auto;">
	<table>
		<tr>
			<th>NO</th>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Hewan</th>
			<th>Anamnesa</th>
		</tr>
		<?php $no = 1;
		foreach ($data_periksa as $dt) : ?>
			<tr>
			<td><?= $dt->id_periksa ?></td>
			<td><?php $myDateTime = DateTime::createFromFormat('Y-m-d', $dt->tgl_periksa); $a = $myDateTime->format('d-m-Y'); echo $a ?></td>
									
			<td><?= $dt->nama ?></td>
			<td><?= $dt->hewan ?></td>
			
			<td><?= $dt->keluhan ?></td>
			
									
			</tr>
		<?php $no++;
		endforeach ?>
	</table>
</div>
