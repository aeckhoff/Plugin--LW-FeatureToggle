<?php

/**
* This file is part of the LW Feature Toggle Plugin
*
* PHP version 5.3
*
* @category PHP
* @package LwFeatureToggle
* @author Dr. Andreas Eckhoff <andreas.eckhoff@logi-works.de>
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
* @version GIT: trunk
* @link https://github.com/aeckhoff/Plugin--LW-FeatureToggle
*/

namespace LwFeatureToggle;

/**
* Feature Collection Factory
*
* Factory Class to build Feature Collection Objects from FeatureConfiguration and FeatureSet
*
* @category PHP
* @package LwFeatureToggle
* @author Dr. Andreas Eckhoff <andreas.eckhoff@logi-works.de>
* @copyright 2013 Dr. Andreas Eckhoff
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
* @link https://github.com/aeckhoff/Plugin--LW-FeatureToggle
*/
class FeatureCollectionFactory
{
    /**
     * buildFeatureCollection
     * 
     * Returns the instantiated Feature Object
     *
     * @param Object FeatureConfiguration FeatureConfiguration Object containing the actual feature Configuration
     * @param String FeatureSet SetName that should be used to build the FeatureCollection
     * 
     * @return array(int => int)
     */       
    public static function buildFeatureCollection(\LwFeatureToggle\FeatureConfiguration $FeatureConfiguration, $FeatureSet="default")
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