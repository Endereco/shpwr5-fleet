<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/product_stream/store/stream.js" */ ?>
<?php /*%%SmartyHeaderCode:20702109255f6ba9cbc86bd4-31103340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8522f9de77158f0a150acb092ddf0dbf3038695d' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/product_stream/store/stream.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20702109255f6ba9cbc86bd4-31103340',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbc87fb9_39199811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbc87fb9_39199811')) {function content_5f6ba9cbc87fb9_39199811($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.store.Stream', {
    extend:'Shopware.store.Listing',
    groupField: 'type',

    configure: function() {
        return {
            controller: 'ProductStream'
        };
    },
    model: 'Shopware.apps.ProductStream.model.Stream'
});
//<?php }} ?>