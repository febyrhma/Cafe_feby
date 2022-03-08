<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PesananModel;

class LaporanController extends Controller{
    protected $request;

    public function __construct()
    {
        $this->laporan = new PesananModel();
    }

    public function tampil()
    {
        $data['laporan'] = $this->laporan->findAll();
        return view('laporan',$data);
    }

    public function delete($id)
    {
        $this->laporan->delete($id);
        return redirect('laporan')->with('success','data berhasil dihapus');
    }
}
