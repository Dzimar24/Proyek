<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Home_m');
	}

	public function index() {
		//? Pagination
		$this->load->library('pagination');

		$konfig['base_url'] = 'http://localhost/Proyek/home/index';
		$konfig['total_rows'] = $this->Home_m->count();
		$konfig['per_page'] =	 4;

		//? Pagination Style
		$konfig['full_tag_open'] = '<ul class="pagination modal-1">';
		$konfig['full_tag_close'] = '</ul>';

		$konfig['first_link'] = 'First';
		$konfig['first_tag_open'] = '<li>';
		$konfig['first_tag_close'] = '</li>';
		
		$konfig['last_link'] = 'Last';
		$konfig['last_tag_open'] = '<li>';
		$konfig['last_tag_close'] = '</li>';
		
		$konfig['next_link'] = '&raquo';
		$konfig['next_tag_open'] = '<li>';
		$konfig['next_tag_close'] = '</li>';
		
		$konfig['prev_link'] = '&laquo';
		$konfig['prev_tag_open'] = '<li>';
		$konfig['prev_tag_close'] = '</li>';
		
		$konfig['cur_tag_open'] = '<li class=""> <a class="prev active" href="#">';
		$konfig['cur_tag_close'] = '</a></li>';

		$konfig['num_tag_open'] = '<li>';
		$konfig['num_tag_close'] = '</li>';

		$konfig['attributes'] = array('class' => 'page-item');

		$this->pagination->initialize($konfig);
		$start = $this->uri->segment(3);

		//? Configuration
		$this->db->from('konfigurasi');
		$config = $this->db->get()->row();

		//? Carousel
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		//? Category
		$this->db->from('kategori');
		$category = $this->db->get()->result_array();

		//? Content
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$this->db->order_by('a.tanggal','DESC');
		$this->db->limit($konfig['per_page'],$start);
		$content = $this->db->get()->result_array();

		//? Get Content Title
		$title = $this->db->get('konten')->result_array();

		//? Gallery
		$this->db->from('gallery');
		$gallery = $this->db->get()->result_array();
		
		$data = array(
			'judul' => "Homepage",
			'config' => $config,
			'category' => $category,
			'recept'	=> $this->Home_m->rcp(),
			'caraousel' => $caraousel,
			'title' => $title,
			'gallery'	=> $gallery,
			'content' => $content,//$data['start']
		);
		$this->load->view('beranda', $data);
	}

	public function article($id) {
		//? Configuration
		$this->db->from('konfigurasi');
		$config = $this->db->get()->row();

		//? Category
		$this->db->from('kategori');
		$category = $this->db->get()->result_array();

		//? Content
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$this->db->where('slug', $id);
		$content = $this->db->get()->row();

		//? Gallery
		$this->db->from('gallery');
		$gallery = $this->db->get()->result_array();
		
		$data= array(
			'judul' => $content->judul,
			'recept'	=> $this->Home_m->rcp(),
			'config' => $config,
			'category' => $category,
			'gallery'	=> $gallery,
			'content' => $content
		);

		$this->load->view('article', $data);
	}

	public function category($id) {
		//? Configuration
		$this->db->from('konfigurasi');
		$config = $this->db->get()->row();

		//? Category
		$this->db->from('kategori');
		$category = $this->db->get()->result_array();

		//? Content
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$this->db->where('a.id_kategori',$id);
		$content = $this->db->get()->result_array();
		
		//? Category
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;

		//? Gallery
		$this->db->from('gallery');
		$gallery = $this->db->get()->result_array();

		$data= array(
			'judul' => $nama_kategori." Category",
			'nama_kategori' => $nama_kategori,
			'recept'	=> $this->Home_m->rcp(),
			'config' => $config,
			'gallery'	=> $gallery,
			'category' => $category,
			'content' => $content
		);
		$this->load->view('category', $data);
	}

	public function gallery() {
		//? Configuration
		$this->db->from('konfigurasi');
		$config = $this->db->get()->row();

		//? Category
		$this->db->from('kategori');
		$category = $this->db->get()->result_array();

		//? Content
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$this->db->where('a.id_kategori');
		$content = $this->db->get()->result_array();

		//? Gallery
		$this->db->from('gallery');
		$gallery = $this->db->get()->result_array();

		$data= array(
			'gallery'	=> $gallery,
			'judul' => "Gallery",
			'recept'	=> $this->Home_m->rcp(),
			'config' => $config,
			'category' => $category,
			'content' => $content
		);

		$this->load->view('gallery', $data);
	}

	public function contact() {
		//? Configuration
		$this->db->from('konfigurasi');
		$config = $this->db->get()->row();

		//? Category
		$this->db->from('kategori');
		$category = $this->db->get()->result_array();

		//? Content
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$this->db->where('a.id_kategori');
		$content = $this->db->get()->result_array();

		//? Gallery
		$this->db->from('gallery');
		$gallery = $this->db->get()->result_array();

		$data = array(
			'gallery'	=> $gallery,
			'judul' => "Suggestion",
			'recept'	=> $this->Home_m->rcp(),
			'config' => $config,
			'category' => $category,
			'content' => $content,
		);

		$this->load->view('contact', $data);
	}
	public function contact_add() {
		$this->db->from('saran');
		$this->db->where('name', $this->input->post('name'));
		$check = $this->db->get()->row();
		$data = $this->Home_m->plus();
		$this->session->set_flashdata('success', '<h4>Queries Success Add</h4>');
		redirect('Home/contact');
	}
}
