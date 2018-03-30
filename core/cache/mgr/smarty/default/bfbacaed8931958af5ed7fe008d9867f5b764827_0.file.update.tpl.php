<?php /* Smarty version 3.1.27, created on 2017-09-25 12:21:24
         compiled from "/var/www/etk/manager/templates/default/resource/weblink/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:111709366059c8f4c4a02479_52370728%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfbacaed8931958af5ed7fe008d9867f5b764827' => 
    array (
      0 => '/var/www/etk/manager/templates/default/resource/weblink/update.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111709366059c8f4c4a02479_52370728',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c8f4c4a80091_82075025',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c8f4c4a80091_82075025')) {
function content_59c8f4c4a80091_82075025 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '111709366059c8f4c4a02479_52370728';
?>
<div id="modx-panel-weblink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>