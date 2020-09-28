<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:55
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/article/model/dependency.js" */ ?>
<?php /*%%SmartyHeaderCode:2801420585f6baaa31d9525-39187189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d71bc31b576247f686c14922f93be5579793afe' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/article/model/dependency.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2801420585f6baaa31d9525-39187189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa31db8b7_45524188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa31db8b7_45524188')) {function content_5f6baaa31db8b7_45524188($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.Dependency', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'integer', useNull: true },
        { name: 'configuratorSetId', type: 'integer', useNull: true },
        { name: 'parentId', type: 'integer', useNull: true },
        { name: 'childId', type: 'integer', useNull: true },
        {
            name: 'parentGroupId',
            type: 'integer',
            convert: function(value, record) {
                if (value) {
                    return value;
                }
                if (record && record.raw && record.raw.parentOption) {
                    return record.raw.parentOption.groupId;
                }
                return null;
            }
       },
       {
            name: 'childGroupId',
            type: 'integer',
            convert: function(value, record) {
                if (value) {
                    return value;
                }
                if (record && record.raw && record.raw.childOption) {
                    return record.raw.childOption.groupId;
                }
                return null;
            }
       }
    ],

    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getParentOption', associationKey: 'parentOption' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getChildOption', associationKey: 'childOption' }
    ],

    proxy: {
        type: 'ajax',
        api: {
            destroy: '<?php echo '/shopware5_3/backend/Article/deleteConfiguratorDependency';?>'
        }
    }



});
//

<?php }} ?>