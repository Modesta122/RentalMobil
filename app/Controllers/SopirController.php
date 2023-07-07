<?php

namespace App\Controllers;

use App\Models\SopirModel;

class SopirController extends BaseController
{
    public function index()
    {
        $model = new SopirModel();
        $data['sopir'] = $model->findAll();

        return view('sopir/index', $data);
    }

    public function tambah()
    {
        return view('sopir/tambah');
    }

    public function simpan()
    {
        $model = new SopirModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'telepon' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat'),
            'harga' => $this->request->getPost('harga')
        ];

        $model->insert($data);

        return redirect()->to('/sopir')->with('success', 'Data sopir berhasil disimpan.');
    }

    public function edit($id)
    {
        $model = new SopirModel();
        $data['sopir'] = $model->find($id);

        return view('sopir/edit', $data);
    }

    public function update($id)
    {
        $model = new SopirModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'telepon' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat'),
            'harga' => $this->request->getPost('harga')
        ];

        $model->update($id, $data);

        return redirect()->to('/sopir')->with('success', 'Data sopir berhasil diperbarui.');
    }

    public function hapus($id)
    {
        $model = new SopirModel();
        $model->delete($id);

        return redirect()->to('/sopir')->with('success', 'Data sopir berhasil dihapus.');
    }
}
