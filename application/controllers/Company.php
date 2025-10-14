<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Pagina_model','mP');
	}

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*$datos["nombre"]="Alejandro Góngora Escalante";
		$datos["correo"]="alejandro.gongora@correo.uady.mx";
		$datos["nombre_seccion"]=$this->mP->consultar_seccion();
		$this->load->view('welcome_message',$datos);*/
        $this->load->view('secciones/header');
        $this->load->view('company');
        $this->load->view('secciones/footer');
	}

    public function avisos(){
        $this->load->view('secciones/header');
        $this->load->view('avisos');
        $this->load->view('secciones/footer');
    }


}