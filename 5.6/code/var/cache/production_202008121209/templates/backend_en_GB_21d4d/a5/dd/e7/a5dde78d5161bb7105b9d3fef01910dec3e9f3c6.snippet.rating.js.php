<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/index/model/rating.js" */ ?>
<?php /*%%SmartyHeaderCode:17435385235f6ba7885d1d05-64626530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5dde78d5161bb7105b9d3fef01910dec3e9f3c6' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/index/model/rating.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17435385235f6ba7885d1d05-64626530',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba7885d3459_92261517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba7885d3459_92261517')) {function content_5f6ba7885d3459_92261517($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.model.Rating', {
    extend: 'Ext.data.Model',
    fields: [
        //
        { name: 'id' },
        { name: 'articleID' },
        { name: 'name' },
        { name: 'headline' },
        { name: 'comment' },
        { name: 'points' },
        { name: 'datum', type: 'date', dateFormat:'Y-m-d H:i:s' },
        { name: 'email' },
        { name: 'productTitle' }
    ]
});
//
<?php }} ?>