<?php
/**
 * AutoPlanOptionsModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
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
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\BumbalClient\Model;

use \ArrayAccess;
use \BumbalClient\ObjectSerializer;

/**
 * AutoPlanOptionsModel Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutoPlanOptionsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutoPlanOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'synchronous' => 'bool',
        'respond_after_apply_planning' => 'bool',
        'allow_unplanned_activities' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'synchronous' => null,
        'respond_after_apply_planning' => null,
        'allow_unplanned_activities' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'synchronous' => 'synchronous',
        'respond_after_apply_planning' => 'respond_after_apply_planning',
        'allow_unplanned_activities' => 'allow_unplanned_activities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'synchronous' => 'setSynchronous',
        'respond_after_apply_planning' => 'setRespondAfterApplyPlanning',
        'allow_unplanned_activities' => 'setAllowUnplannedActivities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'synchronous' => 'getSynchronous',
        'respond_after_apply_planning' => 'getRespondAfterApplyPlanning',
        'allow_unplanned_activities' => 'getAllowUnplannedActivities'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['synchronous'] = isset($data['synchronous']) ? $data['synchronous'] : null;
        $this->container['respond_after_apply_planning'] = isset($data['respond_after_apply_planning']) ? $data['respond_after_apply_planning'] : null;
        $this->container['allow_unplanned_activities'] = isset($data['allow_unplanned_activities']) ? $data['allow_unplanned_activities'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets synchronous
     *
     * @return bool
     */
    public function getSynchronous()
    {
        return $this->container['synchronous'];
    }

    /**
     * Sets synchronous
     *
     * @param bool $synchronous 
     *
     * @return $this
     */
    public function setSynchronous($synchronous)
    {
        $this->container['synchronous'] = $synchronous;

        return $this;
    }

    /**
     * Gets respond_after_apply_planning
     *
     * @return bool
     */
    public function getRespondAfterApplyPlanning()
    {
        return $this->container['respond_after_apply_planning'];
    }

    /**
     * Sets respond_after_apply_planning
     *
     * @param bool $respond_after_apply_planning 
     *
     * @return $this
     */
    public function setRespondAfterApplyPlanning($respond_after_apply_planning)
    {
        $this->container['respond_after_apply_planning'] = $respond_after_apply_planning;

        return $this;
    }

    /**
     * Gets allow_unplanned_activities
     *
     * @return bool
     */
    public function getAllowUnplannedActivities()
    {
        return $this->container['allow_unplanned_activities'];
    }

    /**
     * Sets allow_unplanned_activities
     *
     * @param bool $allow_unplanned_activities 
     *
     * @return $this
     */
    public function setAllowUnplannedActivities($allow_unplanned_activities)
    {
        $this->container['allow_unplanned_activities'] = $allow_unplanned_activities;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


