<?php 

$tanya=readline("Pilih Mana (yes/no) ?");
if($tanya=="yes")           //jika memilih yes
{
    echo "Kamu memilih Yes";
}elseif($tanya=="no")       //jika memilih no
{
    echo "Kamu memilih No";
}elseif($tanya=="maybe")    //jika memilih maybe
{
    echo "Kamu memilih maybe";
}else                       //jika tidak memilih yes/no/maybe (tidak dalam pilihan yang tersedia)
{
    echo "Kamu tidak memilih pilihan yang tersedia !!";
}


echo PHP_EOL;
$menu=readline("Pilih angka 1-3 ? ");
// pilih input yang akan diuji
switch($menu)
{
    case 1:              //jika user menginput angka 1
        echo "Anda memilih angka 1";
        break;
    case 2:              //jika user menginput angka 2
        echo "Anda memilih angka 2";
        break;
    case 3:              //jika user menginput angka 3
        echo "Anda memilih angka 3";
        break;
    default;             //jika user tidak menginput angka yang tersedia
        echo "Anda tidak memilih pilihan yang tersedia";
}

?>