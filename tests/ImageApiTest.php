<?php
require_once(__DIR__ . '/../autoload.php');
require_once(__DIR__ . '/../lib/multimodalApi/ImageApi.php');
require_once(__DIR__ . '/../vendor/autoload.php');
foreach (glob(__DIR__ . "/../lib/Model/*.php") as $filename)
{
    require_once $filename;
}
print " /!\ Some functions supported in this client may still be upcoming features in the SYSTRAN Platform API. In case of 500 status code please refer to https://platform.systran.net/reference/multimodal. \n";

class ImageApiTest extends PHPUnit_Framework_TestCase
{
    var $config;
    var $api_client;

    public function setUp()
    {
        $this->config = new \Systran\Client\Configuration();
        $api_key = new SplFileObject(__DIR__ . '/../apiKey.txt');
        $this->config->setApiKey("key",$api_key->fgets());
        $this->config->setHost("https://platform.systran.net:8904");
        $this->api_client = new \Systran\Client\ApiClient($this->config);
    }

    public function testImageAnalyzeLayoutPost()
    {
        $input_file = new SplFileObject(__DIR__ . '/test.jpg');
        $image_api = new \Systran\Client\imageApi($this->api_client);
        $this->assertNotNull($image_api->multimodalImageAnalyzeLayoutPost($input_file, "en"));
    }
    public function testImageAnalyzeRegionPost()
    {
        $input_file = new SplFileObject(__DIR__ . '/test.jpg');
        $image_api = new \Systran\Client\imageApi($this->api_client);
        $this->assertNotNull($image_api->multimodalImageAnalyzeRegionPost($input_file, "en"));
    }
    public function testImageSupportedLanguagesGet()
    {
        $image_api = new \Systran\Client\imageApi($this->api_client);
        $this->assertNotNull($image_api->multimodalImageSupportedLanguagesGet());
    }
    public function testImageTranscribePost()
    {
        $input_file = new SplFileObject(__DIR__ . '/test.jpg');
        $image_api = new \Systran\Client\imageApi($this->api_client);
        $this->assertNotNull($image_api->multimodalImageTranscribePost($input_file, "en"));
    }

}
