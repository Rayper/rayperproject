<?php

namespace App\Controllers;
use App\Models\m_user;
use App\Models\m_tpu;
use App\Models\m_kategori;
use App\Models\m_pemesanan;
use App\Models\m_berita;
use App\Models\m_feedback;
use App\Models\m_tumpangtindih;

class Guest extends BaseController
{
    protected $m_tpu;

    public function index()
    {
        return view('guest/Home');
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
 
    public function Home()
    {
        return view('guest/Home');
    }

    public function liatberita()
    {
        $data['databerita']   = $this->m_berita->getberita();
        return view('guest/liatberita', $data);
    }

    public function detailberita($berita_id)
    {
        
        $data['detailberita']   = $this->m_berita->getdetailberita($berita_id);
        
        return view('guest/detailberita', $data);
    }

    public function tentangkami()
    {
        return view('guest/tentangkami');
    }

    public function faq()
    {
        return view('guest/faq');
    }
 
}
