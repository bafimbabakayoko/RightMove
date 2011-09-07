#HEADER#
Version : 3
EOF : '^'
EOR : '~'
Property Count : {$property_count}
Generated Date : {$generated_date}

#DEFINITION#
AGENT_REF^ADDRESS_1^ADDRESS_2^ADDRESS_3^ADDRESS_4^TOWN^POSTCODE1^POSTCODE2^FEATURE1^FEATURE2^FEATURE3^FEATURE4^FEATURE5^SUMMARY^DESCRIPTION^BRANCH_ID^STATUS_ID^BEDROOMS^BATHROOMS^PRICE^PROP_SUB_ID^CREATE_DATE^UPDATE_DATE^DISPLAY_ADDRESS^PUBLISHED_FLAG^TRANS_TYPE_ID^MEDIA_IMAGE_1

#DATA#
{foreach $properties as $property}
{strip}
  {$agent_id}^{$property->address_1}^{$property->address_2}^{$property->town}^{$property->postcode_1}^{$property->postcode_2}^{$property->feature_1}^{$property->feature_2}^{$property->feature_3}^{$property->summary}^{$property->description}^{$branch_id}^{$property->status_id}^{$property->bedrooms}^{$property->bathrooms}^{$property->summary}^{$property->price}^{$property->prop_sub_id}^^^{$property->display_address}^{$property->published_flag}^{$property->trans_type_id}^{$property->media_image_1}~
{/strip}
{/foreach}

#END#