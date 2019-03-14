<?php
include '1.php';

/*
    https://github.com/mry2/spamcall
*/
 
$init = new Bom();

echo "Silahkan isi (contoh : 628xxxx)\nMasukan Nomer Target ==> ";
$a = trim(fgets(STDIN));
$init->no = "$a";
$init->type = 2;

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
