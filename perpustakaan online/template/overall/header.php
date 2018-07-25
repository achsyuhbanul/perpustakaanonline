<?php
session_start();
ob_start();
include 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include'template/head.php'; ?>
</head>
<body>

	<div id="container">
    	
        <div id="header">
        	<?php include'template/header.php'; ?>
        </div>
        
        <div id="menu">
        	<?php include'template/menu.php'; ?>
        </div>
        
        <?php include'template/widget.php'; ?>
        
        <div id="content">