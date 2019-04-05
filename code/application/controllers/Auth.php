<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email',
            'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password',
            'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/header');
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',
            ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password,
                $user['password'])) {
                $data = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                ];
                $this->session->set_userdata($data);
                redirect('user');
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name',
            'required|trim');
        $this->form_validation->set_rules('email', 'Email',
            'required|trim|valid_email');
        $this->form_validation->set_rules('password1',
            'Password', 'required|trim|min_length[6]
        |matches[password2]');
        $this->form_validation->set_rules('password2',
            'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/header');
            $this->load->view('auth/register');
            $this->load->view('auth/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post
                    ('password1'), PASSWORD_DEFAULT),
                'created_at' => time(),
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message',
                '<div class="alert alert-success" role="alert"> Akun sukses diregistrasi </div>');
            redirect('auth');
        }

    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');

        redirect('auth');
    }
}
