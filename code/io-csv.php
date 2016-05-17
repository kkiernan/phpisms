<?php

/*
|---------------------------------------------------------------------
| CSV Input / Output
|---------------------------------------------------------------------
*/

// Prints the filesize in bytes.
echo filesize('../assets/albums.csv') . "\n\n";

// Creates a resource bound to a stream (the albums.csv file in this
// case) for reading only, as indicated by the second parameter.
$albums = fopen('../assets/albums.csv', 'r');

// Reads data from the albums CSV line by line.
// ---
// The second parameter (optional) can be omitted in PHP 5+ but this
// is slightly slower. This parameter specifies a length in
// characters, and it should be longer than any single
// line in the file.
// ---
// The optional delimiter parameter sets the field delimiter.
while ($data = fgetcsv($albums, 1024, ',')) {

    // Prints an array of fields in the current line.
    print_r($data);
}

// Close the file resource.
fclose($albums);
