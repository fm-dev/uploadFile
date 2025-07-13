<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RekapWarnet extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload'); 
        $this->load->model('DataUpload_model');
    }
	public function index()
	{
        $data['rekap'] = $this->DataUpload_model->get_all("datwarnet");
        $this->load->view("Template/header");
        // $this->load->view("Template/navbar");
        $this->load->view("Template/sidebar");
        $this->load->view("RekapWarnet/RekapHarian",$data);
        $this->load->view("Template/footer");
	}
    public function TambahRekap(){
        $this->load->view("Template/header");
        // $this->load->view("Template/navbar");
        $this->load->view("Template/sidebar");
        $this->load->view("RekapWarnet/FormRekap");
        $this->load->view("Template/footer");
    }
    public function simpanRekap(){
        $config['upload_path'] = './uploads/'; 
        $upload_path = './uploads/';
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0755, true);  // 0755 memberikan izin yang tepat pada folder
        }
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Jenis file yang diizinkan
        $config['max_size'] = 100000; // Maksimal ukuran file (dalam KB)
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
            $this->DataUpload_model->insert('datwarnet', $data);
            $imageUrl = base_url('uploads/' . $upload_data['file_name']); // Menghasilkan URL penuh ke gambar
            $message = "Balinet, Op dea, Jam 15.00 Shift 1 =".$this->input->post("jumlah")."\n" . $imageUrl; // Gabungkan pesan dan URL gambar
            $phoneNumber = '6285263676114'; // Ganti dengan nomor WhatsApp Anda (pastikan menggunakan format internasional)
            $whatsappUrl = 'https://wa.me/' . $phoneNumber . '?text=' . urlencode($message);
            redirect($whatsappUrl); 
        } 
        else {
            // Jika upload gagal, tampilkan error
            $error_message = $this->upload->display_errors();  // Menampilkan pesan error upload
            echo "Upload gagal: " . $error_message;  // Menampilkan error di layar
        }

    }
}
