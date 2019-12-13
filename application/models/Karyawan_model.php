
<?php

class Karyawan_model extends CI_Model
{
    public function getAllKaryawan()
    {
        return $this->db->get('karyawan')->result_array();
    }

    public function tambahDataKaryawan()
    {
        $data = [
            "id"      => $this->input->post('id', true),
            "Nama" => $this->input->post('Nama',true ),
            "Alamat" => $this->input->post('Alamat',true ),
            "Agama" => $this->input->post('Agama',true ),
            "TTL" => $this->input->post('TTL',true ),
            "Lulusan" => $this->input->post('Lulusan',true ),
            "Bagian" => $this->input->post('Bagian',true ),
            
             ];
          

        $this->db->insert('karyawan', $data);
    }

    public function hapusDataKaryawan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('karyawan');
    }

    public function getKaryawanById($id)
    {
        return $this->db->get_where('karyawan', ['id' => $id])->row_array();
    }

    public function ubahDataKaryawan()
    {
        $data = [
             "id"      => $this->input->post('id', true),
            "Nama" => $this->input->post('Nama',true ),
            "Alamat" => $this->input->post('Alamat',true ),
            "Agama" => $this->input->post('Agama',true ),
            "TTL" => $this->input->post('TTL',true ),
            "Lulusan" => $this->input->post('Lulusa',true ),
            "Bagian" => $this->input->post('Bagian',true ),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('Karyawan', $data);
    }

    public function cariDataKaryawan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id', $keyword);
        $this->db->or_like('nama', $keyword);
    
      

        return $this->db->get('karyawan')->result_array();
    }
}
