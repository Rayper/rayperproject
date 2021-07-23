<?php

namespace App\Controllers;
use App\Models\m_user;
use App\Models\m_tpu;
use App\Models\m_kategori;
use App\Models\m_pemesanan;
use App\Models\m_berita;
use App\Models\m_feedback;
use App\Models\m_tumpangtindih;

class Member extends BaseController
{
    protected $m_tpu;

    public function index()
    {
        $session = session();
    }

    public function __construct()
    {
        $this->form_validation = \Config\Services::validation();
        $this->m_tpu = new m_tpu();
        $this->m_kategori = new m_kategori();
        $this->m_user = new m_user();
        $this->m_pemesanan = new m_pemesanan();
        $this->m_berita = new m_berita();
        $this->m_feedback = new m_feedback();


        helper('form');
        helper('number');
        helper('date');
        helper('session');
        
    }
    
    public function caritpu()
    {
        $keyword = $this->request->getVar('keyword');

        if($keyword)
        {
            $tpu = $this->m_tpu->search($keyword);
        }
        else{
            $tpu = $this->m_tpu;
        }

        $paginate = 6;
        $data['datatpus']   = $this->m_tpu->join('kategori ', 'tpu.Kategori_id = kategori.Kategori_id')->where('tpu.Kategori_id', 1)->paginate($paginate, 'datatpu');
        $data['pager']      = $this->m_tpu->pager;
        echo view('member/caritpu',$data);
    }

    public function caritpuall()
    {
        $keyword = $this->request->getVar('keyword');

        if($keyword)
        {
            $tpu = $this->m_tpu->search($keyword);
        }
        else{
            $tpu = $this->m_tpu;
        }

        $paginate = 6;
        $data['datatpus']   = $this->m_tpu->join('kategori ', 'tpu.Kategori_id = kategori.Kategori_id')->paginate($paginate, 'datatpu');
        $data['pager']      = $this->m_tpu->pager;
        echo view('member/caritpuall',$data);
    }

    public function caritpu2()
    {
        $keyword = $this->request->getVar('keyword');

        if($keyword)
        {
            $tpu = $this->m_tpu->search($keyword);
        }
        else{
            $tpu = $this->m_tpu;
        }

        $paginate = 6;
        $data['datatpus']   = $this->m_tpu->join('kategori ', 'tpu.Kategori_id = kategori.Kategori_id')->where('tpu.Kategori_id', 2)->paginate($paginate, 'datatpu');
        $data['pager']      = $this->m_tpu->pager;
        echo view('member/caritpu2',$data);
    }

    public function caritpu3()
    {
        $keyword = $this->request->getVar('keyword');

        if($keyword)
        {
            $tpu = $this->m_tpu->search($keyword);
        }
        else{
            $tpu = $this->m_tpu;
        }

        $paginate = 6;
        $data['datatpus']   = $this->m_tpu->join('kategori ', 'tpu.Kategori_id = kategori.Kategori_id')->where('tpu.Kategori_id', 3)->paginate($paginate, 'datatpu');
        $data['pager']      = $this->m_tpu->pager;
        echo view('member/caritpu3',$data);
    }

    public function pemesananmakam($tpu_id)
    {
            $data = 
            [
                'validation'    => \Config\Services::validation(),
                'datatpu' => $this->m_tpu->getProduct($tpu_id),
                'bloktpu' => $this->m_tpu->getBloktpu($tpu_id)
            ];
            return view('member/pemesananmakam', $data);
    }

    public function pemesananmakamcovid($tpu_id)
    {
            $data = 
            [
                'validation'    => \Config\Services::validation(),
                'datatpu' => $this->m_tpu->getProduct($tpu_id),
                'bloktpu' => $this->m_tpu->getBloktpu($tpu_id)
            ];
            return view('member/pemesananmakamcovid', $data);
    }

    public function pemesananmakamtumpangtindih($tpu_id)
    {
            $data = 
            [
                'validation'    => \Config\Services::validation(),
                'datatpu' => $this->m_tpu->getProduct($tpu_id),
                'bloktpu' => $this->m_tpu->getBloktpu($tpu_id)
            ];
            return view('member/pemesanantumpangtindih', $data);
    }

    public function Home()
    {
        return view('member/Home');
    }

    public function updateprofilepage(){
        $data = [
            'title'         => 'Update Profil',
            'validation'    => \Config\Services::validation(),
        ];

        return view('member/updateprofile', $data);
    }

