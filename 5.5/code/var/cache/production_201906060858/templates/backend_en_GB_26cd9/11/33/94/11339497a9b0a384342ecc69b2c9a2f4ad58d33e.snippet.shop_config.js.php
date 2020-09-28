<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:20
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/model/shop_config.js" */ ?>
<?php /*%%SmartyHeaderCode:14521837955f6ba9ccbe8a28-47024189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11339497a9b0a384342ecc69b2c9a2f4ad58d33e' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/model/shop_config.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14521837955f6ba9ccbe8a28-47024189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ccbea594_24648514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ccbea594_24648514')) {function content_5f6ba9ccbea594_24648514($_smarty_tpl) {?>//
//
Ext.define('Shopware.apps.Benchmark.model.ShopConfig', {
    extend: 'Ext.data.Model',

    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'shopId', type: 'int' },
        { name: 'shopName', type: 'string' },
        { name: 'active', type: 'boolean' },
        { name: 'lastSent', type: 'date', dateFormat: 'd.m.Y H:i:s' },
        { name: 'lastReceived', type: 'date', dateFormat: 'd.m.Y H:i:s' },
        { name: 'lastOrderId', type: 'int' },
        { name: 'lastCustomerId', type: 'int' },
        { name: 'lastProductId', type: 'int' },
        { name: 'batchSize', type: 'int' },
        { name: 'industry', type: 'int' },
        { name: 'type', type: 'string' },
        { name: 'responseToken', type: 'string', useNull: true }
    ],
});
//
<?php }} ?>