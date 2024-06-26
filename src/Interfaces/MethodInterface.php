<?php

namespace ATereshchuk\BestChange\Interfaces;

use ATereshchuk\BestChange\Transformers\AbstractTransformer;

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
