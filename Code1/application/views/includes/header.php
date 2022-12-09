<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<?php foreach($css as $key => $path): ?>
		<link rel="stylesheet" id="<?= $key; ?>" href="<?= $path; ?>">
	<?php endforeach; ?>
	<?php foreach($js as $key => $path): ?>
		<script id="<?= $key; ?>" src="<?= $path; ?>"></script>
	<?php endforeach; ?>
	<title><?= $title ?></title>
<body>