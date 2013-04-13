<?php

namespace LwFeatureToggle;

class FeatureCollection implements \Iterator
{
    private $Collection = array();
    private $position = 0;

    public function __construct()
    {
        $this->position = 0;
    }
    
    public function addFeature(\LwFeatureToggle\Feature $feature)
    {
        $this->Collection[] = $feature;
    }
    
    public function getFeature($featureName)
    {
        foreach($this->Collection as $feature) {
            if ($feature->getName() == $featureName) {
                return $feature;
            }
        }
    }
    
    function count()
    {
        return count($this->Collection);
    }
    
    function rewind() {
        $this->position = 0;
    }

    function current() {
        return $this->Collection[$this->position];
    }

    function key() {
        return $this->position;
    }

    function next() {
        ++$this->position;
    }    
    
    function valid() {
        return isset($this->Collection[$this->position]);
    }
}