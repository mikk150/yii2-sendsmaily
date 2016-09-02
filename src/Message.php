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

    private $_to;

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

    public function getCharset()
    {
        # code...
    }
    public function setCharset($v)
    {
        # code...
    }
    public function getFrom()
    {
        # code...
    }
    public function setFrom($v)
    {
        # code...
    }
    public function getTo()
    {
        return $this->_to;
    }
    public function setTo($to)
    {
        $this->_to = $to;
    }
    public function getReplyTo()
    {
        # code...
    }
    public function setReplyTo($v)
    {
        # code...
    }
    public function getCc()
    {
        # code...
    }
    public function setCc($v)
    {
        # code...
    }
    public function getBcc()
    {
        # code...
    }
    public function setBcc($v)
    {
        # code...
    }
    public function getSubject()
    {
        # code...
    }
    public function setSubject($v)
    {
        # code...
    }
    public function setTextBody($v)
    {
        # code...
    }
    public function setHtmlBody($v)
    {
        # code...
    }
    public function attach($fileName, array $options = [])
    {
        # code...
    }
    public function attachContent($fileName, array $options = [])
    {
        # code...
    }
    public function embed($fileName, array $options = [])
    {
        # code...
    }
    public function embedContent($fileName, array $options = [])
    {
        # code...
    }
    public function toString()
    {
        # code...
    }
}