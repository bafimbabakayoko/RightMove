<?php

  $mayfair_flat = new Property();
  $mayfair_flat->setAddress("135a", "Stroud Green Road", "N4 3PX", "London");
  $mayfair_flat->setFeatures(array("Luxury first floor flat", "THREE BEDROOMS", "South facing sun terrace"));
  $mayfair_flat->summary = "sdfsdfsdfsdfsdf";
  $mayfair_flat->description = "sfsdfsdfsdfsdf";
  $mayfair_flat->status_id = 0;

  $brixton_house = new Property();

  $hampstead_mansion = new Property();

  $london_properties = array($mayfair_flat, $brixton_house, $hampstead_mansion);

?>