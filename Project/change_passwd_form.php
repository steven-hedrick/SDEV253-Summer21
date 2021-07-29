<?php

require_once('bookmark_fns.php');
session_start();
do_html_header('Chnage password');
chekc_valid_user();

display_password_form();

display_user_menu();
do_html_footer();

function change_password($username, $old_password, $new_password) {
    login($username, $old_password);
    $conn = db_connect();
    $result = $conn->query("update user set passwd = sha1('".$new_password."') where username = '".$username."'");

    if (!$result) {
        throw new Exception('Password could not be changed.');
    } else {
        return true;
    }
}

?>