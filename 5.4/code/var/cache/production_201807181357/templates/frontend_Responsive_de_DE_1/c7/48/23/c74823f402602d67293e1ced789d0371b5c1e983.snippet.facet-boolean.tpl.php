<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:06:41
         compiled from "/var/www/html/shopware5_4/themes/Frontend/Bare/frontend/listing/filter/facet-boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18635127525f6baad1cb6df2-41138419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c74823f402602d67293e1ced789d0371b5c1e983' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Frontend/Bare/frontend/listing/filter/facet-boolean.tpl',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18635127525f6baad1cb6df2-41138419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baad1cbc1c5_28428054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baad1cbc1c5_28428054')) {function content_5f6baad1cbc1c5_28428054($_smarty_tpl) {?>


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