<?php

build_monster($_REQUEST['seed'],$_REQUEST['size']);

function build_monster($seed='',$size=''){
    // init random seed
    if($seed) srand( hexdec(substr(md5($seed),0,6)) );

    // throw the dice for body parts
    $parts = array(
        'finleft' => rand(1,2),
      'lowerbody' => rand(1,2),
      'mouth' => rand(1,2),
      'upbody' => rand(1,2),
      'eye' => rand(1,2),
      'finright' => rand(1,2),
      'accessories' => rand(1,2)
    );

    // create backgound
    $monster = @imagecreatetruecolor(256, 256)
        or die("GD image create failed");
    $white   = imagecolorallocate($monster, 255, 255, 255);
    imagefill($monster,0,0,$white);

    // add parts
    foreach($parts as $part => $num){
        $file = dirname(__FILE__).'/img-orca/'.$part.'_'.$num.'.png';

        $im = @imagecreatefrompng($file);
        if(!$im) die('Failed to load '.$file);
        imageSaveAlpha($im, true);
        imagecopy($monster,$im,0,0,0,0,256,256);
        imagedestroy($im);

    }

    // restore random seed
    if($seed) srand();

    // resize if needed, then output
    if($size && $size < 400){
        $out = @imagecreatetruecolor($size,$size)
            or die("GD image create failed");
        imagecopyresampled($out,$monster,0,0,0,0,$size,$size,256,256);
        header ("Content-type: image/png");
        imagepng($out);
        imagedestroy($out);
        imagedestroy($monster);
    }else{
        header ("Content-type: image/png");
        imagepng($monster);
        imagedestroy($monster);
    }
}
