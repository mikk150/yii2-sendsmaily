<?php

namespace mikk150\sendsmaily;

use yii\mail\BaseMessage;

/**
* 
*/
class Message extends BaseMessage
{
    private $_templateId;

    private $_templateParams;

    public function setTemplateId($value)
    {
        $this->_templateId = $value;
    }

    public function getTemplateId()
    {
        return $this->_templateId;
    }

    public function setTemplateParams($value)
    {
        $this->_templateParams = $value;
    }

    public function getTemplateParams()
    {
        return $this->_templateParams;
    }
}