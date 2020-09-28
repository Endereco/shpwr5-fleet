<?php
class Shopware_Proxies_ShopwareControllersBackendFeedbackProxy extends \Shopware_Controllers_Backend_Feedback implements \Enlight_Hook_Proxy
{

    public function executeParent($method, $args = array())
    {
        return call_user_func_array([$this, 'parent::' . $method], $args);
    }

    public static function getHookMethods()
    {
        return [];
    }


}
