<?php
use Metrakit\EddyMalou\EddyMalouProvider;

class EddyMalouProviderTest extends PHPUnit_Framework_TestCase
{
    public function testSentence()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new EddyMalouProvider($faker));
        $this->assertNotEmpty($faker->sentence());
    }
    public function testParagraph()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new EddyMalouProvider($faker));
        $this->assertNotEmpty($faker->paragraph());
    }
}
 