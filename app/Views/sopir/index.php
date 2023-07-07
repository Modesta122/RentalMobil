<?= $this->include('template/header'); ?>

<head>
    <title>Daftar Sopir</title>
</head>
<body>
    <h1>Daftar Sopir</h1>

    <a class="btn" href="/sopir/tambah">Tambah Sopir</a>

    <table>
        <tr>
            <th>ID Sopir</th>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($sopir as $s): ?>
            <tr>
                <td><?= $s['id_sopir']; ?></td>
                <td><?= $s['nama']; ?></td>
                <td><?= $s['telepon']; ?></td>
                <td><?= $s['alamat']; ?></td>
                <td><?= $s['harga']; ?></td>
                <td>
                    <a class="btn" href="/sopir/edit/<?= $s['id_sopir']; ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"href="/sopir/hapus/<?= $s['id_sopir']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

<?= $this->include('template/footer'); ?>