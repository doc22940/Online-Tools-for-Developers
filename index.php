<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
  <head>
       <title>Online Tools for Developers</title>
       <link href="./css/style.css" rel="stylesheet" type="text/css">
       <META NAME="Description" CONTENT="NO Description">
       <META NAME="Keywords" CONTENT="------------------------">
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>

<body>
   <div id="content">
	<div id="logo">
    <a href="index.php" title="banner"><img src="./images/banner.gif" alt="Online Tools for Developers" border="0" align="center"></img></a>
    </div> 

<br><br>
<?php

if (isset($_GET["id"]))
    {
       if (is_file('./tools/'.$_GET["id"].'.php')) {
         include('./tools/'.$_GET["id"].'.php');
        } else {
		       header("Location: 404.php");
		       }
	}
	else {
?>
<h2>Online Tools for Developers</h2>
<p>Collection of Tools for Software Developers,These tools include several formatters, validators, code minifiers, string escapers, 
encoders and decoders, message digesters, web resources and more. </p>
<!-- Encoders & decoders Tools -->
<div id="tools-category">
<h3>Encoders & decoders Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=base64-encoder" title="Base64 Encoder">Base64 Encoder</a></li>
	<li><a href="?id=base64-decoder" title="Base64 Decoder">Base64 Decoder</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>
	<li><a href="?id=url-encoder" title="URL Encoder">URL Encoder</a></li>
	<li><a href="?id=url-decoder" title="URL Decoder">URL Decoder</a></li>
  </ul>  
 </div>
</div>
<!-- Cryptography & Security Tools -->
<div id="tools-category">
<h3>Cryptography & Security Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=md5-generator" title="MD5 Generator">MD5 Generator</a></li>
	<li><a href="?id=..." title="SHA-256 Generator">SHA-256 Generator</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>
	<li><a href="?id=..." title="SHA-512 Generator">SHA-512 Generator</a></li>
	<li><a href="?id=..." title="HMAC Generator">HMAC Generator</a></li>
  </ul>  
 </div>
</div>
<!-- Search engine optimization Tools -->
<div id="tools-category">
<h3>Search engine optimization Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=css-compressor" title="CSS Minifier">CSS Minifier</a></li>
	<li><a href="?id=..." title="Advanced Robots TXT Generator">Advanced Robots TXT Generator</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>
	<li><a href="?id=..." title="...">..</a></li>
	<li><a href="?id=..." title="...">..</a></li>
  </ul>  
 </div>
</div>
<!-- Webmaster Tools -->
<div id="tools-category">
<h3>Webmaster Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=..." title="Robots.txt Validator">Robots.txt Validator</a></li>
	<li><a href="?id=online-privacy-ip-browser-info" title="user information privacy">user information privacy</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>

  </ul>  
 </div>
</div>

</div><!-- End content -->

<?php
	}
?>