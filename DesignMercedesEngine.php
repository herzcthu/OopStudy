<?php
namespace OopStudy;

class DesignMercedesEngine implements DesignEngineInterface
{
    public function valveCount()
    {
        return '8';
    }

    public function fuel()
    {
        return 'Diesel';
    }
}
