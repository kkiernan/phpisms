<?php

/*
|---------------------------------------------------------------------
| Filesystem Functions
|---------------------------------------------------------------------
*/

// Basic examples.
echo filesize('../assets/albums.csv') . PHP_EOL;
echo filetype('../assets/alone.txt') . PHP_EOL;
echo fileowner('../assets/albums.csv') . PHP_EOL; 
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
echo file_get_contents('../assets/alone.txt') . PHP_EOL;

// Read file contents into an array.
print_r(file('../assets/alone.txt'));

// Write a string to a file. Identicaly to calling
// fopen(), fwrite() and fclose().
file_put_contents('../assets/foo.txt', 'hello file!');
