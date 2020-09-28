<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:06:35
         compiled from "/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/filter/facet-boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17654354265f6baacb107163-83107289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3becb1883743a534027d8c80d0a49206ab494ce2' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/filter/facet-boolean.tpl',
      1 => 1516189602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17654354265f6baacb107163-83107289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baacb10caf4_28167242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baacb10caf4_28167242')) {function content_5f6baacb10caf4_28167242($_smarty_tpl) {?>


    <div class="filter-panel filter--value facet--<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFacetName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
         data-filter-type="value"
         data-facet-name="<?php echo $_smarty_tpl->tpl_vars['facet']->value->getFacetName();?>
"
         data-field-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">

        
            <div class="filter-panel--flyout">

                
                    <label class="filter-panel--title" for="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>

                    </label>
                

                
                    <span class="filter-panel--input filter-panel--checkbox">
                        <input type="checkbox"
                               id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
                               name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
                               value="1"
                               <?php if ($_smarty_tpl->tpl_vars['facet']->value->isActive()){?>checked="checked" <?php }?>/>

                        <span class="input--state checkbox--state">&nbsp;</span>
                    </span>
                
            </div>
        
    </div>

<?php }} ?>