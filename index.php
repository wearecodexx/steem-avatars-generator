<!DOCTYPE html>
<html lang="en">
<head>
<title>Steem Avatar Generator - Plankton</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-ca" />
<link rel="Shortcut Icon" href="favicon.png" type="image/x-icon" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js" ></script>

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
# Get var
$seed = htmlspecialchars($_GET["seed"]);
# Convert accented, thx http://stackoverflow.com/a/3373364 for the list
$unwanted = array( 'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                   'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                   'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                   'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                   'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
$seed = strtr( $seed, $unwanted );
# Security against code injection
$seed = preg_replace('/[^A-Za-z0-9\._-]/', '', $seed);
# Limit the string to 35 char
$seed = substr($seed,0,35).'';
if ($seed == '') {
    $seed = uniqid();
}

?>
<section class="top">
<div class="container">
<h1>STEEM AVATAR GENERATOR</h1>
</div>
</section><!--/top-->

<section class="content">
<div id="wrapper" class="container">

<div class="col-md-6 col-xs-12">
<div class="avatar-container">
  <img class="avatar" src="avatar.php?seed=<?php echo "$seed"; ?>" title="to download the picture, right click and SAVE AS *.PNG picture" >
</div><!--/plankton-->


  <div class="form">
 <H2>PLANKTON</H2>
  <form>

    <input class="smallbutton" type="text" name="seed" id="name" value="" autofocus placeholder="NAME*" />
    <input class="bigbutton" type="submit" value="Generate" />
  </form>

  <br/>
  <em>(* empty=random)</em><br/><br/>
</div><!--/form-->
</div>

<div class="col-md-6 col-xs-12">
<div class="avatar-container">
  <img class="avatar" src="avatar-minnow.php?seed=<?php echo "$seed"; ?>" title="to download the picture, right click and SAVE AS *.PNG picture" >
</div><!--/plankton-->


  <div class="form">
   <H2>MINNOW</H2>
  <form>

    <input class="smallbutton" type="text" name="seed2" id="name" value="" autofocus placeholder="NAME*" />
    <input class="bigbutton" type="submit" value="Generate" />
  </form>

  <br/>
  <em>(* empty=random)</em><br/><br/>
</div><!--/form-->
</div>

<div class="col-md-6 col-xs-12">
<div class="avatar-container">
  <img class="avatar" src="avatar.php?seed=<?php echo "$seed"; ?>" title="to download the picture, right click and SAVE AS *.PNG picture" >
</div><!--/plankton-->


  <div class="form">
   <H2>DOLPHIN</H2>
  <form>

    <input class="smallbutton" type="text" name="seed2" id="name" value="" autofocus placeholder="NAME*" />
    <input class="bigbutton" type="submit" value="Generate" />
  </form>

  <br/>
  <em>(* empty=random)</em><br/><br/>
</div><!--/form-->
</div>

<div class="col-md-6 col-xs-12">
<div class="avatar-container">
  <img class="avatar" src="avatar.php?seed=<?php echo "$seed"; ?>" title="to download the picture, right click and SAVE AS *.PNG picture" >
</div><!--/plankton-->


  <div class="form">
   <H2>ORCA</H2>
  <form>

    <input class="smallbutton" type="text" name="seed2" id="name" value="" autofocus placeholder="NAME*" />
    <input class="bigbutton" type="submit" value="Generate" />
  </form>

  <br/>
  <em>(* empty=random)</em><br/><br/>
</div><!--/form-->
</div>

<div class="col-md-6 col-xs-12">
<div class="avatar-container">
  <img class="avatar" src="avatar.php?seed=<?php echo "$seed"; ?>" title="to download the picture, right click and SAVE AS *.PNG picture" >
</div><!--/plankton-->


  <div class="form">
   <H2>WHALE</H2>
  <form>

    <input class="smallbutton" type="text" name="seed2" id="name" value="" autofocus placeholder="NAME*" />
    <input class="bigbutton" type="submit" value="Generate" />
  </form>

  <br/>
  <em>(* empty=random)</em><br/><br/>
</div><!--/form-->
</div>

</div><!-- container-->
</section><!-- /content-->

<section class="info clearfix">
  <div class="container">

    <h3>Instructions</h3>
    <p>Just click [GENERATE] button to create a new random character.<br>
    Right click on the generated image then Save it to your desktop.</p>
<h3>Thanks to the contributors</h3>
  <p><a href="http://www.steemit.com/@fabiyamada" target="_blank">@fabiyamada</a>
<a href="http://www.steemit.com/@funtraveller" target="_blank">@funtraveller</a></p>

<h3>Contribute</h3>
  <p>We accept contributions to have more avatar parts in order to have even more and cooler results as random generated image.
Please refer to <a href="https://drive.google.com/drive/folders/1K3taMIGZa9UR4t6UGQ1TBbJHk2HJ9Xry" target="_blank">this file to get the base of the Plankton avatar</a>.</p>
<p>You can make your contribution trough <a href="https://www.utopian.io" target="_blank">utopian.io</a>, make sure to let us know by leaving a comment in our steem account: <a href="http://www.steemit.com/@wearecodex" target="_blank">@wearecodex</a> or leave a message on the issues section of our <a href="https://github.com/wearecodexx/plankton-generator" target="_blank">github repo</a>. We will add a link to your steem profile, portfolio or what you prefer to the contributors section if your contribution gets merged to out project.</p>

</div>
</section>

<section class="bottom clearfix">
<div class="container">
  Based on code: <a href="https://www.splitbrain.org/blog/2007-01/20_monsterid_as_gravatar_fallback" title="original author">CC-By Andreas Gohr </a>
  </section><!--/bottom-->
  </div><!--/container-->
</body>
</html>
