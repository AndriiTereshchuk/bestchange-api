<?php

namespace ATereshchuk\BestChange\Methods;

use ATereshchuk\BestChange\{
    Interfaces\MethodInterface,
    Transformers\AbstractTransformer,
    Transformers\InfoTransformer
};

class InfoMethod implements MethodInterface
{
    /**
     * @return string
     */
    public function getFileName(): string
    {
        return 'bm_info.dat';
    }

    /**
     * @return AbstractTransformer
     */
    public function getTransformer(): AbstractTransformer
    {
        return new InfoTransformer();
    }
}
