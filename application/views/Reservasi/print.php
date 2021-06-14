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
<script>window.print()</scirpt>
<center>
	<h1>Grooming </h1>
</center>
<div style="overflow-x:auto;">
	<table>
		<tr>
			<th>NO</th>
			<th>TGL GROOMING</th>
			<th>NAMA PEMILIK</th>
			<th>HEWAN</th>
		</tr>
		<?php 
		foreach ($data_grooming as $dt) : ?>
			<tr>
			<td><?= $dt->id_wali ?></td>
			<td><?php $myDateTime = DateTime::createFromFormat('Y-m-d', $dt->tgl_grooming); $a = $myDateTime->format('d-m-Y'); echo $a ?></td>
									
			<td><?= $dt->nama ?></td>
			<td><?= $dt->hewan ?></td>
									
			</tr>
		<?php $no++;
		endforeach ?>
	</table>
</div>
<div class="container-fluid">
