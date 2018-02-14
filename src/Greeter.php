<?php

class Greeter
{
    /** @var Logger $logger */
    private $logger;

    public function __construct(Logger $logger = null)
    {
        $this->logger = $logger;
    }

    public function greet($person = null)
    {
        $name = $person ? ' ' . $person->getName() : '';

        if ($this->logger && $person) {
            $this->logger->log($name);
        }

        return 'Hello' . $name;
    }
}
