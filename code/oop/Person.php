<?php

/**
 * A simple person class for use in other examples.
 */
class Person
{
    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $middleName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $ssn;

    /**
     * Offers a greeting.
     *
     * @return null
     */
    public function greet()
    {
        echo "Hello! My name is $this->firstName $this->middleName $this->lastName." . PHP_EOL;
    }

    /**
     * Sets the firstName attribute.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Sets the middleName attribute.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Sets the lastName attribute.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Sets the ssn attribute.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setSSN($ssn)
    {
        $this->ssn = $ssn;

        return $this;
    }
}
