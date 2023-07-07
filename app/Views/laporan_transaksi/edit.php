<?= $this->include('template/header'); ?>

<head>
    <title>Edit Laporan Transaksi</title>
</head>
<body>
    <h1>Edit Laporan Transaksi</h1>

    <form action="/laporan_transaksi/update/<?= $laporan_transaksi['id']; ?>" method="POST">
        <label for="tanggal_laporan">Tanggal Laporan:</label>
        <input type="date" id="tanggal_laporan" name="tanggal_laporan" value="<?= $laporan_transaksi['tanggal_laporan']; ?>" required><br><br>

        <label for="id_transaksi">Transaksi:</label>
        <input type="text" id="id_transaksi" name="id_transaksi" value="<?= $laporan_transaksi['id_transaksi']; ?>" required><br><br>

        <label for="keterangan">Keterangan:</label>
        <input type="text" id="keterangan" name="keterangan" value="<?= $laporan_transaksi['keterangan']; ?>" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>

<?= $this->include('template/footer'); ?>