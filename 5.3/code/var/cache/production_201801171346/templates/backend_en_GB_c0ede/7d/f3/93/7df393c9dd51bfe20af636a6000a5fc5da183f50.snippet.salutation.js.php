<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:53
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/store/salutation.js" */ ?>
<?php /*%%SmartyHeaderCode:16152502005f6baaa1a6a957-16871726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7df393c9dd51bfe20af636a6000a5fc5da183f50' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/store/salutation.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16152502005f6baaa1a6a957-16871726',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa1a6bd13_00476377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa1a6bd13_00476377')) {function content_5f6baaa1a6bd13_00476377($_smarty_tpl) {?>
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
        url: '<?php echo '/shopware5_3/backend/Base/getSalutations';?>',
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