<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:06:35
         compiled from "/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/filter/facet-group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20339093765f6baacb13eb53-76445507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac20cb82d61011ad2ad2fb024acacf904270f8f2' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/filter/facet-group.tpl',
      1 => 1516189602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20339093765f6baacb13eb53-76445507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baacb1407d4_34591963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baacb1407d4_34591963')) {function content_5f6baacb1407d4_34591963($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['facet']->value->getLabel()){?>
    <h3 class="filter--set-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>
</h3>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("frontend/listing/actions/action-filter-facets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('facets'=>$_smarty_tpl->tpl_vars['facet']->value->getFacetResults()), 0);?>

<?php }} ?>