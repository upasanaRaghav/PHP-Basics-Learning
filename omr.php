<?php

// Sample image processing code using PHP GD
$filename = 'IMG_20201116_143512.jpg';
$markedBubbles = [];

// Load the image
$img = imagecreatefromjpeg($filename);

// Image dimensions
$width = imagesx($img);
$height = imagesy($img);

// Define color threshold (adjust as needed based on your OMR sheet design)
$threshold = 100;

// Loop through rows
for ($y = 0; $y < $height; $y++) {
    // Initialize variables to track the start and end of a marked region in a row
    $startCol = null;
    $endCol = null;

    // Loop through columns
    for ($x = 0; $x < $width; $x++) {
        // Get the RGB color values of the current pixel
        $rgb = imagecolorat($img, $x, $y);
        $color = imagecolorsforindex($img, $rgb);

        // Calculate grayscale intensity (you may need to adjust this based on your OMR sheet)
        $intensity = ($color['red'] + $color['green'] + $color['blue']) / 3;

        // Check if the pixel is part of the marked region based on intensity threshold
        if ($intensity < $threshold) {
            if ($startCol === null) {
                // Set the start column of the marked region
                $startCol = $x;
            }

            // Set the end column of the marked region
            $endCol = $x;
        }
    }

    // Check if a marked region is found in the row
    if ($startCol !== null && $endCol !== null) {
        // Store the information about the marked region
        $markedBubbles[] = [
            'start_col' => $startCol,
            'end_col' => $endCol,
            'row' => $y,
        ];
    }
}

// Output or process the information about the marked regions
print_r($markedBubbles);

// Cleanup
imagedestroy($img);

?>