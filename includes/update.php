<?php

require_once "./../includes/action.php";

if (isset($_GET["update"])) {
    $id = $_GET["id"] ?? null;
    $where = array("id" => $id);
    $row = $obj->select_record("medicine", $where);
}
