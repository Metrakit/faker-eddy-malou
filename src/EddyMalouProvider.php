<?php
namespace Metrakit\EddyMalou;

use Faker\Provider\Base;

class EddyMalouProvider extends Base
{
    public function sentence()
    {
        $generator = new Generator();
        return $generator->generateSentence();
    }

    public function paragraph($nb_sentences = 3)
    {
        $generator = new Generator();
        return $generator->generateParagraph($nb_sentences);
    }
} 