<?php 

$data = [
    'nama' => 'Barron Mahardhika Al-Fahmi',
    'email' => '19410100107@dinamika.ac.id',
    'nomor' => '082244884027',
    'hobi' => 'Game',
    'sosmed' => ['ig' => '@bvdie13', 'facebook' => 'dikafahmy']
  ];
  
  echo '<br>';
  echo 'Nama : '.$data['nama'];
  echo '<br>';
  echo 'Email : '.$data['email'];
  echo '<br>';
  echo 'Nomor : '.$data['nomor'];
  echo '<br>';
  echo 'Hobi : '.$data['hobi'];
  echo '<br>';
  echo 'Media Sosial : '.'Instagram '.$data['sosmed']['ig'].' & '.'Facebook '.$data['sosmed']['facebook'];
  

?>