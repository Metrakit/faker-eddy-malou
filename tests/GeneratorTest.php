<?php

class GeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testSentence()
    {
        $generator = new Metrakit\EddyMalou\EddyMalouProvider\Generator();
        $this->assertNotEmpty($generator->generateSentence());
    }
    public function testParagraph()
    {
        $generator = new Metrakit\EddyMalou\EddyMalouProvider\Generator();
        $this->assertNotEmpty($generator->generateParagraph());
    }
}
