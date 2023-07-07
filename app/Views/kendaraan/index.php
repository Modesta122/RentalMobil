<?= $this->include('template/header'); ?>

<head>
    <title>Daftar Kendaraan</title>
</head>
<body>
    <h1>Daftar Kendaraan</h1>

    <a class="btn" href="/kendaraan/tambah">Tambah Kendaraan</a>

    <table>
        <tr>
            <th>ID Kendaraan</th>
            <th>Merk</th>
            <th>Model</th>
            <th>Tahun</th>
            <th>Harga Sewa</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($kendaraan as $k): ?>
            <tr>
                <td><?= $k['id_kendaraan']; ?></td>
                <td><?= $k['merk']; ?></td>
                <td><?= $k['model']; ?></td>
                <td><?= $k['tahun']; ?></td>
                <td><?= $k['harga']; ?></td>
                <td><?= $k['tersedia']; ?></td>
                <td>
                    <a class="btn" href="/kendaraan/edit/<?= $k['id_kendaraan']; ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"href="/kendaraan/hapus/<?= $k['id_kendaraan']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

<?= $this->include('template/footer'); ?>