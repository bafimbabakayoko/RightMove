<?php

  require_once('property.php');
  require_once('../lib/Smarty-3.0.8/libs/Smarty.class.php');

  class RightMove {

    public static function createPackage($properties, $agent_id, $branch_id) {
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
  }

?>