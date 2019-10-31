<?php
/**
 * ActivityTypeModel
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
 * ActivityTypeModel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityTypeModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityTypeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string'
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
        'id' => 'id',
        'name' => 'name'
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
        'id' => 'setId',
        'name' => 'setName'
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
        'id' => 'getId',
        'name' => 'getName'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ID_1 = 1;
    const ID_2 = 2;
    const ID_3 = 3;
    const ID_4 = 4;
    const ID_5 = 5;
    const ID_6 = 6;
    const ID_9 = 9;
    const ID_10 = 10;
    const ID_11 = 11;
    const ID_13 = 13;
    const ID_14 = 14;
    const ID_15 = 15;
    const ID_16 = 16;
    const ID_17 = 17;
    const ID_18 = 18;
    const ID_19 = 19;
    const ID_20 = 20;
    const ID_21 = 21;
    const ID_26 = 26;
    const ID_27 = 27;
    const ID_28 = 28;
    const ID_29 = 29;
    const ID_30 = 30;
    const ID_31 = 31;
    const ID_32 = 32;
    const NAME_BREAKDOWN = 'breakdown';
    const NAME_BUNDLED = 'bundled';
    const NAME_CAR_END = 'car_end';
    const NAME_CAR_START = 'car_start';
    const NAME_CAR_WASH = 'car_wash';
    const NAME_COMBI = 'combi';
    const NAME_DEPOT = 'depot';
    const NAME_DRIVER_END = 'driver_end';
    const NAME_DRIVER_START = 'driver_start';
    const NAME_DROPOFF = 'dropoff';
    const NAME_GAS_REFILL = 'gas_refill';
    const NAME_INTERIOR_WASH = 'interior_wash';
    const NAME_MAINTENANCE = 'maintenance';
    const NAME_MAINTENANCE_PLANNED = 'maintenance_planned';
    const NAME_MAINTENANCE_UNPLANNED = 'maintenance_unplanned';
    const NAME_OTHER = 'other';
    const NAME_PAUSE = 'pause';
    const NAME_PICKUP = 'pickup';
    const NAME_ROUTE_END = 'route_end';
    const NAME_ROUTE_START = 'route_start';
    const NAME_SANITARY = 'sanitary';
    const NAME_STOP = 'stop';
    const NAME_UNPLANNED_STOP = 'unplanned_stop';
    const NAME_USER_OTHER = 'user_other';
    const NAME_WAIT = 'wait';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getIdAllowableValues()
    {
        return [
            self::ID_1,
            self::ID_2,
            self::ID_3,
            self::ID_4,
            self::ID_5,
            self::ID_6,
            self::ID_9,
            self::ID_10,
            self::ID_11,
            self::ID_13,
            self::ID_14,
            self::ID_15,
            self::ID_16,
            self::ID_17,
            self::ID_18,
            self::ID_19,
            self::ID_20,
            self::ID_21,
            self::ID_26,
            self::ID_27,
            self::ID_28,
            self::ID_29,
            self::ID_30,
            self::ID_31,
            self::ID_32,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_BREAKDOWN,
            self::NAME_BUNDLED,
            self::NAME_CAR_END,
            self::NAME_CAR_START,
            self::NAME_CAR_WASH,
            self::NAME_COMBI,
            self::NAME_DEPOT,
            self::NAME_DRIVER_END,
            self::NAME_DRIVER_START,
            self::NAME_DROPOFF,
            self::NAME_GAS_REFILL,
            self::NAME_INTERIOR_WASH,
            self::NAME_MAINTENANCE,
            self::NAME_MAINTENANCE_PLANNED,
            self::NAME_MAINTENANCE_UNPLANNED,
            self::NAME_OTHER,
            self::NAME_PAUSE,
            self::NAME_PICKUP,
            self::NAME_ROUTE_END,
            self::NAME_ROUTE_START,
            self::NAME_SANITARY,
            self::NAME_STOP,
            self::NAME_UNPLANNED_STOP,
            self::NAME_USER_OTHER,
            self::NAME_WAIT,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("1", "2", "3", "4", "5", "6", "9", "10", "11", "13", "14", "15", "16", "17", "18", "19", "20", "21", "26", "27", "28", "29", "30", "31", "32");
        if (!in_array($this->container['id'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'id', must be one of #{allowed_values}.";
        }

        $allowed_values = array("breakdown", "bundled", "car_end", "car_start", "car_wash", "combi", "depot", "driver_end", "driver_start", "dropoff", "gas_refill", "interior_wash", "maintenance", "maintenance_planned", "maintenance_unplanned", "other", "pause", "pickup", "route_end", "route_start", "sanitary", "stop", "unplanned_stop", "user_other", "wait");
        if (!in_array($this->container['name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'name', must be one of #{allowed_values}.";
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
        $allowed_values = array("1", "2", "3", "4", "5", "6", "9", "10", "11", "13", "14", "15", "16", "17", "18", "19", "20", "21", "26", "27", "28", "29", "30", "31", "32");
        if (!in_array($this->container['id'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("breakdown", "bundled", "car_end", "car_start", "car_wash", "combi", "depot", "driver_end", "driver_start", "dropoff", "gas_refill", "interior_wash", "maintenance", "maintenance_planned", "maintenance_unplanned", "other", "pause", "pickup", "route_end", "route_start", "sanitary", "stop", "unplanned_stop", "user_other", "wait");
        if (!in_array($this->container['name'], $allowed_values)) {
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
     * @param int $id Unique Activity type ID. 1 (:pickup), 2 (:dropoff), 3 (:route_start), 4 (:route_end), 5 (:car_start), 6 (:car_end), 9 (:driver_start), 10 (:driver_end), 11 (:stop), 13 (:pause), 14 (:gas_refill), 15 (:maintenance_planned), 16 (:maintenance_unplanned), 17 (:user_other), 18 (:unplanned_stop), 19 (:wait), 20 (:breakdown), 21 (:sanitary), 26 (:maintenance), 27 (:car_wash), 28 (:depot), 29 (:combi), 30 (:interior_wash), 31 (:other), 32 (:bundled)
     * @return $this
     */
    public function setId($id)
    {
        $allowed_values = array('1', '2', '3', '4', '5', '6', '9', '10', '11', '13', '14', '15', '16', '17', '18', '19', '20', '21', '26', '27', '28', '29', '30', '31', '32');
        if (!in_array($id, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'id', must be one of '1', '2', '3', '4', '5', '6', '9', '10', '11', '13', '14', '15', '16', '17', '18', '19', '20', '21', '26', '27', '28', '29', '30', '31', '32'");
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Activity Type Name. breakdown (:20), bundled (:32), car_end (:6), car_start (:5), car_wash (:27), combi (:29), depot (:28), driver_end (:10), driver_start (:9), dropoff (:2), gas_refill (:14), interior_wash (:30), maintenance (:26), maintenance_planned (:15), maintenance_unplanned (:16), other (:31), pause (:13), pickup (:1), route_end (:4), route_start (:3), sanitary (:21), stop (:11), unplanned_stop (:18), user_other (:17), wait (:19)
     * @return $this
     */
    public function setName($name)
    {
        $allowed_values = array('breakdown', 'bundled', 'car_end', 'car_start', 'car_wash', 'combi', 'depot', 'driver_end', 'driver_start', 'dropoff', 'gas_refill', 'interior_wash', 'maintenance', 'maintenance_planned', 'maintenance_unplanned', 'other', 'pause', 'pickup', 'route_end', 'route_start', 'sanitary', 'stop', 'unplanned_stop', 'user_other', 'wait');
        if (!in_array($name, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'name', must be one of 'breakdown', 'bundled', 'car_end', 'car_start', 'car_wash', 'combi', 'depot', 'driver_end', 'driver_start', 'dropoff', 'gas_refill', 'interior_wash', 'maintenance', 'maintenance_planned', 'maintenance_unplanned', 'other', 'pause', 'pickup', 'route_end', 'route_start', 'sanitary', 'stop', 'unplanned_stop', 'user_other', 'wait'");
        }
        $this->container['name'] = $name;

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


