<?php
  
  //buat function askname
  //parameternya $nama
  //askname("rendi saptra"), //namam adalah  rendi saputra

function askname($nama)
{
    $format_nama=ucwords(strtolower($nama));
    echo "namamu adalah $format_nama";
}
askname("rendi saputra");


?>