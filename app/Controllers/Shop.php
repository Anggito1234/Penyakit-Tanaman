<?php

namespace App\Controllers;
use App\Models\ProdukModels;
use App\Models\CartModels;
use App\Models\UserModel;


class Shop extends BaseController
{
    public function index()
    {
        $model = new ProdukModels();
        $model_user = new UserModel();
        $countCart = new CartModels();
       
        if(session()->get('logged_in') == true){
            $count = $countCart->like('user_id', session()->get('user_id'))->countAllResults();
        } 
        else{
            $count = $countCart;
        }
        $data = [
            'produk' => $model->findAll(8),
            'count_produk' => $count
        ];
        return view('toko/shop', $data);
    }

    public function produk()
    {

        // return view('Beranda/index', $data);
    }

    public function beli()
    {
        $model = new CartModels();
		$data = [
			'user_id' => $this->request->getVar('user'),
			'produk_id' => $this->request->getVar('produk'),
            'jumlah' => $this->request->getVar('jumlah'),
            'total_pembelian' => $this->request->getVar('harga'),
		];
		$model->save($data);
		return redirect()->to('/Shop');
    }

    public function cartShow()
    {
        $model = new ProdukModels();
        $model_user = new UserModel();
        $countCart = new CartModels();
        $data_cart = $countCart->getShop();
        if(session()->get('logged_in') == true){
            $count = $countCart->like('user_id', session()->get('user_id'))->countAllResults();
        } 
        else{
            $count = $countCart;
        }
        $produk = $model->find('produk_id');
        $cartP = $countCart->where('user_id', session()->get('user_id'))->findAll();
        $data = [
            'produk' => $model->findAll(8),
            'count_produk' => $count,
            'cart' => $cartP,
        ];
        return view('toko/cart', $data);
    }

}
