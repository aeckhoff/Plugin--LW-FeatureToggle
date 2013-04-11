<?php

namespace LwFeatureToggle;

class FeatureCollectionFactory
{
    public function createFeatureCollection($FeatureConfiguration)
    {
                
        $Feature = \LwFeatureToggle\FeatureFactory::buildFeature($FeatureName, $FeatureState);
    }
    
}
