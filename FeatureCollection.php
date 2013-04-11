<?php

namespace LwFeatureToggle;

class FeatureCollection
{
    private $Collection = array();
    private $FeatureConfiguration = array();

    public function __construct($FeatureConfiguration)
    {
        $this->FeatureConfiguration = $FeatureConfiguration;
    }
    
    public function addFeature($feature)
    {
        $this->Collection[$feature->getName()] = $feature;
    }
    
    public function removeFeature($featureName)
    {
        $this->Collection[$featureName] = false;
    }
    
    public function getFeature($featureName)
    {
        return $this->Collection[$featureName];
    }
}
