<?php

function get_menu_items() {

    $kiwi = & get_kiwi_instance();

    return array(
        array(
            'href' => $kiwi->router->get_root_url() . '/home',
            'text' => 'Home'
        ),
        array(
            'href' => $kiwi->router->get_root_url() . '/about',
            'text' => 'About us'
        ),
        array(
            'href' => $kiwi->router->get_root_url() . '/contact',
            'text' => 'Contact'
        )
    );
}
