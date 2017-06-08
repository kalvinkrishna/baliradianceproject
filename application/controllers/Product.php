<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library('session');
		// Load database
		$this->load->model('m_history');
		$this->load->model('m_user');
		$this->load->model('m_merk');
		$this->load->model('m_product');
		$this->load->library('encryption');

		$this->load->library('encryption');

	}

	public function index()
	{
		$data['class'] = $this->m_product->getCarClass();
		$data['package'] = $this->m_product->getPackage();
		$data['product'] = $this->m_merk->product();
		$x=0;
		foreach ($data['product'] as $key => $value) {
			# code...
			//print_r($value);
			$data['image'][$x] = $this->m_product->getAllImage($value['id_car']);
			//print_r($data['image']);
			$x++;
		}

		//ambil gambar pertama pada setiap item dengan cara ini print_r($data['image'][0][0]['src']);
		
		$this->load->view('base/header');
		$this->load->view('product', $data);
		$this->load->view('base/footer');
	}

	public function detail($value='')
	{	
		$data['productimages'] = $this->m_product->getAllImage($value);
		$data['productdetail'] = $this->m_merk->getProduct($value);
		$data['package'] = $this->m_product->getCarPackage($value);
		$this->load->view('base/header');
		$this->load->view('productdetail',$data);
		$this->load->view('base/footer');
	}

	public function personalinfo()
	{	
		// echo $this->input->post('ipackage');
		// echo $this->input->post('icar');
		$car = array(
			'icar' => $this->input->post('icar'),
			'ipackage' => $this->input->post('ipackage')
		);
		print_r($car);
		if($car['icar']!=''){
			$data['productdetail'] = $this->m_merk->getProduct($car['icar']);
			$data['productimages'] = $this->m_product->getAllImage($car['icar']);
			$data['package'] = $this->m_product->getPackages($car['ipackage'],$car['icar']);
			//print_r($data['package']);
			//print_r($data['productimages']);
			$this->session->set_userdata('car',$car);

			$this->load->view('base/header');
			$this->load->view('booking/personalinfo',$data);
			$this->load->view('base/footer');
		}
		else{
			redirect('product','refresh');
		}
		
		
	}

	public function vehicle()
	{		
		$personalinform = array(
			'bname' => $this->input->post('bname'),
			'bphone' => $this->input->post('bphone'),
			'bemail' => $this->input->post('bemail'),
			'bresidence'=> $this->input->post('bresidance'),
			'blicense'=> $this->input->post('blicense'),
			'bcity'=> $this->input->post('bcity'),
			'bcountry'=> $this->input->post('bcountry'),
			'bcompany'=> $this->input->post('bcompany'),
			'baddress'=> $this->input->post('baddress')
		);

		print_r($personalinform);

		$this->session->set_userdata('bpersonalinfo',$personalinform);

		$data['productdetail'] = $this->m_merk->getProduct($this->session->userdata('car')['icar']);
		$data['productimages'] = $this->m_product->getAllImage($this->session->userdata('car')['icar']);
		$data['package'] = $this->m_product->getPackages($this->session->userdata('car')['ipackage'],$this->session->userdata('car')['icar']);

		//print_r($this->session->userdata('car'));
		$this->load->view('base/header');
		$this->load->view('booking/vehicle',$data);
		$this->load->view('base/footer');
	}

	public function bookingconfirmation($value='')
	{
		$vehicleinformation = array(
			'namacar'=>'Daihatsun'
		);
		$this->session->set_userdata('bvehicle',$vehicleinformation);

		$data['carpoint'] = $this->session->userdata('car');
		$data['personinfo'] = $this->session->userdata('bpersonalinfo');
		$data['vehicleinfo'] = $this->session->userdata('bvehicle');

		print_r($data);
		$this->load->view('base/header');
		$this->load->view('booking/bookingconfirmation',$data);
		$this->load->view('base/footer');
	}
}
?>
