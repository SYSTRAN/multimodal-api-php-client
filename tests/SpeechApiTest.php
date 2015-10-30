<?php
require_once(__DIR__ . '/../autoload.php');
require_once(__DIR__ . '/../lib/multimodalApi/SpeechApi.php');
require_once(__DIR__ . '/../vendor/autoload.php');
foreach (glob(__DIR__ . "/../lib/Model/*.php") as $filename)
{
    require_once $filename;
}
class SpeechApiTest extends PHPUnit_Framework_TestCase
{
    var $config;
    var $api_client;
    var $align_file;
    var $lid_file;
    var $text_file;


    public function setUp()
    {
        $this->config = new \Systran\Client\Configuration();
        $api_key = new SplFileObject(__DIR__ . '/../apiKey.txt');
        $this->config->setApiKey("key",$api_key->fgets());
        $this->config->setHost("https://platform.systran.net:8904");
        $this->api_client = new \Systran\Client\ApiClient($this->config);
        $this->align_file = new SplFileObject(__DIR__ . '/speech-align.mp3');
        $this->lid_file = new SplFileObject(__DIR__ . '/speech-lid.mp3');
        $this->text_file = new SplFileObject(__DIR__ . '/test.txt');

    }
    public function testSpeechDetectLanguagePost()
    {
        $speech_api = new \Systran\Client\SpeechApi($this->api_client);
        $this->assertNotNull($speech_api->multimodalSpeechDetectLanguagePost($this->lid_file));
    }
    public function testSpeechSupportedLanguagesGet()
    {
        $speech_api = new \Systran\Client\SpeechApi($this->api_client);
        $this->assertNotNull($speech_api->multimodalSpeechSupportedLanguagesGet());
    }
/*
    public function testSpeechAlignPost()
    {
        $speech_api = new \Systran\Client\SpeechApi($this->api_client);
        $this->assertNotNull($speech_api->multimodalSpeechAlignPost($this->align_file, $this->text_file, "en" ));
    }


    public function testSpeechSegmentPost()
    {
        $speech_api = new \Systran\Client\SpeechApi($this->api_client);
        $this->assertNotNull($speech_api->multimodalSpeechSegmentPost($this->lid_file));
    }


    public function testSpeechTranscribePost()
    {
        $lidb_file = new SplFileObject(__DIR__ . '/speech-lid.mp3');



        $speech_api = new \Systran\Client\SpeechApi($this->api_client);
        $this->assertNotNull($speech_api->multimodalSpeechTranscribePost($lidb_file, "en"));
    }
*/
}
