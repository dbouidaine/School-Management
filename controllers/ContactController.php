<?php

namespace controllers;

use models\Contact;
use views\ContactView;

class ContactController extends Controller{

    public function index(){
        $args['contacts']=Contact::getAll();
        $home=new ContactView();
        $home->index($args);
        $home->view();
    }

    public function update(){
        //Access::hasAccess('updateClass');
        Contact::update($_POST);
        header('Location: ' . url('admin/contacts'));
    }

    public function add(){
        //Access::hasAccess('updateClass');
        Contact::new($_POST);
        header('Location: ' . url('admin/contacts'));
    }

    public function delete($url_data){
        Contact::destroy($url_data['contact_id']);
        header('Location: ' . url('admin/contacts'));
    }

}