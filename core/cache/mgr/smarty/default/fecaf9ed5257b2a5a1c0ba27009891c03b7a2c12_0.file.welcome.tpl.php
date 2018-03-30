<?php /* Smarty version 3.1.27, created on 2017-09-22 08:01:56
         compiled from "/var/www/etk/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8028007059c4c374c95f37_38921497%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fecaf9ed5257b2a5a1c0ba27009891c03b7a2c12' => 
    array (
      0 => '/var/www/etk/manager/templates/default/welcome.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8028007059c4c374c95f37_38921497',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c4c374ca70c4_85009782',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c4c374ca70c4_85009782')) {
function content_59c4c374ca70c4_85009782 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8028007059c4c374c95f37_38921497';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>