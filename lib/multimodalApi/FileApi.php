<?php
/**
 * FileApi
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
 * FileApi Class Doc Comment
 *
 * @category Class
 * @package  Systran\Client
 * @author   http://github.com/Systran-api/Systran-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class FileApi
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
     * @return FileApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * multimodalFileExtractTextPost
     *
     * Extract text from a file
     *
     * @param \SplFileObject $input_file Input File (required)
     * @param string $lang Language code of the input ([details](#description_langage_code_values)) or `auto` for automatic detection (optional)
     * @param string $format Format of the input file.\n\nValid values are the mimetypes returned by the supportedFormats service. (optional)
     * @param int $profile Profile id (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\FileExtractTextResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function multimodalFileExtractTextPost($input_file, $lang=null, $format=null, $profile=null, $callback=null)
    {
        
        // verify the required parameter 'input_file' is set
        if ($input_file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input_file when calling multimodalFileExtractTextPost');
        }
  
        // parse inputs
        $resourcePath = "/multimodal/file/extract/text";
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
        if ($format !== null) {
            $queryParams['format'] = $this->apiClient->getSerializer()->toQueryValue($format);
        }// query params
        if ($profile !== null) {
            $queryParams['profile'] = $this->apiClient->getSerializer()->toQueryValue($profile);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        // form params
        if ($input_file !== null) {
            if (function_exists('curl_file_create')) {
                $formParams['inputFile'] = new \CurlFile($input_file->getRealPath());
            }
            else
                $formParams['inputFile'] = '@' . $this->apiClient->getSerializer()->toFormValue($input_file);
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
                $headerParams, '\Systran\Client\FileExtractTextResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\FileExtractTextResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\FileExtractTextResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * multimodalFileSupportedFormatsGet
     *
     * Supported file formats
     *
     * @param int $profile Profile id (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return \Systran\Client\FileSupportedFormatsResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function multimodalFileSupportedFormatsGet($profile=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/multimodal/file/supportedFormats";
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
        if ($profile !== null) {
            $queryParams['profile'] = $this->apiClient->getSerializer()->toQueryValue($profile);
        }// query params
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
                $headerParams, '\Systran\Client\FileSupportedFormatsResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Systran\Client\FileSupportedFormatsResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Systran\Client\FileSupportedFormatsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}
