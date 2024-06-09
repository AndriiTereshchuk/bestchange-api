<?php

namespace ATereshchuk\BestChange\Methods;

use ATereshchuk\BestChange\{
    Interfaces\MethodInterface,
    Transformers\AbstractTransformer,
    Transformers\ExchangerTransformer
};

class ExchangerMethod implements MethodInterface
{
    /**
     * @return string
     */
    public function getFileName(): string
    {
        return 'bm_exch.dat';
    }

    /**
     * @return AbstractTransformer
     */
    public function getTransformer(): AbstractTransformer
    {
        return new ExchangerTransformer();
    }
}
