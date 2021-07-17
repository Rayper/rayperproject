<?php

namespace App\Controllers;
use App\Models\m_user;

class Auth extends BaseController
{
	public function __construct()
    {
        helper('form', 'url');
        $this->form_validation = \Config\Services::validation();
    }
 
    public function index()
    {
        $session = session();
    }
 
    public function register()
    {
        $data = [
            'title'         => 'Daftar',
            'validation'    => \Config\Services::validation()
        ];

        return view('auth/v_register', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Masuk',
            'validation'    => \Config\Services::validation()
        ];
       
        return view('auth/v_login', $data);
    }

    public function cekpassword()
    {

        if(!$this->validate([
            'email' => [
                'rules' => 'required|valid_email',

                'errors' => [
                    'required'              => 'Email wajib diisi',
                    'valid_email'           => 'Email tidak valid'
                ]
            ],
            'password' => [
                'rules' => 'required',

                'errors' => [
                    'required'              => 'Password wajib diisi'
                ]
            ]
        ])){
        
        $validation = \Config\Services::validation();
		return redirect()->to('login')->withInput()->with('validation', $validation);
        }

        $m_user = new m_user();

        $email      = $this->request->getVar('email');
        $password   = $this->request->getPost('password');
        $role       = $this->request->getPost('role_id');

        $data = $m_user->where(['email' => $email])->first();

        if($data){
            if(password_verify($password, $data->password)){
                session()->set([
                    'email'         => $data->email,
                    'user_id'       => $data->user_id,
                    'phonenumber'   => $data->phonenumber,
                    'fullname'      => $data->fullname,
                    'logged_in'     => TRUE, 
                    'role_id'       => $data->role_id
                ]);
                if(session()->get('role_id') == 1){
                    return redirect()->to('/admin/home');
                }
                else{
                    return redirect()->to('/member/home');
                }
            }
            
            else{
                session()->setFlashdata('msg', 'Kata sandi salah!');
                return redirect()->to('login');
            }
        }else{
            session()->setFlashdata('msg', 'Email belum terdaftar!');
            return redirect()->to('login');
        }
    }
 
    public function save()
    {
        if(!$this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_unique[user.email]',

                'errors' => [
                    'required'              => 'Email wajib diisi',
                    'valid_email'           => 'Email tidak valid',
                    'is_unique'             => 'Email Sudah Terdaftar'
                ]
            ],

            'fullname' => [
                'rules' => 'required|is_unique[user.fullname]',
                
                'errors' => [
                    'required'             => 'Nama Panjang wajib diisi',
                    'is_unique'            => 'Nama Pengguna Sudah Terdaftar'
                ]
            ],
            'phonenumber' => [
                'rules' => 'required|numeric|min_length[8]|max_length[20]|is_unique[user.phonenumber]',

                'errors' => [
                    'required'              => 'Nomor Handhphone wajib diisi',
                    'numeric' 		        => 'Nomor Handphone Harus Diisi Dengan Angka Saja',
                    'min_length'            => 'Nomor Handphone Minimal Terdiri Dari 8 Angka',
                    'max_length'            => 'Nomor Handphone Maksimal Terdiri Dari 20 Angka',
                    'is_unique'             => 'Nomor Handphone Sudah Terdaftar'

                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[20]|matches[confirmpw]',

                'errors' => [
                    'required'              => 'Kata Sandi wajib diisi',
                    'min_length'            => 'Kata Sandi Minimal Terdiri Dari 8 Karakter',
                    'max_length'            => 'Kata Sandi Maksimal Terdiri Dari 20 Karakter',
                    'matches'               => 'Harus Sama Dengan Konfirmasi Kata Sandi'
                ]
            ],
            'confirmpw' => [
                'rules' => 'required|min_length[8]|max_length[20]|matches[password]',
                
                'errors' => [
                    'required'              => 'Konfirmasi Kata Sandi wajib diisi',
                    'min_length'            => 'Konfirmasi Kata Sandi Minimal Terdiri Dari 8 Karakter',
                    'max_length'            => 'Konfirmasi Kata Sandi Maksimal Terdiri Dari 20 Karakter',
                    'matches'               => 'Harus Sama Dengan Kata Sandi'
                ]
            ]
        ])){
        
        $validation = \Config\Services::validation();
		return redirect()->to('register')->withInput()->with('validation', $validation);
        }

		$m_user = new m_user();

		$m_user->save([
            'email'       => $this->request->getPost('email'),
            'fullname'    => $this->request->getPost('fullname'),
            'phonenumber' => $this->request->getPost('phonenumber'),
            'password'    => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'confirmpw'   => password_hash($this->request->getPost('confirmpw'), PASSWORD_BCRYPT)
        ]);

        session()->setFlashdata('pesan', 'Berhasil Membuat Akun ! Silahkan Masuk');

		return redirect()->to('login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
 
}