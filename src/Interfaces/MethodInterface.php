<?php

namespace AT\BestChange\Interfaces;

use AT\BestChange\Transformers\AbstractTransformer;

interface MethodInterface
{
    /**
     * @return string
     */
    public function getFileName(): string;

    /**
     * @return AbstractTransformer
     */
    public function getTransformer(): AbstractTransformer;
}
