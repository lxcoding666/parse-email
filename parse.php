<?php
error_reporting(0);
## log save ##
function sv($site,$ext){
$fp = fopen("$ext.txt", 'a');
fwrite($fp, "$site\n");
fclose($fp);
}
## color ##
function wr($cl,$st){
	$cc .= "\033[" . $cl . "m";
	$cc .=  $st . "\033[0m";
	return $cc;
}
echo wr("0;31","  ____ ____ _________ ____ ____ ____ ____ ____ ____ 
||L |||X |||       |||C |||O |||D |||I |||N |||G ||
||__|||__|||_______|||__|||__|||__|||__|||__|||__||
|/__\|/__\|/_______\|/__\|/__\|/__\|/__\|/__\|/__\|
            LX CODING PARSE EMAIL\n\n");

;
//sleep(2);
print wr("0;33","[+] Email Extractor(Parse Email)\n");
//sleep(2);
print wr("0;33","[+] Opening PARSE EMAIL...\n");
//sleep(1);
print wr("0;33","[+] Please Wait ...\n\n");
if($argv[1]){
sleep(2);
$email = file_get_contents($argv[1]);
$preg = '/[\w.%+-]+@(?:[a-z\d-]+\.)+[a-z]{2,4}/iu';
echo $cover;
if (!preg_match_all($preg, $email, $emails)) {
    echo 'No emails found :(';
} else {
    $exmail = array_flip(array_flip($emails[0]));
    $hitung         = sizeof($exmail);
    $pisah  = implode("\n", $exmail);
    echo "Total E-mail ($hitung)\n\n";
    echo "$pisah";
    sv($pisah,"email");
}
}
?>
