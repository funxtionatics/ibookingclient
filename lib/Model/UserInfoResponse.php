<?php
/**
 * UserInfoResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  iBooking\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * iBookings API - Final
 *
 * iBooking components
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace iBooking\Client\Model;

use \ArrayAccess;
use \iBooking\Client\ObjectSerializer;

/**
 * UserInfoResponse Class Doc Comment
 *
 * @category Class
 * @package  iBooking\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserInfoResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'firstname' => 'string',
'lastname' => 'string',
'expires' => 'string',
'active_block' => 'bool',
'email' => 'string',
'phone' => 'string',
'username' => 'string',
'cardnumber' => 'string',
'customer_number' => 'int',
'studio' => 'int',
'contract' => '\iBooking\Client\Model\Contract',
'noshow_count' => 'int',
'avtalegiro_status' => 'string',
'date_of_birth' => '\DateTime',
'address' => '\iBooking\Client\Model\Address',
'has_password' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'firstname' => null,
'lastname' => null,
'expires' => null,
'active_block' => null,
'email' => null,
'phone' => null,
'username' => null,
'cardnumber' => null,
'customer_number' => 'int64',
'studio' => 'int64',
'contract' => null,
'noshow_count' => 'int64',
'avtalegiro_status' => null,
'date_of_birth' => 'date',
'address' => null,
'has_password' => null    ];

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
'firstname' => 'firstname',
'lastname' => 'lastname',
'expires' => 'expires',
'active_block' => 'activeBlock',
'email' => 'email',
'phone' => 'phone',
'username' => 'username',
'cardnumber' => 'cardnumber',
'customer_number' => 'customerNumber',
'studio' => 'studio',
'contract' => 'contract',
'noshow_count' => 'noshowCount',
'avtalegiro_status' => 'avtalegiroStatus',
'date_of_birth' => 'dateOfBirth',
'address' => 'address',
'has_password' => 'hasPassword'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'firstname' => 'setFirstname',
'lastname' => 'setLastname',
'expires' => 'setExpires',
'active_block' => 'setActiveBlock',
'email' => 'setEmail',
'phone' => 'setPhone',
'username' => 'setUsername',
'cardnumber' => 'setCardnumber',
'customer_number' => 'setCustomerNumber',
'studio' => 'setStudio',
'contract' => 'setContract',
'noshow_count' => 'setNoshowCount',
'avtalegiro_status' => 'setAvtalegiroStatus',
'date_of_birth' => 'setDateOfBirth',
'address' => 'setAddress',
'has_password' => 'setHasPassword'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'firstname' => 'getFirstname',
'lastname' => 'getLastname',
'expires' => 'getExpires',
'active_block' => 'getActiveBlock',
'email' => 'getEmail',
'phone' => 'getPhone',
'username' => 'getUsername',
'cardnumber' => 'getCardnumber',
'customer_number' => 'getCustomerNumber',
'studio' => 'getStudio',
'contract' => 'getContract',
'noshow_count' => 'getNoshowCount',
'avtalegiro_status' => 'getAvtalegiroStatus',
'date_of_birth' => 'getDateOfBirth',
'address' => 'getAddress',
'has_password' => 'getHasPassword'    ];

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

    const AVTALEGIRO_STATUS__NEW = 'new';
const AVTALEGIRO_STATUS_NOT_APPLICABLE = 'not-applicable';
const AVTALEGIRO_STATUS_SIGNED = 'signed';
const AVTALEGIRO_STATUS_REVOKED = 'revoked';
const AVTALEGIRO_STATUS_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvtalegiroStatusAllowableValues()
    {
        return [
            self::AVTALEGIRO_STATUS__NEW,
self::AVTALEGIRO_STATUS_NOT_APPLICABLE,
self::AVTALEGIRO_STATUS_SIGNED,
self::AVTALEGIRO_STATUS_REVOKED,
self::AVTALEGIRO_STATUS_UNKNOWN,        ];
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
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['active_block'] = isset($data['active_block']) ? $data['active_block'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['cardnumber'] = isset($data['cardnumber']) ? $data['cardnumber'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['studio'] = isset($data['studio']) ? $data['studio'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['noshow_count'] = isset($data['noshow_count']) ? $data['noshow_count'] : null;
        $this->container['avtalegiro_status'] = isset($data['avtalegiro_status']) ? $data['avtalegiro_status'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['has_password'] = isset($data['has_password']) ? $data['has_password'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAvtalegiroStatusAllowableValues();
        if (!is_null($this->container['avtalegiro_status']) && !in_array($this->container['avtalegiro_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'avtalegiro_status', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return string
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param string $expires Membership expires at this time. Format: YYYY-MM-DD HH:MM:SS.
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets active_block
     *
     * @return bool
     */
    public function getActiveBlock()
    {
        return $this->container['active_block'];
    }

    /**
     * Sets active_block
     *
     * @param bool $active_block If true, the member can't book online.
     *
     * @return $this
     */
    public function setActiveBlock($active_block)
    {
        $this->container['active_block'] = $active_block;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets cardnumber
     *
     * @return string
     */
    public function getCardnumber()
    {
        return $this->container['cardnumber'];
    }

    /**
     * Sets cardnumber
     *
     * @param string $cardnumber cardnumber
     *
     * @return $this
     */
    public function setCardnumber($cardnumber)
    {
        $this->container['cardnumber'] = $cardnumber;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return int
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param int $customer_number customer_number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets studio
     *
     * @return int
     */
    public function getStudio()
    {
        return $this->container['studio'];
    }

    /**
     * Sets studio
     *
     * @param int $studio Studio ID
     *
     * @return $this
     */
    public function setStudio($studio)
    {
        $this->container['studio'] = $studio;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \iBooking\Client\Model\Contract
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \iBooking\Client\Model\Contract $contract contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets noshow_count
     *
     * @return int
     */
    public function getNoshowCount()
    {
        return $this->container['noshow_count'];
    }

    /**
     * Sets noshow_count
     *
     * @param int $noshow_count Current active noshow count
     *
     * @return $this
     */
    public function setNoshowCount($noshow_count)
    {
        $this->container['noshow_count'] = $noshow_count;

        return $this;
    }

    /**
     * Gets avtalegiro_status
     *
     * @return string
     */
    public function getAvtalegiroStatus()
    {
        return $this->container['avtalegiro_status'];
    }

    /**
     * Sets avtalegiro_status
     *
     * @param string $avtalegiro_status {new,not-applicable,signed,revoked,unknown}.
     *
     * @return $this
     */
    public function setAvtalegiroStatus($avtalegiro_status)
    {
        $allowedValues = $this->getAvtalegiroStatusAllowableValues();
        if (!is_null($avtalegiro_status) && !in_array($avtalegiro_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'avtalegiro_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['avtalegiro_status'] = $avtalegiro_status;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth Format: YYYY-MM-DD.
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \iBooking\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \iBooking\Client\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets has_password
     *
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->container['has_password'];
    }

    /**
     * Sets has_password
     *
     * @param bool $has_password has_password
     *
     * @return $this
     */
    public function setHasPassword($has_password)
    {
        $this->container['has_password'] = $has_password;

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
