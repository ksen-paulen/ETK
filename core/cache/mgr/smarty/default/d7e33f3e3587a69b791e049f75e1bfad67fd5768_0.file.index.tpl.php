<?php /* Smarty version 3.1.27, created on 2017-09-22 07:53:47
         compiled from "/var/www/etk/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:149306141959c4c18bc426b9_53978929%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7e33f3e3587a69b791e049f75e1bfad67fd5768' => 
    array (
      0 => '/var/www/etk/manager/templates/default/workspaces/index.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149306141959c4c18bc426b9_53978929',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c4c18bc59f38_43240578',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c4c18bc59f38_43240578')) {
function content_59c4c18bc59f38_43240578 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '149306141959c4c18bc426b9_53978929';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>