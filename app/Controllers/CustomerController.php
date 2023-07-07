<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerController extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();
        $data['customer'] = $model->findAll();

        return view('customer/index', $data);
    }

    public function tambah()
    {
        return view('customer/tambah');
    }

    public function simpan()
    {
        $model = new CustomerModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'telepon' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $model->insert($data);

        return redirect()->to('/customer')->with('success', 'Data customer berhasil disimpan.');
    }

    public function edit($id)
    {
        $model = new CustomerModel();
        $data['customer'] = $model->find($id);

        return view('customer/edit', $data);
    }

    public function update($id)
    {
        $model = new CustomerModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'telepon' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $model->update($id, $data);

        return redirect()->to('/customer')->with('success', 'Data customer berhasil diperbarui.');
    }

    public function hapus($id)
    {
        $model = new CustomerModel();
        $model->delete($id);

        return redirect()->to('/customer')->with('success', 'Data customer berhasil dihapus.');
    }
}
