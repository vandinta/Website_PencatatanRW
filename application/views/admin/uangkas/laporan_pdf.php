<!DOCTYPE html>
<html>
<head>
    <title>Laporan Uang Kas</title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
</head>
<body>
    <div style="text-align:center">
        <h3> Laporan PDF Uang Kas</h3>
    </div>
    <table border="1" cellpadding="2" id="table">
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Kategori Kegiatan</th>
            <th>Penanggung Jawab</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Kas Masuk</th>
            <th>Kas Keluar</th>
            <th>Total Kas</th>
        </tr>

        <?php 
		$no = 1;
		foreach ($UangKas as $kas) : ?>
			<tr>
				<td>
					<?php echo $no++ ?>
				</td>
				<td>
					<?php echo $kas->nama_kegiatan ?>
				</td>
				<td>
					<?php echo $kas->kategori_kegiatan ?>
				</td>
				<td>
					<?php echo $kas->penanggung_jawab ?>
				</td>
				<td>
					<?php echo $kas->keterangan ?>
				</td>
				<td>
					<?php echo dateindo($kas->tanggal) ?>
				</td>
				<td>
					<?php echo rupiah($kas->kas_masuk) ?>
				</td>
				<td>
					<?php echo rupiah($kas->kas_keluar) ?>
				</td>
				<td>
					<?php echo rupiah($kas->total_kas) ?>
				</td>
			</tr>
            <?php endforeach; ?>
    </table>
</body>
</html>