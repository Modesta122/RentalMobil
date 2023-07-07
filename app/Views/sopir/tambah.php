<?= $this->include('template/header'); ?>

<head>
    <title>Tambah Sopir</title>
</head>
<body>
    <h1>Tambah Sopir</h1>

    <form action="/sopir/simpan" method="POST">
        <label for="id_sopir">ID Sopir:</label>
        <input type="text" id="id_sopir" name="id_sopir" required><br><br>

         <label for="nama">Nama Sopir:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="telepon">Nomor Telepon:</label>
        <input type="text" id="telepon" name="telepon" required><br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br><br>

        <label for="harga">Harga:</label>
        <input type="text" id="harga" name="harga" required><br><br>
        
        <input type="submit" value="Simpan">
    </form>
</body>

<?= $this->include('template/footer'); ?>