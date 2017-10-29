<?php
if(isset($_POST['steamid'])){ $steamid = $_POST['steamid']; }else{ $steamid = '76561198090828416'; }
require 'steamfunc.php';
?>
<html>
<head>
<title>SteamFunc by Volting - Preview</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
<center>
<h1>SteamFunc | Preview</h1>
<small>v1.0 by Volting</small><br><br>
<a class="github-button" href="https://github.com/Volting" aria-label="Follow @Volting on GitHub">Follow @Volting</a><br><br><br>
<form method="post">
  <div class="form-group">
    <label for="steamid">SteamID</label>
    <input type="number" class="form-control" id="steamid" name="steamid" value="<?php echo $steamid; ?>"> 
  </div>
  <button type="submit" class="btn btn-primary">Ok</button>
</form>
<br><br>
<a>steam_getpic(<?php echo $steamid; ?>)</a><br>
<img src="<?php echo steam_getpic($steamid); ?>"></img><br><br>

<a>steam_getpic_medium(<?php echo $steamid; ?>)</a><br>
<img src="<?php echo steam_getpic_medium($steamid); ?>"></img><br><br>

<a>steam_getpic_full(<?php echo $steamid; ?>)</a><br>
<img src="<?php echo steam_getpic_full($steamid); ?>"></img><br><br>

<a>steam_steamid(<?php echo $steamid; ?>)</a><br>
<a><?php echo steam_steamid($steamid); ?></a><br><br>

<a>steam_getname(<?php echo $steamid; ?>)</a><br>
<a><?php echo steam_getname($steamid); ?></a><br><br>