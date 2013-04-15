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
* Feature
*
* Feature Class that manages the active state of a Feature
*
* @category PHP
* @package LwFeatureToggle
* @author Dr. Andreas Eckhoff <andreas.eckhoff@logi-works.de>
* @copyright 2013 Dr. Andreas Eckhoff
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
* @link https://github.com/aeckhoff/Plugin--LW-FeatureToggle
*/
class Feature
{
    protected $IsFeatureActive = false;
    protected $FeatureName = "";

    /**
     * Construtor
     *
     * sets the Feature Name
     *
     * @param String FeatureName Name of the Feature
     */     
    public function __construct($FeatureName)
    {
        $this->FeatureName = $FeatureName;
    }
    
    /**
     * getName
     *
     * return the Name of the Feature
     *
     * @return String Name of the Feature
     */     
    public function getName()
    {
        return $this->FeatureName;
    }
    
    /**
     * isActive
     *
     * returns true, if Feature is active
     *
     * @return Bool 
     */     
    public function isActive()
    {
        return $this->IsFeatureActive;
    }
    
    /**
     * setState
     *
     * sets the activation state of the Feature
     *
     * @param integer State fo the Feature
     */     
    public function setState($active)
    {
        if ($active == 1) {
            $this->IsFeatureActive = true;
        }
        else {
            $this->IsFeatureActive = false;
        }
    }
}