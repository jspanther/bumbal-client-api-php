<?php
/**
 * PackageLineModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
 * PackageLineModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PackageLineModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PackageLineModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'nr' => 'string',
        'package_type' => 'string',
        'description' => 'string',
        'nr_of_packages' => 'string',
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
        'volume' => 'float',
        'packagevalue' => 'float'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'nr' => 'nr',
        'package_type' => 'package_type',
        'description' => 'description',
        'nr_of_packages' => 'nr_of_packages',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'volume' => 'volume',
        'packagevalue' => 'packagevalue'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nr' => 'setNr',
        'package_type' => 'setPackageType',
        'description' => 'setDescription',
        'nr_of_packages' => 'setNrOfPackages',
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'volume' => 'setVolume',
        'packagevalue' => 'setPackagevalue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nr' => 'getNr',
        'package_type' => 'getPackageType',
        'description' => 'getDescription',
        'nr_of_packages' => 'getNrOfPackages',
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'volume' => 'getVolume',
        'packagevalue' => 'getPackagevalue'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const PACKAGE_TYPE_PALLET = 'pallet';
    const PACKAGE_TYPE_BOX = 'box';
    const PACKAGE_TYPE_GENERAL = 'general';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPackageTypeAllowableValues()
    {
        return [
            self::PACKAGE_TYPE_PALLET,
            self::PACKAGE_TYPE_BOX,
            self::PACKAGE_TYPE_GENERAL,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['package_type'] = isset($data['package_type']) ? $data['package_type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['nr_of_packages'] = isset($data['nr_of_packages']) ? $data['nr_of_packages'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['packagevalue'] = isset($data['packagevalue']) ? $data['packagevalue'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['package_type'] === null) {
            $invalid_properties[] = "'package_type' can't be null";
        }
        $allowed_values = ["pallet", "box", "general"];
        if (!in_array($this->container['package_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'package_type', must be one of 'pallet', 'box', 'general'.";
        }

        if ($this->container['nr_of_packages'] === null) {
            $invalid_properties[] = "'nr_of_packages' can't be null";
        }
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
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['package_type'] === null) {
            return false;
        }
        $allowed_values = ["pallet", "box", "general"];
        if (!in_array($this->container['package_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['nr_of_packages'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets nr
     * @return string
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     * @param string $nr
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets package_type
     * @return string
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     * @param string $package_type Package Type
     * @return $this
     */
    public function setPackageType($package_type)
    {
        $allowed_values = array('pallet', 'box', 'general');
        if ((!in_array($package_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'package_type', must be one of 'pallet', 'box', 'general'");
        }
        $this->container['package_type'] = $package_type;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets nr_of_packages
     * @return string
     */
    public function getNrOfPackages()
    {
        return $this->container['nr_of_packages'];
    }

    /**
     * Sets nr_of_packages
     * @param string $nr_of_packages
     * @return $this
     */
    public function setNrOfPackages($nr_of_packages)
    {
        $this->container['nr_of_packages'] = $nr_of_packages;

        return $this;
    }

    /**
     * Gets length
     * @return float
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     * @param float $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param float $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param float $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets volume
     * @return float
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     * @param float $volume
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets packagevalue
     * @return float
     */
    public function getPackagevalue()
    {
        return $this->container['packagevalue'];
    }

    /**
     * Sets packagevalue
     * @param float $packagevalue
     * @return $this
     */
    public function setPackagevalue($packagevalue)
    {
        $this->container['packagevalue'] = $packagevalue;

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
