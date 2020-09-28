<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/article/model/seo_category.js" */ ?>
<?php /*%%SmartyHeaderCode:9552026505f6ba9cbbc0cf0-47680452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fd48f576e7664d43c05af6c15595cade895ba05' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/article/model/seo_category.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9552026505f6ba9cbbc0cf0-47680452',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbbc21c0_87741968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbbc21c0_87741968')) {function content_5f6ba9cbbc21c0_87741968($_smarty_tpl) {?>
/**
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
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article models.
 * The attribute model contains the data for the dynamic article attributes.
 */
//
Ext.define('Shopware.apps.Article.model.SeoCategory', {

    extend: 'Ext.data.Model',

    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'shopId', type: 'int' },
        { name: 'categoryId', type: 'int' }
    ]

});
//
<?php }} ?>