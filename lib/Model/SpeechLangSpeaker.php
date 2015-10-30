<?php
/**
 * SpeechLangSpeaker
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
 * SpeechLangSpeaker Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class SpeechLangSpeaker implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'id' => 'string',
        'channel' => 'int',
        'duration' => 'double',
        'gender' => 'string',
        'lang' => 'string',
        'lang_confidence' => 'double'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'channel' => 'channel',
        'duration' => 'duration',
        'gender' => 'gender',
        'lang' => 'lang',
        'lang_confidence' => 'langConfidence'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'channel' => 'setChannel',
        'duration' => 'setDuration',
        'gender' => 'setGender',
        'lang' => 'setLang',
        'lang_confidence' => 'setLangConfidence'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'channel' => 'getChannel',
        'duration' => 'getDuration',
        'gender' => 'getGender',
        'lang' => 'getLang',
        'lang_confidence' => 'getLangConfidence'
    );
  
    
    /**
      * $id Speaker id
      * @var string
      */
    protected $id;
    
    /**
      * $channel Channel id
      * @var int
      */
    protected $channel;
    
    /**
      * $duration Speech duration (in seconds)
      * @var double
      */
    protected $duration;
    
    /**
      * $gender Gender
      * @var string
      */
    protected $gender;
    
    /**
      * $lang Speaker detected language ([details](#description_langage_code_values))
      * @var string
      */
    protected $lang;
    
    /**
      * $lang_confidence Confidence for the detected language
      * @var double
      */
    protected $lang_confidence;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->channel = $data["channel"];
            $this->duration = $data["duration"];
            $this->gender = $data["gender"];
            $this->lang = $data["lang"];
            $this->lang_confidence = $data["lang_confidence"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id Speaker id
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets channel
     * @return int
     */
    public function getChannel()
    {
        return $this->channel;
    }
  
    /**
     * Sets channel
     * @param int $channel Channel id
     * @return $this
     */
    public function setChannel($channel)
    {
        
        $this->channel = $channel;
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
     * @param double $duration Speech duration (in seconds)
     * @return $this
     */
    public function setDuration($duration)
    {
        
        $this->duration = $duration;
        return $this;
    }
    
    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
  
    /**
     * Sets gender
     * @param string $gender Gender
     * @return $this
     */
    public function setGender($gender)
    {
        $allowed_values = array("female", "male");
        if (!in_array($gender, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'gender', must be one of 'female', 'male'");
        }
        $this->gender = $gender;
        return $this;
    }
    
    /**
     * Gets lang
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }
  
    /**
     * Sets lang
     * @param string $lang Speaker detected language ([details](#description_langage_code_values))
     * @return $this
     */
    public function setLang($lang)
    {
        
        $this->lang = $lang;
        return $this;
    }
    
    /**
     * Gets lang_confidence
     * @return double
     */
    public function getLangConfidence()
    {
        return $this->lang_confidence;
    }
  
    /**
     * Sets lang_confidence
     * @param double $lang_confidence Confidence for the detected language
     * @return $this
     */
    public function setLangConfidence($lang_confidence)
    {
        
        $this->lang_confidence = $lang_confidence;
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
