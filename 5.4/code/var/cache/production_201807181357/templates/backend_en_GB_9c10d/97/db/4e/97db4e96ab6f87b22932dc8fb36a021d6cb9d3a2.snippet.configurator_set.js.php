<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/article/model/configurator_set.js" */ ?>
<?php /*%%SmartyHeaderCode:16861841475f6baa39956826-28661848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97db4e96ab6f87b22932dc8fb36a021d6cb9d3a2' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/article/model/configurator_set.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16861841475f6baa39956826-28661848',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa39958bb9_71333470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa39958bb9_71333470')) {function content_5f6baa39958bb9_71333470($_smarty_tpl) {?>/**
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
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article models.
 * The article model contains all data about the article. Additional the model
 * contains the definition of the model associations. The article model
 * contains a proxy to define which request has to been sent to save, update and delete
 * the article.
 */
//
Ext.define('Shopware.apps.Article.model.ConfiguratorSet', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int', useNull: true },
        { name: 'articleId', type: 'int', useNull: true },
        { name: 'name', type: 'string' },
        { name: 'type', type: 'int', defaultValue: 0 },
        { name: 'public', type: 'boolean' }
    ],
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorGroup', name: 'getConfiguratorGroups', associationKey: 'groups' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getConfiguratorOptions', associationKey: 'options' }
    ]

});
//
<?php }} ?>