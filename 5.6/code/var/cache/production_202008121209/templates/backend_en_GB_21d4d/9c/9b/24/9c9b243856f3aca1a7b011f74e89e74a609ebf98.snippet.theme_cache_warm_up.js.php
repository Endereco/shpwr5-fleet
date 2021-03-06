<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/index/store/theme_cache_warm_up.js" */ ?>
<?php /*%%SmartyHeaderCode:18087786665f6ba788670af9-51511952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9b243856f3aca1a7b011f74e89e74a609ebf98' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/index/store/theme_cache_warm_up.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18087786665f6ba788670af9-51511952',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba788672969_46110130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba788672969_46110130')) {function content_5f6ba788672969_46110130($_smarty_tpl) {?>/**
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

/**
 * Theme cache warm up store
 *
 * Loads stores that use themes
 */
//
Ext.define('Shopware.apps.Index.store.ThemeCacheWarmUp', {
    extend: 'Shopware.apps.Base.store.Shop',
    model: 'Shopware.apps.Index.model.ThemeCacheWarmUp',
    remoteFilter: true,
    clearOnLoad: false,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/shopware5_6/backend/base/getShopsWithThemes';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>