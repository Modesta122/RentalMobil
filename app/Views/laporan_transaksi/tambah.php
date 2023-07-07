<?= $this->include('template/header'); ?>

<head>
    <title>Tambah Laporan Transaksi</title>
</head>
<body>
    <h1>Tambah Laporan Transaksi</h1>

    <form action="/laporan_transaksi/simpan" method="POST">
        <label for="tanggal_laporan">Tanggal Laporan:</label>
        <input type="date" id="tanggal_laporan" name="tanggal_laporan" required><br><br>

        <label for="id_transaksi">ID Transaksi:</label>
        <input type="text" id="id_transaksi" name="id_transaksi" required><br><br>

        <label for="keterangan">Keterangan:</label>
        <input type="text" id="keterangan" name="keterangan" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>

<?= $this->include('template/footer'); ?>