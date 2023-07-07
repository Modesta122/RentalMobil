<?= $this->include('template/header'); ?>

<head>
    <title>Edit Sopir</title>
</head>
<body>
    <h1>Edit Sopir</h1>

    <form action="/sopir/update/<?= $sopir['id_sopir']; ?>" method="POST">
        <label for="nama">Nama Sopir:</label>
        <input type="text" id="nama" name="nama" value="<?= $sopir['nama']; ?>" required><br><br>
        
        <label for="telepon">Nomor Telepon:</label>
        <input type="text" id="telepon" name="telepon" value="<?= $sopir['telepon']; ?>" required><br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?= $sopir['alamat']; ?>" required><br><br>
        
        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" value="<?= $sopir['harga']; ?>" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>

<?= $this->include('template/footer'); ?>