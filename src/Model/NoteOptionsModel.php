<?php
/**
 * NoteOptionsModel
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
 * NoteOptionsModel Class Doc Comment
 *
 * @category Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NoteOptionsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoteOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_note_tags' => 'bool',
        'include_note_tag_type_link_ids' => 'bool',
        'include_note_object_link_ids' => 'bool',
        'include_updated_by' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_note_tags' => null,
        'include_note_tag_type_link_ids' => null,
        'include_note_object_link_ids' => null,
        'include_updated_by' => null
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
        'include_note_tags' => 'include_note_tags',
        'include_note_tag_type_link_ids' => 'include_note_tag_type_link_ids',
        'include_note_object_link_ids' => 'include_note_object_link_ids',
        'include_updated_by' => 'include_updated_by'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'include_note_tags' => 'setIncludeNoteTags',
        'include_note_tag_type_link_ids' => 'setIncludeNoteTagTypeLinkIds',
        'include_note_object_link_ids' => 'setIncludeNoteObjectLinkIds',
        'include_updated_by' => 'setIncludeUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'include_note_tags' => 'getIncludeNoteTags',
        'include_note_tag_type_link_ids' => 'getIncludeNoteTagTypeLinkIds',
        'include_note_object_link_ids' => 'getIncludeNoteObjectLinkIds',
        'include_updated_by' => 'getIncludeUpdatedBy'
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
        $this->container['include_note_tags'] = isset($data['include_note_tags']) ? $data['include_note_tags'] : null;
        $this->container['include_note_tag_type_link_ids'] = isset($data['include_note_tag_type_link_ids']) ? $data['include_note_tag_type_link_ids'] : null;
        $this->container['include_note_object_link_ids'] = isset($data['include_note_object_link_ids']) ? $data['include_note_object_link_ids'] : null;
        $this->container['include_updated_by'] = isset($data['include_updated_by']) ? $data['include_updated_by'] : null;
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
     * Gets include_note_tags
     *
     * @return bool
     */
    public function getIncludeNoteTags()
    {
        return $this->container['include_note_tags'];
    }

    /**
     * Sets include_note_tags
     *
     * @param bool $include_note_tags 
     *
     * @return $this
     */
    public function setIncludeNoteTags($include_note_tags)
    {
        $this->container['include_note_tags'] = $include_note_tags;

        return $this;
    }

    /**
     * Gets include_note_tag_type_link_ids
     *
     * @return bool
     */
    public function getIncludeNoteTagTypeLinkIds()
    {
        return $this->container['include_note_tag_type_link_ids'];
    }

    /**
     * Sets include_note_tag_type_link_ids
     *
     * @param bool $include_note_tag_type_link_ids 
     *
     * @return $this
     */
    public function setIncludeNoteTagTypeLinkIds($include_note_tag_type_link_ids)
    {
        $this->container['include_note_tag_type_link_ids'] = $include_note_tag_type_link_ids;

        return $this;
    }

    /**
     * Gets include_note_object_link_ids
     *
     * @return bool
     */
    public function getIncludeNoteObjectLinkIds()
    {
        return $this->container['include_note_object_link_ids'];
    }

    /**
     * Sets include_note_object_link_ids
     *
     * @param bool $include_note_object_link_ids 
     *
     * @return $this
     */
    public function setIncludeNoteObjectLinkIds($include_note_object_link_ids)
    {
        $this->container['include_note_object_link_ids'] = $include_note_object_link_ids;

        return $this;
    }

    /**
     * Gets include_updated_by
     *
     * @return bool
     */
    public function getIncludeUpdatedBy()
    {
        return $this->container['include_updated_by'];
    }

    /**
     * Sets include_updated_by
     *
     * @param bool $include_updated_by 
     *
     * @return $this
     */
    public function setIncludeUpdatedBy($include_updated_by)
    {
        $this->container['include_updated_by'] = $include_updated_by;

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

