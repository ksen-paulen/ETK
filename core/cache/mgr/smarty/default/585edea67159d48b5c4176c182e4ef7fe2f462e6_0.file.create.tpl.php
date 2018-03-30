<?php /* Smarty version 3.1.27, created on 2017-09-22 09:47:20
         compiled from "/var/www/etk/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153919831359c4dc28c80ed3_27426730%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '585edea67159d48b5c4176c182e4ef7fe2f462e6' => 
    array (
      0 => '/var/www/etk/manager/templates/default/element/chunk/create.tpl',
      1 => 1492683674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153919831359c4dc28c80ed3_27426730',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c4dc28c8f471_68934588',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c4dc28c8f471_68934588')) {
function content_59c4dc28c8f471_68934588 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153919831359c4dc28c80ed3_27426730';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>