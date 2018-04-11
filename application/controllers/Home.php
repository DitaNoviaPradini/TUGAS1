<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Home  extends CI_Controller {

    public function index()
    {
        //$data['nama']= "Dita novia pradini";
        $data = array(
            'nama'=> "Dita Novia Pradini",
            'alamat'=> "Nganjuk",
            'email'=> "ditanovia40@gmail.com",
             );
             $data["tugas"]=array('Ngoding','makan','olaharaga');
        $this->load->view('home',$data);
        
    }
    

}
?>