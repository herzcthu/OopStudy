<?php
namespace OopStudy;

/*
 * Car Class depends on DesignBody Class and DesignEngine class to get body and engine information
 */
class Car
{
    protected $body;

    protected $engine;

    /*
     *    inject to DesignBody class and DesignEngine class via constructor
     */
    public function __construct(DesignBodyInterface $body, DesignEngineInterface $engine)
    {
        $this->body = $body;
        $this->engine = $engine;
    }

    public function getBodyType()
    {
        return $this->body->type();
    }

    public function getEngineType()
    {
        return $this->engine->valveCount() . ' Valve. ' . $this->engine->fuel();
    }

    // public function getBody(DesignBody $body)
    // {
    //     $this->body = $body;
    // }

    // public function getEngine(DesignEngine $engine)
    // {
    //     $this->engine = $engine;
    // }
}
