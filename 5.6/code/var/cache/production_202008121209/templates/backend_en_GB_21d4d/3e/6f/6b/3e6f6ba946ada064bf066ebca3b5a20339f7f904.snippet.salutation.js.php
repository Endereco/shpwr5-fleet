<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/store/salutation.js" */ ?>
<?php /*%%SmartyHeaderCode:13422488495f6ba78809ab93-39705643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e6f6ba946ada064bf066ebca3b5a20339f7f904' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/store/salutation.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13422488495f6ba78809ab93-39705643',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78809c2c9_51972765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78809c2c9_51972765')) {function content_5f6ba78809c2c9_51972765($_smarty_tpl) {?>
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

Ext.define('Shopware.apps.Base.store.Salutation', {
    extend: 'Ext.data.Store',

    idProperty: 'key',

    fields: [
        { name: 'id', type: 'string', mapping: 'key' },
        { name: 'key', type: 'string' },
        { name: 'label', type: 'string' }
    ],

    proxy:{
        type:'ajax',
        url: '<?php echo '/shopware5_6/backend/Base/getSalutations';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    },

    getByKey: function(key) {
        var salutation = key;

        this.each(function(item) {
            if (item.get('key') === key) {
                salutation = item.get('label');
            }
        });

        return salutation;
    }
});
<?php }} ?>