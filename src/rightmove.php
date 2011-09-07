<?php

  /** @define "/home/okouam/Work/rightmove/src" "VALUE" */

  require_once(dirname(__FILE__) . '/property.php');
  require_once(dirname(__FILE__) . "/../lib/Smarty-3.0.8/libs/Smarty.class.php");

  class RightMove {

    public static function createPackageData($properties, $agent_id, $branch_id) {
      $file = tempnam("/tmp", "today-date.BLM");
      $smarty = new Smarty;
      $smarty->assign("agent_id", $agent_id);
      $smarty->assign("branch_id", $branch_id);
      $smarty->assign("property_count", count($properties));
      $smarty->assign("generated_date", date(DATE_RFC822));
      $smarty->assign("properties", $properties);
      $result = $smarty->display('../templates/blm.tpl');
      $handle = fopen($file, "w");
      fwrite($handle, $result);
      fclose($handle);
      return $file;
    }

    public static function checkPackageMedia($properties) {

    }

    public static function createPackage($properties, $agent_id, $branch_id) {

    }

    public static function send($host, $username, $password, $package) {
    
    }

  }

?>