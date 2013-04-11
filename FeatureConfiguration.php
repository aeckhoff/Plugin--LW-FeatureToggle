<?php

namespace LwFeatureToggle;

class FeatureConfiguration
{
    private $ConfigurationArray = array();
    private $PathToConfigurationFile = "";

    public function __construct($PathToConfigurationFile)
    {
        $this->PathToConfigurationFile = $PathToConfigurationFile;
    }

    public function loadConfiguration()
    {
        $this->$ConfigurationArray = parse_ini_file($this->PathToConfigurationFile, true);
    }
    
    public function getConfigurationEntryByFeatureName($FeatureName) 
    {
        return $this->$ConfigurationArray[$FeatureName];
    }
}
