 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Editors_pick extends CI_Controller {    
  
  	function __construct(){
	    parent:: __construct();
	    $this->load->model('editorspick_model','m');
	}    

	public function EditorsPick(){
		$data['item'] = $this->m->getEP();
		$this->load->view("EditorsPick/Estory",$data);
	}

	public function rmvEP($id){
        $data['post'] = $this->m->rmvEP($id);
        $this->load->view('editorspick/rmveditor', $data);
 	}

 	public function rmvEditors(){
     	$result = $this->m->rmvEditors();
        redirect(base_url('editors_pick/EditorsPick'));
   	}

   	public function addEP($id){
        $data['post'] = $this->m->addEP($id);
        $this->load->view('adminpage/addeditor', $data);
  	}

  	public function addEditors(){
        $username = $this->input->post('username_hidden');
      	$result = $this->m->addEditors();
        if($result){
          $this->session->set_flashdata('success_msg', 'User Story successfully added to Editors Pick.');
        }
        else{
          $this->session->set_flashdata('error_msg', 'Already in Editors Pick');
        }
        redirect(base_url('gomenasai/view/' .$username));
   	}

}