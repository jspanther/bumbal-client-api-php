<?php
/**
 * RouteFiltersModel
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
 * RouteFiltersModel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RouteFiltersModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RouteFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int[]',
        'date_time_from' => '\DateTime',
        'date_time_to' => '\DateTime',
        'earliest_date_time_since' => '\DateTime',
        'earliest_date_time_till' => '\DateTime',
        'latest_date_time_since' => '\DateTime',
        'latest_date_time_till' => '\DateTime',
        'updated_at' => '\DateTime',
        'status_id' => 'int[]',
        'driver_id' => 'int[]',
        'recurrence_id' => 'int',
        'tag_names' => 'string[]',
        'zone_names' => 'string[]',
        'optimized' => 'bool[]',
        'blocked' => 'bool[]'
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
        'date_time_from' => 'date_time_from',
        'date_time_to' => 'date_time_to',
        'earliest_date_time_since' => 'earliest_date_time_since',
        'earliest_date_time_till' => 'earliest_date_time_till',
        'latest_date_time_since' => 'latest_date_time_since',
        'latest_date_time_till' => 'latest_date_time_till',
        'updated_at' => 'updated_at',
        'status_id' => 'status_id',
        'driver_id' => 'driver_id',
        'recurrence_id' => 'recurrence_id',
        'tag_names' => 'tag_names',
        'zone_names' => 'zone_names',
        'optimized' => 'optimized',
        'blocked' => 'blocked'
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
        'date_time_from' => 'setDateTimeFrom',
        'date_time_to' => 'setDateTimeTo',
        'earliest_date_time_since' => 'setEarliestDateTimeSince',
        'earliest_date_time_till' => 'setEarliestDateTimeTill',
        'latest_date_time_since' => 'setLatestDateTimeSince',
        'latest_date_time_till' => 'setLatestDateTimeTill',
        'updated_at' => 'setUpdatedAt',
        'status_id' => 'setStatusId',
        'driver_id' => 'setDriverId',
        'recurrence_id' => 'setRecurrenceId',
        'tag_names' => 'setTagNames',
        'zone_names' => 'setZoneNames',
        'optimized' => 'setOptimized',
        'blocked' => 'setBlocked'
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
        'date_time_from' => 'getDateTimeFrom',
        'date_time_to' => 'getDateTimeTo',
        'earliest_date_time_since' => 'getEarliestDateTimeSince',
        'earliest_date_time_till' => 'getEarliestDateTimeTill',
        'latest_date_time_since' => 'getLatestDateTimeSince',
        'latest_date_time_till' => 'getLatestDateTimeTill',
        'updated_at' => 'getUpdatedAt',
        'status_id' => 'getStatusId',
        'driver_id' => 'getDriverId',
        'recurrence_id' => 'getRecurrenceId',
        'tag_names' => 'getTagNames',
        'zone_names' => 'getZoneNames',
        'optimized' => 'getOptimized',
        'blocked' => 'getBlocked'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
        $this->container['earliest_date_time_since'] = isset($data['earliest_date_time_since']) ? $data['earliest_date_time_since'] : null;
        $this->container['earliest_date_time_till'] = isset($data['earliest_date_time_till']) ? $data['earliest_date_time_till'] : null;
        $this->container['latest_date_time_since'] = isset($data['latest_date_time_since']) ? $data['latest_date_time_since'] : null;
        $this->container['latest_date_time_till'] = isset($data['latest_date_time_till']) ? $data['latest_date_time_till'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['recurrence_id'] = isset($data['recurrence_id']) ? $data['recurrence_id'] : null;
        $this->container['tag_names'] = isset($data['tag_names']) ? $data['tag_names'] : null;
        $this->container['zone_names'] = isset($data['zone_names']) ? $data['zone_names'] : null;
        $this->container['optimized'] = isset($data['optimized']) ? $data['optimized'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
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
     * Gets id
     * @return int[]
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int[] $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date_time_from
     * @return \DateTime
     */
    public function getDateTimeFrom()
    {
        return $this->container['date_time_from'];
    }

    /**
     * Sets date_time_from
     * @param \DateTime $date_time_from
     * @return $this
     */
    public function setDateTimeFrom($date_time_from)
    {
        $this->container['date_time_from'] = $date_time_from;

        return $this;
    }

    /**
     * Gets date_time_to
     * @return \DateTime
     */
    public function getDateTimeTo()
    {
        return $this->container['date_time_to'];
    }

    /**
     * Sets date_time_to
     * @param \DateTime $date_time_to
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets earliest_date_time_since
     * @return \DateTime
     */
    public function getEarliestDateTimeSince()
    {
        return $this->container['earliest_date_time_since'];
    }

    /**
     * Sets earliest_date_time_since
     * @param \DateTime $earliest_date_time_since filter routes with an Earliest DateTime To since this input
     * @return $this
     */
    public function setEarliestDateTimeSince($earliest_date_time_since)
    {
        $this->container['earliest_date_time_since'] = $earliest_date_time_since;

        return $this;
    }

    /**
     * Gets earliest_date_time_till
     * @return \DateTime
     */
    public function getEarliestDateTimeTill()
    {
        return $this->container['earliest_date_time_till'];
    }

    /**
     * Sets earliest_date_time_till
     * @param \DateTime $earliest_date_time_till filter routes with an Earliest DateTime To till this input
     * @return $this
     */
    public function setEarliestDateTimeTill($earliest_date_time_till)
    {
        $this->container['earliest_date_time_till'] = $earliest_date_time_till;

        return $this;
    }

    /**
     * Gets latest_date_time_since
     * @return \DateTime
     */
    public function getLatestDateTimeSince()
    {
        return $this->container['latest_date_time_since'];
    }

    /**
     * Sets latest_date_time_since
     * @param \DateTime $latest_date_time_since filter routes with an Latest DateTime To since this input
     * @return $this
     */
    public function setLatestDateTimeSince($latest_date_time_since)
    {
        $this->container['latest_date_time_since'] = $latest_date_time_since;

        return $this;
    }

    /**
     * Gets latest_date_time_till
     * @return \DateTime
     */
    public function getLatestDateTimeTill()
    {
        return $this->container['latest_date_time_till'];
    }

    /**
     * Sets latest_date_time_till
     * @param \DateTime $latest_date_time_till filter routes with an Latest DateTime To till this input
     * @return $this
     */
    public function setLatestDateTimeTill($latest_date_time_till)
    {
        $this->container['latest_date_time_till'] = $latest_date_time_till;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets status_id
     * @return int[]
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     * @param int[] $status_id
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets driver_id
     * @return int[]
     */
    public function getDriverId()
    {
        return $this->container['driver_id'];
    }

    /**
     * Sets driver_id
     * @param int[] $driver_id
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets recurrence_id
     * @return int
     */
    public function getRecurrenceId()
    {
        return $this->container['recurrence_id'];
    }

    /**
     * Sets recurrence_id
     * @param int $recurrence_id Recurrence ID
     * @return $this
     */
    public function setRecurrenceId($recurrence_id)
    {
        $this->container['recurrence_id'] = $recurrence_id;

        return $this;
    }

    /**
     * Gets tag_names
     * @return string[]
     */
    public function getTagNames()
    {
        return $this->container['tag_names'];
    }

    /**
     * Sets tag_names
     * @param string[] $tag_names Tag names
     * @return $this
     */
    public function setTagNames($tag_names)
    {
        $this->container['tag_names'] = $tag_names;

        return $this;
    }

    /**
     * Gets zone_names
     * @return string[]
     */
    public function getZoneNames()
    {
        return $this->container['zone_names'];
    }

    /**
     * Sets zone_names
     * @param string[] $zone_names Zone names
     * @return $this
     */
    public function setZoneNames($zone_names)
    {
        $this->container['zone_names'] = $zone_names;

        return $this;
    }

    /**
     * Gets optimized
     * @return bool[]
     */
    public function getOptimized()
    {
        return $this->container['optimized'];
    }

    /**
     * Sets optimized
     * @param bool[] $optimized Optimized status of Route.
     * @return $this
     */
    public function setOptimized($optimized)
    {
        $this->container['optimized'] = $optimized;

        return $this;
    }

    /**
     * Gets blocked
     * @return bool[]
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     * @param bool[] $blocked Blocked status of Route
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

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


