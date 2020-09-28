<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/model/page_not_found_destination_options.js" */ ?>
<?php /*%%SmartyHeaderCode:7501930255f6ba788045e26-75590417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf504fc86b71a32ea06916d74c8e3f6db30faba' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/model/page_not_found_destination_options.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7501930255f6ba788045e26-75590417',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba7880471c6_55313072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba7880471c6_55313072')) {function content_5f6ba7880471c6_55313072($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware "Page Not Found" Destination Options Model
 *
 * The "Page Not Found" destination options model contains the possible options for a 404 page.
 * It always has the 2 default options, plus emotion landing pages.
 */
//
Ext.define('Shopware.apps.Base.model.PageNotFoundDestinationOptions', {
    extend: 'Ext.data.Model',

    alternateClassName: 'Shopware.model.PageNotFoundDestinationOptions',
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' }
    ]
});
//
<?php }} ?>