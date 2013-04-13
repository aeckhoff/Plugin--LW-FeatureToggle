Plugin--LW-FeatureToggle
========================

First very simple implementation of a Feature Toggle System to easily switch Features on and off via a configuration.

**Feature Configuration**: loads Feature States by a Feature Set Name from a configuration File

**Feature**: contains the FeatureName and the Activation State

**Feature Collection**: contains a set of Feature Objects

**Feature Collection Factory**: build a Feature Collection based on a Feature Set taken from the Feature Configuration


Simple Example
--------------

a) Configuration File 

    [default]
    MyNewFeature = 0

    [development]
    MyNewFeature = 1

b) Building the Collection

    $FeatureConfiguration = new \LwFeatureToggle\FeatureConfiguration($pathToConfigurationFile);
    $FeatureConfiguration->loadConfiguration();

    $FeatureCollection = \LwFeatureToggle\FeatureCollectionFactory::buildFeatureCollection($FeatureConfiguration, 'development');


c) Switching the Feature Code

    if ($FeatureCollection->getFeature("MyNewFeature")->isActive()) {
        ...Feature Code...
    }

