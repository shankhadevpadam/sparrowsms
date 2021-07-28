<?php

namespace NotificationChannels\SparrowSMS\Exceptions;

class CouldNotSendNotification extends \Exception
{
    public static function serviceRespondedWithAnError($response)
    {
        return new static($response->json()['response_code'] .':'. $response->json()['response']);
    }
}
