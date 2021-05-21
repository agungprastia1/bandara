<?php
defined('BASEPATH') or exit('No Direct Script  denied Accesss alowed');
/**
 * 
 */
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }

    function index()
    {
        $this->load->view('login');
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $run = $this->cekakun($username, $password);
        // var_dump($run);
        // die();
        if ($run == true) {
            $data = [
                'user' => $username,
                'status' => "login"
            ];
            $this->session->set_userdata($data);
            redirect(base_url());
        } else {
            echo '<script type="text/javascript">
                      alert("Username atau Password Salah.!");
                    </script>';
            $this->load->view('login');
        }
    }

    private function cekakun($username, $password)
    {
        $where = [
            'username' => $username,
            'password' => $password
        ];
        $cek = $this->model->login('akun', $where);
        if (count($cek) != 0) {
            foreach ($cek as $u) {
                $user = $u['username'];
            }
            foreach ($cek as $p) {
                $pass = $p['password'];
            }

            if ($username === $user && $password === $pass) {
                return true;
            } else {
                return false;
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
