<?php
/**
 * PartyModel
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
 * PartyModel Class Doc Comment
 *
 * @category Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PartyModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PartyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'party_type_name' => 'string',
        'party_type_id' => 'int',
        'address' => '\BumbalClient\BumbalClient\Model\AddressModel',
        'address_id' => 'int',
        'name_1' => 'string',
        'name_2' => 'string',
        'nr' => 'string',
        'contact_person' => 'string',
        'url' => 'string',
        'tags' => '\BumbalClient\BumbalClient\Model\TagModel[]',
        'links' => '\BumbalClient\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\BumbalClient\Model\MetaDataModel[]',
        'notes' => '\BumbalClient\BumbalClient\Model\NoteModel[]',
        'files' => '\BumbalClient\BumbalClient\Model\FileModel[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'party_type_name' => null,
        'party_type_id' => null,
        'address' => null,
        'address_id' => null,
        'name_1' => null,
        'name_2' => null,
        'nr' => null,
        'contact_person' => null,
        'url' => null,
        'tags' => null,
        'links' => null,
        'meta_data' => null,
        'notes' => null,
        'files' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'party_type_name' => 'party_type_name',
        'party_type_id' => 'party_type_id',
        'address' => 'address',
        'address_id' => 'address_id',
        'name_1' => 'name_1',
        'name_2' => 'name_2',
        'nr' => 'nr',
        'contact_person' => 'contact_person',
        'url' => 'url',
        'tags' => 'tags',
        'links' => 'links',
        'meta_data' => 'meta_data',
        'notes' => 'notes',
        'files' => 'files',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'party_type_name' => 'setPartyTypeName',
        'party_type_id' => 'setPartyTypeId',
        'address' => 'setAddress',
        'address_id' => 'setAddressId',
        'name_1' => 'setName1',
        'name_2' => 'setName2',
        'nr' => 'setNr',
        'contact_person' => 'setContactPerson',
        'url' => 'setUrl',
        'tags' => 'setTags',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData',
        'notes' => 'setNotes',
        'files' => 'setFiles',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'party_type_name' => 'getPartyTypeName',
        'party_type_id' => 'getPartyTypeId',
        'address' => 'getAddress',
        'address_id' => 'getAddressId',
        'name_1' => 'getName1',
        'name_2' => 'getName2',
        'nr' => 'getNr',
        'contact_person' => 'getContactPerson',
        'url' => 'getUrl',
        'tags' => 'getTags',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData',
        'notes' => 'getNotes',
        'files' => 'getFiles',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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

    const PARTY_TYPE_NAME_CONTRACTOR = 'contractor';
    const PARTY_TYPE_NAME_BOOKING = 'booking';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPartyTypeNameAllowableValues()
    {
        return [
            self::PARTY_TYPE_NAME_CONTRACTOR,
            self::PARTY_TYPE_NAME_BOOKING,
        ];
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
        $this->container['party_type_name'] = isset($data['party_type_name']) ? $data['party_type_name'] : null;
        $this->container['party_type_id'] = isset($data['party_type_id']) ? $data['party_type_id'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['address_id'] = isset($data['address_id']) ? $data['address_id'] : null;
        $this->container['name_1'] = isset($data['name_1']) ? $data['name_1'] : null;
        $this->container['name_2'] = isset($data['name_2']) ? $data['name_2'] : null;
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPartyTypeNameAllowableValues();
        if (!in_array($this->container['party_type_name'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'party_type_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getPartyTypeNameAllowableValues();
        if (!in_array($this->container['party_type_name'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique Identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets party_type_name
     *
     * @return string
     */
    public function getPartyTypeName()
    {
        return $this->container['party_type_name'];
    }

    /**
     * Sets party_type_name
     *
     * @param string $party_type_name Type of this party
     *
     * @return $this
     */
    public function setPartyTypeName($party_type_name)
    {
        $allowedValues = $this->getPartyTypeNameAllowableValues();
        if (!is_null($party_type_name) && !in_array($party_type_name, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'party_type_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['party_type_name'] = $party_type_name;

        return $this;
    }

    /**
     * Gets party_type_id
     *
     * @return int
     */
    public function getPartyTypeId()
    {
        return $this->container['party_type_id'];
    }

    /**
     * Sets party_type_id
     *
     * @param int $party_type_id PartyTypeID of this party. 2 = contractor, 3 = booking
     *
     * @return $this
     */
    public function setPartyTypeId($party_type_id)
    {
        $this->container['party_type_id'] = $party_type_id;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \BumbalClient\BumbalClient\Model\AddressModel
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \BumbalClient\BumbalClient\Model\AddressModel $address 
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets address_id
     *
     * @return int
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param int $address_id Address ID (unique)
     *
     * @return $this
     */
    public function setAddressId($address_id)
    {
        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets name_1
     *
     * @return string
     */
    public function getName1()
    {
        return $this->container['name_1'];
    }

    /**
     * Sets name_1
     *
     * @param string $name_1 Name 1 for party
     *
     * @return $this
     */
    public function setName1($name_1)
    {
        $this->container['name_1'] = $name_1;

        return $this;
    }

    /**
     * Gets name_2
     *
     * @return string
     */
    public function getName2()
    {
        return $this->container['name_2'];
    }

    /**
     * Sets name_2
     *
     * @param string $name_2 Name 2 for party
     *
     * @return $this
     */
    public function setName2($name_2)
    {
        $this->container['name_2'] = $name_2;

        return $this;
    }

    /**
     * Gets nr
     *
     * @return string
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     *
     * @param string $nr Number of this party
     *
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param string $contact_person Contact person for party
     *
     * @return $this
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Url for party website
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \BumbalClient\BumbalClient\Model\TagModel[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \BumbalClient\BumbalClient\Model\TagModel[] $tags 
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \BumbalClient\BumbalClient\Model\LinkModel[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \BumbalClient\BumbalClient\Model\LinkModel[] $links 
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return \BumbalClient\BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param \BumbalClient\BumbalClient\Model\MetaDataModel[] $meta_data 
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \BumbalClient\BumbalClient\Model\NoteModel[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \BumbalClient\BumbalClient\Model\NoteModel[] $notes 
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \BumbalClient\BumbalClient\Model\FileModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \BumbalClient\BumbalClient\Model\FileModel[] $files 
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at date time
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at date time
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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

