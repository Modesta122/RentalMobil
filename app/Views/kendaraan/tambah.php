<?= $this->include('template/header'); ?>

<head>
    <title>Tambah Kendaraan</title>
</head>
<body>
    <h1>Tambah Kendaraan</h1>

    <form action="/kendaraan/simpan" method="POST">
        <label for="merk">Merk Kendaraan:</label>
        <input type="text" id="merk" name="merk" required><br><br>
        
        <label for="model">Model Kendaraan:</label>
        <input type="text" id="model" name="model" required><br><br>

        <label for="tahun">Tahun Kendaraan:</label>
        <input type="text" id="tahun" name="tahun" required><br><br>
        
        <label for="harga">Harga Sewa:</label>
        <input type="text" id="harga" name="harga" required><br><br>
        
        <label for="tersedia">Status:</label>
        <select id="tersedia" name="tersedia" required>
            <option value="Tersedia">Tersedia</option>
            <option value="Dipesan">Dipesan</option>
            <option value="Disewa">Disewa</option>
        </select><br><br>
        
        <input type="submit" value="Simpan">
    </form>
</body>

<?= $this->include('template/footer'); ?>