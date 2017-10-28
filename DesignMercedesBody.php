<?php
namespace OopStudy;

class DesignMercedesBody implements DesignBodyInterface
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function type()
    {
        return $this->type;
    }

    public function model()
    {
        return 'Mercedes';
    }
}
