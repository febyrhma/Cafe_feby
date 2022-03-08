<?php namespace App\filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //jika user belum login
        if (! session()->get('role')){
            //maka redirect kehalaman login
            return redirect('login');
        }
    }
    //------------------------------------------------------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $argument= null)
    {
        //do somthing here
    }
}