<?php

namespace LwFeatureToggle;

class FeatureCollectionFactory
{
    public static function createFeatureCollection(\LwFeatureToggle\FeatureConfiguration $FeatureConfiguration, $FeatureSet)
    {
        $FeatureCollection = new \LwFeatureToggle\FeatureCollection();
        $ConfigurationByFeatureSet = $FeatureConfiguration->getConfigurationArrayFeatureSet($FeatureSet);
        foreach($ConfigurationByFeatureSet as $FeatureName => $FeatureState) {
            $Feature = \LwFeatureToggle\FeatureFactory::buildFeature($FeatureName, $FeatureState);
            $FeatureCollection->addFeature($Feature);
        }
        return $FeatureCollection;
    }
}