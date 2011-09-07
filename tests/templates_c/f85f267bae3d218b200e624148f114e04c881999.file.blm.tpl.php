<?php /* Smarty version Smarty-3.0.8, created on 2011-09-07 11:40:26
         compiled from "../templates/blm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18287884864e674a1a315b23-98396446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85f267bae3d218b200e624148f114e04c881999' => 
    array (
      0 => '../templates/blm.tpl',
      1 => 1315392024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18287884864e674a1a315b23-98396446',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
#HEADER#
Version : 3
EOF : '^'
EOR : '~'
Property Count : <?php echo $_smarty_tpl->getVariable('property_count')->value;?>

Generated Date : <?php echo $_smarty_tpl->getVariable('generated_date')->value;?>


#DEFINITION#
AGENT_REF^ADDRESS_1^ADDRESS_2^ADDRESS_3^ADDRESS_4^TOWN^POSTCODE1^POSTCODE2^FEATURE1^FEATURE2^FEATURE3^FEATURE4^FEATURE5^SUMMARY^DESCRIPTION^BRANCH_ID^STATUS_ID^BEDROOMS^BATHROOMS^PRICE^PROP_SUB_ID^CREATE_DATE^UPDATE_DATE^DISPLAY_ADDRESS^PUBLISHED_FLAG^TRANS_TYPE_ID^MEDIA_IMAGE_1

#DATA#
<?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('properties')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
?>
<?php echo $_smarty_tpl->getVariable('agent_id')->value;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->address_1;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->address_2;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->town;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->postcode_1;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->postcode_2;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->feature_1;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->feature_2;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->feature_3;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->summary;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->description;?>
^<?php echo $_smarty_tpl->getVariable('branch_id')->value;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->status_id;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->bedrooms;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->bathrooms;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->summary;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->price;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->prop_sub_id;?>
^^^<?php echo $_smarty_tpl->getVariable('property')->value->display_address;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->published_flag;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->trans_type_id;?>
^<?php echo $_smarty_tpl->getVariable('property')->value->media_image_1;?>
~
<?php }} ?>

#END#