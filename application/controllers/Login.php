<?php
class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/index');
        $this->load->view('template/footer');
    }

    public function Register()
    {
        $this->load->view('template/regheader');
        $this->load->view('template/reg');
        $this->load->view('template/regfooter');
    }

    public function process_login()
    {
        $Username = $this->input->post('userid');
        $Password = $this->input->post('pwd');

        //Error Checking
        //Check if Input are not Empty
        if (empty($Username) || empty($Password)) {
            $this->session->set_flashdata('msg', 'Fields Empty');
            redirect('login');
            exit();
        } else {
            // Check if Username Exit
            $this->db->select('*');
            $this->db->from('signup');
            $this->db->where(['email' => $Username]);
            $this->db->or_where(['pnumber' => $Username]);
            $result = $this->db->get()->row_array();

            if (empty($result)) {
                $this->session->set_flashdata('msg', 'User does not exist');
                redirect('login');
                exit();
            } else {
                //De-hashing The Password
                $Check = password_verify($Password, $result['password']);

                if ($Check == false) {
                    $this->session->set_flashdata('msg', 'Wrong Password');
                    redirect('login');
                    exit();
                } else {

                    // Log User Into The Website
                    $meme = date("d-m-Y");
                    $this->session->set_userdata('date',$meme);
                    $this->session->set_userdata('user_id', $result['id']);
                    $this->session->set_userdata('user_email', $result['Email']);
                    $this->session->set_userdata('year', date("Y"));


//                    $access = $this->session->access;
                    redirect('admin');

                }

            }
        }

    }

    public function process_signup()
    {

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');
        $pnumber = $this->input->post('pnumber');
        $pwd = $this->input->post('pwd');
        $pwdr = $this->input->post('pwdr');

        // echo "$Username";
        // echo "<br>";
        // echo "$Password";
        // die();

        if (!isset($fname) || !isset($lname) || !isset($email) || !isset($pnumber) || !isset($pwd)) {
            $this->session->set_flashdata('msg', 'All Fields are Required');
            redirect('Login/Register');
            exit();
        } else {
            if (!preg_match("/[a-zA-Z]/", $fname) || !preg_match("/[a-zA-Z]/", $lname) && !preg_match("/[a-zA-Z]/", $email) || !preg_match("/[a-zA-Z0-9]/", $pnumber) || !preg_match("/[a-zA-Z0-9]/", $pwd)) {
                $this->session->set_flashdata('msg', 'Character not allow');
                redirect('Login/Register');
                exit();
            } else {

                // Check if the Email is a Valid Email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $this->session->set_flashdata('msg', 'Email Address invalid');
                    redirect('Login/Register');
                    exit();
                } else {
                    // Check if Username Exit
                    $this->db->select('*');
                    $this->db->from('signup');
                    $this->db->where(['email' => $email]);
                    $this->db->or_where(['pnumber' => $pnumber]);
                    $result = $this->db->get()->row_array();

                    if ($result > 0) {
                        $this->session->set_flashdata('msg', 'Information exit!! on Database');
                        redirect('Login/Register');
                        exit();
                    } else {
                        if ($pwd == $pwdr){
                            $password = password_hash($pwd, PASSWORD_DEFAULT);

                            // inserting into the database
                            $data = array(
                                'fname' => $fname,
                                'lname' => $lname,
                                'email' => $email,
                                'pnumber' => $pnumber,
                                'password' => $password
                            );

                            $this->db->insert('signup', $data);
                            redirect('Login');
                        }else{
                            $this->session->set_flashdata('msg', 'confirm that both password are the same');
                            redirect('Login/Register');
                            exit();
                        }
                    }
                }

            }
        }
    }

    public function logout()
    {

        session_unset();
        session_destroy();
        redirect("Login");

    }



}
