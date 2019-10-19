<?php


class Mahasiswa extends CI_Controller{

  public function __construct()
  {
    parent ::__construct();
    $this->load->model('Mahasiswa_model');


    $this->load->library('form_validation');
   

  }



    public function index()
    {

    
        $data['judul']= 'Daftar Mahasiswa';
        $data['mahasiswa']= $this->Mahasiswa_model->getAllMahasiswa();
        if($this->input->post('keyword')){
          $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('templates/header' $data);
        $this->load->view('mahasiswa/index');
        $this->load->view('templates/footer');

    }

    public function tambah(){
      $data['judul']= 'Form Tambah Data Mahasiswa';
      $this->form->validation->set_rules('nama', 'Nama', 'required');
      $this->form->validation->set_rules('nrp', 'Nrp', 'required| numeric');
      $this->form->validation->set_rules('email', 'Email', 'required|valid_email');


      if($this->form_validation->run() == false){
        
      
      $this->load->view('tempaltes/header');
      $this->load->view('mahasiswa/tambah'); 
      $this->load->view('tempaltes/footer');

      }else{
        $this->Mahasiswa_model->tambahDataMahasiswa();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('mahasiswa');
      }
    }


    public function hapus($id)
    {
      $this->Mahasiswa_model->hapusDataMahasiswa($id);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect ('mahasiswa');
    }

    public function detail($id)
    {
      $data['judul']='Detail Data Mahasiswa';
      $data['mahasiswa']= $this->Mahasiswa_model->getMahasiswaById($id);
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/detail', $data);
      $this->load->view('templates/footer');
    }



    public function ubah($id){
      $data['judul']= 'Form Ubah Data Mahasiswa';
      $data['mahasiswa']= $this->Mahasiswa_model->getMahasiswaById($id);
      $data ['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

      $this->form->validation->set_rules('nama', 'Nama', 'required');
      $this->form->validation->set_rules('nrp', 'Nrp', 'required| numeric');
      $this->form->validation->set_rules('email', 'Email', 'required|valid_email');


      if($this->form_validation->run() == FALSE){
        
      
      $this->load->view('tempaltes/header', $data);
      $this->load->view('mahasiswa/ubah', $data); 
      $this->load->view('tempaltes/footer');

      }else{
        $this->Mahasiswa_model->UbahDataMahasiswa();
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('mahasiswa');
      }
    }

   

}

        // $data['mahasiswa'] =[
        //     'nama' => 'Doddy ferdiansyah',
        //     'nrp' => '173040153',
        //     'email' => 'doddy@gmail.com',
        //     'jurusan' =>'Teknik Pangan'

        // ],

        // [
        // 'nama' => 'Sandhika Galih',
        // 'nrp' => '173040154',
        // 'email' => 'Shandika@gmail.com',
        // 'jurusan' =>'Teknik Mesin'
        // ],

        // ];

   

// $this->load->model('Mahasiswa_model', 'mhs');
//     $data['mahasiswa'] = $this->mhs->getAllMahasiswa();

//         $this->load->view('mahasiswa/index', $data);
//     }

// }

