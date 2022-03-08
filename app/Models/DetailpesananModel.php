<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetailpesananModel extends Model{
    protected $table      = 'tb_detail_pesanan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'user_id', 'tanggal','no_meja','jumlah','total_harga'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}