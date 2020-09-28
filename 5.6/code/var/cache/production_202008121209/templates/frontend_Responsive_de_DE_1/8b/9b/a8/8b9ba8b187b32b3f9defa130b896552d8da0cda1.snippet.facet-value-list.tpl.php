<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:46
         compiled from "/var/www/html/shopware5_6/themes/Frontend/Bare/frontend/listing/filter/facet-value-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10149839625f6ba78eed9986-13304158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b9ba8b187b32b3f9defa130b896552d8da0cda1' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Frontend/Bare/frontend/listing/filter/facet-value-list.tpl',
      1 => 1597226944,
      2 => 'file',
    ),
    'b15745147c709fdf4921301b71d2f42f459429b0' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Frontend/Bare/frontend/listing/filter/_includes/filter-multi-selection.tpl',
      1 => 1597226944,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '10149839625f6ba78eed9986-13304158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listingMode' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78eeef0a0_04885842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78eeef0a0_04885842')) {function content_5f6ba78eeef0a0_04885842($_smarty_tpl) {?>


    <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('value-list', null, 0);?>
    <?php ob_start();?><?php echo 'full_page_reload';?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['listingMode'] = new Smarty_variable($_tmp1, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['listingMode']->value=='filter_ajax_reload'){?>
        <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('value-list-single', null, 0);?>
    <?php }?>

    <?php /*  Call merged included template "frontend/listing/filter/_includes/filter-multi-selection.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('frontend/listing/filter/_includes/filter-multi-selection.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('filterType'=>$_smarty_tpl->tpl_vars['type']->value), 0, '10149839625f6ba78eed9986-13304158');
content_5f6ba78eedbe22_79647289($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/filter/_includes/filter-multi-selection.tpl" */?>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:46
         compiled from "/var/www/html/shopware5_6/themes/Frontend/Bare/frontend/listing/filter/_includes/filter-multi-selection.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5f6ba78eedbe22_79647289')) {function content_5f6ba78eedbe22_79647289($_smarty_tpl) {?>


    <div class="filter-panel filter--multi-selection filter-facet--<?php echo $_smarty_tpl->tpl_vars['filterType']->value;?>
 facet--<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFacetName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
         data-filter-type="<?php echo $_smarty_tpl->tpl_vars['filterType']->value;?>
"
         data-facet-name="<?php echo $_smarty_tpl->tpl_vars['facet']->value->getFacetName();?>
"
         data-field-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">

        
            <div class="filter-panel--flyout">

                
                    <label class="filter-panel--title" for="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>

                    </label>
                

                
                    <span class="filter-panel--icon"></span>
                

                
                    <?php $_smarty_tpl->tpl_vars['inputType'] = new Smarty_variable('checkbox', null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['filterType']->value=='radio'){?>
                        <?php $_smarty_tpl->tpl_vars['inputType'] = new Smarty_variable('radio', null, 0);?>
                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars['indicator'] = new Smarty_variable($_smarty_tpl->tpl_vars['inputType']->value, null, 0);?>

                    <?php $_smarty_tpl->tpl_vars['isMediaFacet'] = new Smarty_variable(false, null, 0);?>
                    <?php if (is_a($_smarty_tpl->tpl_vars['facet']->value,'\Shopware\Bundle\SearchBundle\FacetResult\MediaListFacetResult')){?>
                        <?php $_smarty_tpl->tpl_vars['isMediaFacet'] = new Smarty_variable(true, null, 0);?>

                        <?php $_smarty_tpl->tpl_vars['indicator'] = new Smarty_variable('media', null, 0);?>
                    <?php }?>

                    <div class="filter-panel--content input-type--<?php echo $_smarty_tpl->tpl_vars['indicator']->value;?>
">

                        
                            <ul class="filter-panel--option-list">

                                <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facet']->value->getValues(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>

                                    
                                        <li class="filter-panel--option">

                                            
                                                <div class="option--container">

                                                    
                                                        <span class="filter-panel--input filter-panel--<?php echo $_smarty_tpl->tpl_vars['inputType']->value;?>
">
                                                            <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['option']->value->getId(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("__".$_tmp1."__".$_tmp2, null, 0);?>
                                                            <?php if ($_smarty_tpl->tpl_vars['filterType']->value=='radio'){?>
                                                                <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_tmp3, null, 0);?>
                                                            <?php }?>

                                                            <input type="<?php echo $_smarty_tpl->tpl_vars['inputType']->value;?>
"
                                                                   id="__<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
__<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['option']->value->getId(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
                                                                   name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"
                                                                   value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['option']->value->getId(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
                                                                   <?php if ($_smarty_tpl->tpl_vars['option']->value->isActive()){?>checked="checked" <?php }?>/>

                                                            <span class="input--state <?php echo $_smarty_tpl->tpl_vars['inputType']->value;?>
--state">&nbsp;</span>
                                                        </span>
                                                    

                                                    
                                                        <label class="filter-panel--label"
                                                               for="__<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
__<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['option']->value->getId(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">

                                                            <?php if (is_a($_smarty_tpl->tpl_vars['facet']->value,'\Shopware\Bundle\SearchBundle\FacetResult\MediaListFacetResult')){?>
                                                                <?php ob_start();?>/shopware5_6/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['mediaFile'] = new Smarty_variable($_tmp4, null, 0);?>
                                                                <?php if ($_smarty_tpl->tpl_vars['option']->value->getMedia()){?>
                                                                    <?php $_smarty_tpl->tpl_vars['mediaFile'] = new Smarty_variable($_smarty_tpl->tpl_vars['option']->value->getMedia()->getFile(), null, 0);?>
                                                                <?php }?>

                                                                <img class="filter-panel--media-image" src="<?php echo $_smarty_tpl->tpl_vars['mediaFile']->value;?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['option']->value->getLabel(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
" />
                                                            <?php }else{ ?>
                                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>

                                                            <?php }?>
                                                        </label>
                                                    
                                                </div>
                                            
                                        </li>
                                    
                                <?php } ?>
                            </ul>
                        
                    </div>
                
            </div>
        
    </div>

<?php }} ?>