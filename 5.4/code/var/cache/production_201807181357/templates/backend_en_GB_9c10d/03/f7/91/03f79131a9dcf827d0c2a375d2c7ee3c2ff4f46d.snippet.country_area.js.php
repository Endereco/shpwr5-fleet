<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:08
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/model/country_area.js" */ ?>
<?php /*%%SmartyHeaderCode:14551301675f6baa381c7913-03550210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03f79131a9dcf827d0c2a375d2c7ee3c2ff4f46d' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/model/country_area.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14551301675f6baa381c7913-03550210',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa381c8c67_30977593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa381c8c67_30977593')) {function content_5f6baa381c8c67_30977593($_smarty_tpl) {?>/**
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
 * The country model represents a data row of the s_core_countries or the
 * Shopware\Models\Country\Country doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.CountryArea', {
    extend: 'Shopware.data.Model',
    fields: [
        //
        { name: 'id', type:'int' },
        { name: 'name', type: 'string', convert: function(v) {
            return v.charAt(0).toUpperCase() + v.substr(1);
        } },
        { name: 'active', type: 'boolean' }
    ]
});
//
<?php }} ?>