    public function updateprofile(){

        if(!$this->validate([
            'phonenumber' => [
                'rules' => 'required|numeric|min_length[8]|max_length[20]|is_unique[user.phonenumber]',

                'errors' => [
                    'required'              => 'Nomor Handhphone wajib diisi',
                    'numeric' 		        => 'Nomor Handphone harus diisi dengan angka saja',
                    'min_length'            => 'Nomor Handphone minimal terdiri dari 8 angka',
                    'max_length'            => 'Nomor Handphone maksimal terdiri dari 20 angka',
                    'is_unique'             => 'Nomor Handphone Sudah Terdaftar'

                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[20]|matches[confirmpw]',

                'errors' => [
                    'required'              => 'Password wajib diisi',
                    'min_length'            => 'Password minimal terdiri dari 8 karakter',
                    'max_length'            => 'Password maksimal terdiri dari 20 karakter',
                    'matches'               => 'Harus sama dengan Konfirmasi Password'
                ]
            ],
            'confirmpw' => [
                'rules' => 'required|min_length[8]|max_length[20]|matches[password]',
                
                'errors' => [
                    'required'              => 'Konfirmasi Password wajib diisi',
                    'min_length'            => 'Konfirmasi Password minimal terdiri dari 8 karakter',
                    'max_length'            => 'Konfirmasi Password maksimal terdiri dari 20 karakter',
                    'matches'               => 'Harus sama dengan Password'
                ]
            ]
        ])){
        
        $validation = \Config\Services::validation();
		return redirect()->to('updateprofilepage')->withInput()->with('validation', $validation);
        }

        $param = $this->request->getVar('email');

        $data = [
            'fullname'    => $this->request->getPost('fullname'),
            'phonenumber' => $this->request->getPost('phonenumber'),
            'password'    => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'confirmpw'   => password_hash($this->request->getPost('confirmpw'), PASSWORD_BCRYPT)
        ];

         $this->m_user->editProfile($data, $param);

         session()->destroy();
         return redirect()->to('/auth/login');
    }
    
    public function getinvoice()
    {
        return view('member/invoice');
    }

    public function savemakam()
    {
        if(!$this->validate([
            'namaAlm' => [
                'rules' => 'required|is_unique[form_pemesanan.namaAlm]',

                'errors' => [
                    'required'              => 'Nama Almarhum wajib diisi',
                    'is_unique'             => 'Nama Almarhum Sudah Terdaftar'
                ]
            ],

            'nikAlm' => [
                'rules' => 'required|is_unique[form_pemesanan.nikAlm]',

                'errors' => [
                    'required'              => 'NIK Almarhum wajib diisi',
                    'is_unique'             => 'NIK Almarhum Sudah Terdaftar'
                ]
            ],

            'namaAhliWaris' => [
                'rules' => 'required|is_unique[form_pemesanan.namaAhliWaris]',
                
                'errors' => [
                    'required'             => 'Nama Ahli Waris wajib diisi',
                    'is_unique'            => 'Nama Ahli Waris Sudah Terdaftar'
                ]
            ],

            'alamatAhliWaris' => [
                'rules' => 'required|is_unique[form_pemesanan.alamatAhliWaris]',
                
                'errors' => [
                    'required'             => 'Alamat Ahli Waris wajib diisi',
                    'is_unique'            => 'Alamat Ahli Waris Sudah Terdaftar'
                ]
            ],

            'NoHPAhliWaris' => [
                'rules' => 'required|numeric|min_length[8]|max_length[30]|is_unique[form_pemesanan.NoHPAhliWaris]',

                'errors' => [
                    'required'              => 'Nomor Handhphone Ahli Waris wajib diisi',
                    'numeric' 		        => 'Nomor Handphone Ahli Warisharus diisi dengan angka saja',
                    'min_length'            => 'Nomor Handphone Ahli Waris minimal terdiri dari 8 angka',
                    'max_length'            => 'Nomor Handphone Ahli Waris maksimal terdiri dari 30 angka',
                    'is_unique'             => 'Nomor Handphone Ahli Waris Sudah Terdaftar'

                ]
            ]
        ])){
        
        $validation = \Config\Services::validation();
		return redirect()->to('pemesananmakam')->back()->withInput()->with('validation', $validation);
        }

        // dd($this->request->getVar());
		$m_pemesanan = new m_pemesanan();

        $suratkematian = $this->request->getFile('suratKematian');
        $ktpalm = $this->request->getFile('KTPAlm');
        $kkalm = $this->request->getFile('KKAlm');
        $ktpahli = $this->request->getFile('KTPAhliWaris');
        $kkahli = $this->request->getFile('KKAhliWaris');
        $ktpsaksi = $this->request->getFile('KTPSaksi');
        $kksaksi = $this->request->getFile('KKSaksi');

        $suratkematianname = $suratkematian->getRandomName();
        $ktpalmname = $ktpalm->getRandomName();
        $kkalmname = $kkalm->getRandomName();
        $ktpahliname = $ktpahli->getRandomName();
        $kkahliname = $kkahli->getRandomName();
        $ktpsaksiname = $ktpsaksi->getRandomName();
        $kksaksiname = $kksaksi->getRandomName();

        $suratkematian->move('uploaded_data', $suratkematianname);
        $ktpalm->move('uploaded_data', $ktpalmname);
        $kkalm->move('uploaded_data', $kkalmname);
        $ktpahli->move('iuploaded_data', $ktpahliname);
        $kkahli->move('uploaded_data', $kkahliname);
        $ktpsaksi->move('uploaded_data', $ktpsaksiname);
        $kksaksi->move('uploaded_data', $kksaksiname);
        
         

		$m_pemesanan->save([
            'user_id'           => $this->request->getVar('user_id'),
            'tpu_id'            => $this->request->getVar('tpu_id'),
            'NamaCustomer'      => $this->request->getVar('NamaCustomer'),
            'tanggalpemesanan'  => $this->request->getVar('tanggalpemesanan'),
            'NamaTPU'           => $this->request->getVar('NamaTPU'),
            'KategoriTPU'       => $this->request->getVar('KategoriTPU'),
            'UnitTPU'           => $this->request->getVar('UnitTPU'),
            'BlokTPU'           => $this->request->getVar('BlokTPU'),
            'namaAlm'           => $this->request->getVar('namaAlm'),
            'nikAlm'            => $this->request->getVar('nikAlm'),
            'tanggalKematian'   => $this->request->getVar('tanggalKematian'),
            'tanggaldiKubur'    => $this->request->getVar('tanggaldiKubur'),
            'namaAhliWaris'     => $this->request->getVar('namaAhliWaris'),
            'alamatAhliWaris'   => $this->request->getVar('alamatAhliWaris'),
            'NoHPAhliWaris'     => $this->request->getVar('NoHPAhliWaris'),
            'suratKematian'     => $suratkematianname,
            'KTPAlm'            => $ktpalmname,
            'KKAlm'             => $kkalmname,
            'KTPAhliWaris'      => $ktpahliname,
            'KKAhliWaris'       => $kkahliname,
            'KTPSaksi'          => $ktpsaksiname,
            'KKSaksi'           => $kksaksiname
        ]);

		return redirect()->to('lihatinvoice');
    }

    public function carinama()
    {
        $keyword = $this->request->getVar('keyword');

        if($keyword)
        {
            $nama = $this->m_pemesanan->search($keyword);
        }
        else{
            $nama = $this->m_pemesanan;
        }

        $paginate = 6;
        $data['datainvoice']   = $this->m_pemesanan->join('status_pembayaran ', 'form_pemesanan.status = status_pembayaran.status')->join('blok_tpu ', 'form_pemesanan.BlokTPU = blok_tpu.Blok_id')->paginate($paginate, 'datainvoice');
        $data['pager']         = $this->m_pemesanan->pager;
        return view('member/carinama', $data);
    }

    public function liatberita()
    {
        $data['databerita']   = $this->m_berita->getberita();
        return view('member/liatberita', $data);
    }

    public function detailberita($berita_id)
    {
        
        $data['detailberita']   = $this->m_berita->getdetailberita($berita_id);
        
        return view('member/detailberita', $data);
    }

    public function tentangkami()
    {
        return view('member/tentangkami');
    }

    public function faq()
    {
        return view('member/faq');
    }

    public function feedback()
    {
        $m_feedback = new m_feedback();

		$m_feedback->save([
            'feedback'        => $this->request->getPost('feedback'),
            'user_id'         => $this->request->getPost('user_id')
        ]);

		return redirect()->to('/member/home');
    }

    public function lihatinvoice()
    {
        $user = session()->get('user_id');

        $m_pemesanan = new m_pemesanan();

        $paginate = 6;
        $data['datainvoice']   = $this->m_pemesanan->join('status_pembayaran ', 'form_pemesanan.status = status_pembayaran.status')->where(['user_id' => $user])->paginate($paginate, 'datainvoice');
        $data['pager']         = $this->m_pemesanan->pager;
        return view('member/lihatinvoice', $data);
    }

    public function detailinvoice($invoice_id)
    {
        $m_pemesanan = new m_pemesanan();

        $data['detailinvoice']   = $this->m_pemesanan->getdetailinvoice($invoice_id);
        
        return view('member/invoicedetail', $data);
    }

    public function cekpembayaran($invoice_id)
    {
        $m_pemesanan = new m_pemesanan();

        $data = 
            [
                'datainvoice'    => $this->m_pemesanan->getdetailinvoice($invoice_id)
            ];
        
        return view('member/cekpembayaran', $data);
    }

    public function uploadbukti($invoice_id)
    {
        // dd($this->request->getVar());
        $m_pemesanan = new m_pemesanan();

        $invoice_id = $this->request->getPost('invoice_id');

        $buktipembayaran = $this->request->getFile('buktipembayaran');

        $buktipembayaranname = $buktipembayaran->getRandomName();

        $buktipembayaran->move('uploads/bukti_pembayaran/', $buktipembayaranname);
        
		$m_pemesanan->update($invoice_id, ['buktipembayaran' => $buktipembayaranname]);

		return redirect()->to('/member/lihatinvoice');
        
    }

    public function cekpenolakan($invoice_id)
    {
        $m_pemesanan = new m_pemesanan();

        $data = 
            [
                'datainvoice'    => $this->m_pemesanan->getdetailinvoice($invoice_id)
            ];
        
        return view('member/cekpenolakan', $data);
    }



}