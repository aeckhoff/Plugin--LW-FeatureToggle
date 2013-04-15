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
* Feature Collection
*
* A Class that holds a collection of Features
*
* @category PHP
* @package LwFeatureToggle
* @author Dr. Andreas Eckhoff <andreas.eckhoff@logi-works.de>
* @copyright 2013 Dr. Andreas Eckhoff
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
* @link https://github.com/aeckhoff/Plugin--LW-FeatureToggle
*/
class FeatureCollection
{
    protected $Collection = array();
    protected $DefaultFeature;

    public function __construct()
    {
        $this->DefaultFeature = \LwFeatureToggle\FeatureFactory::buildFeature('default', false);
    }
   
    /**
     * addFeature
     *
     * Method to add a Feature to the Collection
     *
     * @param Object Feature Feature Object that should be added to the Collection
     */
    public function addFeature(\LwFeatureToggle\Feature $feature)
    {
        $this->Collection[] = $feature;
    }
    
    /**
     * getFeature
     *
     * Method to retrieve a Feature from the Collection
     *
     * @param Object Feature Object the desired Feature
     */
    public function getFeature($featureName)
    {
        foreach($this->Collection as $feature) {
            if ($feature->getName() == $featureName) {
                return $feature;
            }
        }
        return $this->DefaultFeature;
    }
}