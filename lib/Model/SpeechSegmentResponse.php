<?php
/**
 * SpeechSegmentResponse
 *
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

use \ArrayAccess;
/**
 * SpeechSegmentResponse Class Doc Comment
 *
 * @category    Class
 * @description Response of a Speech Segment request
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class SpeechSegmentResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'error' => '\Systran\Client\ErrorResponse',
        'channels' => '\Systran\Client\SpeechChannel[]',
        'speakers' => '\Systran\Client\SpeechSpeaker[]',
        'segments' => '\Systran\Client\SpeechSegment[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'error' => 'error',
        'channels' => 'channels',
        'speakers' => 'speakers',
        'segments' => 'segments'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'error' => 'setError',
        'channels' => 'setChannels',
        'speakers' => 'setSpeakers',
        'segments' => 'setSegments'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'error' => 'getError',
        'channels' => 'getChannels',
        'speakers' => 'getSpeakers',
        'segments' => 'getSegments'
    );
  
    
    /**
      * $error Error at request level
      * @var \Systran\Client\ErrorResponse
      */
    protected $error;
    
    /**
      * $channels Array of channels
      * @var \Systran\Client\SpeechChannel[]
      */
    protected $channels;
    
    /**
      * $speakers Array of speakers
      * @var \Systran\Client\SpeechSpeaker[]
      */
    protected $speakers;
    
    /**
      * $segments Array of segments
      * @var \Systran\Client\SpeechSegment[]
      */
    protected $segments;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->error = $data["error"];
            $this->channels = $data["channels"];
            $this->speakers = $data["speakers"];
            $this->segments = $data["segments"];
        }
    }
    
    /**
     * Gets error
     * @return \Systran\Client\ErrorResponse
     */
    public function getError()
    {
        return $this->error;
    }
  
    /**
     * Sets error
     * @param \Systran\Client\ErrorResponse $error Error at request level
     * @return $this
     */
    public function setError($error)
    {
        
        $this->error = $error;
        return $this;
    }
    
    /**
     * Gets channels
     * @return \Systran\Client\SpeechChannel[]
     */
    public function getChannels()
    {
        return $this->channels;
    }
  
    /**
     * Sets channels
     * @param \Systran\Client\SpeechChannel[] $channels Array of channels
     * @return $this
     */
    public function setChannels($channels)
    {
        
        $this->channels = $channels;
        return $this;
    }
    
    /**
     * Gets speakers
     * @return \Systran\Client\SpeechSpeaker[]
     */
    public function getSpeakers()
    {
        return $this->speakers;
    }
  
    /**
     * Sets speakers
     * @param \Systran\Client\SpeechSpeaker[] $speakers Array of speakers
     * @return $this
     */
    public function setSpeakers($speakers)
    {
        
        $this->speakers = $speakers;
        return $this;
    }
    
    /**
     * Gets segments
     * @return \Systran\Client\SpeechSegment[]
     */
    public function getSegments()
    {
        return $this->segments;
    }
  
    /**
     * Sets segments
     * @param \Systran\Client\SpeechSegment[] $segments Array of segments
     * @return $this
     */
    public function setSegments($segments)
    {
        
        $this->segments = $segments;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
