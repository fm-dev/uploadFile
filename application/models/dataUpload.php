<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataUpload extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk mengambil semua data dari tabel
    public function get_all($table)
    {
        return $this->db->get($table)->result_array(); // Mengambil semua data
    }

    // Fungsi untuk menyisipkan data ke dalam tabel
    public function insert($table, $data)
    {
        return $this->db->insert($table, $data); // Menyisipkan data
    }

    // Fungsi untuk memperbarui data di dalam tabel
    public function update($table, $data, $condition)
    {
        return $this->db->update($table, $data, $condition); // Memperbarui data berdasarkan kondisi
    }

    // Fungsi untuk menghapus data di dalam tabel
    public function delete($table, $condition)
    {
        return $this->db->delete($table, $condition); // Menghapus data berdasarkan kondisi
    }

    // Fungsi untuk mengambil data berdasarkan kondisi tertentu
    public function get_by_condition($table, $condition)
    {
        return $this->db->get_where($table, $condition)->row_array(); // Mengambil data berdasarkan kondisi
    }
}
