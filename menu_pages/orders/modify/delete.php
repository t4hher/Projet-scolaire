<?php
require("../../db.php");
$ref = $_GET['ref'];

$db->exec("DELETE FROM orders WHERE order_id = $ref");

header("Location:../orders.php");
exit;