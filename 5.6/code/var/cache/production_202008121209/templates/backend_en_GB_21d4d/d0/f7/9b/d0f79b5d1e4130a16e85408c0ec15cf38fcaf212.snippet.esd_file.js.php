<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:41
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/article/store/esd_file.js" */ ?>
<?php /*%%SmartyHeaderCode:5989897275f6ba789f23235-09511068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f79b5d1e4130a16e85408c0ec15cf38fcaf212' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/article/store/esd_file.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5989897275f6ba789f23235-09511068',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba789f24391_05558976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba789f24391_05558976')) {function content_5f6ba789f24391_05558976($_smarty_tpl) {?>/**
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
 *
 * @category   Shopware
 * @package    Article
 * @subpackage Esd
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Article Module
 */
//
Ext.define('Shopware.apps.Article.store.EsdFile', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',


    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Article.model.EsdFile',

    /**
     * Disable auto loading for this store
     * @boolean
     */
    autoLoad: false,
    pageSize: 15
});
//
<?php }} ?>