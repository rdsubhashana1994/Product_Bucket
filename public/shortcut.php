<?php
// Run XAMPP as admin for this to work!
$target = 'C:\xampp\htdocs\projects\Product_Bucket\storage\app\public';
$shortcut = 'image_assets';
symlink($target, $shortcut);
?>
