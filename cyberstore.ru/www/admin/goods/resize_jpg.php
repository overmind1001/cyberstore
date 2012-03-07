<?php
    function resize_jpeg($SOURCE, $TARGET, $target_width){	//Функция уменьшения JPG
        $source_image = imagecreatefromjpeg($SOURCE) or die('Cannot load original JPEG');
        $source_width = imagesx($source_image);
        $source_height = imagesy($source_image);
        $scale=$target_width/$source_width;
        $target_height = round($source_height*$scale);
        // Создаем новое изображение
        $target_image = imagecreatetruecolor($target_width, $target_height);
        // Копируем существующее изображение в новое с изменением размера:
        imagecopyresampled(
                            $target_image,  // Идентификатор нового изображения
                            $source_image,  // Идентификатор исходного изображения
                            0,0,            // Координаты (x,y) верхнего левого угла в новом изображении
                            0,0,            // Координаты (x,y) верхнего левого угла копируемого блока существующего изображения
                            $target_width,  // Новая ширина копируемого блока
                            $target_height, // Новая высота копируемого блока
                            $source_width,  // Ширина исходного копируемого блока
                            $source_height  // Высота исходного копируемого блока
                        );
        imagejpeg($target_image, $TARGET, 100);   //сохранение изображения на диск
        imagedestroy($target_image);
        imagedestroy($source_image);
        return $TARGET;
 }
?>
