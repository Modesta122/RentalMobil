<?= $this->include('template/header'); ?>

<head>
    <title>Daftar Laporan Transaksi</title>
</head>
<body>
    <h1>Daftar Laporan Transaksi</h1>

    <a class="btn" href="/laporan_transaksi/tambah">Tambah Laporan Transaksi</a>

    <table>
        <tr>
            <th>Tanggal Laporan</th>
            <th>ID Transaksi</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($laporan_transaksi as $laporan): ?>
            <tr>
                <td><?= $laporan['tanggal_laporan']; ?></td>
                <td><?= $laporan['id_transaksi']; ?></td>
                <td><?= $laporan['keterangan']; ?></td>
                <td>
                    <a class="btn" href="/laporan_transaksi/edit/<?= $laporan['id']; ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"href="/laporan_transaksi/hapus/<?= $laporan['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

<?= $this->include('template/footer'); ?>