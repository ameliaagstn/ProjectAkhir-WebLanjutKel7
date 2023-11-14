<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BuyerModel;
use App\Models\FinancialModel;
use App\Models\ProductModel;

class Admin extends BaseController
{
    public function index()
    {
        // Menampilkan daftar admin
        $adminModel = new AdminModel();
        $data['admins'] = $adminModel->getAdmin();

        // Menampilkan daftar pembeli
        $buyerModel = new BuyerModel();
        $data['buyers'] = $buyerModel->getBuyer();

        // Menampilkan laporan keuangan
        $financialModel = new FinancialModel();
        $data['financials'] = $financialModel->getFinancial();

        // Menampilkan daftar produk
        $productModel = new ProductModel();
        $data['products'] = $productModel->getProduct();

        return view('admin/index', $data);
    }

    // Fungsi CRUD untuk Pembeli
    public function buyers()
    {
        $buyerModel = new BuyerModel();
        $data['buyers'] = $buyerModel->getBuyer();

        return view('admin/buyer', $data);
    }

    public function createBuyers()
    {
        return view('admin/buyer');
    }

    public function storeBuyer()
    {
        $buyerModel = new BuyerModel();

        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
            'phone'   => $this->request->getPost('phone'),
        ];

        $buyerModel->insertBuyer($data);

        return redirect()->to('/admin/buyer');
    }

    // Fungsi CRUD untuk Laporan Keuangan
    public function financials()
    {
        $financialModel = new FinancialModel();
        $data['financials'] = $financialModel->getFinancial();

        return view('admin/financial', $data);
    }

    public function createFinancial()
    {
        return view('admin/create_financial');
    }

    public function storeFinancial()
    {
        $financialModel = new FinancialModel();

        $data = [
            'date'     => $this->request->getPost('date'),
            'income'   => $this->request->getPost('income'),
            'expenses' => $this->request->getPost('expenses'),
        ];

        $financialModel->insertFinancial($data);

        return redirect()->to('/admin/financial');
    }

    // Fungsi CRUD untuk Produk
    public function products()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->getProduct();

        return view('admin/product', $data);
    }

    public function createProduct()
    {
        return view('admin/create_product');
    }

    public function storeProduct()
    {
        $productModel = new ProductModel();

        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
        ];

        $productModel->insertProduct($data);

        return redirect()->to('/admin/product');
    }
}