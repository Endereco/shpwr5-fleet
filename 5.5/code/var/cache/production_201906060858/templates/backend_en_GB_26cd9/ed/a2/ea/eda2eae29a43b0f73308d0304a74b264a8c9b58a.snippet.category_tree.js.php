<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:18
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/base/store/category_tree.js" */ ?>
<?php /*%%SmartyHeaderCode:2515066435f6ba9ca4426e7-11887310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eda2eae29a43b0f73308d0304a74b264a8c9b58a' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/base/store/category_tree.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2515066435f6ba9ca4426e7-11887310',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ca443592_86531131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ca443592_86531131')) {function content_5f6ba9ca443592_86531131($_smarty_tpl) {?>/**
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
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.CategoryTree', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.store.CategoryTree',

    /**
     * Define that this component is an extension of the Ext.data.TreeStore
     */
    extend : 'Ext.data.TreeStore',

    /**
     * Define unique store id to create the store by the store manager
     */
    storeId: 'base.CategoryTree',

    /**
     * Auto load the store after the component
     * is initialized
     * @boolean
     */
    autoLoad: false,

    /**
     * Define the used model for this store
     * @string
     */
    model : 'Shopware.apps.Base.model.Category',

    /**
     * Configure the data communication
     * @object
     */
    proxy : {
        type : 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api : {
            read : '<?php echo '/shopware5_5/backend/category/getList';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader : {
            type : 'json',
            root: 'data'
        }
    }
}).create();

<?php }} ?>