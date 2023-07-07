<?= $this->include('template/header'); ?>

<head>
    <title>Edit Kendaraan</title>
</head>
<body>
    <h1>Edit Kendaraan</h1>

    <form action="/kendaraan/update/<?= $kendaraan['id_kendaraan']; ?>" method="POST">
        <label for="merk">Merk Kendaraan:</label>
        <input type="text" id="merk" name="merk" value="<?= $kendaraan['merk']; ?>" required><br><br>
        
        <label for="model">Model Kendaraan:</label>
        <input type="text" id="model" name="model" value="<?= $kendaraan['model']; ?>" required><br><br>

        <label for="tahun">Tahun Kendaraan:</label>
        <input type="text" id="tahun" name="tahun" value="<?= $kendaraan['tahun']; ?>" required><br><br>
        
        <label for="harga">Harga Sewa:</label>
        <input type="text" id="harga" name="harga" value="<?= $kendaraan['harga']; ?>" required><br><br>
        
        <label for="tersedia">Status:</label>
        <select id="tersedia" name="tersedia" required>
            <option value="Tersedia" <?php if ($kendaraan['tersedia'] == 'Tersedia') echo 'selected'; ?>>Tersedia</option>
            <option value="Dipesan" <?php if ($kendaraan['tersedia'] == 'Dipesan') echo 'selected'; ?>>Dipesan</option>
            <option value="Disewa" <?php if ($kendaraan['tersedia'] == 'Disewa') echo 'selected'; ?>>Disewa</option>
        </select><br><br>
        
        <input type="submit" value="Simpan">
    </form>
</body>

<?= $this->include('template/footer'); ?>