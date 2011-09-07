<?php

  class Property
  {
    public $address_1;
    public $address_2;
    public $town;
    public $postcode_1;
    public $postcode_2;
    public $feature_1;
    public $feature_2;
    public $feature_3;
    public $feature_4;
    public $feature_5;
    public $feature_9;
    public $feature_6;
    public $feature_7;
    public $feature_8;
    public $feature_10;
    public $summary;
    public $prop_sub_id;
    public $description;
    public $branch_id;
    public $status_id;
    public $bedrooms;
    public $bathrooms;
    public $living_rooms;
    public $prop_sud_id;
    public $price;
    public $display_address;
    public $published_flag;
    public $trans_type_id;
    public $media_image_1;

    public function setFeatures($features) {
      for($i = 0; $i < count($features); $i++) {
          $this->{"feature_$i"} = $features[$i];
      }
    }

    public function setAddress($address_1, $address_2, $postcode, $town) {
      $this->address_1 = trim($address_1);
      $this->address_2 = trim($address_2);
      $parts = explode(" ", trim($postcode));
      $this->postcode_1 = trim($parts[0]);
      $this->postcode_2 = trim($parts[1]);
      $this->town = trim($town);
      $display_address = array($this->address_1, $this->address_2, "$this->town $this->postcode_1  $this->postcode_2");
      $this->display_address = join(', ', $display_address);
    }

  }

?>