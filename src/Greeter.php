<?php

class Greeter
{
    public function greet($person = null)
    {
        return 'Hello' . ($person ? ' ' . $person->getName() : '');
    }
}
