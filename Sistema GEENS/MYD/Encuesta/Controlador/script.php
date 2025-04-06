<?php
$contra = "hola123"; 
$contra2 = "jksjksjks"; 

$hash = PASSWORD_HASH($contra2,PASSWORD_BCRYPT); 
   echo $hash; 

if(password_verify($contra, $hash)){
   echo "son lo mismo"; 
}
else{
   "no funca"; 
}
?> 