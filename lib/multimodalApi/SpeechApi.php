<?php
/**
 * SpeechApi
 * PHP version 5
 *
 * @category Class
 * @package  Systran\Client
 * @author   http://github.com/Systran-api/Systran-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 *
 * Do not edit the class manually.
 */

namespace Systran\Client;

use \Systran\Client\Configuration;
use \Systran\Client\ApiClient;
use \Systran\Client\ApiException;
use \Systran\Client\ObjectSerializer;

/**
 * SpeechApi Class Doc Comment
 *
 * @category Class
 * @package  Systran\Client
 * @author   http://github.com/Systran-api/Systran-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class SpeechApi
{

    /**
     * API Client
     * @var \Systran\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Systran\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost:8202');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Systran\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Systran\Client\ApiClient $apiClient set the API client
     * @return SpeechApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * multimodalSpeechAlignPost
     *
     * Align speech
     *
     * @param \SplFileObject $audio_file Audio file ([details](#description_audio_files)). (required)
     * @param \SplFileObject $text_file Plain text file, ASCII, ISO-8859 or UTF8 encoded.\n\nThe text should include one sentence or clause per line ending with a punctuation mark. (required)
     * @param string $lang Language code of the input ([details](#description_langage_code_values)) (required)
     * @param string $model Model name (optional)
     * @param string $sampling Sampling quality of the audio file.\n * high: wide band audio such as radio and TV broadcast (sampling higher or equal to 16KHz)\n * low: telephone data with sampling rates higher or equal to 8KHz. It is highly recommended to not use a bit rate lower than 32Kbps. (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\SpeechAlignResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function multimodalSpeechAlignPost($audio_file, $text_file, $lang, $model=null, $sampling=null, $callback=null)
    {
        
        // verify the required parameter 'audio_file' is set
        if ($audio_file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $audio_file when calling multimodalSpeechAlignPost');
        }
        // verify the required parameter 'text_file' is set
        if ($text_file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $text_file when calling multimodalSpeechAlignPost');
        }
        // verify the required parameter 'lang' is set
        if ($lang === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lang when calling multimodalSpeechAlignPost');
        }
  
        // parse inputs
        $resourcePath = "/multimodal/speech/align";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerContentTypeArray = array('*/*','application/x-www-form-urlencoded','*/*');

        // query params
        if ($lang !== null) {
            $queryParams['lang'] = $this->apiClient->getSerializer()->toQueryValue($lang);
        }// query params
        if ($model !== null) {
            $queryParams['model'] = $this->apiClient->getSerializer()->toQueryValue($model);
        }// query params
        if ($sampling !== null) {
            $queryParams['sampling'] = $this->apiClient->getSerializer()->toQueryValue($sampling);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        // form params
        if ($audio_file !== null) {
            if (function_exists('curl_file_create')) {
                $formParams['audioFile'] = new \CurlFile($audio_file->getRealPath());
            }
            else
                $formParams['audioFile'] = '@' . $this->apiClient->getSerializer()->toFormValue($audio_file);
            $headerContentTypeArray = array('multipart/form-data','application/x-www-form-urlencoded','*/*');

        }// form params
        if ($text_file !== null) {
            if (function_exists('curl_file_create')) {
                $formParams['textFile'] = new \CurlFile($text_file->getRealPath());
            }
            else
                $formParams['textFile'] = '@' . $this->apiClient->getSerializer()->toFormValue($text_file);
            $headerContentTypeArray = array('multipart/form-data','application/x-www-form-urlencoded','*/*');
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType($headerContentTypeArray, $formParams);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\SpeechAlignResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\SpeechAlignResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\SpeechAlignResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * multimodalSpeechDetectLanguagePost
     *
     * Speech language detection
     *
     * @param \SplFileObject $audio_file Audio file ([details](#description_audio_files)). (required)
     * @param string $sampling Sampling quality of the audio file.\n * high: wide band audio such as radio and TV broadcast (sampling higher or equal to 16KHz)\n * low: telephone data with sampling rates higher or equal to 8KHz. It is highly recommended to not use a bit rate lower than 32Kbps. (optional)
     * @param int $max_speaker Maximum number of speakers. Default 1 for low sampling and infinity for high sampling (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\SpeechDetectLanguageResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function multimodalSpeechDetectLanguagePost($audio_file, $sampling=null, $max_speaker=null, $callback=null)
    {
        
        // verify the required parameter 'audio_file' is set
        if ($audio_file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $audio_file when calling multimodalSpeechDetectLanguagePost');
        }
  
        // parse inputs
        $resourcePath = "/multimodal/speech/detectLanguage";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/x-www-form-urlencoded'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerContentTypeArray = array('*/*','application/x-www-form-urlencoded','*/*');

        // query params
        if ($sampling !== null) {
            $queryParams['sampling'] = $this->apiClient->getSerializer()->toQueryValue($sampling);
        }// query params
        if ($max_speaker !== null) {
            $queryParams['maxSpeaker'] = $this->apiClient->getSerializer()->toQueryValue($max_speaker);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }

        // form params
        if ($audio_file !== null) {
            if (function_exists('curl_file_create')) {
                $formParams['audioFile'] = new \CurlFile($audio_file->getRealPath());
            }
            else
                $formParams['audioFile'] = '@' . $this->apiClient->getSerializer()->toFormValue($audio_file);
            $headerContentTypeArray = array('multipart/form-data','application/x-www-form-urlencoded','*/*');
        }



        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType($headerContentTypeArray, $formParams);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }


        error_log("httpBody");
        error_log( print_R($httpBody, true));

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\SpeechDetectLanguageResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\SpeechDetectLanguageResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\SpeechDetectLanguageResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * multimodalSpeechSegmentPost
     *
     * Segment speech
     *
     * @param \SplFileObject $audio_file Audio file ([details](#description_audio_files)). (required)
     * @param string $sampling Sampling quality of the audio file.\n * high: wide band audio such as radio and TV broadcast (sampling higher or equal to 16KHz)\n * low: telephone data with sampling rates higher or equal to 8KHz. It is highly recommended to not use a bit rate lower than 32Kbps. (optional)
     * @param int $max_speaker Maximum number of speakers. Default 1 for low sampling and infinity for high sampling (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\SpeechSegmentResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function multimodalSpeechSegmentPost($audio_file, $sampling=null, $max_speaker=null, $callback=null)
    {
        
        // verify the required parameter 'audio_file' is set
        if ($audio_file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $audio_file when calling multimodalSpeechSegmentPost');
        }
  
        // parse inputs
        $resourcePath = "/multimodal/speech/segment";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerContentTypeArray = array('*/*','application/x-www-form-urlencoded','*/*');

        // query params
        if ($sampling !== null) {
            $queryParams['sampling'] = $this->apiClient->getSerializer()->toQueryValue($sampling);
        }// query params
        if ($max_speaker !== null) {
            $queryParams['maxSpeaker'] = $this->apiClient->getSerializer()->toQueryValue($max_speaker);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        // form params
        if ($audio_file !== null) {
            if (function_exists('curl_file_create')) {
                $formParams['audioFile'] = new \CurlFile($audio_file->getRealPath());
            }
            else
                $formParams['audioFile'] = '@' . $this->apiClient->getSerializer()->toFormValue($audio_file);
            $headerContentTypeArray = array('multipart/form-data','application/x-www-form-urlencoded','*/*');
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType($headerContentTypeArray, $formParams);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\SpeechSegmentResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\SpeechSegmentResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\SpeechSegmentResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * multimodalSpeechSupportedLanguagesGet
     *
     * Supported Languages
     *
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\SpeechSupportedLanguagesResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function multimodalSpeechSupportedLanguagesGet($callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/multimodal/speech/supportedLanguages";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\SpeechSupportedLanguagesResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\SpeechSupportedLanguagesResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\SpeechSupportedLanguagesResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * multimodalSpeechTranscribePost
     *
     * Transcribe speech
     *
     * @param \SplFileObject $audio_file Audio file ([details](#description_audio_files)). (required)
     * @param string $lang Language code of the input ([details](#description_langage_code_values)) (required)
     * @param string $model Model name (optional)
     * @param string $sampling Sampling quality of the audio file.\n * high: wide band audio such as radio and TV broadcast (sampling higher or equal to 16KHz)\n * low: telephone data with sampling rates higher or equal to 8KHz. It is highly recommended to not use a bit rate lower than 32Kbps. (optional)
     * @param int $max_speaker Maximum number of speakers. Default 1 for low sampling and infinity for high sampling (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\SpeechTranscribeResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function multimodalSpeechTranscribePost($audio_file, $lang, $model=null, $sampling=null, $max_speaker=null, $callback=null)
    {
        
        // verify the required parameter 'audio_file' is set
        if ($audio_file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $audio_file when calling multimodalSpeechTranscribePost');
        }
        // verify the required parameter 'lang' is set
        if ($lang === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lang when calling multimodalSpeechTranscribePost');
        }
  
        // parse inputs
        $resourcePath = "/multimodal/speech/transcribe";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerContentTypeArray = array('*/*','application/x-www-form-urlencoded','*/*');

        // query params
        if ($lang !== null) {
            $queryParams['lang'] = $this->apiClient->getSerializer()->toQueryValue($lang);
        }// query params
        if ($model !== null) {
            $queryParams['model'] = $this->apiClient->getSerializer()->toQueryValue($model);
        }// query params
        if ($sampling !== null) {
            $queryParams['sampling'] = $this->apiClient->getSerializer()->toQueryValue($sampling);
        }// query params
        if ($max_speaker !== null) {
            $queryParams['maxSpeaker'] = $this->apiClient->getSerializer()->toQueryValue($max_speaker);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        // form params
        if ($audio_file !== null) {
            if (function_exists('curl_file_create')) {
                $formParams['audioFile'] = new \CurlFile($audio_file->getRealPath());
            }
            else
                $formParams['audioFile'] = '@' . $this->apiClient->getSerializer()->toFormValue($audio_file);
            $headerContentTypeArray = array('multipart/form-data','application/x-www-form-urlencoded','*/*');
        }

        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType($headerContentTypeArray, $formParams);

        error_log(count($formParams));
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Systran\Client\SpeechTranscribeResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\SpeechTranscribeResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\SpeechTranscribeResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}
