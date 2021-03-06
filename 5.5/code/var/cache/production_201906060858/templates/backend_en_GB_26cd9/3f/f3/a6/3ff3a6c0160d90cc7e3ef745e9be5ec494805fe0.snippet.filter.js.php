<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:19
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/article_list/store/filter.js" */ ?>
<?php /*%%SmartyHeaderCode:19918481355f6ba9cbc44b48-12566509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ff3a6c0160d90cc7e3ef745e9be5ec494805fe0' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/article_list/store/filter.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19918481355f6ba9cbc44b48-12566509',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9cbc45a11_01799628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9cbc45a11_01799628')) {function content_5f6ba9cbc45a11_01799628($_smarty_tpl) {?>/**
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

/**
 * Shopware Store - Filter store
 *
 * Holds all filters being shown in the left navigation
 */
Ext.define('Shopware.apps.ArticleList.store.Filter', {

    /**
     * Define that this component is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',

    /**
     * Define unique store id to create the store by the store manager
     */
    storeId: 'multiEdit.Filter',

    /**
     * Define how much rows loaded with one request
     */
    pageSize: 100,

   /**
    * Auto load the store after the component
    * is initialized
    * @boolean
    */
    autoLoad: false,

    /**
     * Do not remote sort the store
     */
    remoteSort: false,

    /**
     * Also disable remote filtering
     */
    remoteFilter: false,

    groupField: 'groupName',

   /**
    * Define the used model for this store
    * @string
    */
    model : 'Shopware.apps.ArticleList.model.Filter',

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url:'<?php echo '/shopware5_5/backend/ArticleList/getFilter';?>',

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});


<?php }} ?>