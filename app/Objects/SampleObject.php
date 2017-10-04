<?php
namespace shmurakami\Objects;

class SampleObject
{

    public function __construct()
    {
    }

    public function isTestMethod()
    {
        return true;
    }

    public function isPrivateMethod()
    {
        return false;
    }

}

