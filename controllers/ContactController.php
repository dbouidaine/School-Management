<?php

namespace controllers;

use models\Access;
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
        Access::hasAccess('updateContact');
        Contact::update($_POST);
        header('Location: ' . url('admin/contacts'));
    }

    public function add(){
        Access::hasAccess('addContact');
        Contact::new($_POST);
        header('Location: ' . url('admin/contacts'));
    }

    public function delete($url_data){
        Access::hasAccess('deleteContact');
        Contact::destroy($url_data['contact_id']);
        header('Location: ' . url('admin/contacts'));
    }

}