<?php 
$conn = pg_connect("host='localhost' port='1202' user='postgres' password='Naynay12' 
dbname='tugas_besar'"); 
 
if ($conn) { 
    echo "Koneksi Sukses"; 
} else { 
    echo "Koneksi Gagal"; 
} 
?>