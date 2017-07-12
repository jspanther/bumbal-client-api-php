<?php
/**
 * RouteModel
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
 * RouteModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RouteModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RouteModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'nr' => 'string',
        'name' => 'string',
        'status' => 'string',
        'nr_of_stops' => 'int',
        'driver_id' => 'int',
        'car_id' => 'int',
        'link_id' => 'string',
        'earliest_date_time' => '\DateTime',
        'latest_date_time' => '\DateTime',
        'gps_locations' => '\BumbalClient\Model\GPSLocationModel[]',
        'latest_known_position' => '\BumbalClient\Model\GPSLocationModel',
        'activity_ids' => 'object'
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
        'name' => 'name',
        'status' => 'status',
        'nr_of_stops' => 'nr_of_stops',
        'driver_id' => 'driver_id',
        'car_id' => 'car_id',
        'link_id' => 'link_id',
        'earliest_date_time' => 'earliest_date_time',
        'latest_date_time' => 'latest_date_time',
        'gps_locations' => 'gps_locations',
        'latest_known_position' => 'latest_known_position',
        'activity_ids' => 'activity_ids'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nr' => 'setNr',
        'name' => 'setName',
        'status' => 'setStatus',
        'nr_of_stops' => 'setNrOfStops',
        'driver_id' => 'setDriverId',
        'car_id' => 'setCarId',
        'link_id' => 'setLinkId',
        'earliest_date_time' => 'setEarliestDateTime',
        'latest_date_time' => 'setLatestDateTime',
        'gps_locations' => 'setGpsLocations',
        'latest_known_position' => 'setLatestKnownPosition',
        'activity_ids' => 'setActivityIds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nr' => 'getNr',
        'name' => 'getName',
        'status' => 'getStatus',
        'nr_of_stops' => 'getNrOfStops',
        'driver_id' => 'getDriverId',
        'car_id' => 'getCarId',
        'link_id' => 'getLinkId',
        'earliest_date_time' => 'getEarliestDateTime',
        'latest_date_time' => 'getLatestDateTime',
        'gps_locations' => 'getGpsLocations',
        'latest_known_position' => 'getLatestKnownPosition',
        'activity_ids' => 'getActivityIds'
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

    const STATUS_PLANNED = 'route_planned';
    const STATUS_IN_PROGRESS = 'route_in_progress';
    const STATUS_EXECUTED = 'route_executed';
    const STATUS_CANCELLED = 'route_cancelled';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PLANNED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_EXECUTED,
            self::STATUS_CANCELLED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['nr_of_stops'] = isset($data['nr_of_stops']) ? $data['nr_of_stops'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['car_id'] = isset($data['car_id']) ? $data['car_id'] : null;
        $this->container['link_id'] = isset($data['link_id']) ? $data['link_id'] : null;
        $this->container['earliest_date_time'] = isset($data['earliest_date_time']) ? $data['earliest_date_time'] : null;
        $this->container['latest_date_time'] = isset($data['latest_date_time']) ? $data['latest_date_time'] : null;
        $this->container['gps_locations'] = isset($data['gps_locations']) ? $data['gps_locations'] : null;
        $this->container['latest_known_position'] = isset($data['latest_known_position']) ? $data['latest_known_position'] : null;
        $this->container['activity_ids'] = isset($data['activity_ids']) ? $data['activity_ids'] : null;
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
        $allowed_values = ["route_planned", "route_in_progress", "route_executed", "route_cancelled"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'route_planned', 'route_in_progress', 'route_executed', 'route_cancelled'.";
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
        $allowed_values = ["route_planned", "route_in_progress", "route_executed", "route_cancelled"];
        if (!in_array($this->container['status'], $allowed_values)) {
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
     * @param int $id Unique Identifier
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
     * @param string $nr Alternative Identifier
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

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
     * @param string $name Description
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Route Status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('route_planned', 'route_in_progress', 'route_executed', 'route_cancelled');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'route_planned', 'route_in_progress', 'route_executed', 'route_cancelled'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets nr_of_stops
     * @return int
     */
    public function getNrOfStops()
    {
        return $this->container['nr_of_stops'];
    }

    /**
     * Sets nr_of_stops
     * @param int $nr_of_stops
     * @return $this
     */
    public function setNrOfStops($nr_of_stops)
    {
        $this->container['nr_of_stops'] = $nr_of_stops;

        return $this;
    }

    /**
     * Gets driver_id
     * @return int
     */
    public function getDriverId()
    {
        return $this->container['driver_id'];
    }

    /**
     * Sets driver_id
     * @param int $driver_id
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets car_id
     * @return int
     */
    public function getCarId()
    {
        return $this->container['car_id'];
    }

    /**
     * Sets car_id
     * @param int $car_id
     * @return $this
     */
    public function setCarId($car_id)
    {
        $this->container['car_id'] = $car_id;

        return $this;
    }

    /**
     * Gets link_id
     * @return string
     */
    public function getLinkId()
    {
        return $this->container['link_id'];
    }

    /**
     * Sets link_id
     * @param string $link_id
     * @return $this
     */
    public function setLinkId($link_id)
    {
        $this->container['link_id'] = $link_id;

        return $this;
    }

    /**
     * Gets earliest_date_time
     * @return \DateTime
     */
    public function getEarliestDateTime()
    {
        return $this->container['earliest_date_time'];
    }

    /**
     * Sets earliest_date_time
     * @param \DateTime $earliest_date_time
     * @return $this
     */
    public function setEarliestDateTime($earliest_date_time)
    {
        $this->container['earliest_date_time'] = $earliest_date_time;

        return $this;
    }

    /**
     * Gets latest_date_time
     * @return \DateTime
     */
    public function getLatestDateTime()
    {
        return $this->container['latest_date_time'];
    }

    /**
     * Sets latest_date_time
     * @param \DateTime $latest_date_time
     * @return $this
     */
    public function setLatestDateTime($latest_date_time)
    {
        $this->container['latest_date_time'] = $latest_date_time;

        return $this;
    }

    /**
     * Gets gps_locations
     * @return \BumbalClient\Model\GPSLocationModel[]
     */
    public function getGpsLocations()
    {
        return $this->container['gps_locations'];
    }

    /**
     * Sets gps_locations
     * @param \BumbalClient\Model\GPSLocationModel[] $gps_locations
     * @return $this
     */
    public function setGpsLocations($gps_locations)
    {
        $this->container['gps_locations'] = $gps_locations;

        return $this;
    }

    /**
     * Gets latest_known_position
     * @return \BumbalClient\Model\GPSLocationModel
     */
    public function getLatestKnownPosition()
    {
        return $this->container['latest_known_position'];
    }

    /**
     * Sets latest_known_position
     * @param \BumbalClient\Model\GPSLocationModel $latest_known_position
     * @return $this
     */
    public function setLatestKnownPosition($latest_known_position)
    {
        $this->container['latest_known_position'] = $latest_known_position;

        return $this;
    }

    /**
     * Gets activity_ids
     * @return object
     */
    public function getActivityIds()
    {
        return $this->container['activity_ids'];
    }

    /**
     * Sets activity_ids
     * @param object $activity_ids
     * @return $this
     */
    public function setActivityIds($activity_ids)
    {
        $this->container['activity_ids'] = $activity_ids;

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
