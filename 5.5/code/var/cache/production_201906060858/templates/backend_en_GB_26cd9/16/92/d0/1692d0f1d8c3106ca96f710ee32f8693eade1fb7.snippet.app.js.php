<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:20
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/app.js" */ ?>
<?php /*%%SmartyHeaderCode:6255871335f6ba9ccb9e1f0-60877708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1692d0f1d8c3106ca96f710ee32f8693eade1fb7' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/benchmark/app.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6255871335f6ba9ccb9e1f0-60877708',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ccb9f6f2_13779184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ccb9f6f2_13779184')) {function content_5f6ba9ccb9f6f2_13779184($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

//

Ext.define('Shopware.apps.Benchmark', {
    name: 'Shopware.apps.Benchmark',
    extend:'Enlight.app.SubApplication',
    bulkLoad: true,
    loadPath: '<?php echo '/shopware5_5/backend/Benchmark/load';?>',

    views: ['overview.Window', 'settings.Window', 'settings.IndustryField', 'settings.IndustryWindow'],
    models: [ 'ShopConfig' ],
    stores: [ 'Industry', 'ShopConfigs' ],

    controllers: [ 'Main', 'Settings' ],

    launch: function() {
        var me = this,
            mainController = me.getController('Main');

        return mainController.mainWindow;
    }
});
<?php }} ?>