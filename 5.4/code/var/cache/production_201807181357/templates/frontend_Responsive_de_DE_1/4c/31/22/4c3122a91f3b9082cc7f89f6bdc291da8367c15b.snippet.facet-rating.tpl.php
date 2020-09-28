<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:06:41
         compiled from "/var/www/html/shopware5_4/themes/Frontend/Bare/frontend/listing/filter/facet-rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769893115f6baad1cf66b6-94841683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c3122a91f3b9082cc7f89f6bdc291da8367c15b' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Frontend/Bare/frontend/listing/filter/facet-rating.tpl',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769893115f6baad1cf66b6-94841683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baad1cfeb60_00605436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baad1cfeb60_00605436')) {function content_5f6baad1cfeb60_00605436($_smarty_tpl) {?>


    <div class="filter-panel filter--rating facet--<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFacetName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
         data-filter-type="rating"
         data-facet-name="<?php echo $_smarty_tpl->tpl_vars['facet']->value->getFacetName();?>
"
         data-field-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">

        
            <div class="filter-panel--flyout">

                
                    <label class="filter-panel--title">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>

                    </label>
                

                
                    <span class="filter-panel--icon"></span>
                

                
                    <div class="filter-panel--content">

                        
                            <div class="filter-panel--star-rating">
                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facet']->value->getValues(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                    
                                        <label for="rating_<?php echo $_smarty_tpl->tpl_vars['value']->value->getId();?>
" class="rating-star--outer-container<?php if ($_smarty_tpl->tpl_vars['value']->value->isActive()){?> is--active<?php }?>">
                                            <input class="is--hidden" type="checkbox" name="rating" id="rating_<?php echo $_smarty_tpl->tpl_vars['value']->value->getId();?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value->isActive()){?>checked="checked" <?php }?>/>

                                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['value']->value->getId()+1 - (1) : 1-($_smarty_tpl->tpl_vars['value']->value->getId())+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                <i class="icon--star"></i>
                                            <?php }} ?>

                                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['value']->value->getId()+1) : $_smarty_tpl->tpl_vars['value']->value->getId()+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['value']->value->getId()+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                <i class="icon--star-empty"></i>
                                            <?php }} ?>
                                            <span class="rating-star--suffix"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'RatingStarSuffix','default'=>'& more','namespace'=>'frontend/listing/listing_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RatingStarSuffix','default'=>'& more','namespace'=>'frontend/listing/listing_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
& mehr<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RatingStarSuffix','default'=>'& more','namespace'=>'frontend/listing/listing_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                                        </label>
                                    
                                <?php } ?>
                            </div>
                        
                    </div>
                
            </div>
        
    </div>

<?php }} ?>