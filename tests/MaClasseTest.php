<?php

declare(strict_types=1);

namespace App\Tests;

use App\MaClasse;
use PHPUnit\Framework\TestCase;

class MaClasseTest extends TestCase
{
    public function testDisBonjour(): void
    {
        $maClasse = new MaClasse();
        $resultat = $maClasse->disBonjour('david');
        $this->assertEquals('Hello, David!', $resultat);
    }
}
