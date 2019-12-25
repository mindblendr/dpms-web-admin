<?php
defined('BASEPATH') or exit('No direct script access allowed');

function asset_url($path = '', $echo = TRUE)
{
    $CI = get_instance();
    if ($echo) {
        echo base_url('assets/' . $path . '?v=' . $CI->config->item('asset_version'));
    }
    return base_url('assets/' . $path . '?v=' . $CI->config->item('asset_version'));
}

function set_active($page = NULL)
{
    $CI = get_instance();
    if (isset($page) && isset($CI->active_page) && $CI->active_page == $page) {
        echo 'active';
    }
}

function link_url($path = NULL, $echo = TRUE)
{
    $CI = get_instance();
    if ($echo) {
        echo base_url('/' . $path);
    }
    return base_url('/' . $path);
}