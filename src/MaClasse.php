<?php

namespace App;

class MaClasse
{
    public function disBonjour(string $nom): string
    {
        return 'Hello, ' . ucfirst($nom) . '!';
    }
}
