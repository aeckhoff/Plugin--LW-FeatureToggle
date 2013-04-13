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
* Feature Factory
*
* Factory Class to build Feature Objects by FeatureName and FeatureState
*
* @category PHP
* @package LwFeatureToggle
* @author Dr. Andreas Eckhoff <andreas.eckhoff@logi-works.de>
* @copyright 2013 Dr. Andreas Eckhoff
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
* @link https://github.com/aeckhoff/Plugin--LW-FeatureToggle
*/
class FeatureFactory
{
    /**
     * Returns the instantiated Feature Object
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @param String FeatureName Name of the Feature to build
     * @param String FeatureState State of the Feature to build (1|0)
     * 
     * @return array(int => int)
     */    
    public static function buildFeature($FeatureName, $FeatureState)
    {
        $Feature = new \LwFeatureToggle\Feature($FeatureName);
        $Feature->setState($FeatureState);
        return $Feature;
    }
}