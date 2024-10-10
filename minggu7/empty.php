<?php
$myArray = array();
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}
echo "<br>";
if (empty($nonExistentVar)) {
    echo"Variable tidak ditemukan atau kosong.";
}else{
    echo"Variable terdefinisikan dan tidak kosong.";
}
?>