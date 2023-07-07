<?= $this->include('template/header'); ?>

<head>
    <title>Tambah Customer</title>
</head>
<body>
    <h1>Tambah Customer</h1>

    <form action="/customer/simpan" method="POST">
        <label for="nama">Nama Customer:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="telepon">Nomor Telepon:</label>
        <input type="text" id="telepon" name="telepon" required><br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br><br>
        
        <input type="submit" value="Simpan">
    </form>
</body>

<?= $this->include('template/footer'); ?>