<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';
    case Close = 'close';

    public function label(): string
    {
        return match ($this) {
            self::Open => 'Aceitando propostas',
            self::Close => 'Encerrado'
        };
    }
}
