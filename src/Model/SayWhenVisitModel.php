<?php
/**
 * SayWhenVisitModel
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
 * Swagger Codegen version: 1.0.16
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
 * SayWhenVisitModel Class Doc Comment
 *
 * @category Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SayWhenVisitModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SayWhenVisitModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'current_state' => 'string',
        'status' => 'string',
        'offered_by_owner' => 'string',
        'preferences_received' => 'string',
        'planned_by_partner' => 'string',
        'completed_by_partner' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'current_state' => null,
        'status' => null,
        'offered_by_owner' => null,
        'preferences_received' => null,
        'planned_by_partner' => null,
        'completed_by_partner' => null
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
        'id' => 'id',
        'current_state' => 'current_state',
        'status' => 'status',
        'offered_by_owner' => 'offered_by_owner',
        'preferences_received' => 'preferences_received',
        'planned_by_partner' => 'planned_by_partner',
        'completed_by_partner' => 'completed_by_partner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'current_state' => 'setCurrentState',
        'status' => 'setStatus',
        'offered_by_owner' => 'setOfferedByOwner',
        'preferences_received' => 'setPreferencesReceived',
        'planned_by_partner' => 'setPlannedByPartner',
        'completed_by_partner' => 'setCompletedByPartner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'current_state' => 'getCurrentState',
        'status' => 'getStatus',
        'offered_by_owner' => 'getOfferedByOwner',
        'preferences_received' => 'getPreferencesReceived',
        'planned_by_partner' => 'getPlannedByPartner',
        'completed_by_partner' => 'getCompletedByPartner'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['current_state'] = isset($data['current_state']) ? $data['current_state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['offered_by_owner'] = isset($data['offered_by_owner']) ? $data['offered_by_owner'] : null;
        $this->container['preferences_received'] = isset($data['preferences_received']) ? $data['preferences_received'] : null;
        $this->container['planned_by_partner'] = isset($data['planned_by_partner']) ? $data['planned_by_partner'] : null;
        $this->container['completed_by_partner'] = isset($data['completed_by_partner']) ? $data['completed_by_partner'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id SayWhen Visit ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets current_state
     *
     * @return string
     */
    public function getCurrentState()
    {
        return $this->container['current_state'];
    }

    /**
     * Sets current_state
     *
     * @param string $current_state 
     *
     * @return $this
     */
    public function setCurrentState($current_state)
    {
        $this->container['current_state'] = $current_state;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets offered_by_owner
     *
     * @return string
     */
    public function getOfferedByOwner()
    {
        return $this->container['offered_by_owner'];
    }

    /**
     * Sets offered_by_owner
     *
     * @param string $offered_by_owner offered_by_owner
     *
     * @return $this
     */
    public function setOfferedByOwner($offered_by_owner)
    {
        $this->container['offered_by_owner'] = $offered_by_owner;

        return $this;
    }

    /**
     * Gets preferences_received
     *
     * @return string
     */
    public function getPreferencesReceived()
    {
        return $this->container['preferences_received'];
    }

    /**
     * Sets preferences_received
     *
     * @param string $preferences_received preferences_received
     *
     * @return $this
     */
    public function setPreferencesReceived($preferences_received)
    {
        $this->container['preferences_received'] = $preferences_received;

        return $this;
    }

    /**
     * Gets planned_by_partner
     *
     * @return string
     */
    public function getPlannedByPartner()
    {
        return $this->container['planned_by_partner'];
    }

    /**
     * Sets planned_by_partner
     *
     * @param string $planned_by_partner planned_by_partner
     *
     * @return $this
     */
    public function setPlannedByPartner($planned_by_partner)
    {
        $this->container['planned_by_partner'] = $planned_by_partner;

        return $this;
    }

    /**
     * Gets completed_by_partner
     *
     * @return string
     */
    public function getCompletedByPartner()
    {
        return $this->container['completed_by_partner'];
    }

    /**
     * Sets completed_by_partner
     *
     * @param string $completed_by_partner completed_by_partner
     *
     * @return $this
     */
    public function setCompletedByPartner($completed_by_partner)
    {
        $this->container['completed_by_partner'] = $completed_by_partner;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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
