<?php

namespace App\Tests;
use App\MaClasse;
use PHPUnit\Framework\TestCase;
class MaClasseTest extends TestCase
{
    public function testDisBonjour()
    {
        $maClasse = new MaClasse();
        $resultat = $maClasse->disBonjour('david');
        $this->assertEquals('Hello, david!', $resultat);
    }
}