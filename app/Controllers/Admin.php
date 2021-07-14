<?php

namespace App\Controllers;
use App\Models\m_user;
use App\Models\m_tpu;
use App\Models\m_pemesanan;
use App\Models\m_berita;
use App\Models\m_tumpangtindih;


class Admin extends BaseController
{
    public function __construct()
    {
        $this->form_validation = \Config\Services::validation();
        $this->m_tpu = new m_tpu();
        $this->m_user = new m_user();
        $this->m_pemesanan = new m_pemesanan();
        $this->m_berita = new m_berita();
        helper('form');
        helper('number');
        helper('date');
    }

    public function Home()
    {
        return view('admin/home');
    }

    public function uploadberita()
    {
        return view('admin/uploadberita');
    }

    public function prosesberita()
    {
        $m_berita = new m_berita();

        $Thumbnail     = $this->request->getFile('Thumbnail');
        $Thumbnailname = $Thumbnail->getRandomName();
        $Thumbnail->move('Thumbnail_berita', $Thumbnailname);

		$m_berita->save([
            'nama'            => $this->request->getPost('nama'),
            'Judul'           => $this->request->getVar('Judul'),
            'tanggalupload'   => $this->request->getVar('tanggalupload'),
            'Thumbnail'       => $Thumbnailname,
            'Isi'             => $this->request->getVar('Isi')
        ]);

		return redirect()->to('home');
    }
    
    
    public function invoice()
    {
        $paginate = 6;
        $data['datainvoice']   = $this->m_pemesanan->join('status_pembayaran ', 'form_pemesanan.status = status_pembayaran.status')->join('blok_tpu ', 'form_pemesanan.BlokTPU = blok_tpu.Blok_id')->orderBy('form_pemesanan.invoice_id', 'asc')->paginate($paginate, 'datainvoice');
        $data['pager']         = $this->m_pemesanan->pager;
        return view('admin/invoice', $data);
    }

    public function cekbukti($invoice_id)
    {
        $m_pemesanan = new m_pemesanan();

        $data = 
            [
                'datainvoice'  => $this->m_pemesanan->getdetailinvoice($invoice_id),
            ];
        
        return view('admin/cekbukti', $data);
    }

    public function penolakan($invoice_id)
    {
        $m_pemesanan = new m_pemesanan();

        $data = 
            [
                'datainvoice'    => $this->m_pemesanan->getdetailinvoice($invoice_id)
            ];
        
        return view('admin/penolakan', $data);
    }

    public function ubahstatus($invoice_id)
    {

        // dd($this->request->getVar());

        $m_pemesanan = new m_pemesanan();

        $invoice_id = $this->request->getPost('invoice_id');

		$m_pemesanan->update($invoice_id, ['status' => $this->request->getPost('status')]);

		return redirect()->to('/admin/invoice');
        
    }

    // public function downloadbukti($invoice_id)
    // {
    //     $m_pemesanan = new m_pemesanan();
        
    //     $data = 

	// 	return $this->response->download('public/uploads/bukti_pembayaran/' . $data->buktipembayaran, null);
    // }


}
