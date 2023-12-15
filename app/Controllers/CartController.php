<?php 
// app/Controllers/CartController.php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\CartModel; // Assuming you have a CartModel
use App\Models\KeranjangModel;

class CartController extends BaseController
{
    protected $keranjangModel;

    public function __construct()
    {
        $this->keranjangModel = new KeranjangModel(); // Create an instance of your CartModel
    }

    public function addToCart($productName, $quantity = 1)
    {
        // Retrieve product details from the database based on $productId
        // For example, you might have a ProductModel that fetches product details
        // Replace 'ProductModel' with the actual model you have for products
        $productModel = new BarangModel();
        $product = $productModel->where('id', $productName)->first();

        if (!$product) {
            // Handle the case where the product is not found
            return redirect()->to('/product-not-found');
        }

        // Add the item to the cart
        $cartData = [
            'nama_barang' => $product['nama_barang'],
            'jumlah'      => $quantity,
            'total_harga' => $quantity * $product['harga'], // Assuming 'harga' is the price field
            // Add other product details as needed
        ];

        $this->keranjangModel->insertToKeranjang($cartData);

        // Optionally, you can redirect to the cart page or display a success message
        return redirect()->to('/pembeli/keranjang')->with('success', 'Item added to cart successfully');
    }
}


?>