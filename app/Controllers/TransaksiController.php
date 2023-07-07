<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class TransaksiController extends BaseController
{
    public function index()
    {
        $model = new TransaksiModel();
        $data['transaksi'] = $model->findAll();

        return view('transaksi/index', $data);
    }

    public function tambah()
    {
        return view('transaksi/tambah');
    }

    public function simpan()
    {
        $model = new TransaksiModel();

        $data = [
            'tanggal_transaksi' => $this->request->getPost('tanggal_transaksi'),
            'id_kendaraan' => $this->request->getPost('id_kendaraan'),
            'id_customer' => $this->request->getPost('id_customer'),
            'total_harga' => $this->request->getPost('total_harga')
        ];

        $model->insert($data);

        return redirect()->to('/transaksi')->with('success', 'Data transaksi berhasil disimpan.');
    }

    public function edit($id)
    {
        $model = new TransaksiModel();
        $data['transaksi'] = $model->find($id);

        return view('transaksi/edit', $data);
    }

    public function update($id)
    {
        $model = new TransaksiModel();

        $data = [
            'tanggal_transaksi' => $this->request->getPost('tanggal_transaksi'),
            'id_kendaraan' => $this->request->getPost('id_kendaraan'),
            'id_customer' => $this->request->getPost('id_customer'),
            'total_harga' => $this->request->getPost('total_harga')
        ];

        $model->update($id, $data);

        return redirect()->to('/transaksi')->with('success', 'Data transaksi berhasil diperbarui.');
    }

    public function hapus($id)
    {
        $model = new TransaksiModel();
        $model->delete($id);

        return redirect()->to('/transaksi')->with('success', 'Data transaksi berhasil dihapus.');
    }
}
