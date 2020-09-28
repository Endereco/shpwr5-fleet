<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:08
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/attribute/mixins/Shopware.attribute.SelectionFactory.js" */ ?>
<?php /*%%SmartyHeaderCode:6717963145f6baa3832f672-81834970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f13c928c65fe9faf9f2b0e01a921d0a833dc2ef1' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/base/attribute/mixins/Shopware.attribute.SelectionFactory.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6717963145f6baa3832f672-81834970',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa38331b49_40085677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa38331b49_40085677')) {function content_5f6baa38331b49_40085677($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.attribute.SelectionFactory', {
    getRelevantFields: function() {
        return ['label', 'name', 'title', 'number', 'description','value'];
    },

    getLabelField: function(record) {
        var fields = this.getRelevantFields();
        var found = null;
        var recordFields = Ext.Object.getKeys(record.data);

        Ext.each(fields, function(field) {
            if (recordFields.indexOf(field) >= 0) {
                found = field;
                return false;
            }
        });

        return found;
    },

    getLabelOfObject: function(values) {
        var fields = this.getRelevantFields();
        var found = null;
        var recordFields = Object.keys(values);

        Ext.each(fields, function(field) {
            if (recordFields.indexOf(field) >= 0) {
                found = field;
                return false;
            }
        });

        if (found) {
            return values[found];
        } else {
            return null;
        }
    },

    createSelection: function(config, attribute, className, store, searchStore) {
        config.store = store;
        config.flex = 1;
        config.searchStore = searchStore;
        return Ext.create(className, config);
    },

    createDynamicSearchStore: function(attribute) {
        return this.createEntitySearchStore(attribute.get('entity'), null);
    },

    createModelSearchStore: function(attribute, model) {
        return this.createEntitySearchStore(attribute.get('entity'), model);
    },

    createEntitySearchStore: function(entity, extJsModel) {
        if (!extJsModel) {
            return Ext.create('Ext.data.Store', {
                model: 'Shopware.model.Dynamic',
                proxy: {
                    type: 'ajax',
                    url: '<?php echo '/shopware5_4/backend/EntitySearch/search';?>?model=' + entity,
                    reader: Ext.create('Shopware.model.DynamicReader')
                }
            });
        }

        return Ext.create('Ext.data.Store', {
            model: extJsModel,
            proxy: {
                type: 'ajax',
                url: '<?php echo '/shopware5_4/backend/EntitySearch/search';?>?model=' + entity,
                reader: { type: 'json', root: 'data' }
            }
        });
    }
});<?php }} ?>