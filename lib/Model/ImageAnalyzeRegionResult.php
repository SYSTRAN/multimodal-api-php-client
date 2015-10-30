<?php
/**
 * ImageAnalyzeRegionResult
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
 * ImageAnalyzeRegionResult Class Doc Comment
 *
 * @category    Class
 * @description Result of an Image Region analysis
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class ImageAnalyzeRegionResult implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'type' => 'string',
        'background' => 'int',
        'foreground' => 'int',
        'script' => 'string',
        'font_type' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'type' => 'type',
        'background' => 'background',
        'foreground' => 'foreground',
        'script' => 'script',
        'font_type' => 'fontType'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'type' => 'setType',
        'background' => 'setBackground',
        'foreground' => 'setForeground',
        'script' => 'setScript',
        'font_type' => 'setFontType'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'type' => 'getType',
        'background' => 'getBackground',
        'foreground' => 'getForeground',
        'script' => 'getScript',
        'font_type' => 'getFontType'
    );
  
    
    /**
      * $type Region type
      * @var string
      */
    protected $type;
    
    /**
      * $background Background RGB color
      * @var int
      */
    protected $background;
    
    /**
      * $foreground Foreground RGB color
      * @var int
      */
    protected $foreground;
    
    /**
      * $script Region script
      * @var string
      */
    protected $script;
    
    /**
      * $font_type Font type
      * @var string
      */
    protected $font_type;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->type = $data["type"];
            $this->background = $data["background"];
            $this->foreground = $data["foreground"];
            $this->script = $data["script"];
            $this->font_type = $data["font_type"];
        }
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type Region type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("noise", "text", "image");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'noise', 'text', 'image'");
        }
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets background
     * @return int
     */
    public function getBackground()
    {
        return $this->background;
    }
  
    /**
     * Sets background
     * @param int $background Background RGB color
     * @return $this
     */
    public function setBackground($background)
    {
        
        $this->background = $background;
        return $this;
    }
    
    /**
     * Gets foreground
     * @return int
     */
    public function getForeground()
    {
        return $this->foreground;
    }
  
    /**
     * Sets foreground
     * @param int $foreground Foreground RGB color
     * @return $this
     */
    public function setForeground($foreground)
    {
        
        $this->foreground = $foreground;
        return $this;
    }
    
    /**
     * Gets script
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }
  
    /**
     * Sets script
     * @param string $script Region script
     * @return $this
     */
    public function setScript($script)
    {
        $allowed_values = array("Unknown", "Latin", "Cyrillic", "Hangul", "Han");
        if (!in_array($script, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'script', must be one of 'Unknown', 'Latin', 'Cyrillic', 'Hangul', 'Han'");
        }
        $this->script = $script;
        return $this;
    }
    
    /**
     * Gets font_type
     * @return string
     */
    public function getFontType()
    {
        return $this->font_type;
    }
  
    /**
     * Sets font_type
     * @param string $font_type Font type
     * @return $this
     */
    public function setFontType($font_type)
    {
        
        $this->font_type = $font_type;
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
