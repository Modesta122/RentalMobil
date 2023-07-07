<?php

namespace App\Controllers;

use App\Models\KendaraanModel;

class KendaraanController extends BaseController
{
    public function index()
    {
        $model = new KendaraanModel();
        $data['kendaraan'] = $model->findAll();

        return view('kendaraan/index', $data);
    }

    public function tambah()
    {
        return view('kendaraan/tambah');
    }

    public function simpan()
    {
        $model = new KendaraanModel();

        $data = [
            'merk' => $this->request->getPost('merk'),
            'model' => $this->request->getPost('model'),
            'tahun' => $this->request->getPost('tahun'),
            'harga' => $this->request->getPost('harga'),
            'tersedia' => $this->request->getPost('tersedia')
        ];

        $model->insert($data);

        return redirect()->to('/kendaraan')->with('success', 'Kendaraan berhasil disimpan.');
    }

    public function edit($id)
    {
        $model = new KendaraanModel();
        $data['kendaraan'] = $model->find($id);

        return view('kendaraan/edit', $data);
    }

    public function update($id)
    {
        $model = new KendaraanModel();

        $data = [
            'merk' => $this->request->getPost('merk'),
            'model' => $this->request->getPost('model'),
            'tahun' => $this->request->getPost('tahun'),
            'harga' => $this->request->getPost('harga'),
            'tersedia' => $this->request->getPost('tersedia')
        ];

        $model->update($id, $data);

        return redirect()->to('/kendaraan')->with('success', 'Kendaraan berhasil diperbarui.');
    }

    public function hapus($id)
    {
        $model = new KendaraanModel();
        $model->delete($id);

        return redirect()->to('/kendaraan')->with('success', 'Kendaraan berhasil dihapus.');
    }
}
