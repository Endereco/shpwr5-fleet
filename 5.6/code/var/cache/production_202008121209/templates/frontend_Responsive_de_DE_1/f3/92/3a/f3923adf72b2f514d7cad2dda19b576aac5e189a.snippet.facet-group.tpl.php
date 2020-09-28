<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:46
         compiled from "/var/www/html/shopware5_6/themes/Frontend/Bare/frontend/listing/filter/facet-group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7293984095f6ba78ef0b0b7-22686248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3923adf72b2f514d7cad2dda19b576aac5e189a' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Frontend/Bare/frontend/listing/filter/facet-group.tpl',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7293984095f6ba78ef0b0b7-22686248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78ef0cdf0_05562898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78ef0cdf0_05562898')) {function content_5f6ba78ef0cdf0_05562898($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['facet']->value->getLabel()){?>
    <h3 class="filter--set-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>
</h3>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("frontend/listing/actions/action-filter-facets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('facets'=>$_smarty_tpl->tpl_vars['facet']->value->getFacetResults()), 0);?>

<?php }} ?>