<?php
$image = imagecreatetruecolor(400, 300);

// Allocate a color for the polygon
$col_poly = imagecolorallocate($image, 254, 245, 235);

// Draw the polygon
imagepolygon($image, array(
       100,   100,
       100,   200,
       100,   100,
       200,   200

    ),
    4,
    $col_poly);

// Output the picture to the browser
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
