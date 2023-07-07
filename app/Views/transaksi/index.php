<?= $this->include('template/header'); ?>
<head>
    <title>Daftar Transaksi</title>
</head>
<body>
    <h1>Daftar Transaksi</h1>

    <a class="btn" href="/transaksi/tambah">Tambah Transaksi</a>

    <table>
        <tr>
            <th>ID Transaksi</th>
            <th>ID Customer</th>
            <th>ID Kendaraan</th>
            <th>ID Sopir</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Kembali</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($transaksi as $t): ?>
            <tr>
                <td><?= $t['id_transaksi']; ?></td>    
                <td><?= $t['id_customer']; ?></td>
                <td><?= $t['id_kendaraan']; ?></td>
                <td><?= $t['id_sopir']; ?></td>
                <td><?= $t['tanggal_sewa']; ?></td>
                <td><?= $t['tanggal_kembali']; ?></td>
                <td><?= $t['total_harga']; ?></td>
                <td>
                    <a class="btn" href="/transaksi/edit/<?= $t['id_transaksi']; ?>">Edit</a> 
                    <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"href="<?= base_url('/transaksi/hapus/' . $t['id_transaksi']); ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
<?= $this->include('template/footer'); ?>
