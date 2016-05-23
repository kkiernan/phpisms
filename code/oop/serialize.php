<?php

/*
|---------------------------------------------------------------------
| Serialize / Unserialize
|---------------------------------------------------------------------
*/

require __DIR__ . DIRECTORY_SEPARATOR . 'Person.php';

/**
 * A serializable person example.
 */
class SerializablePerson extends Person
{
    /**
     * The sleep magic method is called before serialization. The intended use 
     * is to perform cleanup tasks. It is also useful for large objects that
     * do not need to be stored in their entirety. For example, we have
     * decided that SSN is not necessary to store and we leave it out.
     *
     * @return array
     */
    public function __sleep()
    {
        return ['firstName', 'middleName', 'lastName'];
    }

    /**
     * The wakeup magic method is called on unserialize and is intended
     * to be used to reestablish database connections or perform other 
     * reinitialization tasks as needed.
     */
    public function __wakeup()
    {
        $this->ssn = 'silly test!';
    }
}

// Create a new object.
$kelly = new SerializablePerson();

// Set some params.
$kelly->setFirstName('Kelly')
    ->setMiddleName('Francis')
    ->setLastName('Kiernan')
    ->setSSN('1234567890');

// The serialize function creates a storable representation of a value.
// This can handle all data types except the resource type.
$serializedKelly = serialize($kelly);

// Print the serialized version of the object.
print_r($serializedKelly);

// You can turn the serialized representation into a PHP value again
// by calling the unserialize function.
$theRealKelly = unserialize($serializedKelly);
$theRealKelly->greet();

// Print the unserialized PHP object.
print_r($theRealKelly);
