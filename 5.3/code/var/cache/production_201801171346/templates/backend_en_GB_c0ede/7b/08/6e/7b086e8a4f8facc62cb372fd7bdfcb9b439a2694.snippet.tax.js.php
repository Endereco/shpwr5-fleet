<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:53
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/model/tax.js" */ ?>
<?php /*%%SmartyHeaderCode:9977079455f6baaa19ee027-75437894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b086e8a4f8facc62cb372fd7bdfcb9b439a2694' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/model/tax.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9977079455f6baaa19ee027-75437894',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa19ef308_39030121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa19ef308_39030121')) {function content_5f6baaa19ef308_39030121($_smarty_tpl) {?>/**
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
 * The shop model represents a data row of the s_core_tax or the
 * Shopware\Models\Article\Tax doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.Tax', {
    /**
     * Defines an alternate name for this class.
     */
    alternateClassName:'Shopware.model.Tax',

    /**
     * Extends the standard ExtJS Model
     * @string
     */
    extend : 'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields : [
        //
        { name : 'id',  type: 'integer' },
        { name : 'tax',type: 'float' },
        { name : 'name',type: 'string' }
    ]
});
//
<?php }} ?>