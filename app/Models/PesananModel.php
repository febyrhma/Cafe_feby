<?php 
namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model{
    protected $table      = 'tb_pesanan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','nama','tanggal','no_meja','nama_pemesan','total_harga'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}