<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
  <title>Education details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
<form method = "post">
 <label class="checkbox-inline"><input type="checkbox" name = "course[]" value="iitm">DOMS</label>
<label class="checkbox-inline"><input type="checkbox" name = "course[]" value="iitd1">IITD1</label>
<label class="checkbox-inline"><input type="checkbox" name = "course[]" value="iitd2">IITD2</label>
<label class="checkbox-inline"><input type="checkbox" name = "course[]" value="ism">ISM</label> 
<br><br>
<input type = "submit" name = "datasubmit" value = "Submit" class = "btn btn-success"/>
</form>
</div>
