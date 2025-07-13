<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RekapWarnet extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload'); 
        $this->load->model('DataUpload');
    }
	public function index()
	{
        $data['rekap'] = $this->dataUpload->get_all("datwarnet");
        $this->load->view("Template/header");
        $this->load->view("Template/Navbar");
        $this->load->view("Template/sidebar");
        $this->load->view("RekapWarnet/RekapHarian",$data);
        $this->load->view("Template/footer");
	}
    public function TambahRekap(){
        $this->load->view("Template/header");
        $this->load->view("Template/Navbar");
        $this->load->view("Template/sidebar");
        $this->load->view("RekapWarnet/FormRekap");
        $this->load->view("Template/footer");
    }
    public function simpanRekap(){
        $config['upload_path'] = './uploads/'; // Folder tempat file akan disimpan
         $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Jenis file yang diizinkan
        $config['max_size'] = 2048; // Maksimal ukuran file (dalam KB)
        $config['encrypt_name'] = TRUE; // Enkripsi nama file agar tidak bentrok
        $this->upload->initialize($config);

        if ($this->upload->do_upload('file')) {
            $upload_data = $this->upload->data();
            $data = [
                "nama_warnet" => $this->input->post("nama_warnet"),
                "nama_op" => $this->input->post("nama_operator"),
                "jam" => $this->input->post("jam_akhir"),
                "shift" => $this->input->post("shift"),
                "jumlah" => $this->input->post("jumlah"),
                "gambar" => $upload_data['file_name'], 
                "created_by" => $this->input->post("nama_operator"),
            ];
            $this->dataUpload->insert('datwarnet', $data);
            $imageUrl = base_url('uploads/' . $upload_data['file_name']); // Menghasilkan URL penuh ke gambar
            $message = "Balinet, Op dea, Jam 15.00 Shift 1 =".$this->input->post("jumlah") . $imageUrl; // Gabungkan pesan dan URL gambar
            $phoneNumber = '6285263676114'; // Ganti dengan nomor WhatsApp Anda (pastikan menggunakan format internasional)
            $whatsappUrl = 'https://wa.me/' . $phoneNumber . '?text=' . urlencode($message);
            redirect($whatsappUrl); 
        } else {
           echo "Tidak Berhasil";
        }

    }
}
