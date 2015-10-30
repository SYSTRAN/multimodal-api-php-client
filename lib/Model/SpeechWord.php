<?php
/**
 * SpeechWord
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
 * SpeechWord Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class SpeechWord implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'start' => 'double',
        'duration' => 'double',
        'confidence' => 'double',
        'text' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'start' => 'start',
        'duration' => 'duration',
        'confidence' => 'confidence',
        'text' => 'text'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'start' => 'setStart',
        'duration' => 'setDuration',
        'confidence' => 'setConfidence',
        'text' => 'setText'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'start' => 'getStart',
        'duration' => 'getDuration',
        'confidence' => 'getConfidence',
        'text' => 'getText'
    );
  
    
    /**
      * $start Start time (in seconds)
      * @var double
      */
    protected $start;
    
    /**
      * $duration Duration (in seconds)
      * @var double
      */
    protected $duration;
    
    /**
      * $confidence Confidence
      * @var double
      */
    protected $confidence;
    
    /**
      * $text Word text
      * @var string
      */
    protected $text;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->start = $data["start"];
            $this->duration = $data["duration"];
            $this->confidence = $data["confidence"];
            $this->text = $data["text"];
        }
    }
    
    /**
     * Gets start
     * @return double
     */
    public function getStart()
    {
        return $this->start;
    }
  
    /**
     * Sets start
     * @param double $start Start time (in seconds)
     * @return $this
     */
    public function setStart($start)
    {
        
        $this->start = $start;
        return $this;
    }
    
    /**
     * Gets duration
     * @return double
     */
    public function getDuration()
    {
        return $this->duration;
    }
  
    /**
     * Sets duration
     * @param double $duration Duration (in seconds)
     * @return $this
     */
    public function setDuration($duration)
    {
        
        $this->duration = $duration;
        return $this;
    }
    
    /**
     * Gets confidence
     * @return double
     */
    public function getConfidence()
    {
        return $this->confidence;
    }
  
    /**
     * Sets confidence
     * @param double $confidence Confidence
     * @return $this
     */
    public function setConfidence($confidence)
    {
        
        $this->confidence = $confidence;
        return $this;
    }
    
    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
  
    /**
     * Sets text
     * @param string $text Word text
     * @return $this
     */
    public function setText($text)
    {
        
        $this->text = $text;
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
