<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.ContentTypeSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:17648959395f6ba78826b065-25178390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfbd9c8c8d9c935f6d34d88dba4c37783cc0d373' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.ContentTypeSelection.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17648959395f6ba78826b065-25178390',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78826b6c2_53215021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78826b6c2_53215021')) {function content_5f6ba78826b6c2_53215021($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.ContentTypeSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-content-type-selection',
    model: 'content_types',
});
<?php }} ?>