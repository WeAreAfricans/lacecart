<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

namespace LaceCart\Backend;

class AccountController extends BaseController
{
    public function index()
    {
        $this->setView('account/account');
        $this->view->title = 'Welcome';
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function error()
    {
        // Handle a non-match route request
        echo "here";
    }

}