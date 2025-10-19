<?php

declare(strict_types=1);

namespace App;

class MaClasse
{
    public function disBonjour(string $nom): string
    {
        return 'Hello, ' . ucfirst($nom) . '!';
    }
}
