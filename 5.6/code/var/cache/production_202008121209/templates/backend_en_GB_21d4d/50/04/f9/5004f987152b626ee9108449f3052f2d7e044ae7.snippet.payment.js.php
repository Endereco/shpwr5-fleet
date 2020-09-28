<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:39
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/model/payment.js" */ ?>
<?php /*%%SmartyHeaderCode:7959057145f6ba787f412e2-02526316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5004f987152b626ee9108449f3052f2d7e044ae7' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/model/payment.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7959057145f6ba787f412e2-02526316',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba7880002b2_12856598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba7880002b2_12856598')) {function content_5f6ba7880002b2_12856598($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The payment model represents a data row of the s_core_paymentmeans or the
 * Shopware\Models\Payment\Payment doctrine model.
 */
//
//
Ext.define('Shopware.apps.Base.model.Payment', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Payment',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type: 'int' },
        { name:'name', type: 'string' },
        // No need for a snippet matcher anymore.
        // All payments are translated on the server which thereby enabling custom
        // payments methods to be translated as well.
        { name:'description', type: 'string' },
        { name:'position', type: 'int' },
        { name:'active', type: 'boolean' }
    ]
});
//
<?php }} ?>