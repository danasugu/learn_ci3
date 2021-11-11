<?php

//function to comunicate with the user models

class Users extends CI_Controller {


    public function show(){
        // $this->load->model('user_model'); not needed if activated in autoload $autoload['model'] = array('user_model');

        //get an aray of objects from db
        $result = $this->user_model->get_users();

        foreach ($result as $object) {
            echo "<pre>";
            echo $object->name;
        }

    }

}