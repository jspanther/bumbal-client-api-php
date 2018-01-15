<?php
/**
 * AddressAppliedModel
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
 * AddressAppliedModel Class Doc Comment
 *
 * @category Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressAppliedModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddressAppliedModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'party_id' => 'int',
        'summary' => 'string',
        'full_name' => 'string',
        'name_1' => 'string',
        'name_2' => 'string',
        'street_1' => 'string',
        'street_2' => 'string',
        'house_nr' => 'string',
        'house_nr_addendum' => 'string',
        'zipcode' => 'string',
        'city' => 'string',
        'state' => 'string',
        'iso_country' => 'string',
        'emails' => '\BumbalClient\BumbalClient\Model\EmailModel[]',
        'phone_nrs' => '\BumbalClient\BumbalClient\Model\PhoneNrModel[]',
        'contact_person' => 'string',
        'latitude' => 'string',
        'longitude' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'party_id' => null,
        'summary' => null,
        'full_name' => null,
        'name_1' => null,
        'name_2' => null,
        'street_1' => null,
        'street_2' => null,
        'house_nr' => null,
        'house_nr_addendum' => null,
        'zipcode' => null,
        'city' => null,
        'state' => null,
        'iso_country' => null,
        'emails' => null,
        'phone_nrs' => null,
        'contact_person' => null,
        'latitude' => null,
        'longitude' => null
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
        'party_id' => 'party_id',
        'summary' => 'summary',
        'full_name' => 'full_name',
        'name_1' => 'name_1',
        'name_2' => 'name_2',
        'street_1' => 'street_1',
        'street_2' => 'street_2',
        'house_nr' => 'house_nr',
        'house_nr_addendum' => 'house_nr_addendum',
        'zipcode' => 'zipcode',
        'city' => 'city',
        'state' => 'state',
        'iso_country' => 'iso_country',
        'emails' => 'emails',
        'phone_nrs' => 'phone_nrs',
        'contact_person' => 'contact_person',
        'latitude' => 'latitude',
        'longitude' => 'longitude'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'party_id' => 'setPartyId',
        'summary' => 'setSummary',
        'full_name' => 'setFullName',
        'name_1' => 'setName1',
        'name_2' => 'setName2',
        'street_1' => 'setStreet1',
        'street_2' => 'setStreet2',
        'house_nr' => 'setHouseNr',
        'house_nr_addendum' => 'setHouseNrAddendum',
        'zipcode' => 'setZipcode',
        'city' => 'setCity',
        'state' => 'setState',
        'iso_country' => 'setIsoCountry',
        'emails' => 'setEmails',
        'phone_nrs' => 'setPhoneNrs',
        'contact_person' => 'setContactPerson',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'party_id' => 'getPartyId',
        'summary' => 'getSummary',
        'full_name' => 'getFullName',
        'name_1' => 'getName1',
        'name_2' => 'getName2',
        'street_1' => 'getStreet1',
        'street_2' => 'getStreet2',
        'house_nr' => 'getHouseNr',
        'house_nr_addendum' => 'getHouseNrAddendum',
        'zipcode' => 'getZipcode',
        'city' => 'getCity',
        'state' => 'getState',
        'iso_country' => 'getIsoCountry',
        'emails' => 'getEmails',
        'phone_nrs' => 'getPhoneNrs',
        'contact_person' => 'getContactPerson',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude'
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
        $this->container['party_id'] = isset($data['party_id']) ? $data['party_id'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['name_1'] = isset($data['name_1']) ? $data['name_1'] : null;
        $this->container['name_2'] = isset($data['name_2']) ? $data['name_2'] : null;
        $this->container['street_1'] = isset($data['street_1']) ? $data['street_1'] : null;
        $this->container['street_2'] = isset($data['street_2']) ? $data['street_2'] : null;
        $this->container['house_nr'] = isset($data['house_nr']) ? $data['house_nr'] : null;
        $this->container['house_nr_addendum'] = isset($data['house_nr_addendum']) ? $data['house_nr_addendum'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['iso_country'] = isset($data['iso_country']) ? $data['iso_country'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['phone_nrs'] = isset($data['phone_nrs']) ? $data['phone_nrs'] : null;
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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

        if ($this->container['id'] === null) {
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
     * @param int $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets party_id
     *
     * @return int
     */
    public function getPartyId()
    {
        return $this->container['party_id'];
    }

    /**
     * Sets party_id
     *
     * @param int $party_id 
     *
     * @return $this
     */
    public function setPartyId($party_id)
    {
        $this->container['party_id'] = $party_id;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary 
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name 
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

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
     * @param string $name_1 
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
     * @param string $name_2 
     *
     * @return $this
     */
    public function setName2($name_2)
    {
        $this->container['name_2'] = $name_2;

        return $this;
    }

    /**
     * Gets street_1
     *
     * @return string
     */
    public function getStreet1()
    {
        return $this->container['street_1'];
    }

    /**
     * Sets street_1
     *
     * @param string $street_1 
     *
     * @return $this
     */
    public function setStreet1($street_1)
    {
        $this->container['street_1'] = $street_1;

        return $this;
    }

    /**
     * Gets street_2
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->container['street_2'];
    }

    /**
     * Sets street_2
     *
     * @param string $street_2 
     *
     * @return $this
     */
    public function setStreet2($street_2)
    {
        $this->container['street_2'] = $street_2;

        return $this;
    }

    /**
     * Gets house_nr
     *
     * @return string
     */
    public function getHouseNr()
    {
        return $this->container['house_nr'];
    }

    /**
     * Sets house_nr
     *
     * @param string $house_nr 
     *
     * @return $this
     */
    public function setHouseNr($house_nr)
    {
        $this->container['house_nr'] = $house_nr;

        return $this;
    }

    /**
     * Gets house_nr_addendum
     *
     * @return string
     */
    public function getHouseNrAddendum()
    {
        return $this->container['house_nr_addendum'];
    }

    /**
     * Sets house_nr_addendum
     *
     * @param string $house_nr_addendum 
     *
     * @return $this
     */
    public function setHouseNrAddendum($house_nr_addendum)
    {
        $this->container['house_nr_addendum'] = $house_nr_addendum;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode 
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city 
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets iso_country
     *
     * @return string
     */
    public function getIsoCountry()
    {
        return $this->container['iso_country'];
    }

    /**
     * Sets iso_country
     *
     * @param string $iso_country 
     *
     * @return $this
     */
    public function setIsoCountry($iso_country)
    {
        $this->container['iso_country'] = $iso_country;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \BumbalClient\BumbalClient\Model\EmailModel[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \BumbalClient\BumbalClient\Model\EmailModel[] $emails 
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets phone_nrs
     *
     * @return \BumbalClient\BumbalClient\Model\PhoneNrModel[]
     */
    public function getPhoneNrs()
    {
        return $this->container['phone_nrs'];
    }

    /**
     * Sets phone_nrs
     *
     * @param \BumbalClient\BumbalClient\Model\PhoneNrModel[] $phone_nrs 
     *
     * @return $this
     */
    public function setPhoneNrs($phone_nrs)
    {
        $this->container['phone_nrs'] = $phone_nrs;

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
     * @param string $contact_person 
     *
     * @return $this
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string $latitude 
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string $longitude 
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

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

