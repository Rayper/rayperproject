<?php

namespace App\Controllers;
use App\Models\m_user;
use App\Models\m_tpu;
use App\Models\m_kategori;

class Member extends BaseController
{
    // protected $helpers = [];
    // protected $m_kategori;
    protected $m_tpu;

    public function __construct()
    {
        // parent::__construct();
        // $this->load->model(array('m_tpu'));
        $this->m_tpu = new m_tpu();
        $this->m_kategori = new m_kategori();
        helper('form');
        helper('number');
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
        $data['datatpus']   = $this->m_tpu->join('kategori ', 'tpu.Kategori_id = kategori.Kategori_id')->paginate($paginate, 'datatpu');
        $data['pager']      = $this->m_tpu->pager;
        echo view('member/caritpu',$data);
    }

    public function pemesananmakam($tpu_id)
    {
        $kategori = $this->request->getPost('kategori_id');

        $data = 
        [
            'datatpu' => $this->m_tpu->getProduct($tpu_id),
            'bloktpu' => $this->m_tpu->getBloktpu($tpu_id)
        ];

            return view('member/pemesananmakambaru', $data);
    }

    public function Home()
    {
        return view('member/Home');
    }

    public function pemesanantumpangtindih()
    {
        return view('member/pemesanantumpangtindih');
    }

    public function pemesanancovid()
    {
        return view('member/pemesanancovid');
    }
    
    public function updateprofile(){
        $data = [
            'title'         => 'Update Profil',
            'validation'    => \Config\Services::validation()
        ];

        return view('member/updateprofile', $data);
    }
    
    public function getinvoice()
    {
        return view('member/invoice');
    }

    public function suksespage()
    {
        return view('member/suksespage');
    }
}
