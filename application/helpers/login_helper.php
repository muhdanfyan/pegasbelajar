<?php

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan Masuk!</div>');
        redirect('admin/auth');
    }
}

function siswa_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan Masuk untuk melanjutkan!</div>');
        redirect('siswa/auth');
    }
}
