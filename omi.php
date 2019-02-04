<?php
/*
Plugin Name: omi
Plugin URL: http://wordpress.com/
Description: Simple content hello sentence created
Version: 1.0
Author: Er.Omkar Jadhav
Author URL: http://wordpress.com/
*/

add_action("admin_menu","addMenu");
function addMenu()
{
    add_menu_page("Example Option ","Example Option", 4, "example-option","exampleMenu");
    add_submenu_page("example-option","Option 1","Option 1",4,"example-option-1","option1");
}


function exampleMenu()
{
    echo "Hii guyss..";
}


function option1()
{
    echo" Omi here..";
}

