<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:06:53
         compiled from "/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/actions/action-pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16006880715f6baadd931827-34927875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17978c688d5ee1bc9a0c6a34dbb89f0e76e3d81e' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/actions/action-pagination.tpl',
      1 => 1516189602,
      2 => 'file',
    ),
    'ba128a00074cbd10ad8ccd65f276ba9b704e96e0' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/actions/action-per-page.tpl',
      1 => 1516189602,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '16006880715f6baadd931827-34927875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sPage' => 0,
    'baseUrl' => 0,
    'pages' => 0,
    'sCategoryContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baadd9487d4_50036060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baadd9487d4_50036060')) {function content_5f6baadd9487d4_50036060($_smarty_tpl) {?>


<div class="listing--paging panel--paging">

    
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sPage']->value>1){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
?p=1" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingLinkFirst','namespace'=>'frontend/listing/listing_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLinkFirst','namespace'=>'frontend/listing/listing_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Erste Seite";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLinkFirst','namespace'=>'frontend/listing/listing_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_tmp1, ENT_QUOTES, 'utf-8', true);?>
" class="paging--link paging--prev" data-action-link="true">
                <i class="icon--arrow-left"></i>
                <i class="icon--arrow-left"></i>
            </a>
        <?php }?>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sPage']->value>1){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
?p=<?php echo $_smarty_tpl->tpl_vars['sPage']->value-1;?>
" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingLinkPrevious','namespace'=>'frontend/listing/listing_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLinkPrevious','namespace'=>'frontend/listing/listing_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Vorherige Seite";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLinkPrevious','namespace'=>'frontend/listing/listing_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
" class="paging--link paging--prev" data-action-link="true">
                <i class="icon--arrow-left"></i>
            </a>
        <?php }?>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['pages']->value>1){?>
            <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sCategoryContent']->value['name'], ENT_QUOTES, 'utf-8', true);?>
" class="paging--link is--active"><?php echo $_smarty_tpl->tpl_vars['sPage']->value;?>
</a>
        <?php }?>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sPage']->value<$_smarty_tpl->tpl_vars['pages']->value){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
?p=<?php echo $_smarty_tpl->tpl_vars['sPage']->value+1;?>
" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingLinkNext','namespace'=>'frontend/listing/listing_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLinkNext','namespace'=>'frontend/listing/listing_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Nächste Seite";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLinkNext','namespace'=>'frontend/listing/listing_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp3=ob_get_clean();?><?php echo htmlspecialchars($_tmp3, ENT_QUOTES, 'utf-8', true);?>
" class="paging--link paging--next" data-action-link="true">
                <i class="icon--arrow-right"></i>
            </a>
        <?php }?>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sPage']->value<$_smarty_tpl->tpl_vars['pages']->value){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
?p=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingLinkLast','namespace'=>'frontend/listing/listing_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLinkLast','namespace'=>'frontend/listing/listing_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Letzte Seite";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLinkLast','namespace'=>'frontend/listing/listing_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp4=ob_get_clean();?><?php echo htmlspecialchars($_tmp4, ENT_QUOTES, 'utf-8', true);?>
" class="paging--link paging--next" data-action-link="true">
                <i class="icon--arrow-right"></i>
                <i class="icon--arrow-right"></i>
            </a>
        <?php }?>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['pages']->value>1){?>
            <span class="paging--display">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingTextFrom",'namespace'=>'frontend/listing/listing_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingTextFrom",'namespace'=>'frontend/listing/listing_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
von<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingTextFrom",'namespace'=>'frontend/listing/listing_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</strong>
            </span>
        <?php }?>
    

    
    
        <?php /*  Call merged included template "frontend/listing/actions/action-per-page.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/actions/action-per-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16006880715f6baadd931827-34927875');
content_5f6baadd9413b1_20385499($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/actions/action-per-page.tpl" */?>
    
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:06:53
         compiled from "/var/www/html/shopware5_3/themes/Frontend/Bare/frontend/listing/actions/action-per-page.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5f6baadd9413b1_20385499')) {function content_5f6baadd9413b1_20385499($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['limit']->value===null&&$_smarty_tpl->tpl_vars['criteria']->value){?>
    <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['criteria']->value->getLimit(), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['limit']->value&&$_smarty_tpl->tpl_vars['pageSizes']->value){?>
    <form class="action--per-page action--content block" method="get" data-action-form="true">

        
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['shortParameters']->value['sPage'];?>
" value="1">

        
        
            <label for="<?php echo $_smarty_tpl->tpl_vars['shortParameters']->value['sPerPage'];?>
" class="per-page--label action--label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingLabelItemsPerPage','namespace'=>'frontend/listing/listing_actions')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLabelItemsPerPage','namespace'=>'frontend/listing/listing_actions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel pro Seite:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingLabelItemsPerPage','namespace'=>'frontend/listing/listing_actions'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
        

        
        
            <?php ob_start();?><?php echo 'full_page_reload';?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['listingMode'] = new Smarty_variable($_tmp1, null, 0);?>

            <div class="per-page--select select-field">
                <select id="<?php echo $_smarty_tpl->tpl_vars['shortParameters']->value['sPerPage'];?>
"
                        name="<?php echo $_smarty_tpl->tpl_vars['shortParameters']->value['sPerPage'];?>
"
                        class="per-page--field action--field"
                        data-auto-submit="true"
                        <?php if ($_smarty_tpl->tpl_vars['listingMode']->value!='full_page_reload'){?>data-loadingindicator="false"<?php }?>>

                    <?php  $_smarty_tpl->tpl_vars['perPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageSizes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perPage']->key => $_smarty_tpl->tpl_vars['perPage']->value){
$_smarty_tpl->tpl_vars['perPage']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['perPage']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['perPage']->value==$_smarty_tpl->tpl_vars['limit']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['perPage']->value;?>
</option>
                    <?php } ?>
                    
                </select>
            </div>
        
    </form>
<?php }?>
<?php }} ?>