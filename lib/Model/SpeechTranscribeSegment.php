<?php
/**
 * SpeechTranscribeSegment
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
 * SpeechTranscribeSegment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class SpeechTranscribeSegment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'channel' => 'int',
        'speaker' => 'string',
        'speaker_confidence' => 'double',
        'start' => 'double',
        'end' => 'double',
        'lang' => 'string',
        'lang_confidence' => 'double',
        'words' => '\Systran\Client\SpeechWord[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'channel' => 'channel',
        'speaker' => 'speaker',
        'speaker_confidence' => 'speakerConfidence',
        'start' => 'start',
        'end' => 'end',
        'lang' => 'lang',
        'lang_confidence' => 'langConfidence',
        'words' => 'words'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'channel' => 'setChannel',
        'speaker' => 'setSpeaker',
        'speaker_confidence' => 'setSpeakerConfidence',
        'start' => 'setStart',
        'end' => 'setEnd',
        'lang' => 'setLang',
        'lang_confidence' => 'setLangConfidence',
        'words' => 'setWords'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'channel' => 'getChannel',
        'speaker' => 'getSpeaker',
        'speaker_confidence' => 'getSpeakerConfidence',
        'start' => 'getStart',
        'end' => 'getEnd',
        'lang' => 'getLang',
        'lang_confidence' => 'getLangConfidence',
        'words' => 'getWords'
    );
  
    
    /**
      * $channel Channel id
      * @var int
      */
    protected $channel;
    
    /**
      * $speaker Speaker id
      * @var string
      */
    protected $speaker;
    
    /**
      * $speaker_confidence Confidence for the detected speaker
      * @var double
      */
    protected $speaker_confidence;
    
    /**
      * $start Start time (in seconds)
      * @var double
      */
    protected $start;
    
    /**
      * $end End time (in seconds)
      * @var double
      */
    protected $end;
    
    /**
      * $lang Detected language ([details](#description_langage_code_values))
      * @var string
      */
    protected $lang;
    
    /**
      * $lang_confidence Confidence for the detected language
      * @var double
      */
    protected $lang_confidence;
    
    /**
      * $words Array of words
      * @var \Systran\Client\SpeechWord[]
      */
    protected $words;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->channel = $data["channel"];
            $this->speaker = $data["speaker"];
            $this->speaker_confidence = $data["speaker_confidence"];
            $this->start = $data["start"];
            $this->end = $data["end"];
            $this->lang = $data["lang"];
            $this->lang_confidence = $data["lang_confidence"];
            $this->words = $data["words"];
        }
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
     * Gets speaker
     * @return string
     */
    public function getSpeaker()
    {
        return $this->speaker;
    }
  
    /**
     * Sets speaker
     * @param string $speaker Speaker id
     * @return $this
     */
    public function setSpeaker($speaker)
    {
        
        $this->speaker = $speaker;
        return $this;
    }
    
    /**
     * Gets speaker_confidence
     * @return double
     */
    public function getSpeakerConfidence()
    {
        return $this->speaker_confidence;
    }
  
    /**
     * Sets speaker_confidence
     * @param double $speaker_confidence Confidence for the detected speaker
     * @return $this
     */
    public function setSpeakerConfidence($speaker_confidence)
    {
        
        $this->speaker_confidence = $speaker_confidence;
        return $this;
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
     * Gets end
     * @return double
     */
    public function getEnd()
    {
        return $this->end;
    }
  
    /**
     * Sets end
     * @param double $end End time (in seconds)
     * @return $this
     */
    public function setEnd($end)
    {
        
        $this->end = $end;
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
     * @param string $lang Detected language ([details](#description_langage_code_values))
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
     * Gets words
     * @return \Systran\Client\SpeechWord[]
     */
    public function getWords()
    {
        return $this->words;
    }
  
    /**
     * Sets words
     * @param \Systran\Client\SpeechWord[] $words Array of words
     * @return $this
     */
    public function setWords($words)
    {
        
        $this->words = $words;
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
