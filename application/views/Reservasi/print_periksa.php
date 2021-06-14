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
			<th>TGL GROOMING</th>
			<th>NAMA PEMILIK</th>
			<th>HEWAN</th>
		</tr>
		<?php $no = 1;
		foreach ($grooming as $dt) : ?>
			<tr>
			<td><?= $no ?></td>
			<td><?php $myDateTime = DateTime::createFromFormat('Y-m-d', $dt->tgl_grooming); $a = $myDateTime->format('d-m-Y'); echo $a ?></td>
									
			<td><?= $dt->id_wali ?></td>
			<td><?= $dt->hewan ?></td>
									
			</tr>
		<?php $no++;
		endforeach ?>
	</table>
</div>
