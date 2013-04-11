<?php

namespace LwFeatureToggle;

class Feature
{
    private $IsFeatureActive = false;
    private $FeatureName = "";

    public function __construct($FeatureName)
    {
        $this->FeatureName = $FeatureName;
    }
    
    public function getName()
    {
        return $this->FeatureName;
    }
    
    public function isActive()
    {
        return $this->IsFeatureActive;
    }
    
    public function setState($bool)
    {
        if ($bool === true) {
            $this->IsFeatureActive = true;
        }
        else {
            $this->IsFeatureActive = false;
        }
    }
}
