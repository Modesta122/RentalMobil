<?= $this->include('template/header'); ?>
<head>
    <title>Tambah Transaksi</title>
</head>
<body>
    <h1>Tambah Transaksi</h1>

    <form action="/transaksi/simpan" method="POST">
        
        <label for="id_customer">ID Customer:</label>
        <input type="text" id="id_customer" name="id_customer" required><br><br>

        <label for="id_kendaraan">ID Kendaraan:</label>
        <input type="text" id="id_kendaraan" name="id_kendaraan" required><br><br>

        <label for="id_sopir">ID Sopir:</label>
        <input type="text" id="id_sopir" name="id_sopir" required><br><br>

        <label for="tanggal_sewa">Tanggal Sewa:</label>
        <input type="date" id="tanggal_sewa" name="tanggal_sewa" required><br><br>

        <label for="tanggal_kembali">Tanggal Kembali:</label>
        <input type="date" id="tanggal_kembali" name="tanggal_kembali" required><br><br>

        <label for="total_harga">Total Harga:</label>
        <input type="text" id="total_harga" name="total_harga" required><br><br>


        <input type="submit" value="Simpan">
    </form>
</body>
<?= $this->include('template/footer'); ?>
