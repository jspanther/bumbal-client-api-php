<?php
/**
 * CapacityModel
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
 * Swagger Codegen version: 2.3.1
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
 * CapacityModel Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CapacityModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CapacityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'capacity_type_id' => 'int',
        'capacity_type_name' => 'string',
        'capacity_type' => '\BumbalClient\BumbalClient\Model\CapacityTypeModel',
        'capacity_value' => 'double',
        'unit_values' => '\BumbalClient\BumbalClient\Model\UnitValueModel[]',
        'capacity_value_uom_name' => 'string',
        'unit_values_uom_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'capacity_type_id' => null,
        'capacity_type_name' => null,
        'capacity_type' => null,
        'capacity_value' => 'double',
        'unit_values' => null,
        'capacity_value_uom_name' => null,
        'unit_values_uom_name' => null
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
        'capacity_type_id' => 'capacity_type_id',
        'capacity_type_name' => 'capacity_type_name',
        'capacity_type' => 'capacity_type',
        'capacity_value' => 'capacity_value',
        'unit_values' => 'unit_values',
        'capacity_value_uom_name' => 'capacity_value_uom_name',
        'unit_values_uom_name' => 'unit_values_uom_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'capacity_type_id' => 'setCapacityTypeId',
        'capacity_type_name' => 'setCapacityTypeName',
        'capacity_type' => 'setCapacityType',
        'capacity_value' => 'setCapacityValue',
        'unit_values' => 'setUnitValues',
        'capacity_value_uom_name' => 'setCapacityValueUomName',
        'unit_values_uom_name' => 'setUnitValuesUomName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'capacity_type_id' => 'getCapacityTypeId',
        'capacity_type_name' => 'getCapacityTypeName',
        'capacity_type' => 'getCapacityType',
        'capacity_value' => 'getCapacityValue',
        'unit_values' => 'getUnitValues',
        'capacity_value_uom_name' => 'getCapacityValueUomName',
        'unit_values_uom_name' => 'getUnitValuesUomName'
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

    const CAPACITY_VALUE_UOM_NAME_CM = 'CM';
    const CAPACITY_VALUE_UOM_NAME_M = 'M';
    const CAPACITY_VALUE_UOM_NAME_MI = 'MI';
    const CAPACITY_VALUE_UOM_NAME_CM3 = 'CM3';
    const CAPACITY_VALUE_UOM_NAME_M3 = 'M3';
    const CAPACITY_VALUE_UOM_NAME_LI = 'LI';
    const CAPACITY_VALUE_UOM_NAME_KG = 'KG';
    const CAPACITY_VALUE_UOM_NAME_PD = 'PD';
    const CAPACITY_VALUE_UOM_NAME_AMOUNT = 'amount';
    const CAPACITY_VALUE_UOM_NAME_MM = 'MM';
    const CAPACITY_VALUE_UOM_NAME_MM3 = 'MM3';
    const CAPACITY_VALUE_UOM_NAME_DM = 'DM';
    const CAPACITY_VALUE_UOM_NAME_DM3 = 'DM3';
    const CAPACITY_VALUE_UOM_NAME_G = 'G';
    const CAPACITY_VALUE_UOM_NAME_MG = 'MG';
    const CAPACITY_VALUE_UOM_NAME_CG = 'CG';
    const CAPACITY_VALUE_UOM_NAME_DG = 'DG';
    const UNIT_VALUES_UOM_NAME_CM = 'CM';
    const UNIT_VALUES_UOM_NAME_M = 'M';
    const UNIT_VALUES_UOM_NAME_MI = 'MI';
    const UNIT_VALUES_UOM_NAME_CM3 = 'CM3';
    const UNIT_VALUES_UOM_NAME_M3 = 'M3';
    const UNIT_VALUES_UOM_NAME_LI = 'LI';
    const UNIT_VALUES_UOM_NAME_KG = 'KG';
    const UNIT_VALUES_UOM_NAME_PD = 'PD';
    const UNIT_VALUES_UOM_NAME_AMOUNT = 'amount';
    const UNIT_VALUES_UOM_NAME_MM = 'MM';
    const UNIT_VALUES_UOM_NAME_MM3 = 'MM3';
    const UNIT_VALUES_UOM_NAME_DM = 'DM';
    const UNIT_VALUES_UOM_NAME_DM3 = 'DM3';
    const UNIT_VALUES_UOM_NAME_G = 'G';
    const UNIT_VALUES_UOM_NAME_MG = 'MG';
    const UNIT_VALUES_UOM_NAME_CG = 'CG';
    const UNIT_VALUES_UOM_NAME_DG = 'DG';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCapacityValueUomNameAllowableValues()
    {
        return [
            self::CAPACITY_VALUE_UOM_NAME_CM,
            self::CAPACITY_VALUE_UOM_NAME_M,
            self::CAPACITY_VALUE_UOM_NAME_MI,
            self::CAPACITY_VALUE_UOM_NAME_CM3,
            self::CAPACITY_VALUE_UOM_NAME_M3,
            self::CAPACITY_VALUE_UOM_NAME_LI,
            self::CAPACITY_VALUE_UOM_NAME_KG,
            self::CAPACITY_VALUE_UOM_NAME_PD,
            self::CAPACITY_VALUE_UOM_NAME_AMOUNT,
            self::CAPACITY_VALUE_UOM_NAME_MM,
            self::CAPACITY_VALUE_UOM_NAME_MM3,
            self::CAPACITY_VALUE_UOM_NAME_DM,
            self::CAPACITY_VALUE_UOM_NAME_DM3,
            self::CAPACITY_VALUE_UOM_NAME_G,
            self::CAPACITY_VALUE_UOM_NAME_MG,
            self::CAPACITY_VALUE_UOM_NAME_CG,
            self::CAPACITY_VALUE_UOM_NAME_DG,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitValuesUomNameAllowableValues()
    {
        return [
            self::UNIT_VALUES_UOM_NAME_CM,
            self::UNIT_VALUES_UOM_NAME_M,
            self::UNIT_VALUES_UOM_NAME_MI,
            self::UNIT_VALUES_UOM_NAME_CM3,
            self::UNIT_VALUES_UOM_NAME_M3,
            self::UNIT_VALUES_UOM_NAME_LI,
            self::UNIT_VALUES_UOM_NAME_KG,
            self::UNIT_VALUES_UOM_NAME_PD,
            self::UNIT_VALUES_UOM_NAME_AMOUNT,
            self::UNIT_VALUES_UOM_NAME_MM,
            self::UNIT_VALUES_UOM_NAME_MM3,
            self::UNIT_VALUES_UOM_NAME_DM,
            self::UNIT_VALUES_UOM_NAME_DM3,
            self::UNIT_VALUES_UOM_NAME_G,
            self::UNIT_VALUES_UOM_NAME_MG,
            self::UNIT_VALUES_UOM_NAME_CG,
            self::UNIT_VALUES_UOM_NAME_DG,
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
        $this->container['capacity_type_id'] = isset($data['capacity_type_id']) ? $data['capacity_type_id'] : null;
        $this->container['capacity_type_name'] = isset($data['capacity_type_name']) ? $data['capacity_type_name'] : null;
        $this->container['capacity_type'] = isset($data['capacity_type']) ? $data['capacity_type'] : null;
        $this->container['capacity_value'] = isset($data['capacity_value']) ? $data['capacity_value'] : null;
        $this->container['unit_values'] = isset($data['unit_values']) ? $data['unit_values'] : null;
        $this->container['capacity_value_uom_name'] = isset($data['capacity_value_uom_name']) ? $data['capacity_value_uom_name'] : null;
        $this->container['unit_values_uom_name'] = isset($data['unit_values_uom_name']) ? $data['unit_values_uom_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCapacityValueUomNameAllowableValues();
        if (!in_array($this->container['capacity_value_uom_name'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'capacity_value_uom_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUnitValuesUomNameAllowableValues();
        if (!in_array($this->container['unit_values_uom_name'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit_values_uom_name', must be one of '%s'",
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

        $allowedValues = $this->getCapacityValueUomNameAllowableValues();
        if (!in_array($this->container['capacity_value_uom_name'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getUnitValuesUomNameAllowableValues();
        if (!in_array($this->container['unit_values_uom_name'], $allowedValues)) {
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
     * @param int $id Unique ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets capacity_type_id
     *
     * @return int
     */
    public function getCapacityTypeId()
    {
        return $this->container['capacity_type_id'];
    }

    /**
     * Sets capacity_type_id
     *
     * @param int $capacity_type_id id for capacity type
     *
     * @return $this
     */
    public function setCapacityTypeId($capacity_type_id)
    {
        $this->container['capacity_type_id'] = $capacity_type_id;

        return $this;
    }

    /**
     * Gets capacity_type_name
     *
     * @return string
     */
    public function getCapacityTypeName()
    {
        return $this->container['capacity_type_name'];
    }

    /**
     * Sets capacity_type_name
     *
     * @param string $capacity_type_name name of capacity type
     *
     * @return $this
     */
    public function setCapacityTypeName($capacity_type_name)
    {
        $this->container['capacity_type_name'] = $capacity_type_name;

        return $this;
    }

    /**
     * Gets capacity_type
     *
     * @return \BumbalClient\BumbalClient\Model\CapacityTypeModel
     */
    public function getCapacityType()
    {
        return $this->container['capacity_type'];
    }

    /**
     * Sets capacity_type
     *
     * @param \BumbalClient\BumbalClient\Model\CapacityTypeModel $capacity_type capacity_type
     *
     * @return $this
     */
    public function setCapacityType($capacity_type)
    {
        $this->container['capacity_type'] = $capacity_type;

        return $this;
    }

    /**
     * Gets capacity_value
     *
     * @return double
     */
    public function getCapacityValue()
    {
        return $this->container['capacity_value'];
    }

    /**
     * Sets capacity_value
     *
     * @param double $capacity_value Capacity value
     *
     * @return $this
     */
    public function setCapacityValue($capacity_value)
    {
        $this->container['capacity_value'] = $capacity_value;

        return $this;
    }

    /**
     * Gets unit_values
     *
     * @return \BumbalClient\BumbalClient\Model\UnitValueModel[]
     */
    public function getUnitValues()
    {
        return $this->container['unit_values'];
    }

    /**
     * Sets unit_values
     *
     * @param \BumbalClient\BumbalClient\Model\UnitValueModel[] $unit_values 
     *
     * @return $this
     */
    public function setUnitValues($unit_values)
    {
        $this->container['unit_values'] = $unit_values;

        return $this;
    }

    /**
     * Gets capacity_value_uom_name
     *
     * @return string
     */
    public function getCapacityValueUomName()
    {
        return $this->container['capacity_value_uom_name'];
    }

    /**
     * Sets capacity_value_uom_name
     *
     * @param string $capacity_value_uom_name Name of used unit of measurement for values provided in capacity_value
     *
     * @return $this
     */
    public function setCapacityValueUomName($capacity_value_uom_name)
    {
        $allowedValues = $this->getCapacityValueUomNameAllowableValues();
        if (!is_null($capacity_value_uom_name) && !in_array($capacity_value_uom_name, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'capacity_value_uom_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['capacity_value_uom_name'] = $capacity_value_uom_name;

        return $this;
    }

    /**
     * Gets unit_values_uom_name
     *
     * @return string
     */
    public function getUnitValuesUomName()
    {
        return $this->container['unit_values_uom_name'];
    }

    /**
     * Sets unit_values_uom_name
     *
     * @param string $unit_values_uom_name Name of used unit of measurement for values provided in unit_values
     *
     * @return $this
     */
    public function setUnitValuesUomName($unit_values_uom_name)
    {
        $allowedValues = $this->getUnitValuesUomNameAllowableValues();
        if (!is_null($unit_values_uom_name) && !in_array($unit_values_uom_name, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unit_values_uom_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit_values_uom_name'] = $unit_values_uom_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
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


