<?php

class Passport_Action extends Typecho_Widget implements Widget_Interface_Do
{
    /**
     * 找回密码
     *
     * @access public
     * @return void
     */
    public function doForgot(){}

    /**
     * 重置密码
     *
     * @access public
     * @return void
     */
    public function doReset(){}

    /**
     * 绑定动作
     *
     * @access public
     * @return void
     */
    public function action()
    {
        // 进入权限设置
        $this->widget('Widget_User')->pass('administrator');

        // 绑定动作
        // url: /action/passport?type=forgot
        // url: /action/passport?type=reset
        $this->on($this->request->is('type=forgot'))->doForgot();
        $this->on($this->request->is('type=reset'))->doReset();
    }
}
