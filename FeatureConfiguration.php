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

    public function getConfigurationArrayFeatureSet($FeatureSet)
    {
        return $this->ConfigurationArray[$FeatureSet];
    }
    
    public function loadConfiguration()
    {
        $this->ConfigurationArray = parse_ini_file($this->PathToConfigurationFile, true);
    }
    
    public function getConfigurationEntryByFeatureNameAndFeatureSet($FeatureName, $FeatureSet) 
    {
        return $this->ConfigurationArray[$FeatureSet][$FeatureName];
    }
}
