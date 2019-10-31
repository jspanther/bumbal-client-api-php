<?php
/**
 * CapacityTypeOptionsModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * CapacityTypeOptionsModel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CapacityTypeOptionsModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CapacityTypeOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'include_uom' => 'bool',
        'include_uom_group' => 'bool',
        'include_uom_name' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'include_uom' => 'include_uom',
        'include_uom_group' => 'include_uom_group',
        'include_uom_name' => 'include_uom_name'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'include_uom' => 'setIncludeUom',
        'include_uom_group' => 'setIncludeUomGroup',
        'include_uom_name' => 'setIncludeUomName'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'include_uom' => 'getIncludeUom',
        'include_uom_group' => 'getIncludeUomGroup',
        'include_uom_name' => 'getIncludeUomName'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['include_uom'] = isset($data['include_uom']) ? $data['include_uom'] : null;
        $this->container['include_uom_group'] = isset($data['include_uom_group']) ? $data['include_uom_group'] : null;
        $this->container['include_uom_name'] = isset($data['include_uom_name']) ? $data['include_uom_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets include_uom
     * @return bool
     */
    public function getIncludeUom()
    {
        return $this->container['include_uom'];
    }

    /**
     * Sets include_uom
     * @param bool $include_uom
     * @return $this
     */
    public function setIncludeUom($include_uom)
    {
        $this->container['include_uom'] = $include_uom;

        return $this;
    }

    /**
     * Gets include_uom_group
     * @return bool
     */
    public function getIncludeUomGroup()
    {
        return $this->container['include_uom_group'];
    }

    /**
     * Sets include_uom_group
     * @param bool $include_uom_group
     * @return $this
     */
    public function setIncludeUomGroup($include_uom_group)
    {
        $this->container['include_uom_group'] = $include_uom_group;

        return $this;
    }

    /**
     * Gets include_uom_name
     * @return bool
     */
    public function getIncludeUomName()
    {
        return $this->container['include_uom_name'];
    }

    /**
     * Sets include_uom_name
     * @param bool $include_uom_name
     * @return $this
     */
    public function setIncludeUomName($include_uom_name)
    {
        $this->container['include_uom_name'] = $include_uom_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


