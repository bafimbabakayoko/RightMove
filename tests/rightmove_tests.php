<?php

  require_once '../src/rightmove.php';
  require_once 'fixtures/london_properties.php';
  require_once 'PHPUnit/Framework.php';

  class RightMoveTest extends PHPUnit_Framework_TestCase {

    function testExportPackageWithLondonProperties() {
      global $london_properties;
      $actual = RightMove::createPackage($london_properties, "122", "32");
      $this->assertStringMatchesFormatFile('fixtures/london_properties.bml', $actual);
    }

  }

?>