<?php

require_once __DIR__.'/../src/File.php';

class FileTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $file = new File();
        $file->fpassthru();
    }
}

