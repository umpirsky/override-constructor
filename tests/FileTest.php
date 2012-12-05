<?php

require_once dirname(__FILE__).'/../src/File.php';

class FileTest extends PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $file = new File();
        $file->fpassthru();
    }
}

