<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:08
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/model/article.js" */ ?>
<?php /*%%SmartyHeaderCode:3222095445f6baa381961f6-87941413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '590891ba11b608aa5c8a68e079d3aad3f3fdae49' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/model/article.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3222095445f6baa381961f6-87941413',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa38198346_74598179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa38198346_74598179')) {function content_5f6baa38198346_74598179($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The article model represents a data row of the s_articles or the
 * Shopware\Models\Article\Article doctrine model. In addition to the
 * article data the article model contains the data for the first article detail
 * position and the data for the category to which the article was first assigned.
 */
//
Ext.define('Shopware.apps.Base.model.Article', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName:'Shopware.model.Article',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type:'int' },
        { name:'number', type:'string' },
        { name:'name', type:'string' },
        { name:'description', type:'string' },
        { name:'supplierName', type:'string' },
        { name:'supplierId', type:'int' },
        { name:'active', type:'int' },
        { name:'detailId', type:'int' },
        { name:'changeTime', type:'date' },
        { name:'inStock', type:'int' },

        { name:'label', type:'string' }
    ]
});
//

<?php }} ?>