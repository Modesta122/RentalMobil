<!DOCTYPE html>
<html>
<head>
    <title>Rental Mobil</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('/style.css') ?>">
</head>
<body>
    <div id="container"> 
        <header> 
            <h1>Rental Mobil</h1> 
        </header> 
    <!-- Navigasi atau menu header -->
    <nav>
        <ul>
            <li><a href="<?= site_url('/') ?>">Beranda</a></li>
            <li><a href="<?= site_url('customer') ?>">Data Customer</a></li>
            <li><a href="<?= site_url('sopir') ?>">Data Sopir</a></li>
            <li><a href="<?= site_url('kendaraan') ?>">Data Kendaraan</a></li>
            <li><a href="<?= site_url('transaksi') ?>">Data Transaksi</a></li>
            <li><a href="<?= site_url('laporan_transaksi') ?>">Laporan Transaksi</a></li>
        </ul>
    </nav>
    <section id="wrapper"> 
    <section id="main">

    <!-- Konten utama -->
    <div class="container">
