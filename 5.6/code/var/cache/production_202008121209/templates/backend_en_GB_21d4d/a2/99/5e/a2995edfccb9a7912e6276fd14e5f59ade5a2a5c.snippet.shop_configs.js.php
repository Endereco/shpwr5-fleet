<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:42
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/store/shop_configs.js" */ ?>
<?php /*%%SmartyHeaderCode:5577466185f6ba78abcf073-02506705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2995edfccb9a7912e6276fd14e5f59ade5a2a5c' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/store/shop_configs.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5577466185f6ba78abcf073-02506705',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78abd1c67_88302438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78abd1c67_88302438')) {function content_5f6ba78abd1c67_88302438($_smarty_tpl) {?>//
//
Ext.define('Shopware.apps.Benchmark.store.ShopConfigs', {
    extend: 'Ext.data.Store',
    autoLoad: false,
    model: 'Shopware.apps.Benchmark.model.ShopConfig',

    proxy: {
        type: 'ajax',
        url: '<?php echo '/shopware5_6/backend/Benchmark/getShopConfigs';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    },
});
//
<?php }} ?>