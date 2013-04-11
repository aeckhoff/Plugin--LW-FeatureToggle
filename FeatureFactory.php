<?php

namespace LwFeatureToggle;

class FeatureFactory
{
    public static function buildFeature($FeatureName, $FeatureState)
    {
        $Feature = new \LwFeatureToggle\Feature($FeatureName);
        $Feature->setState($FeatureState);
        return $Feature;
    }
}
