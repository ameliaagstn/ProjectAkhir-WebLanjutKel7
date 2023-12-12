<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InvoiceModel;

class InvoiceController extends BaseController
{
    public $invoiceModel;

    public function __construct()
    {
        $this->invoiceModel = new InvoiceModel();
    }
    public function list_invoice()
    {
        $data = [
            'title' => 'Invoice',
            'pesanan' => $this->invoiceModel->getInvoice(),

        ];
        return view('admin/invoice', $data);
    }

    public function profile_admin(){
        return view('admin/profile_admin');
        }

    public function invoice(){
            return view('admin/invoice');
            }

   
    public function show($id){
        $pesanan = $this->invoiceModel->getInvoice($id);

        $data = [
            'title' => 'Invoice',
            'pesanan' => $pesanan,
        ];

        return view('admin/invoice', $data);
    }

    public function detail_invoice($id) {
        $invoiceModel = new InvoiceModel();

        $data = ['data'=>$invoiceModel->find($id)];

        return view('admin/detail_invoice', $data);
    }

    public function destroy($id){
        $result = $this->invoiceModel->deleteInvoice($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/invoice'))
        ->with ('success', 'Berhasil menghapus data');

        
    }
    public function dashboard(){
                return view('admin/dashboard_admin');
            }
}
