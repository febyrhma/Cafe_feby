<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\menuModel;

class menuController extends Controller{
     /**
    * Instance of the main Request object.
    * 
    * @var HTTP\IncomingRequest
    */
    protected $request;

    function __construct()
    {
        $this->menu = new menuModel();
    }

    public function tampil()
    {
        #code...
        $data['data']=$this->menu->findAll();
        return view('menuList', $data);
    }
    public function create()
    {
        #code...
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
            'gambar'=>$this->request->getPost('gambar')
        );
        $this->menu->insert ($data);
        return redirect('menu')->with('success','data berhasil disimpan');
    }

    public function edit($id)
    {
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
            'gambar'=>$this->request->getPost('gambar')
        );
        $this->menu->update($id,$data);
        return redirect('menu')->with('success','Data Berhasil Dihapus');
    }
    public function delete($id)
    {
        $this->menu->delete($id);
        return redirect('menu')->with('success','data berhasil dihapus');
    }
}