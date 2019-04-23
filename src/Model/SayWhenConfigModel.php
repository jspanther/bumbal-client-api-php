<?php
/**
 * SayWhenConfigModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swaagger Codegen team
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
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * SayWhenConfigModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SayWhenConfigModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SayWhenConfigModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'planner_reference_mapping' => 'string',
        'meta_data' => 'string',
        'key_ring' => 'string',
        'visit_type_map' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'planner_reference_mapping' => 'field for planner reference',
        'meta_data' => 'JSON formatted string with metadata',
        'key_ring' => 'JSON formatted string with the keyRing',
        'visit_type_map' => 'JSON formatted string with the visit type mapping'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'planner_reference_mapping' => 'plannerReferenceMapping',
        'meta_data' => 'metaData',
        'key_ring' => 'keyRing',
        'visit_type_map' => 'visitTypeMap'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'planner_reference_mapping' => 'setPlannerReferenceMapping',
        'meta_data' => 'setMetaData',
        'key_ring' => 'setKeyRing',
        'visit_type_map' => 'setVisitTypeMap'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'planner_reference_mapping' => 'getPlannerReferenceMapping',
        'meta_data' => 'getMetaData',
        'key_ring' => 'getKeyRing',
        'visit_type_map' => 'getVisitTypeMap'
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
        $this->container['planner_reference_mapping'] = isset($data['planner_reference_mapping']) ? $data['planner_reference_mapping'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['key_ring'] = isset($data['key_ring']) ? $data['key_ring'] : null;
        $this->container['visit_type_map'] = isset($data['visit_type_map']) ? $data['visit_type_map'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets planner_reference_mapping
     * @return string
     */
    public function getPlannerReferenceMapping()
    {
        return $this->container['planner_reference_mapping'];
    }

    /**
     * Sets planner_reference_mapping
     * @param string $planner_reference_mapping
     * @return $this
     */
    public function setPlannerReferenceMapping($planner_reference_mapping)
    {
        $this->container['planner_reference_mapping'] = $planner_reference_mapping;

        return $this;
    }

    /**
     * Gets meta_data
     * @return string
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param string $meta_data
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets key_ring
     * @return string
     */
    public function getKeyRing()
    {
        return $this->container['key_ring'];
    }

    /**
     * Sets key_ring
     * @param string $key_ring
     * @return $this
     */
    public function setKeyRing($key_ring)
    {
        $this->container['key_ring'] = $key_ring;

        return $this;
    }

    /**
     * Gets visit_type_map
     * @return string
     */
    public function getVisitTypeMap()
    {
        return $this->container['visit_type_map'];
    }

    /**
     * Sets visit_type_map
     * @param string $visit_type_map
     * @return $this
     */
    public function setVisitTypeMap($visit_type_map)
    {
        $this->container['visit_type_map'] = $visit_type_map;

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


