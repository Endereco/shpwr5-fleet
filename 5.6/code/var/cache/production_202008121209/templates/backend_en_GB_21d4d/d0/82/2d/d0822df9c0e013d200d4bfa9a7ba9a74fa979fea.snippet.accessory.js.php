<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:41
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/article/model/accessory.js" */ ?>
<?php /*%%SmartyHeaderCode:3190766755f6ba789c75e56-83638314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0822df9c0e013d200d4bfa9a7ba9a74fa979fea' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/article/model/accessory.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3190766755f6ba789c75e56-83638314',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba789c77f16_83301077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba789c77f16_83301077')) {function content_5f6ba789c77f16_83301077($_smarty_tpl) {?>/**
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
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article model.
 * The accessory model contains the article data of the assigned accessory article.
 */
//
Ext.define('Shopware.apps.Article.model.Accessory', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'cross', type: 'boolean' },
        { name: 'bundle', type: 'boolean' },
        { name: 'name', type: 'string' },
        { name: 'number', type: 'string', mapping: 'mainDetail.number' }
    ]

});
//
<?php }} ?>