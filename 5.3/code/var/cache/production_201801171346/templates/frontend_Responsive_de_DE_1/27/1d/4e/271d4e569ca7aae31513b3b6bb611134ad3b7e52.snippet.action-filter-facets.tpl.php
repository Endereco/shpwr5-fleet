<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:06:35
         compiled from "/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/actions/action-filter-facets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7510835855f6baacb141700-51738407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '271d4e569ca7aae31513b3b6bb611134ad3b7e52' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/actions/action-filter-facets.tpl',
      1 => 1516189602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7510835855f6baacb141700-51738407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facets' => 0,
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baacb143666_05303772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baacb143666_05303772')) {function content_5f6baacb143666_05303772($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['facet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['facet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->key => $_smarty_tpl->tpl_vars['facet']->value){
$_smarty_tpl->tpl_vars['facet']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['facet']->value->getTemplate()!==null){?>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['facet']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('facet'=>$_smarty_tpl->tpl_vars['facet']->value), 0);?>

    <?php }?>
<?php } ?><?php }} ?>