<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends Kiwi_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('menu_helper');
        $this->load->model('categories_model');

        $this->menu_items = get_menu_items();
        $this->categories = $this->categories_model->get_all();
    }

    public function index() {
        $this->load->model('posts_model');

        $cat_id = $this->input->get('cat_id');

        $data = array(
            'menu_items' => $this->menu_items,
            'categories' => $this->categories,
            'posts' => $this->posts_model->get_latest_posts($cat_id)
        );

        $this->load->view('home_view', $data);
    }

    public function about() {
        $data = array(
            'menu_items' => $this->menu_items,
            'categories' => $this->categories,
        );

        $this->load->view('about_view', $data);
    }

    function contact() {

        $data = array(
            'menu_items' => $this->menu_items,
            'categories' => $this->categories,
        );

        $this->load->view('contact_view', $data);
    }

}
