<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:08
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/model/category.js" */ ?>
<?php /*%%SmartyHeaderCode:13337127165f6baa381814f5-98231168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07516064b003dcc2f24db38f85abecd7902cc779' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/model/category.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13337127165f6baa381814f5-98231168',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa38182d53_73123546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa38182d53_73123546')) {function content_5f6baa38182d53_73123546($_smarty_tpl) {?>/**
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
 * The category model represents a data row of the s_categories or the
 * Shopware\Models\Category\Category doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.Category', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Category',

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
        { name : 'id', type:'int' },
        { name : 'parent', type:'int' },
        { name : 'name', type:'string' },
        { name : 'position', type:'int' },
        { name : 'active', type:'boolean', defaultValue: true },
        { name : 'childrenCount', type: 'int' },

        // Some tree fields
        { name : 'text', type: 'string' },
        { name : 'cls', type: 'string' },
        { name : 'leaf', type: 'boolean' },
        { name : 'allowDrag', type: 'boolean' }
    ]
});
//


<?php }} ?>