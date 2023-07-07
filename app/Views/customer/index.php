<?= $this->include('template/header'); ?>

<head>
    <title>Daftar Customer</title>
</head>
<body>
    <h1>Daftar Customer</h1>

    <a class="btn" href="/customer/tambah">Tambah Customer</a>

    <table>
        <tr>
            <th>ID Customer</th>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($customer as $c): ?>
            <tr>
                <td><?= $c['id_customer']; ?></td>
                <td><?= $c['nama']; ?></td>
                <td><?= $c['telepon']; ?></td>
                <td><?= $c['alamat']; ?></td>
                <td>
                    <a class="btn" href="/customer/edit/<?= $c['id_customer']; ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"href="/customer/hapus/<?= $c['id_customer']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

<?= $this->include('template/footer'); ?>