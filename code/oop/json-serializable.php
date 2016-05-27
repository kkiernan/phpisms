<?php

/**
 * An employee class that implements the JsonSerializable interface
 * that was introduced in PHP 5.4. This allows you to hook into
 * json_encode calls and determine how an object is encoded.
 */
class Employee implements JsonSerializable
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $position;

    /**
     * Creates a new instance.
     *
     * @param string $name
     * @param string $email
     * @param string $position
     */
    public function __construct($name, $email, $position)
    {
        $this->name = $name;
        $this->email = $email;
        $this->position = $position;
    }

    /**
     * Called when json_encode is called on an object.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'position' => $this->position
        ];
    }
}

// Create a new employee.
$dave = new Employee('Dave', 'Smith', 'Engineer');

// Note that this is especially badass as an empty object would
// be printed if we had not implemented the interface.
// 
// Prints: {"name":"Dave","email":"Smith","position":"Engineer"}
echo json_encode($dave) . PHP_EOL;

// Ok, lets get Dave as a JSON string.
$jsonDave = json_encode($dave);

// And now for fun, let's get an object Dave
// back from the string using json_decode.
$objectDave = json_decode($jsonDave);

// See it worked.
echo $objectDave->name . PHP_EOL;

// But wait! We can also force Dave to be an array.
$arrayDave = json_decode($jsonDave, true);

// Ha! Wonderous!
echo $arrayDave['name'];

// json_decode also takes a depth parameters and an additional
// options bitmask value. Refer to the docs for more info.
// 
// http://php.net/manual/en/function.json-decode.php
