<?php
/**
 * RouteOptionsModel
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
 * RouteOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RouteOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RouteOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_address' => 'bool',
        'include_address_object' => 'bool',
        'include_route_status' => 'bool',
        'include_route_tags' => 'bool',
        'include_driver' => 'bool',
        'include_driver_links' => 'bool',
        'include_car' => 'bool',
        'include_car_links' => 'bool',
        'include_trailer' => 'bool',
        'include_trailer_links' => 'bool',
        'include_driver_info' => 'bool',
        'include_equipment_info_car' => 'bool',
        'include_gps_locations' => 'bool',
        'include_activity_ids' => 'bool',
        'include_latest_position' => 'bool',
        'include_zones' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_address' => null,
        'include_address_object' => null,
        'include_route_status' => null,
        'include_route_tags' => null,
        'include_driver' => null,
        'include_driver_links' => null,
        'include_car' => null,
        'include_car_links' => null,
        'include_trailer' => null,
        'include_trailer_links' => null,
        'include_driver_info' => null,
        'include_equipment_info_car' => null,
        'include_gps_locations' => null,
        'include_activity_ids' => null,
        'include_latest_position' => null,
        'include_zones' => null
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
        'include_address' => 'include_address',
        'include_address_object' => 'include_address_object',
        'include_route_status' => 'include_route_status',
        'include_route_tags' => 'include_route_tags',
        'include_driver' => 'include_driver',
        'include_driver_links' => 'include_driver_links',
        'include_car' => 'include_car',
        'include_car_links' => 'include_car_links',
        'include_trailer' => 'include_trailer',
        'include_trailer_links' => 'include_trailer_links',
        'include_driver_info' => 'include_driver_info',
        'include_equipment_info_car' => 'include_equipment_info_car',
        'include_gps_locations' => 'include_gps_locations',
        'include_activity_ids' => 'include_activity_ids',
        'include_latest_position' => 'include_latest_position',
        'include_zones' => 'include_zones'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_address' => 'setIncludeAddress',
        'include_address_object' => 'setIncludeAddressObject',
        'include_route_status' => 'setIncludeRouteStatus',
        'include_route_tags' => 'setIncludeRouteTags',
        'include_driver' => 'setIncludeDriver',
        'include_driver_links' => 'setIncludeDriverLinks',
        'include_car' => 'setIncludeCar',
        'include_car_links' => 'setIncludeCarLinks',
        'include_trailer' => 'setIncludeTrailer',
        'include_trailer_links' => 'setIncludeTrailerLinks',
        'include_driver_info' => 'setIncludeDriverInfo',
        'include_equipment_info_car' => 'setIncludeEquipmentInfoCar',
        'include_gps_locations' => 'setIncludeGpsLocations',
        'include_activity_ids' => 'setIncludeActivityIds',
        'include_latest_position' => 'setIncludeLatestPosition',
        'include_zones' => 'setIncludeZones'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_address' => 'getIncludeAddress',
        'include_address_object' => 'getIncludeAddressObject',
        'include_route_status' => 'getIncludeRouteStatus',
        'include_route_tags' => 'getIncludeRouteTags',
        'include_driver' => 'getIncludeDriver',
        'include_driver_links' => 'getIncludeDriverLinks',
        'include_car' => 'getIncludeCar',
        'include_car_links' => 'getIncludeCarLinks',
        'include_trailer' => 'getIncludeTrailer',
        'include_trailer_links' => 'getIncludeTrailerLinks',
        'include_driver_info' => 'getIncludeDriverInfo',
        'include_equipment_info_car' => 'getIncludeEquipmentInfoCar',
        'include_gps_locations' => 'getIncludeGpsLocations',
        'include_activity_ids' => 'getIncludeActivityIds',
        'include_latest_position' => 'getIncludeLatestPosition',
        'include_zones' => 'getIncludeZones'
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
        $this->container['include_address'] = isset($data['include_address']) ? $data['include_address'] : null;
        $this->container['include_address_object'] = isset($data['include_address_object']) ? $data['include_address_object'] : null;
        $this->container['include_route_status'] = isset($data['include_route_status']) ? $data['include_route_status'] : null;
        $this->container['include_route_tags'] = isset($data['include_route_tags']) ? $data['include_route_tags'] : null;
        $this->container['include_driver'] = isset($data['include_driver']) ? $data['include_driver'] : null;
        $this->container['include_driver_links'] = isset($data['include_driver_links']) ? $data['include_driver_links'] : null;
        $this->container['include_car'] = isset($data['include_car']) ? $data['include_car'] : null;
        $this->container['include_car_links'] = isset($data['include_car_links']) ? $data['include_car_links'] : null;
        $this->container['include_trailer'] = isset($data['include_trailer']) ? $data['include_trailer'] : null;
        $this->container['include_trailer_links'] = isset($data['include_trailer_links']) ? $data['include_trailer_links'] : null;
        $this->container['include_driver_info'] = isset($data['include_driver_info']) ? $data['include_driver_info'] : null;
        $this->container['include_equipment_info_car'] = isset($data['include_equipment_info_car']) ? $data['include_equipment_info_car'] : null;
        $this->container['include_gps_locations'] = isset($data['include_gps_locations']) ? $data['include_gps_locations'] : null;
        $this->container['include_activity_ids'] = isset($data['include_activity_ids']) ? $data['include_activity_ids'] : null;
        $this->container['include_latest_position'] = isset($data['include_latest_position']) ? $data['include_latest_position'] : null;
        $this->container['include_zones'] = isset($data['include_zones']) ? $data['include_zones'] : null;
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
     * Gets include_address
     * @return bool
     */
    public function getIncludeAddress()
    {
        return $this->container['include_address'];
    }

    /**
     * Sets include_address
     * @param bool $include_address 
     * @return $this
     */
    public function setIncludeAddress($include_address)
    {
        $this->container['include_address'] = $include_address;

        return $this;
    }

    /**
     * Gets include_address_object
     * @return bool
     */
    public function getIncludeAddressObject()
    {
        return $this->container['include_address_object'];
    }

    /**
     * Sets include_address_object
     * @param bool $include_address_object 
     * @return $this
     */
    public function setIncludeAddressObject($include_address_object)
    {
        $this->container['include_address_object'] = $include_address_object;

        return $this;
    }

    /**
     * Gets include_route_status
     * @return bool
     */
    public function getIncludeRouteStatus()
    {
        return $this->container['include_route_status'];
    }

    /**
     * Sets include_route_status
     * @param bool $include_route_status 
     * @return $this
     */
    public function setIncludeRouteStatus($include_route_status)
    {
        $this->container['include_route_status'] = $include_route_status;

        return $this;
    }

    /**
     * Gets include_route_tags
     * @return bool
     */
    public function getIncludeRouteTags()
    {
        return $this->container['include_route_tags'];
    }

    /**
     * Sets include_route_tags
     * @param bool $include_route_tags 
     * @return $this
     */
    public function setIncludeRouteTags($include_route_tags)
    {
        $this->container['include_route_tags'] = $include_route_tags;

        return $this;
    }

    /**
     * Gets include_driver
     * @return bool
     */
    public function getIncludeDriver()
    {
        return $this->container['include_driver'];
    }

    /**
     * Sets include_driver
     * @param bool $include_driver 
     * @return $this
     */
    public function setIncludeDriver($include_driver)
    {
        $this->container['include_driver'] = $include_driver;

        return $this;
    }

    /**
     * Gets include_driver_links
     * @return bool
     */
    public function getIncludeDriverLinks()
    {
        return $this->container['include_driver_links'];
    }

    /**
     * Sets include_driver_links
     * @param bool $include_driver_links 
     * @return $this
     */
    public function setIncludeDriverLinks($include_driver_links)
    {
        $this->container['include_driver_links'] = $include_driver_links;

        return $this;
    }

    /**
     * Gets include_car
     * @return bool
     */
    public function getIncludeCar()
    {
        return $this->container['include_car'];
    }

    /**
     * Sets include_car
     * @param bool $include_car 
     * @return $this
     */
    public function setIncludeCar($include_car)
    {
        $this->container['include_car'] = $include_car;

        return $this;
    }

    /**
     * Gets include_car_links
     * @return bool
     */
    public function getIncludeCarLinks()
    {
        return $this->container['include_car_links'];
    }

    /**
     * Sets include_car_links
     * @param bool $include_car_links 
     * @return $this
     */
    public function setIncludeCarLinks($include_car_links)
    {
        $this->container['include_car_links'] = $include_car_links;

        return $this;
    }

    /**
     * Gets include_trailer
     * @return bool
     */
    public function getIncludeTrailer()
    {
        return $this->container['include_trailer'];
    }

    /**
     * Sets include_trailer
     * @param bool $include_trailer 
     * @return $this
     */
    public function setIncludeTrailer($include_trailer)
    {
        $this->container['include_trailer'] = $include_trailer;

        return $this;
    }

    /**
     * Gets include_trailer_links
     * @return bool
     */
    public function getIncludeTrailerLinks()
    {
        return $this->container['include_trailer_links'];
    }

    /**
     * Sets include_trailer_links
     * @param bool $include_trailer_links 
     * @return $this
     */
    public function setIncludeTrailerLinks($include_trailer_links)
    {
        $this->container['include_trailer_links'] = $include_trailer_links;

        return $this;
    }

    /**
     * Gets include_driver_info
     * @return bool
     */
    public function getIncludeDriverInfo()
    {
        return $this->container['include_driver_info'];
    }

    /**
     * Sets include_driver_info
     * @param bool $include_driver_info 
     * @return $this
     */
    public function setIncludeDriverInfo($include_driver_info)
    {
        $this->container['include_driver_info'] = $include_driver_info;

        return $this;
    }

    /**
     * Gets include_equipment_info_car
     * @return bool
     */
    public function getIncludeEquipmentInfoCar()
    {
        return $this->container['include_equipment_info_car'];
    }

    /**
     * Sets include_equipment_info_car
     * @param bool $include_equipment_info_car 
     * @return $this
     */
    public function setIncludeEquipmentInfoCar($include_equipment_info_car)
    {
        $this->container['include_equipment_info_car'] = $include_equipment_info_car;

        return $this;
    }

    /**
     * Gets include_gps_locations
     * @return bool
     */
    public function getIncludeGpsLocations()
    {
        return $this->container['include_gps_locations'];
    }

    /**
     * Sets include_gps_locations
     * @param bool $include_gps_locations 
     * @return $this
     */
    public function setIncludeGpsLocations($include_gps_locations)
    {
        $this->container['include_gps_locations'] = $include_gps_locations;

        return $this;
    }

    /**
     * Gets include_activity_ids
     * @return bool
     */
    public function getIncludeActivityIds()
    {
        return $this->container['include_activity_ids'];
    }

    /**
     * Sets include_activity_ids
     * @param bool $include_activity_ids 
     * @return $this
     */
    public function setIncludeActivityIds($include_activity_ids)
    {
        $this->container['include_activity_ids'] = $include_activity_ids;

        return $this;
    }

    /**
     * Gets include_latest_position
     * @return bool
     */
    public function getIncludeLatestPosition()
    {
        return $this->container['include_latest_position'];
    }

    /**
     * Sets include_latest_position
     * @param bool $include_latest_position 
     * @return $this
     */
    public function setIncludeLatestPosition($include_latest_position)
    {
        $this->container['include_latest_position'] = $include_latest_position;

        return $this;
    }

    /**
     * Gets include_zones
     * @return bool
     */
    public function getIncludeZones()
    {
        return $this->container['include_zones'];
    }

    /**
     * Sets include_zones
     * @param bool $include_zones 
     * @return $this
     */
    public function setIncludeZones($include_zones)
    {
        $this->container['include_zones'] = $include_zones;

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


