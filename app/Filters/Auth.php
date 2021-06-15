<?php namespace App\Filters;
 
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
 
class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session()->get('logged_in') != TRUE)
        {
            return redirect()->to(base_url('auth/login'));
        }
    }
 
    //--------------------------------------------------------------------
 
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if(session()->get('logged_in') == TRUE)
        {
            if(session()->get('role_id') == 1){
                return redirect()->to('/admin/home');
            }
            else{
                return redirect()->to(base_url('member/home'));
            }
        }
    }
}