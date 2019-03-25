<?php
/**
 * ActivityFiltersModel
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
 * ActivityFiltersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityFiltersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int[]',
        'shipment_activity_id' => 'int[]',
        'assignment_id' => 'int[]',
        'date_time_from' => '\DateTime',
        'date_time_to' => '\DateTime',
        'date_time_from_since' => '\DateTime',
        'date_time_from_till' => '\DateTime',
        'date_time_to_since' => '\DateTime',
        'date_time_to_till' => '\DateTime',
        'planned_date_time_from' => '\DateTime',
        'planned_date_time_to' => '\DateTime',
        'planned_date_time_from_since' => '\DateTime',
        'planned_date_time_from_till' => '\DateTime',
        'planned_date_time_to_since' => '\DateTime',
        'planned_date_time_to_till' => '\DateTime',
        'updated_at_since' => '\DateTime',
        'updated_at_till' => '\DateTime',
        'status' => 'string[]',
        'status_name' => 'string[]',
        'active' => 'int[]',
        'status_id' => 'int[]',
        'activity_type_id' => 'int[]',
        'locked' => 'int[]',
        'activity_type_name' => 'string[]',
        'description' => 'string[]',
        'reference' => 'string[]',
        'search_text' => 'string',
        'route_id' => 'int[]',
        'user_id' => 'int',
        'party_id' => 'int',
        'depot_address_links' => '\BumbalClient\Model\LinkModel[]',
        'zone_names' => 'string[]',
        'link' => 'object[]',
        'links' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'shipment_activity_id' => null,
        'assignment_id' => null,
        'date_time_from' => 'date-time',
        'date_time_to' => 'date-time',
        'date_time_from_since' => 'date-time',
        'date_time_from_till' => 'date-time',
        'date_time_to_since' => 'date-time',
        'date_time_to_till' => 'date-time',
        'planned_date_time_from' => 'date-time',
        'planned_date_time_to' => 'date-time',
        'planned_date_time_from_since' => 'date-time',
        'planned_date_time_from_till' => 'date-time',
        'planned_date_time_to_since' => 'date-time',
        'planned_date_time_to_till' => 'date-time',
        'updated_at_since' => 'date-time',
        'updated_at_till' => 'date-time',
        'status' => null,
        'status_name' => null,
        'active' => null,
        'status_id' => null,
        'activity_type_id' => null,
        'locked' => null,
        'activity_type_name' => null,
        'description' => null,
        'reference' => null,
        'search_text' => null,
        'route_id' => null,
        'user_id' => null,
        'party_id' => null,
        'depot_address_links' => null,
        'zone_names' => null,
        'link' => null,
        'links' => null
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
        'id' => 'id',
        'shipment_activity_id' => 'shipment_activity_id',
        'assignment_id' => 'assignment_id',
        'date_time_from' => 'date_time_from',
        'date_time_to' => 'date_time_to',
        'date_time_from_since' => 'date_time_from_since',
        'date_time_from_till' => 'date_time_from_till',
        'date_time_to_since' => 'date_time_to_since',
        'date_time_to_till' => 'date_time_to_till',
        'planned_date_time_from' => 'planned_date_time_from',
        'planned_date_time_to' => 'planned_date_time_to',
        'planned_date_time_from_since' => 'planned_date_time_from_since',
        'planned_date_time_from_till' => 'planned_date_time_from_till',
        'planned_date_time_to_since' => 'planned_date_time_to_since',
        'planned_date_time_to_till' => 'planned_date_time_to_till',
        'updated_at_since' => 'updated_at_since',
        'updated_at_till' => 'updated_at_till',
        'status' => 'status',
        'status_name' => 'status_name',
        'active' => 'active',
        'status_id' => 'status_id',
        'activity_type_id' => 'activity_type_id',
        'locked' => 'locked',
        'activity_type_name' => 'activity_type_name',
        'description' => 'description',
        'reference' => 'reference',
        'search_text' => 'search_text',
        'route_id' => 'route_id',
        'user_id' => 'user_id',
        'party_id' => 'party_id',
        'depot_address_links' => 'depot_address_links',
        'zone_names' => 'zone_names',
        'link' => 'link',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'shipment_activity_id' => 'setShipmentActivityId',
        'assignment_id' => 'setAssignmentId',
        'date_time_from' => 'setDateTimeFrom',
        'date_time_to' => 'setDateTimeTo',
        'date_time_from_since' => 'setDateTimeFromSince',
        'date_time_from_till' => 'setDateTimeFromTill',
        'date_time_to_since' => 'setDateTimeToSince',
        'date_time_to_till' => 'setDateTimeToTill',
        'planned_date_time_from' => 'setPlannedDateTimeFrom',
        'planned_date_time_to' => 'setPlannedDateTimeTo',
        'planned_date_time_from_since' => 'setPlannedDateTimeFromSince',
        'planned_date_time_from_till' => 'setPlannedDateTimeFromTill',
        'planned_date_time_to_since' => 'setPlannedDateTimeToSince',
        'planned_date_time_to_till' => 'setPlannedDateTimeToTill',
        'updated_at_since' => 'setUpdatedAtSince',
        'updated_at_till' => 'setUpdatedAtTill',
        'status' => 'setStatus',
        'status_name' => 'setStatusName',
        'active' => 'setActive',
        'status_id' => 'setStatusId',
        'activity_type_id' => 'setActivityTypeId',
        'locked' => 'setLocked',
        'activity_type_name' => 'setActivityTypeName',
        'description' => 'setDescription',
        'reference' => 'setReference',
        'search_text' => 'setSearchText',
        'route_id' => 'setRouteId',
        'user_id' => 'setUserId',
        'party_id' => 'setPartyId',
        'depot_address_links' => 'setDepotAddressLinks',
        'zone_names' => 'setZoneNames',
        'link' => 'setLink',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'shipment_activity_id' => 'getShipmentActivityId',
        'assignment_id' => 'getAssignmentId',
        'date_time_from' => 'getDateTimeFrom',
        'date_time_to' => 'getDateTimeTo',
        'date_time_from_since' => 'getDateTimeFromSince',
        'date_time_from_till' => 'getDateTimeFromTill',
        'date_time_to_since' => 'getDateTimeToSince',
        'date_time_to_till' => 'getDateTimeToTill',
        'planned_date_time_from' => 'getPlannedDateTimeFrom',
        'planned_date_time_to' => 'getPlannedDateTimeTo',
        'planned_date_time_from_since' => 'getPlannedDateTimeFromSince',
        'planned_date_time_from_till' => 'getPlannedDateTimeFromTill',
        'planned_date_time_to_since' => 'getPlannedDateTimeToSince',
        'planned_date_time_to_till' => 'getPlannedDateTimeToTill',
        'updated_at_since' => 'getUpdatedAtSince',
        'updated_at_till' => 'getUpdatedAtTill',
        'status' => 'getStatus',
        'status_name' => 'getStatusName',
        'active' => 'getActive',
        'status_id' => 'getStatusId',
        'activity_type_id' => 'getActivityTypeId',
        'locked' => 'getLocked',
        'activity_type_name' => 'getActivityTypeName',
        'description' => 'getDescription',
        'reference' => 'getReference',
        'search_text' => 'getSearchText',
        'route_id' => 'getRouteId',
        'user_id' => 'getUserId',
        'party_id' => 'getPartyId',
        'depot_address_links' => 'getDepotAddressLinks',
        'zone_names' => 'getZoneNames',
        'link' => 'getLink',
        'links' => 'getLinks'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['shipment_activity_id'] = isset($data['shipment_activity_id']) ? $data['shipment_activity_id'] : null;
        $this->container['assignment_id'] = isset($data['assignment_id']) ? $data['assignment_id'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
        $this->container['date_time_from_since'] = isset($data['date_time_from_since']) ? $data['date_time_from_since'] : null;
        $this->container['date_time_from_till'] = isset($data['date_time_from_till']) ? $data['date_time_from_till'] : null;
        $this->container['date_time_to_since'] = isset($data['date_time_to_since']) ? $data['date_time_to_since'] : null;
        $this->container['date_time_to_till'] = isset($data['date_time_to_till']) ? $data['date_time_to_till'] : null;
        $this->container['planned_date_time_from'] = isset($data['planned_date_time_from']) ? $data['planned_date_time_from'] : null;
        $this->container['planned_date_time_to'] = isset($data['planned_date_time_to']) ? $data['planned_date_time_to'] : null;
        $this->container['planned_date_time_from_since'] = isset($data['planned_date_time_from_since']) ? $data['planned_date_time_from_since'] : null;
        $this->container['planned_date_time_from_till'] = isset($data['planned_date_time_from_till']) ? $data['planned_date_time_from_till'] : null;
        $this->container['planned_date_time_to_since'] = isset($data['planned_date_time_to_since']) ? $data['planned_date_time_to_since'] : null;
        $this->container['planned_date_time_to_till'] = isset($data['planned_date_time_to_till']) ? $data['planned_date_time_to_till'] : null;
        $this->container['updated_at_since'] = isset($data['updated_at_since']) ? $data['updated_at_since'] : null;
        $this->container['updated_at_till'] = isset($data['updated_at_till']) ? $data['updated_at_till'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_name'] = isset($data['status_name']) ? $data['status_name'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['activity_type_id'] = isset($data['activity_type_id']) ? $data['activity_type_id'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['activity_type_name'] = isset($data['activity_type_name']) ? $data['activity_type_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['search_text'] = isset($data['search_text']) ? $data['search_text'] : null;
        $this->container['route_id'] = isset($data['route_id']) ? $data['route_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['party_id'] = isset($data['party_id']) ? $data['party_id'] : null;
        $this->container['depot_address_links'] = isset($data['depot_address_links']) ? $data['depot_address_links'] : null;
        $this->container['zone_names'] = isset($data['zone_names']) ? $data['zone_names'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * Gets id
     * @return int[]
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int[] $id Unique Identifier(s)
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets shipment_activity_id
     * @return int[]
     */
    public function getShipmentActivityId()
    {
        return $this->container['shipment_activity_id'];
    }

    /**
     * Sets shipment_activity_id
     * @param int[] $shipment_activity_id Unique Identifier(s) partner shipment activity
     * @return $this
     */
    public function setShipmentActivityId($shipment_activity_id)
    {
        $this->container['shipment_activity_id'] = $shipment_activity_id;

        return $this;
    }

    /**
     * Gets assignment_id
     * @return int[]
     */
    public function getAssignmentId()
    {
        return $this->container['assignment_id'];
    }

    /**
     * Sets assignment_id
     * @param int[] $assignment_id Identifier(s) assignment(s) for activities
     * @return $this
     */
    public function setAssignmentId($assignment_id)
    {
        $this->container['assignment_id'] = $assignment_id;

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
     * @param \DateTime $date_time_from DateTime From
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
     * @param \DateTime $date_time_to DateTime To
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets date_time_from_since
     * @return \DateTime
     */
    public function getDateTimeFromSince()
    {
        return $this->container['date_time_from_since'];
    }

    /**
     * Sets date_time_from_since
     * @param \DateTime $date_time_from_since filter activities with a DateTime From since this input
     * @return $this
     */
    public function setDateTimeFromSince($date_time_from_since)
    {
        $this->container['date_time_from_since'] = $date_time_from_since;

        return $this;
    }

    /**
     * Gets date_time_from_till
     * @return \DateTime
     */
    public function getDateTimeFromTill()
    {
        return $this->container['date_time_from_till'];
    }

    /**
     * Sets date_time_from_till
     * @param \DateTime $date_time_from_till filter activities with a DateTime From till this input
     * @return $this
     */
    public function setDateTimeFromTill($date_time_from_till)
    {
        $this->container['date_time_from_till'] = $date_time_from_till;

        return $this;
    }

    /**
     * Gets date_time_to_since
     * @return \DateTime
     */
    public function getDateTimeToSince()
    {
        return $this->container['date_time_to_since'];
    }

    /**
     * Sets date_time_to_since
     * @param \DateTime $date_time_to_since filter activities with a DateTime To since this input
     * @return $this
     */
    public function setDateTimeToSince($date_time_to_since)
    {
        $this->container['date_time_to_since'] = $date_time_to_since;

        return $this;
    }

    /**
     * Gets date_time_to_till
     * @return \DateTime
     */
    public function getDateTimeToTill()
    {
        return $this->container['date_time_to_till'];
    }

    /**
     * Sets date_time_to_till
     * @param \DateTime $date_time_to_till filter activities with a DateTime To till this input
     * @return $this
     */
    public function setDateTimeToTill($date_time_to_till)
    {
        $this->container['date_time_to_till'] = $date_time_to_till;

        return $this;
    }

    /**
     * Gets planned_date_time_from
     * @return \DateTime
     */
    public function getPlannedDateTimeFrom()
    {
        return $this->container['planned_date_time_from'];
    }

    /**
     * Sets planned_date_time_from
     * @param \DateTime $planned_date_time_from Planned DateTime From
     * @return $this
     */
    public function setPlannedDateTimeFrom($planned_date_time_from)
    {
        $this->container['planned_date_time_from'] = $planned_date_time_from;

        return $this;
    }

    /**
     * Gets planned_date_time_to
     * @return \DateTime
     */
    public function getPlannedDateTimeTo()
    {
        return $this->container['planned_date_time_to'];
    }

    /**
     * Sets planned_date_time_to
     * @param \DateTime $planned_date_time_to Planned DateTime To
     * @return $this
     */
    public function setPlannedDateTimeTo($planned_date_time_to)
    {
        $this->container['planned_date_time_to'] = $planned_date_time_to;

        return $this;
    }

    /**
     * Gets planned_date_time_from_since
     * @return \DateTime
     */
    public function getPlannedDateTimeFromSince()
    {
        return $this->container['planned_date_time_from_since'];
    }

    /**
     * Sets planned_date_time_from_since
     * @param \DateTime $planned_date_time_from_since filter activities with a planned DateTime From since this input
     * @return $this
     */
    public function setPlannedDateTimeFromSince($planned_date_time_from_since)
    {
        $this->container['planned_date_time_from_since'] = $planned_date_time_from_since;

        return $this;
    }

    /**
     * Gets planned_date_time_from_till
     * @return \DateTime
     */
    public function getPlannedDateTimeFromTill()
    {
        return $this->container['planned_date_time_from_till'];
    }

    /**
     * Sets planned_date_time_from_till
     * @param \DateTime $planned_date_time_from_till filter activities with a planned DateTime From till this input
     * @return $this
     */
    public function setPlannedDateTimeFromTill($planned_date_time_from_till)
    {
        $this->container['planned_date_time_from_till'] = $planned_date_time_from_till;

        return $this;
    }

    /**
     * Gets planned_date_time_to_since
     * @return \DateTime
     */
    public function getPlannedDateTimeToSince()
    {
        return $this->container['planned_date_time_to_since'];
    }

    /**
     * Sets planned_date_time_to_since
     * @param \DateTime $planned_date_time_to_since filter activities with a planned DateTime To since this input
     * @return $this
     */
    public function setPlannedDateTimeToSince($planned_date_time_to_since)
    {
        $this->container['planned_date_time_to_since'] = $planned_date_time_to_since;

        return $this;
    }

    /**
     * Gets planned_date_time_to_till
     * @return \DateTime
     */
    public function getPlannedDateTimeToTill()
    {
        return $this->container['planned_date_time_to_till'];
    }

    /**
     * Sets planned_date_time_to_till
     * @param \DateTime $planned_date_time_to_till filter activities with a planned DateTime To till this input
     * @return $this
     */
    public function setPlannedDateTimeToTill($planned_date_time_to_till)
    {
        $this->container['planned_date_time_to_till'] = $planned_date_time_to_till;

        return $this;
    }

    /**
     * Gets updated_at_since
     * @return \DateTime
     */
    public function getUpdatedAtSince()
    {
        return $this->container['updated_at_since'];
    }

    /**
     * Sets updated_at_since
     * @param \DateTime $updated_at_since Show updated since
     * @return $this
     */
    public function setUpdatedAtSince($updated_at_since)
    {
        $this->container['updated_at_since'] = $updated_at_since;

        return $this;
    }

    /**
     * Gets updated_at_till
     * @return \DateTime
     */
    public function getUpdatedAtTill()
    {
        return $this->container['updated_at_till'];
    }

    /**
     * Sets updated_at_till
     * @param \DateTime $updated_at_till Show updated till
     * @return $this
     */
    public function setUpdatedAtTill($updated_at_till)
    {
        $this->container['updated_at_till'] = $updated_at_till;

        return $this;
    }

    /**
     * Gets status
     * @return string[]
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string[] $status Activity Status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_name
     * @return string[]
     */
    public function getStatusName()
    {
        return $this->container['status_name'];
    }

    /**
     * Sets status_name
     * @param string[] $status_name Activity Status name
     * @return $this
     */
    public function setStatusName($status_name)
    {
        $this->container['status_name'] = $status_name;

        return $this;
    }

    /**
     * Gets active
     * @return int[]
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param int[] $active Active status of Activity, 0 values represent deleted activities
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * @param int[] $status_id Activity Status id
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets activity_type_id
     * @return int[]
     */
    public function getActivityTypeId()
    {
        return $this->container['activity_type_id'];
    }

    /**
     * Sets activity_type_id
     * @param int[] $activity_type_id Activity type id
     * @return $this
     */
    public function setActivityTypeId($activity_type_id)
    {
        $this->container['activity_type_id'] = $activity_type_id;

        return $this;
    }

    /**
     * Gets locked
     * @return int[]
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     * @param int[] $locked Activity locked status. 0: not locked, 1: locked on route and time, 2: only locked on route
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets activity_type_name
     * @return string[]
     */
    public function getActivityTypeName()
    {
        return $this->container['activity_type_name'];
    }

    /**
     * Sets activity_type_name
     * @param string[] $activity_type_name Activity type name
     * @return $this
     */
    public function setActivityTypeName($activity_type_name)
    {
        $this->container['activity_type_name'] = $activity_type_name;

        return $this;
    }

    /**
     * Gets description
     * @return string[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string[] $description Activity description (not visible in Bumbal interface)
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets reference
     * @return string[]
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string[] $reference Activity reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets search_text
     * @return string
     */
    public function getSearchText()
    {
        return $this->container['search_text'];
    }

    /**
     * Sets search_text
     * @param string $search_text free search through text and numeric type columns
     * @return $this
     */
    public function setSearchText($search_text)
    {
        $this->container['search_text'] = $search_text;

        return $this;
    }

    /**
     * Gets route_id
     * @return int[]
     */
    public function getRouteId()
    {
        return $this->container['route_id'];
    }

    /**
     * Sets route_id
     * @param int[] $route_id Route id
     * @return $this
     */
    public function setRouteId($route_id)
    {
        $this->container['route_id'] = $route_id;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id ID of the user who will execute this activity
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets party_id
     * @return int
     */
    public function getPartyId()
    {
        return $this->container['party_id'];
    }

    /**
     * Sets party_id
     * @param int $party_id Party ID
     * @return $this
     */
    public function setPartyId($party_id)
    {
        $this->container['party_id'] = $party_id;

        return $this;
    }

    /**
     * Gets depot_address_links
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getDepotAddressLinks()
    {
        return $this->container['depot_address_links'];
    }

    /**
     * Sets depot_address_links
     * @param \BumbalClient\Model\LinkModel[] $depot_address_links
     * @return $this
     */
    public function setDepotAddressLinks($depot_address_links)
    {
        $this->container['depot_address_links'] = $depot_address_links;

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
     * Gets link
     * @return object[]
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     * @param object[] $link Activity Link ids
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets links
     * @return object[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param object[] $links Activity Link ids
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


