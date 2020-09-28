<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/article_list/model/editable_column.js" */ ?>
<?php /*%%SmartyHeaderCode:15968400475f6baa398c5152-64885894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120e7b5fd3189e08afd00dafae0c282175030369' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/article_list/model/editable_column.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15968400475f6baa398c5152-64885894',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa398c7299_78135386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa398c7299_78135386')) {function content_5f6baa398c7299_78135386($_smarty_tpl) {?>/**
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
 * Shopware Model - Operation model
 *
 * Represents a single editable column
 */
//
Ext.define('Shopware.apps.ArticleList.model.EditableColumn', {
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
        { name: 'name', type: 'string' }
    ],

    associations:[
           {
               type:'hasMany',
               model:'Shopware.apps.ArticleList.model.Operator',
               name:'getOperators',
               associationKey:'operators'
           }
       ]


});
//
<?php }} ?>