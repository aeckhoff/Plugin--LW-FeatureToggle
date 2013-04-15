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
* Feature Configuration
*
* Configuration Class which holds sets of Feature configuration entries 
*
* @category PHP
* @package LwFeatureToggle
* @author Dr. Andreas Eckhoff <andreas.eckhoff@logi-works.de>
* @copyright 2013 Dr. Andreas Eckhoff
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
* @link https://github.com/aeckhoff/Plugin--LW-FeatureToggle
*/
class FeatureConfiguration 
{
    protected $ConfigurationArray = array();
    protected $PathToConfigurationFile = "";

    /**
     * Construtor
     *
     * needs a path to the configuration file
     *
     * @param String PathToConfigurationFile complete path to the feature configuration file
     */     
    public function __construct($PathToConfigurationFile)
    {
        $this->PathToConfigurationFile = $PathToConfigurationFile;
    }

    /**
     * getConfigurationArrayFeatureSet
     *
     * return a Configuration Array of the given FeatureSet
     *
     * @param String FeatureSet Name of the desired FeatureSet
     * 
     * @return Array Array of Features of the desired FeatureSet
     */     
    public function getConfigurationArrayFeatureSet($FeatureSet)
    {
        return $this->ConfigurationArray[$FeatureSet];
    }
    
    /**
     * loadConfiguration
     *
     * loads the configuration entries from the given File
     */     
    public function loadConfiguration()
    {
        $this->ConfigurationArray = parse_ini_file($this->PathToConfigurationFile, true);
    }
    
    /**
     * getConfigurationArrayFeatureSet
     *
     * returns the FeatureState by the given FeatureName from the given FeatureSet
     *
     * @param String FeatureName Name of the desired Feature
     * @param String FeatureSet Name of the desired FeatureSet
     *      
     * @return Bool Active-State of a Feature
     */     
    public function getConfigurationEntryByFeatureNameAndFeatureSet($FeatureName, $FeatureSet) 
    {
        return $this->ConfigurationArray[$FeatureSet][$FeatureName];
    }
}