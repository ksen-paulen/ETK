<?php /* Smarty version 3.1.27, created on 2017-09-25 13:12:25
         compiled from "/var/www/etk/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:193657269959c900b9669cf2_11660942%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3679dd599a3e1b2d4c63edde0944d53d208041c' => 
    array (
      0 => '/var/www/etk/manager/templates/default/element/snippet/update.tpl',
      1 => 1492683674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193657269959c900b9669cf2_11660942',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c900b9683801_68490629',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c900b9683801_68490629')) {
function content_59c900b9683801_68490629 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '193657269959c900b9669cf2_11660942';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>