<?php

require_once __DIR__ . '/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../index.php';

class ExampleTest extends TestCase {
    public function testAddNumbers() {
        $this->assertEquals(8, addNumbers(5, 3));
    }
}

?>