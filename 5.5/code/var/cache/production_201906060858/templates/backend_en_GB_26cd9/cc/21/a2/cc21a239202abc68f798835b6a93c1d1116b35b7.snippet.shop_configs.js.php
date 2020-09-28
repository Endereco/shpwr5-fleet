<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:20
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/store/shop_configs.js" */ ?>
<?php /*%%SmartyHeaderCode:17629315865f6ba9ccc17ec0-75963917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc21a239202abc68f798835b6a93c1d1116b35b7' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/store/shop_configs.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17629315865f6ba9ccc17ec0-75963917',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ccc19263_18519910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ccc19263_18519910')) {function content_5f6ba9ccc19263_18519910($_smarty_tpl) {?>//
//
Ext.define('Shopware.apps.Benchmark.store.ShopConfigs', {
    extend: 'Ext.data.Store',
    autoLoad: false,
    model: 'Shopware.apps.Benchmark.model.ShopConfig',

    proxy: {
        type: 'ajax',
        url: '<?php echo '/shopware5_5/backend/Benchmark/getShopConfigs';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    },
});
//
<?php }} ?>