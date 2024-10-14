<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';
    case Closed = 'closed';

    public function label():string
    {
        return match ($this){
            self::Open => 'Aceitando Propostas',
            self::Closed => 'Encerrado',
        };
        // Podemos fazer com varios ifs ou usar o match
        // if($this == self::Open) {
        //     return 'Aceitando Propostas';
        // }
        // if($this == self::Closed){
        //     return 'Encerrado';
        // }
    }
}
