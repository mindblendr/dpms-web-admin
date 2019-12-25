<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<ul class="nav-main">
    <li class="nav-main-heading">
        <span class="sidebar-mini-visible">HD</span>
        <span class="sidebar-mini-hidden">Heading</span>
    </li>
    <li>
        <a class="<?php set_active('dashboard'); ?>" href="<?php link_url(); ?>">
            <i class="si si-cup"></i>
            <span class="sidebar-mini-hidden">Dashboard</span>
        </a>
    </li>
    <li>
        <a class="<?php set_active('dentist'); ?>" href="<?php link_url('dentist'); ?>">
            <i class="icofont-tooth"></i>
            <span class="sidebar-mini-hide">Dentist</span>
        </a>
    </li>
    <!-- <li>
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-puzzle"></i>
            <span class="sidebar-mini-hide">Dropdown</span>
        </a>
        <ul>
            <li>
                <a href="javascript:void(0)">Link #1</a>
            </li>
            <li>
                <a href="javascript:void(0)">Link #2</a>
            </li>
        </ul>
    </li> -->
</ul>