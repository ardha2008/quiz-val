<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kuis extends CI_Controller {

	public function index()
	{
        if($this->input->post('konfirmasi')){
            $this->db->insert('poling',$this->input->post());
        }
       
        $data['soal']=array(1=>
        '1.	Bagaimana kemudahan dalam mengoperasikan halaman aplikasi sistem informasi (user-friendly) ?',
        '2.	Bagaimana kemudahan dalam mencari data surat pada aplikasi surat keluar masuk ?',
        '3.	Bagaimana kemudahan dalam melakukan pengolahan data pada surat pada aplikasi surat keluar masuk ?',
        '4.	Bagaimana kemudahan dalam mencari laporan surat ?',
        '5.	Bagaimana kelengkapan informasi mengenai surat keluar masuk ?',
        '6.	Bagaimana kemudahan dalam memperoleh laporan informasi surat berdasarkan kriteria ?',
        '7.	Bagaimana kemudahan dalam memperoleh informasi pegawai yang terlibat di dalam sistem ?',
        '8.	Bagaimana kejelasan sistem penilaian kinerja pegawai dari aplikasi surat keluar masuk?',
        '9.	Bagaimana kemudahan mendapat informasi melalui fitur live notification (SMS Gateway, Whatsapp, Facebook) ?',
        '10.	Bagaimana kemudahan dalam mengoperasikan keseluruhan aplikasi ini ?'
        );
		$this->load->view('kuis',$data);
	}
    
    function hasil(){
        $q=$this->db->get('poling');
        $data['hasil']=$q->result_array();
        $this->load->view('hasil',$data);
    }
    
   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */