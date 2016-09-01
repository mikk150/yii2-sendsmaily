<?php

namespace mikk150\sendsmaily;

use yii\mail\BaseMailer;
use GuzzleHttp\Client;

/**
* 
*/
class Mailer extends BaseMailer
{
    public $baseUrl;

    public $apiUser;

    public $apiPassword;

    private $_client;

    /**
     * @var string the default class name of the new message instances created by [[createMessage()]]
     */
    public $messageClass = 'mikk150\sendsmaily\Message';

    /**
     * Creates a new message instance and optionally composes its body content via view rendering.
     *
     * @param string|integer $view the view to be used for rendering the message body. This can be:
     *
     * @param array $params the parameters (name-value pairs) that will be extracted and made available in the view file.
     * @return MessageInterface message instance.
     */
    public function compose($view = null, array $params = [])
    {
        $message = $this->createMessage();
        if ($view === null) {
            return $message;
        }

        $message->setTemplateId($view);
        $message->setTemplateParams($params);

        return $message;
    }

    /**
     * Sends the specified message.
     * This method should be implemented by child classes with the actual email sending logic.
     * @param MessageInterface $message the message to be sent
     * @return boolean whether the message is sent successfully
     */
    protected function sendMessage($message) {
        var_dump($message);
    }

    /**
     * Returns guzzle client
     *
     * @return Client preconfigured guzzle client
     */
    public function getClient()
    {
        if (!isset($this->_client)) {
            $this->_client = new Client([
                'base_uri' => $this->baseUrl,
                'auth' => [$this->apiUser, $this->apiPassword]
            ]);
        }
        return $this->_client;
    }
}
