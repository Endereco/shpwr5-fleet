<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:08
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/store/doc_type.js" */ ?>
<?php /*%%SmartyHeaderCode:15423732965f6baa381fa2c6-64249232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da320dd6bb7fefc4552fdeaabcd0a031e56f509f' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/store/doc_type.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15423732965f6baa381fa2c6-64249232',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa381fafd0_85483872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa381fafd0_85483872')) {function content_5f6baa381fafd0_85483872($_smarty_tpl) {?>/**
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

/**
 * The base store for document types.
 */
Ext.define('Shopware.apps.Base.store.DocType', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.DocType',
    storeId: 'base.DocType',
    model : 'Shopware.apps.Base.model.DocType',
    pageSize: 1000,
    remoteFilter: true,

    proxy:{
        type:'ajax',
        url:'<?php echo '/shopware5_4/backend/base/getDocTypes';?>',
        reader:{
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
}).create();

<?php }} ?>