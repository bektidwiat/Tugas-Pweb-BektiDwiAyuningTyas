<!DOCTYPE html>
<html>

<head>
	<title>Apotek Pratama</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">
		<header>
			<div class="tagline">ADMIN APOTEK</div>
				<a href="#dashboard" id="Button-Dashboard">Dashboard</a>
				<a href="#users" id="Button-Users">Users</a>
				<a href="#data-obat" id="Button-Data-Obat">Data Obat</a>
				<a href="#data-penjualan" id="Button-data-Penjualan">Data Penjualan</a>
				<a href="#tagihan-obat" id="Button-Tagihan-Obat">Tagihan Obat</a>
				<a href="#">Log Out</a>
		</header> 
		<div class="main">
			<div class="dashboard">
				<h1>Dashboard</h1>
				<div class="data">
					<div class="data-item">
							<h2>Stok Obat</h2>
							<p>22</p>
							<button type="button" id="tambah-stok-obat">Tambah Data</button>
							<button type="button" id="edit-stok-obat">Edit</button>
							<button type="button" id="hapus-stok-obat">Hapus</button>
						</div>
						<div class="data-item">
							<h2>Obat Terjual</h2>
							<p>8</p>
							<button type="button" id="tambah-obat-terjual">Tambah Data</button>
							<button type="button" id="edit-stok-obat">Edit</button>
							<button type="button" id="hapus-stok-obat">Hapus</button>
						</div>
						<div class="data-item">
							<h2>Obat Expired</h2>
							<p>3</p>
							<button type="button" id="tambah-obat-expired">Tambah Data</button>
							<button type="button" id="edit-stok-obat">Edit</button>
							<button type="button" id="hapus-stok-obat">Hapus</button>
						</div>
						<div class="data-item">
							<h2>Laporan</h2>
							<p>340</p>
							<button type="button" id="tambah-user">Tambah Data</button>
							<button type="button" id="edit-stok-obat">Edit</button>
							<button type="button" id="hapus-stok-obat">Hapus</button>
						</div>	
					</div>
					<div class="BUTON">
						<button type="button" id="hiyaaa">Tambah transaksi</button>
					</div>
					<div class="table-container">
						<table id="data-table">
							<thead>
								<tr>
									<th>Nama Obat</th>
									<th>Jumlah</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody id="data-table-body">
								<tr>
									<td>Paracetamol</td>
									<td>10</td>
									<td>4000</td>
								</tr>
							</tbody>
							<tbody id="data-table-body">
								<tr>
									<td>Amlodipin</td>
									<td>30</td>
									<td>15000</td>
								</tr>
							</tbody>
							<tbody id="data-table-body">
								<tr>
									<td>Cetirizin</td>
									<td>20</td>
									<td>10000</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
		</div>
	<footer>
		<p>&copy; 2024 Apotek Sumber Sehat, Jember, Jawa Timur</p>
	</footer>
	<script src="script.js"></script>
</body>

</html>