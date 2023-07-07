<?php

namespace App\Controllers;

use App\Models\LaporanTransaksiModel;

class LaporanTransaksiController extends BaseController
{
    public function index()
    {
        $model = new LaporanTransaksiModel();
        $data['laporan_transaksi'] = $model->findAll();

        return view('laporan_transaksi/index', $data);
    }

    public function tambah()
    {
        return view('laporan_transaksi/tambah');
    }

    public function simpan()
    {
        $model = new LaporanTransaksiModel();

        $data = [
            'tanggal_laporan' => $this->request->getPost('tanggal_laporan'),
            'id_transaksi' => $this->request->getPost('id_transaksi'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $model->insert($data);

        return redirect()->to('/laporan_transaksi')->with('success', 'Data laporan transaksi berhasil disimpan.');
    }

    public function edit($id)
    {
        $model = new LaporanTransaksiModel();
        $data['laporan_transaksi'] = $model->find($id);

        return view('laporan_transaksi/edit', $data);
    }

    public function update($id)
    {
        $model = new LaporanTransaksiModel();

        $data = [
            'tanggal_laporan' => $this->request->getPost('tanggal_laporan'),
            'id_transaksi' => $this->request->getPost('id_transaksi'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        $model->update($id, $data);

        return redirect()->to('/laporan_transaksi')->with('success', 'Data laporan transaksi berhasil diperbarui.');
    }

    public function hapus($id)
    {
        $model = new LaporanTransaksiModel();
        $model->delete($id);

        return redirect()->to('/laporan_transaksi')->with('success', 'Data laporan transaksi berhasil dihapus.');
    }
}
