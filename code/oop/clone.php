<?php

/*
|---------------------------------------------------------------------
| Object Cloning
|---------------------------------------------------------------------
*/

require __DIR__ . DIRECTORY_SEPARATOR . 'Person.php';

class CloneablePerson extends Person
{
    /**
     * The clone magic method is called on a new clone after it has
     * been created. This allows you to change any properties if
     * needed as the clone is a shallow copy, and any properties
     * that are references will remain references.
     */
    public function __clone()
    {
        echo "I am a clone!" . PHP_EOL;
    }
}

// Create a cloneable person.
$kelly = new CloneablePerson();

// Set some properties.
$kelly->setFirstName('Kelly')
    ->setLastName('Kiernan');

// Create the clone!
$kellyJr = clone $kelly;

// Print the clone.
print_r($kellyJr);
