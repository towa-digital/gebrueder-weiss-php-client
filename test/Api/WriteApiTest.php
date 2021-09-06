<?php

namespace Towa\GebruederWeissSDK\Test\Api;

use PHPUnit\Framework\TestCase;
use Towa\GebruederWeissSDK\Api\WriteApi;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Towa\GebruederWeissSDK\ApiException;
use Towa\GebruederWeissSDK\Model\ErrorMessage;
use Towa\GebruederWeissSDK\Model\LogisticsOrder;
use Towa\GebruederWeissSDK\Model\Translation;

class WriteApiTest extends TestCase
{
    public function testLogisticsOrderPostSuccessful()
    {
        $mock = new MockHandler([
            new Response(202, [], '1234567890'),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $api = new WriteApi($client);

        $response = $api->logisticsOrderPost(new LogisticsOrder());
        
        $this->assertSame("1234567890", $response);
    }

    public function testLogisticsOrderPostBadRequest()
    {
        $errorTranslation = new Translation();
        $errorTranslation->setTranslationOriginal("Invalid item");

        $error = new ErrorMessage();
        $error->setText($errorTranslation);

        $mock = new MockHandler([
            new Response(400, [], '{
                "text": {
                  "translationOriginal": {
                    "text": "Invalid item"
                  }
                }
              }'),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $api = new WriteApi($client);

        try {
            $api->logisticsOrderPost(new LogisticsOrder());
            $this->assertTrue(false);
        } catch (ApiException $e) {
            $this->assertSame($error->getText()->getTranslationOriginal(), $e->getResponseObject()->getText()->getTranslationOriginal()->getText());

        }
        
    }
}
