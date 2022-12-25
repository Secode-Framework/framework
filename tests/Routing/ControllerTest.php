<?php

namespace Secode\Tests\Routing;

use PHPUnit\Framework\TestCase;
use Secode\Component\JsonResponseContent;
use Secode\Routing\Controller;
use Secode\Tests\Testing\Util\JsonReader;
use stdClass;

class ControllerTest extends TestCase
{
    const MESSAGE_ERROR = "Ha ocurrido un error inesperado";
    const MESSAGE_SUCCESSFUL = "Todo ha ido correctamente";

    public function testWhenSendDataFailExpectResultJsonSerialized()
    {
        $error = JsonReader::get("Routing/ControllerTest/error.json", stdClass::class);
        $expectedJsonResponse = JsonReader::get("Routing/ControllerTest/expectedJsonResponse.json", JsonResponseContent::class);

        $jsonResponse = (new Controller())->sendDataFail($error, self::MESSAGE_ERROR);

        $this->assertEquals($expectedJsonResponse->jsonSerialize(), json_decode($jsonResponse->content()));
    }

    public function testWhenSendDataSuccessfulExpectResultJsonSerialized()
    {
        $expectedJsonResponse = JsonReader::get("Routing/ControllerTest/expectedJsonResponseTwo.json", JsonResponseContent::class);

        $jsonResponse = (new Controller())->sendDataSuccessful(new stdClass(),self::MESSAGE_SUCCESSFUL);

        $this->assertEquals($expectedJsonResponse->jsonSerialize(), json_decode($jsonResponse->content()));
    }

    public function testWhenSendMessageSuccessfulExpectResultJsonSerialized()
    {
        $expectedJsonResponse = JsonReader::get("Routing/ControllerTest/expectedJsonResponseThree.json", JsonResponseContent::class);

        $jsonResponse = (new Controller())->sendMessageSuccessful(self::MESSAGE_SUCCESSFUL);

        $this->assertEquals($expectedJsonResponse->jsonSerialize(), json_decode($jsonResponse->content()));
    }

    public function testWhenSendMessageFailExpectResultJsonSerialized()
    {
        $expectedJsonResponse = JsonReader::get("Routing/ControllerTest/expectedJsonResponseFour.json", JsonResponseContent::class);

        $jsonResponse = (new Controller())->sendMessageFail(self::MESSAGE_ERROR);

        $this->assertEquals($expectedJsonResponse->jsonSerialize(), json_decode($jsonResponse->content()));
    }

}
