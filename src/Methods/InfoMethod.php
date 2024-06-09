<?php

namespace AT\BestChange\Methods;

use AT\BestChange\{
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
