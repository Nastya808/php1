<?php
$images = glob("images/*.{jpg,jpeg}", GLOB_BRACE);
if ($images) {
    foreach ($images as $image) {
        echo "<img src='$image' alt='$image' style='width: 200px; height: auto; margin: 10px;'><br>";
    }
} else {
    echo "Нет изображений в папке.";
}
?>
