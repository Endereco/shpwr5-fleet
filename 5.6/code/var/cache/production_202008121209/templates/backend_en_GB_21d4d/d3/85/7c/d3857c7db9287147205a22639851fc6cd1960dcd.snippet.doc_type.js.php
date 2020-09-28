<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/model/doc_type.js" */ ?>
<?php /*%%SmartyHeaderCode:10407231395f6ba78803b017-66254419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3857c7db9287147205a22639851fc6cd1960dcd' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/model/doc_type.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10407231395f6ba78803b017-66254419',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78803ca93_48402972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78803ca93_48402972')) {function content_5f6ba78803ca93_48402972($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 * The document type represents a row the s_core_documents table. It
 * contains all data about a supported document type.
 */
//
//
Ext.define('Shopware.apps.Base.model.DocType', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name: 'id', type: 'int' },
        { name: 'key', type: 'string' },
        // No snippet matcher needed anymore. The document types are now translated by the server.
        // This enables custom document types to be translated as well.
        { name: 'name', type: 'string' },
        { name: 'template', type: 'string' },
        { name: 'numbers', type: 'string' },
        { name: 'left', type: 'int' },
        { name: 'right', type: 'int' },
        { name: 'top', type: 'int' },
        { name: 'bottom', type: 'int' },
        { name: 'pageBreak', type: 'int' }
    ]

});
//
<?php }} ?>