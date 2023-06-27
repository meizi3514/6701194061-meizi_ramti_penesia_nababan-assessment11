<?php 
$hasil = 0;
if($_POST['operasi'] == '+'){
    $hasil = $_POST['angka1'] + $_POST['angka2'];
} else if($_POST['operasi'] == '-'){
    $hasil = $_POST['angka1'] - $_POST['angka2'];
} else if($_POST['operasi'] == '*'){
    $hasil = $_POST['angka1'] * $_POST['angka2'];
} else if($_POST['operasi'] == '/'){
    $hasil = $_POST['angka1'] / $_POST['angka2'];
}
echo $hasil;
?>