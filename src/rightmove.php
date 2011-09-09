<?php

    require_once(dirname(__FILE__) . '/property.php');
    require_once(dirname(__FILE__) . "/../lib/Smarty-3.0.8/libs/Smarty.class.php");

    class RightMove {

      public static function createPackageData($properties, $agent_id, $branch_id) {
          $smarty = new Smarty;
          $smarty->assign("agent_id", $agent_id);
          $smarty->assign("branch_id", $branch_id);
          $smarty->assign("property_count", count($properties));
          $smarty->assign("generated_date", date(DATE_RFC822));
          $smarty->assign("properties", $properties);
          $smarty->display('../templates/blm.tpl');


          $my_file = 'today-date.BLM';
          $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
          fwrite($handle, "#HEADER#\nVersion : 3 \nEOF : '^' \nEOR : '~' \n");
          fwrite($handle, "Property Count : ".count($properties)."\n");
          fwrite($handle, "Generated Date : ".date(DATE_RFC822)."\n");
          fwrite($handle, "#DEFINITION#\nAGENT_REF^ADDRESS_1^ADDRESS_2^TOWN^POSTCODE1^POSTCODE2^FEATURE1^FEATURE2^".
                          "FEATURE3^FEATURE4^FEATURE5^FEATURE6^FEATURE7^FEATURE8^FEATURE9^FEATURE10^SUMMARY^".
                          "DESCRIPTION^BRANCH_ID^STATUS_ID^BEDROOMS^PRICE^PRICE_QUALIFIER^PROP_SUB_ID^CREATE_DATE^".
                          "UPDATE_DATE^LET_DATE_AVAILABLE^DISPLAY_ADDRESS^PUBLISHED_FLAG^LET_DATE_AVAILABLE^".
                          "LET_RENT_FREQUENCY^LET_BOND^LET_TYPE_ID^LET_FURN_ID^LET_RENT_FREQUENCY^TENURE_TYPE_ID^".
                          "TRANS_TYPE_ID^NEW_HOME_FLAG^\n\n#DATA# \n");


          foreach ($properties as $property)
          {
              fwrite($handle, $agent_id.'^');
              fwrite($handle, $property['ADDRESS_1'].'^');
              fwrite($handle, $property['ADDRESS_2'].'^');
              fwrite($handle, $property['TOWN'].'^');
              fwrite($handle, $property['POSTCODE1'].'^');
              fwrite($handle, $property['POSTCODE2'].'^');
              fwrite($handle, $property['FEATURE1'].'^');
              fwrite($handle, $property['FEATURE2'].'^');
              fwrite($handle, $property['FEATURE3'].'^');
              fwrite($handle, $property['FEATURE4'].'^');
              fwrite($handle, $property['FEATURE5'].'^');
              fwrite($handle, $property['FEATURE6'].'^');
              fwrite($handle, $property['FEATURE7'].'^');
              fwrite($handle, $property['FEATURE8'].'^');
              fwrite($handle, $property['FEATURE9'].'^');
              fwrite($handle, $property['FEATURE10'].'^');
              fwrite($handle, $property['SUMMARY'].'^');
              fwrite($handle, $property['DESCRIPTION'].'^');
              fwrite($handle, $property['BRANCH_ID'].'^');
              fwrite($handle, $property['STATUS_ID'].'^');
              fwrite($handle, $property['BEDROOMS'].'^');
              fwrite($handle, $property['PRICE'].'^');
              fwrite($handle, $property['PRICE_QUALIFIER'].'^');
              fwrite($handle, $property['PROP_SUB_ID'].'^');
              fwrite($handle, $property['CREATE_DATE'].'^');
              fwrite($handle, $property['UPDATE_DATE'].'^');
              fwrite($handle, $property['LET_DATE_AVAILABLE'].'^'); //twice
              fwrite($handle, $property['DISPLAY_ADDRESS'].'^');
              fwrite($handle, $property['PUBLISHED_FLAG'].'^');
              fwrite($handle, $property['LET_DATE_AVAILABLE'].'^'); //twice
              fwrite($handle, $property['LET_RENT_FREQUENCY'].'^'); //twice
              fwrite($handle, $property['LET_BOND'].'^');
              fwrite($handle, $property['LET_TYPE_ID'].'^');
              fwrite($handle, $property['LET_FURN_ID'].'^');
              fwrite($handle, $property['LET_RENT_FREQUENCY'].'^'); //twice
              fwrite($handle, $property['TENURE_TYPE_ID'].'^');
              fwrite($handle, $property['TRANS_TYPE_ID'].'^');
              fwrite($handle, $property['NEW_HOME_FLAG'].'^'."\n");
          }
          fclose($handle);
      }

      public static function checkPackageMedia($properties) {

      }

      public static function createPackage($properties, $agent_id, $branch_id) {

      }

      public static function send($host, $username, $password, $package) {

      }


  }


    $properties = array(array('ADDRESS_1' => '29', 'ADDRESS_2' => 'Millstream Way','TOWN' => 'Leighton Buzzard',
                              'POSTCODE1' => 'LU7', 'POSTCODE2' => '3WJ', 'FEATURE1' => 'Double Glazing',
                              'FEATURE2' => 'Garage providing secure parking', 'FEATURE3' => 'Ideal for first time buyer',
                              'FEATURE4' => 'GFCH system', 'FEATURE5' => 'NO UPWARD CHAIN', 'FEATURE6' => '',
                              'FEATURE7' => '','FEATURE8' => '','FEATURE9' => '','FEATURE10' => '', 'SUMMARY' =>
                              'This is a lovely property summary', 'DESCRIPTION' => 'This is a lovely property summary',
                              'STATUS_ID' => '1', 'BEDROOMS' => '2', 'PRICE' => '179995', 'PRICE_QUALIFIER' => '1',
                              'PROP_SUB_ID' => '2', 'CREATE_DATE' => '2007-03-27 20:13:22', 'UPDATE_DATE' =>
                              '2007-02-04 22:59:00', 'LET_DATE_AVAILABLE' => '', 'DISPLAY_ADDRESS' =>
                              'LET_DATE_AVAILABLE', 'PUBLISHED_FLAG' => '1', 'LET_DATE_AVAILABLE' => '', 'LET_RENT_FREQUENCY' => '',
                              'LET_BOND' => '','LET_TYPE_ID' => '', 'LET_FURN_ID' => '','LET_RENT_FREQUENCY' => '',
                              'TENURE_TYPE_ID' => '','TRANS_TYPE_ID' => '1', 'NEW_HOME_FLAG' => 'N'),
                            array('ADDRESS_1' => '1100', 'ADDRESS_2' => 'Southwest rd.'));
    $agent_id = "47425_ABCDE";
    $branch_id = 47425;

    $go = new RightMove();
    $go->createPackageData($properties,$agent_id,$branch_id);
?>