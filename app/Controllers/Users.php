<?php

namespace App\Controllers;

class Users extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index() {
        $data['users'] = $this->users_model->get_users();
        $this->load->view('welcome_message', $data);
    }

    public function add() {
        $this->users_model->add_user();
        echo json_encode(array("status" => true));
    }

    public function edit() {
        $this->users_model->edit_user();
        echo json_encode(array("status" => true));
    }

    public function delete() {
        $this->users_model->delete_user();
        echo json_encode(array("status" => true));
    }
}