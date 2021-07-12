<?php
    class Registration extends CI_Controller
    {
        public function __construct(){
            parent::__construct();

            $this->load->database();
            $this->load->helper('url');
            $this->load->model('Reg_Model');
        }

        public function savedata(){
            $this->load->view('regitest');

            if($this->input->post('save')){
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $mobile=$this->input->post('mobile');
                $this->Reg_Model->saverecords($name,$email,$mobile);
                
            }
        }
        public function displaydata(){
            $result['data']=$this->Reg_Model->displayUsers();
            $this->load->view('display_users',$result);
        }
        
        

        public function deletedata(){
            $ID=$this->input->get('ID');
            $this->Reg_Model->delete_users($ID);
            echo "user removed successfully";
            redirect("Registration/displaydata");
        }

        public function updatedata(){
            $ID=$this->input->get('ID');
            $result['data']=$this->Reg_Model->displayusersbyid($ID);
            $this->load->view('update_usersNew',$result);

            if($this->input->post('update')){
                $ID=$this->input->get('ID');
                $Name=$this->input->post('Name');
                $Email=$this->input->post('Email');
                $Mobile=$this->input->post('Mobile');
                $this->Reg_Model->update_users($ID,$Name,$Email,$Mobile);
                echo "Records Saved Successfully";
                redirect("Registration/displaydata");
            }
        }

        public function generate(){
            $ID=$this->input->get('ID');
            $result['data']=$this->Reg_Model->displayusersbyid($ID);
            $this->load->view('gen',$result);

            if($this->input->post('update')){
                $ID=$this->input->get('ID');
                $Name=$this->input->post('Name');
                $Email=$this->input->post('Email');
                $Mobile=$this->input->post('Mobile');
                
                echo "$Name";
                echo "<br>";
                echo "$Email";
                echo "<br>";
                echo "$Mobile";
                
            }
        }
        function index(){
            $this->load->library('Pdf');
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Pdf Example');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->Write(5, 'CodeIgniter TCPDF Integration');
            $pdf->Output('pdfexample.pdf', 'I');
        }

    }
?>