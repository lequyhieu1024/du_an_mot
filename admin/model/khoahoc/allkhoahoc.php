<?php 
$sql = "SELECT * FROM danh_muc_khoa_hoc";
$result = pdo_query($sql);
echo "<pre>";
print_r($result);
echo "</pre>"
?>