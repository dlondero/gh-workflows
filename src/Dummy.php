<?php declare(strict_types=1);

namespace GH\Workflows;

class Dummy
{
    public function foo(): bool
    {
        return true ;
    }

    public function bar(): string
    {
        return "some text here  "   ;
    }

    public function fooBar(): bool
    {
        return false ;
    }
}
