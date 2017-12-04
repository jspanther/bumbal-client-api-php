<?php
/**
 * ActivityOptionsModel
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
 * ActivityOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_activity_status' => 'bool',
        'include_activity_type_name' => 'bool',
        'include_activity_meta_data' => 'bool',
        'include_activity_meta_data_objects' => 'bool',
        'include_address_object' => 'bool',
        'include_time_slots' => 'bool',
        'include_time_slot_tags' => 'bool',
        'include_route_info' => 'bool',
        'include_route' => 'bool',
        'include_package_lines' => 'bool',
        'include_package_lines_info' => 'bool',
        'include_driver_info' => 'bool',
        'include_communication' => 'bool',
        'include_communication_object' => 'bool',
        'include_activity_links' => 'bool',
        'include_activity_files' => 'bool',
        'include_activity_files_meta_data' => 'bool',
        'include_activity_files_meta_data_objects' => 'bool',
        'include_assignment_nr' => 'bool',
        'include_assignment' => 'bool',
        'include_activity_tags' => 'bool',
        'include_tag_type_name' => 'bool',
        'include_activity_record_info' => 'bool',
        'include_activity_notes' => 'bool',
        'include_activity_note_tags' => 'bool',
        'include_depot_address_object' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_activity_status' => null,
        'include_activity_type_name' => null,
        'include_activity_meta_data' => null,
        'include_activity_meta_data_objects' => null,
        'include_address_object' => null,
        'include_time_slots' => null,
        'include_time_slot_tags' => null,
        'include_route_info' => null,
        'include_route' => null,
        'include_package_lines' => null,
        'include_package_lines_info' => null,
        'include_driver_info' => null,
        'include_communication' => null,
        'include_communication_object' => null,
        'include_activity_links' => null,
        'include_activity_files' => null,
        'include_activity_files_meta_data' => null,
        'include_activity_files_meta_data_objects' => null,
        'include_assignment_nr' => null,
        'include_assignment' => null,
        'include_activity_tags' => null,
        'include_tag_type_name' => null,
        'include_activity_record_info' => null,
        'include_activity_notes' => null,
        'include_activity_note_tags' => null,
        'include_depot_address_object' => null
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
        'include_activity_status' => 'include_activity_status',
        'include_activity_type_name' => 'include_activity_type_name',
        'include_activity_meta_data' => 'include_activity_meta_data',
        'include_activity_meta_data_objects' => 'include_activity_meta_data_objects',
        'include_address_object' => 'include_address_object',
        'include_time_slots' => 'include_time_slots',
        'include_time_slot_tags' => 'include_time_slot_tags',
        'include_route_info' => 'include_route_info',
        'include_route' => 'include_route',
        'include_package_lines' => 'include_package_lines',
        'include_package_lines_info' => 'include_package_lines_info',
        'include_driver_info' => 'include_driver_info',
        'include_communication' => 'include_communication',
        'include_communication_object' => 'include_communication_object',
        'include_activity_links' => 'include_activity_links',
        'include_activity_files' => 'include_activity_files',
        'include_activity_files_meta_data' => 'include_activity_files_meta_data',
        'include_activity_files_meta_data_objects' => 'include_activity_files_meta_data_objects',
        'include_assignment_nr' => 'include_assignment_nr',
        'include_assignment' => 'include_assignment',
        'include_activity_tags' => 'include_activity_tags',
        'include_tag_type_name' => 'include_tag_type_name',
        'include_activity_record_info' => 'include_activity_record_info',
        'include_activity_notes' => 'include_activity_notes',
        'include_activity_note_tags' => 'include_activity_note_tags',
        'include_depot_address_object' => 'include_depot_address_object'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_activity_status' => 'setIncludeActivityStatus',
        'include_activity_type_name' => 'setIncludeActivityTypeName',
        'include_activity_meta_data' => 'setIncludeActivityMetaData',
        'include_activity_meta_data_objects' => 'setIncludeActivityMetaDataObjects',
        'include_address_object' => 'setIncludeAddressObject',
        'include_time_slots' => 'setIncludeTimeSlots',
        'include_time_slot_tags' => 'setIncludeTimeSlotTags',
        'include_route_info' => 'setIncludeRouteInfo',
        'include_route' => 'setIncludeRoute',
        'include_package_lines' => 'setIncludePackageLines',
        'include_package_lines_info' => 'setIncludePackageLinesInfo',
        'include_driver_info' => 'setIncludeDriverInfo',
        'include_communication' => 'setIncludeCommunication',
        'include_communication_object' => 'setIncludeCommunicationObject',
        'include_activity_links' => 'setIncludeActivityLinks',
        'include_activity_files' => 'setIncludeActivityFiles',
        'include_activity_files_meta_data' => 'setIncludeActivityFilesMetaData',
        'include_activity_files_meta_data_objects' => 'setIncludeActivityFilesMetaDataObjects',
        'include_assignment_nr' => 'setIncludeAssignmentNr',
        'include_assignment' => 'setIncludeAssignment',
        'include_activity_tags' => 'setIncludeActivityTags',
        'include_tag_type_name' => 'setIncludeTagTypeName',
        'include_activity_record_info' => 'setIncludeActivityRecordInfo',
        'include_activity_notes' => 'setIncludeActivityNotes',
        'include_activity_note_tags' => 'setIncludeActivityNoteTags',
        'include_depot_address_object' => 'setIncludeDepotAddressObject'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_activity_status' => 'getIncludeActivityStatus',
        'include_activity_type_name' => 'getIncludeActivityTypeName',
        'include_activity_meta_data' => 'getIncludeActivityMetaData',
        'include_activity_meta_data_objects' => 'getIncludeActivityMetaDataObjects',
        'include_address_object' => 'getIncludeAddressObject',
        'include_time_slots' => 'getIncludeTimeSlots',
        'include_time_slot_tags' => 'getIncludeTimeSlotTags',
        'include_route_info' => 'getIncludeRouteInfo',
        'include_route' => 'getIncludeRoute',
        'include_package_lines' => 'getIncludePackageLines',
        'include_package_lines_info' => 'getIncludePackageLinesInfo',
        'include_driver_info' => 'getIncludeDriverInfo',
        'include_communication' => 'getIncludeCommunication',
        'include_communication_object' => 'getIncludeCommunicationObject',
        'include_activity_links' => 'getIncludeActivityLinks',
        'include_activity_files' => 'getIncludeActivityFiles',
        'include_activity_files_meta_data' => 'getIncludeActivityFilesMetaData',
        'include_activity_files_meta_data_objects' => 'getIncludeActivityFilesMetaDataObjects',
        'include_assignment_nr' => 'getIncludeAssignmentNr',
        'include_assignment' => 'getIncludeAssignment',
        'include_activity_tags' => 'getIncludeActivityTags',
        'include_tag_type_name' => 'getIncludeTagTypeName',
        'include_activity_record_info' => 'getIncludeActivityRecordInfo',
        'include_activity_notes' => 'getIncludeActivityNotes',
        'include_activity_note_tags' => 'getIncludeActivityNoteTags',
        'include_depot_address_object' => 'getIncludeDepotAddressObject'
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
        $this->container['include_activity_status'] = isset($data['include_activity_status']) ? $data['include_activity_status'] : null;
        $this->container['include_activity_type_name'] = isset($data['include_activity_type_name']) ? $data['include_activity_type_name'] : null;
        $this->container['include_activity_meta_data'] = isset($data['include_activity_meta_data']) ? $data['include_activity_meta_data'] : null;
        $this->container['include_activity_meta_data_objects'] = isset($data['include_activity_meta_data_objects']) ? $data['include_activity_meta_data_objects'] : null;
        $this->container['include_address_object'] = isset($data['include_address_object']) ? $data['include_address_object'] : null;
        $this->container['include_time_slots'] = isset($data['include_time_slots']) ? $data['include_time_slots'] : null;
        $this->container['include_time_slot_tags'] = isset($data['include_time_slot_tags']) ? $data['include_time_slot_tags'] : null;
        $this->container['include_route_info'] = isset($data['include_route_info']) ? $data['include_route_info'] : null;
        $this->container['include_route'] = isset($data['include_route']) ? $data['include_route'] : null;
        $this->container['include_package_lines'] = isset($data['include_package_lines']) ? $data['include_package_lines'] : null;
        $this->container['include_package_lines_info'] = isset($data['include_package_lines_info']) ? $data['include_package_lines_info'] : null;
        $this->container['include_driver_info'] = isset($data['include_driver_info']) ? $data['include_driver_info'] : null;
        $this->container['include_communication'] = isset($data['include_communication']) ? $data['include_communication'] : null;
        $this->container['include_communication_object'] = isset($data['include_communication_object']) ? $data['include_communication_object'] : null;
        $this->container['include_activity_links'] = isset($data['include_activity_links']) ? $data['include_activity_links'] : null;
        $this->container['include_activity_files'] = isset($data['include_activity_files']) ? $data['include_activity_files'] : null;
        $this->container['include_activity_files_meta_data'] = isset($data['include_activity_files_meta_data']) ? $data['include_activity_files_meta_data'] : null;
        $this->container['include_activity_files_meta_data_objects'] = isset($data['include_activity_files_meta_data_objects']) ? $data['include_activity_files_meta_data_objects'] : null;
        $this->container['include_assignment_nr'] = isset($data['include_assignment_nr']) ? $data['include_assignment_nr'] : null;
        $this->container['include_assignment'] = isset($data['include_assignment']) ? $data['include_assignment'] : null;
        $this->container['include_activity_tags'] = isset($data['include_activity_tags']) ? $data['include_activity_tags'] : null;
        $this->container['include_tag_type_name'] = isset($data['include_tag_type_name']) ? $data['include_tag_type_name'] : null;
        $this->container['include_activity_record_info'] = isset($data['include_activity_record_info']) ? $data['include_activity_record_info'] : null;
        $this->container['include_activity_notes'] = isset($data['include_activity_notes']) ? $data['include_activity_notes'] : null;
        $this->container['include_activity_note_tags'] = isset($data['include_activity_note_tags']) ? $data['include_activity_note_tags'] : null;
        $this->container['include_depot_address_object'] = isset($data['include_depot_address_object']) ? $data['include_depot_address_object'] : null;
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
     * Gets include_activity_status
     * @return bool
     */
    public function getIncludeActivityStatus()
    {
        return $this->container['include_activity_status'];
    }

    /**
     * Sets include_activity_status
     * @param bool $include_activity_status 
     * @return $this
     */
    public function setIncludeActivityStatus($include_activity_status)
    {
        $this->container['include_activity_status'] = $include_activity_status;

        return $this;
    }

    /**
     * Gets include_activity_type_name
     * @return bool
     */
    public function getIncludeActivityTypeName()
    {
        return $this->container['include_activity_type_name'];
    }

    /**
     * Sets include_activity_type_name
     * @param bool $include_activity_type_name 
     * @return $this
     */
    public function setIncludeActivityTypeName($include_activity_type_name)
    {
        $this->container['include_activity_type_name'] = $include_activity_type_name;

        return $this;
    }

    /**
     * Gets include_activity_meta_data
     * @return bool
     */
    public function getIncludeActivityMetaData()
    {
        return $this->container['include_activity_meta_data'];
    }

    /**
     * Sets include_activity_meta_data
     * @param bool $include_activity_meta_data 
     * @return $this
     */
    public function setIncludeActivityMetaData($include_activity_meta_data)
    {
        $this->container['include_activity_meta_data'] = $include_activity_meta_data;

        return $this;
    }

    /**
     * Gets include_activity_meta_data_objects
     * @return bool
     */
    public function getIncludeActivityMetaDataObjects()
    {
        return $this->container['include_activity_meta_data_objects'];
    }

    /**
     * Sets include_activity_meta_data_objects
     * @param bool $include_activity_meta_data_objects 
     * @return $this
     */
    public function setIncludeActivityMetaDataObjects($include_activity_meta_data_objects)
    {
        $this->container['include_activity_meta_data_objects'] = $include_activity_meta_data_objects;

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
     * Gets include_time_slots
     * @return bool
     */
    public function getIncludeTimeSlots()
    {
        return $this->container['include_time_slots'];
    }

    /**
     * Sets include_time_slots
     * @param bool $include_time_slots 
     * @return $this
     */
    public function setIncludeTimeSlots($include_time_slots)
    {
        $this->container['include_time_slots'] = $include_time_slots;

        return $this;
    }

    /**
     * Gets include_time_slot_tags
     * @return bool
     */
    public function getIncludeTimeSlotTags()
    {
        return $this->container['include_time_slot_tags'];
    }

    /**
     * Sets include_time_slot_tags
     * @param bool $include_time_slot_tags 
     * @return $this
     */
    public function setIncludeTimeSlotTags($include_time_slot_tags)
    {
        $this->container['include_time_slot_tags'] = $include_time_slot_tags;

        return $this;
    }

    /**
     * Gets include_route_info
     * @return bool
     */
    public function getIncludeRouteInfo()
    {
        return $this->container['include_route_info'];
    }

    /**
     * Sets include_route_info
     * @param bool $include_route_info 
     * @return $this
     */
    public function setIncludeRouteInfo($include_route_info)
    {
        $this->container['include_route_info'] = $include_route_info;

        return $this;
    }

    /**
     * Gets include_route
     * @return bool
     */
    public function getIncludeRoute()
    {
        return $this->container['include_route'];
    }

    /**
     * Sets include_route
     * @param bool $include_route 
     * @return $this
     */
    public function setIncludeRoute($include_route)
    {
        $this->container['include_route'] = $include_route;

        return $this;
    }

    /**
     * Gets include_package_lines
     * @return bool
     */
    public function getIncludePackageLines()
    {
        return $this->container['include_package_lines'];
    }

    /**
     * Sets include_package_lines
     * @param bool $include_package_lines 
     * @return $this
     */
    public function setIncludePackageLines($include_package_lines)
    {
        $this->container['include_package_lines'] = $include_package_lines;

        return $this;
    }

    /**
     * Gets include_package_lines_info
     * @return bool
     */
    public function getIncludePackageLinesInfo()
    {
        return $this->container['include_package_lines_info'];
    }

    /**
     * Sets include_package_lines_info
     * @param bool $include_package_lines_info 
     * @return $this
     */
    public function setIncludePackageLinesInfo($include_package_lines_info)
    {
        $this->container['include_package_lines_info'] = $include_package_lines_info;

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
     * Gets include_communication
     * @return bool
     */
    public function getIncludeCommunication()
    {
        return $this->container['include_communication'];
    }

    /**
     * Sets include_communication
     * @param bool $include_communication 
     * @return $this
     */
    public function setIncludeCommunication($include_communication)
    {
        $this->container['include_communication'] = $include_communication;

        return $this;
    }

    /**
     * Gets include_communication_object
     * @return bool
     */
    public function getIncludeCommunicationObject()
    {
        return $this->container['include_communication_object'];
    }

    /**
     * Sets include_communication_object
     * @param bool $include_communication_object 
     * @return $this
     */
    public function setIncludeCommunicationObject($include_communication_object)
    {
        $this->container['include_communication_object'] = $include_communication_object;

        return $this;
    }

    /**
     * Gets include_activity_links
     * @return bool
     */
    public function getIncludeActivityLinks()
    {
        return $this->container['include_activity_links'];
    }

    /**
     * Sets include_activity_links
     * @param bool $include_activity_links 
     * @return $this
     */
    public function setIncludeActivityLinks($include_activity_links)
    {
        $this->container['include_activity_links'] = $include_activity_links;

        return $this;
    }

    /**
     * Gets include_activity_files
     * @return bool
     */
    public function getIncludeActivityFiles()
    {
        return $this->container['include_activity_files'];
    }

    /**
     * Sets include_activity_files
     * @param bool $include_activity_files 
     * @return $this
     */
    public function setIncludeActivityFiles($include_activity_files)
    {
        $this->container['include_activity_files'] = $include_activity_files;

        return $this;
    }

    /**
     * Gets include_activity_files_meta_data
     * @return bool
     */
    public function getIncludeActivityFilesMetaData()
    {
        return $this->container['include_activity_files_meta_data'];
    }

    /**
     * Sets include_activity_files_meta_data
     * @param bool $include_activity_files_meta_data 
     * @return $this
     */
    public function setIncludeActivityFilesMetaData($include_activity_files_meta_data)
    {
        $this->container['include_activity_files_meta_data'] = $include_activity_files_meta_data;

        return $this;
    }

    /**
     * Gets include_activity_files_meta_data_objects
     * @return bool
     */
    public function getIncludeActivityFilesMetaDataObjects()
    {
        return $this->container['include_activity_files_meta_data_objects'];
    }

    /**
     * Sets include_activity_files_meta_data_objects
     * @param bool $include_activity_files_meta_data_objects 
     * @return $this
     */
    public function setIncludeActivityFilesMetaDataObjects($include_activity_files_meta_data_objects)
    {
        $this->container['include_activity_files_meta_data_objects'] = $include_activity_files_meta_data_objects;

        return $this;
    }

    /**
     * Gets include_assignment_nr
     * @return bool
     */
    public function getIncludeAssignmentNr()
    {
        return $this->container['include_assignment_nr'];
    }

    /**
     * Sets include_assignment_nr
     * @param bool $include_assignment_nr 
     * @return $this
     */
    public function setIncludeAssignmentNr($include_assignment_nr)
    {
        $this->container['include_assignment_nr'] = $include_assignment_nr;

        return $this;
    }

    /**
     * Gets include_assignment
     * @return bool
     */
    public function getIncludeAssignment()
    {
        return $this->container['include_assignment'];
    }

    /**
     * Sets include_assignment
     * @param bool $include_assignment 
     * @return $this
     */
    public function setIncludeAssignment($include_assignment)
    {
        $this->container['include_assignment'] = $include_assignment;

        return $this;
    }

    /**
     * Gets include_activity_tags
     * @return bool
     */
    public function getIncludeActivityTags()
    {
        return $this->container['include_activity_tags'];
    }

    /**
     * Sets include_activity_tags
     * @param bool $include_activity_tags 
     * @return $this
     */
    public function setIncludeActivityTags($include_activity_tags)
    {
        $this->container['include_activity_tags'] = $include_activity_tags;

        return $this;
    }

    /**
     * Gets include_tag_type_name
     * @return bool
     */
    public function getIncludeTagTypeName()
    {
        return $this->container['include_tag_type_name'];
    }

    /**
     * Sets include_tag_type_name
     * @param bool $include_tag_type_name 
     * @return $this
     */
    public function setIncludeTagTypeName($include_tag_type_name)
    {
        $this->container['include_tag_type_name'] = $include_tag_type_name;

        return $this;
    }

    /**
     * Gets include_activity_record_info
     * @return bool
     */
    public function getIncludeActivityRecordInfo()
    {
        return $this->container['include_activity_record_info'];
    }

    /**
     * Sets include_activity_record_info
     * @param bool $include_activity_record_info 
     * @return $this
     */
    public function setIncludeActivityRecordInfo($include_activity_record_info)
    {
        $this->container['include_activity_record_info'] = $include_activity_record_info;

        return $this;
    }

    /**
     * Gets include_activity_notes
     * @return bool
     */
    public function getIncludeActivityNotes()
    {
        return $this->container['include_activity_notes'];
    }

    /**
     * Sets include_activity_notes
     * @param bool $include_activity_notes 
     * @return $this
     */
    public function setIncludeActivityNotes($include_activity_notes)
    {
        $this->container['include_activity_notes'] = $include_activity_notes;

        return $this;
    }

    /**
     * Gets include_activity_note_tags
     * @return bool
     */
    public function getIncludeActivityNoteTags()
    {
        return $this->container['include_activity_note_tags'];
    }

    /**
     * Sets include_activity_note_tags
     * @param bool $include_activity_note_tags 
     * @return $this
     */
    public function setIncludeActivityNoteTags($include_activity_note_tags)
    {
        $this->container['include_activity_note_tags'] = $include_activity_note_tags;

        return $this;
    }

    /**
     * Gets include_depot_address_object
     * @return bool
     */
    public function getIncludeDepotAddressObject()
    {
        return $this->container['include_depot_address_object'];
    }

    /**
     * Sets include_depot_address_object
     * @param bool $include_depot_address_object 
     * @return $this
     */
    public function setIncludeDepotAddressObject($include_depot_address_object)
    {
        $this->container['include_depot_address_object'] = $include_depot_address_object;

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


