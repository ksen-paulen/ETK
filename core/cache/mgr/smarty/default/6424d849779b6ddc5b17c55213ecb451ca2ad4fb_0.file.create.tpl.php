<?php /* Smarty version 3.1.27, created on 2017-10-04 12:11:25
         compiled from "/var/www/etk/manager/templates/default/element/snippet/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:155764836159d4cfed9b3343_80119322%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6424d849779b6ddc5b17c55213ecb451ca2ad4fb' => 
    array (
      0 => '/var/www/etk/manager/templates/default/element/snippet/create.tpl',
      1 => 1492683674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155764836159d4cfed9b3343_80119322',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59d4cfed9cdb40_76649694',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59d4cfed9cdb40_76649694')) {
function content_59d4cfed9cdb40_76649694 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '155764836159d4cfed9b3343_80119322';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>