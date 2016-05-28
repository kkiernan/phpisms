<?php

/*
|---------------------------------------------------------------------
| Filesystem Functions
|---------------------------------------------------------------------
*/

// Get file size in bytes.
echo filesize('../assets/albums.csv') . PHP_EOL;

// Get file type.
echo filetype('../assets/alone.txt') . PHP_EOL;

// Print boolean indicating if a file exists.
var_dump(file_exists('./doesnt-exist.txt'));

// Open CSV for reading.
$albums = fopen('../assets/albums.csv', 'r');

// Loop over CSV rows and print column data as arrays.
while ($data = fgetcsv($albums, 1024, ',')) {
    print_r($data);
}

// Close the file.
fclose($albums);

// Write file content to output buffer.
readfile('../assets/albums.csv') . PHP_EOL;

// Read file contents into a string.
echo file_get_contents('../assets/alone.txt');
