<?= $this->include('template/header'); ?>

<head>
    <title>Edit Customer</title>
</head>
<body>
    <h1>Edit Customer</h1>

    <form action="/customer/update/<?= $customer['id_customer']; ?>" method="POST">
        <label for="nama">Nama Customer:</label>
        <input type="text" id="nama" name="nama" value="<?= $customer['nama']; ?>" required><br><br>
        
        <label for="telepon">Nomor Telepon:</label>
        <input type="text" id="telepon" name="telepon" value="<?= $customer['telepon']; ?>" required><br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?= $customer['alamat']; ?>" required><br><br>
        
        <input type="submit" value="Simpan">
    </form>
</body>

<?= $this->include('template/footer'); ?>