<?php

defined('BASEPATH') or exit('No direct script access allowed');

function is_logged_in()
{
  $ci = get_instance();
  if (!$ci->session->userdata('nik')) {
    redirect('auth');
  } else {
    $nik = $ci->session->userdata('nik');
    $result = $ci->db->query("SELECT role_id FROM system_user WHERE nik='$nik'")->row_array();
    $role_id = $result['role_id'];
    $submenu = $ci->uri->segment(1);
    $subsubmenu = $ci->uri->segment(1) . '/' . $ci->uri->segment(2);

    $queryMenu = $ci->db->get_where('system_sub_menu', ['url' => $submenu])->row_array();
    if ($queryMenu) {
      $menu_id = $queryMenu['menu_id'];
    } else {
      $queryMenu = $ci->db->query("SELECT menu_id FROM system_sub_sub_menu WHERE url='$submenu' OR url='$subsubmenu'")->row_array();
      $menu_id = $queryMenu['menu_id'];
    }

    $userAccess = $ci->db->get_where('system_access', [
      'role_id' => $role_id,
      'menu_id' => $menu_id
    ]);

    if ($userAccess->num_rows() < 1) {
      redirect('auth/blocked');
    }
  }
}

function is_logged_in2()
{
  $ci = get_instance();
  if (!$ci->session->userdata('nip')) {
    redirect('auth');
  }
}

function check_nik($nik)
{
  $ci = get_instance();

  $ci->db->where('nik', $nik);
  $result = $ci->db->get('system_user');

  if ($result->num_rows() > 0) {
    return "checked='checked'";
  }
}
