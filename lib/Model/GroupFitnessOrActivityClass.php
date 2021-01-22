<?php
/**
 * GroupFitnessOrActivityClass
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
 * GroupFitnessOrActivityClass Class Doc Comment
 *
 * @category Class
 * @package  iBooking\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupFitnessOrActivityClass implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GroupFitnessOrActivityClass';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'from' => '\DateTime',
'to' => '\DateTime',
'description' => 'string',
'image' => 'string',
'studio' => '\iBooking\Client\Model\ActivityClassStudio',
'category' => '\iBooking\Client\Model\Category',
'available' => 'int',
'capacity' => 'int',
'color' => 'string',
'instructors' => '\iBooking\Client\Model\Instructor[]',
'room' => 'string',
'video' => 'string',
'bookable' => 'bool',
'booking_opens_at' => '\DateTime',
'user_status' => 'string',
'waitlist' => '\iBooking\Client\Model\GroupFitnessClassWaitlist',
'cancellation_penalty' => 'bool',
'cancel_text' => 'string',
'note' => 'string',
'price' => 'float',
'payment_status' => 'string',
'booked' => 'bool',
'my_booking' => 'bool',
'booking_id' => 'int',
'booker' => '\iBooking\Client\Model\ActivityClassBooker',
'date' => '\DateTime',
'resource' => '\iBooking\Client\Model\EventStudio',
'activity' => '\iBooking\Client\Model\EventStudio'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'name' => null,
'from' => 'date-time',
'to' => 'date-time',
'description' => null,
'image' => null,
'studio' => null,
'category' => null,
'available' => null,
'capacity' => null,
'color' => null,
'instructors' => null,
'room' => null,
'video' => null,
'bookable' => null,
'booking_opens_at' => 'date-time',
'user_status' => null,
'waitlist' => null,
'cancellation_penalty' => null,
'cancel_text' => null,
'note' => null,
'price' => 'float',
'payment_status' => null,
'booked' => null,
'my_booking' => null,
'booking_id' => null,
'booker' => null,
'date' => 'date',
'resource' => null,
'activity' => null    ];

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
'name' => 'name',
'from' => 'from',
'to' => 'to',
'description' => 'description',
'image' => 'image',
'studio' => 'studio',
'category' => 'category',
'available' => 'available',
'capacity' => 'capacity',
'color' => 'color',
'instructors' => 'instructors',
'room' => 'room',
'video' => 'video',
'bookable' => 'bookable',
'booking_opens_at' => 'bookingOpensAt',
'user_status' => 'userStatus',
'waitlist' => 'waitlist',
'cancellation_penalty' => 'cancellationPenalty',
'cancel_text' => 'cancelText',
'note' => 'note',
'price' => 'price',
'payment_status' => 'paymentStatus',
'booked' => 'booked',
'my_booking' => 'myBooking',
'booking_id' => 'bookingId',
'booker' => 'booker',
'date' => 'date',
'resource' => 'resource',
'activity' => 'activity'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'from' => 'setFrom',
'to' => 'setTo',
'description' => 'setDescription',
'image' => 'setImage',
'studio' => 'setStudio',
'category' => 'setCategory',
'available' => 'setAvailable',
'capacity' => 'setCapacity',
'color' => 'setColor',
'instructors' => 'setInstructors',
'room' => 'setRoom',
'video' => 'setVideo',
'bookable' => 'setBookable',
'booking_opens_at' => 'setBookingOpensAt',
'user_status' => 'setUserStatus',
'waitlist' => 'setWaitlist',
'cancellation_penalty' => 'setCancellationPenalty',
'cancel_text' => 'setCancelText',
'note' => 'setNote',
'price' => 'setPrice',
'payment_status' => 'setPaymentStatus',
'booked' => 'setBooked',
'my_booking' => 'setMyBooking',
'booking_id' => 'setBookingId',
'booker' => 'setBooker',
'date' => 'setDate',
'resource' => 'setResource',
'activity' => 'setActivity'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'from' => 'getFrom',
'to' => 'getTo',
'description' => 'getDescription',
'image' => 'getImage',
'studio' => 'getStudio',
'category' => 'getCategory',
'available' => 'getAvailable',
'capacity' => 'getCapacity',
'color' => 'getColor',
'instructors' => 'getInstructors',
'room' => 'getRoom',
'video' => 'getVideo',
'bookable' => 'getBookable',
'booking_opens_at' => 'getBookingOpensAt',
'user_status' => 'getUserStatus',
'waitlist' => 'getWaitlist',
'cancellation_penalty' => 'getCancellationPenalty',
'cancel_text' => 'getCancelText',
'note' => 'getNote',
'price' => 'getPrice',
'payment_status' => 'getPaymentStatus',
'booked' => 'getBooked',
'my_booking' => 'getMyBooking',
'booking_id' => 'getBookingId',
'booker' => 'getBooker',
'date' => 'getDate',
'resource' => 'getResource',
'activity' => 'getActivity'    ];

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

    const USER_STATUS_AVAILABLE = 'available';
const USER_STATUS_BOOKED = 'booked';
const USER_STATUS_WAITLIST = 'waitlist';
const USER_STATUS_NOSHOW = 'noshow';
const PAYMENT_STATUS_PAID = 'paid';
const PAYMENT_STATUS_NOTPAID = 'notpaid';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserStatusAllowableValues()
    {
        return [
            self::USER_STATUS_AVAILABLE,
self::USER_STATUS_BOOKED,
self::USER_STATUS_WAITLIST,
self::USER_STATUS_NOSHOW,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_PAID,
self::PAYMENT_STATUS_NOTPAID,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['studio'] = isset($data['studio']) ? $data['studio'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['instructors'] = isset($data['instructors']) ? $data['instructors'] : null;
        $this->container['room'] = isset($data['room']) ? $data['room'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['bookable'] = isset($data['bookable']) ? $data['bookable'] : null;
        $this->container['booking_opens_at'] = isset($data['booking_opens_at']) ? $data['booking_opens_at'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
        $this->container['waitlist'] = isset($data['waitlist']) ? $data['waitlist'] : null;
        $this->container['cancellation_penalty'] = isset($data['cancellation_penalty']) ? $data['cancellation_penalty'] : null;
        $this->container['cancel_text'] = isset($data['cancel_text']) ? $data['cancel_text'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['booked'] = isset($data['booked']) ? $data['booked'] : null;
        $this->container['my_booking'] = isset($data['my_booking']) ? $data['my_booking'] : null;
        $this->container['booking_id'] = isset($data['booking_id']) ? $data['booking_id'] : null;
        $this->container['booker'] = isset($data['booker']) ? $data['booker'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUserStatusAllowableValues();
        if (!is_null($this->container['user_status']) && !in_array($this->container['user_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'user_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_status', must be one of '%s'",
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \DateTime $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \DateTime $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets studio
     *
     * @return \iBooking\Client\Model\ActivityClassStudio
     */
    public function getStudio()
    {
        return $this->container['studio'];
    }

    /**
     * Sets studio
     *
     * @param \iBooking\Client\Model\ActivityClassStudio $studio studio
     *
     * @return $this
     */
    public function setStudio($studio)
    {
        $this->container['studio'] = $studio;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \iBooking\Client\Model\Category
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \iBooking\Client\Model\Category $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets available
     *
     * @return int
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param int $available Number of seats available
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int $capacity capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets instructors
     *
     * @return \iBooking\Client\Model\Instructor[]
     */
    public function getInstructors()
    {
        return $this->container['instructors'];
    }

    /**
     * Sets instructors
     *
     * @param \iBooking\Client\Model\Instructor[] $instructors instructors
     *
     * @return $this
     */
    public function setInstructors($instructors)
    {
        $this->container['instructors'] = $instructors;

        return $this;
    }

    /**
     * Gets room
     *
     * @return string
     */
    public function getRoom()
    {
        return $this->container['room'];
    }

    /**
     * Sets room
     *
     * @param string $room room
     *
     * @return $this
     */
    public function setRoom($room)
    {
        $this->container['room'] = $room;

        return $this;
    }

    /**
     * Gets video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param string $video video
     *
     * @return $this
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets bookable
     *
     * @return bool
     */
    public function getBookable()
    {
        return $this->container['bookable'];
    }

    /**
     * Sets bookable
     *
     * @param bool $bookable bookable
     *
     * @return $this
     */
    public function setBookable($bookable)
    {
        $this->container['bookable'] = $bookable;

        return $this;
    }

    /**
     * Gets booking_opens_at
     *
     * @return \DateTime
     */
    public function getBookingOpensAt()
    {
        return $this->container['booking_opens_at'];
    }

    /**
     * Sets booking_opens_at
     *
     * @param \DateTime $booking_opens_at booking_opens_at
     *
     * @return $this
     */
    public function setBookingOpensAt($booking_opens_at)
    {
        $this->container['booking_opens_at'] = $booking_opens_at;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return string
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param string $user_status user_status
     *
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $allowedValues = $this->getUserStatusAllowableValues();
        if (!is_null($user_status) && !in_array($user_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'user_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['user_status'] = $user_status;

        return $this;
    }

    /**
     * Gets waitlist
     *
     * @return \iBooking\Client\Model\GroupFitnessClassWaitlist
     */
    public function getWaitlist()
    {
        return $this->container['waitlist'];
    }

    /**
     * Sets waitlist
     *
     * @param \iBooking\Client\Model\GroupFitnessClassWaitlist $waitlist waitlist
     *
     * @return $this
     */
    public function setWaitlist($waitlist)
    {
        $this->container['waitlist'] = $waitlist;

        return $this;
    }

    /**
     * Gets cancellation_penalty
     *
     * @return bool
     */
    public function getCancellationPenalty()
    {
        return $this->container['cancellation_penalty'];
    }

    /**
     * Sets cancellation_penalty
     *
     * @param bool $cancellation_penalty cancellation_penalty
     *
     * @return $this
     */
    public function setCancellationPenalty($cancellation_penalty)
    {
        $this->container['cancellation_penalty'] = $cancellation_penalty;

        return $this;
    }

    /**
     * Gets cancel_text
     *
     * @return string
     */
    public function getCancelText()
    {
        return $this->container['cancel_text'];
    }

    /**
     * Sets cancel_text
     *
     * @param string $cancel_text cancel_text
     *
     * @return $this
     */
    public function setCancelText($cancel_text)
    {
        $this->container['cancel_text'] = $cancel_text;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string $payment_status payment_status
     *
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($payment_status) && !in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets booked
     *
     * @return bool
     */
    public function getBooked()
    {
        return $this->container['booked'];
    }

    /**
     * Sets booked
     *
     * @param bool $booked booked
     *
     * @return $this
     */
    public function setBooked($booked)
    {
        $this->container['booked'] = $booked;

        return $this;
    }

    /**
     * Gets my_booking
     *
     * @return bool
     */
    public function getMyBooking()
    {
        return $this->container['my_booking'];
    }

    /**
     * Sets my_booking
     *
     * @param bool $my_booking my_booking
     *
     * @return $this
     */
    public function setMyBooking($my_booking)
    {
        $this->container['my_booking'] = $my_booking;

        return $this;
    }

    /**
     * Gets booking_id
     *
     * @return int
     */
    public function getBookingId()
    {
        return $this->container['booking_id'];
    }

    /**
     * Sets booking_id
     *
     * @param int $booking_id booking_id
     *
     * @return $this
     */
    public function setBookingId($booking_id)
    {
        $this->container['booking_id'] = $booking_id;

        return $this;
    }

    /**
     * Gets booker
     *
     * @return \iBooking\Client\Model\ActivityClassBooker
     */
    public function getBooker()
    {
        return $this->container['booker'];
    }

    /**
     * Sets booker
     *
     * @param \iBooking\Client\Model\ActivityClassBooker $booker booker
     *
     * @return $this
     */
    public function setBooker($booker)
    {
        $this->container['booker'] = $booker;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return \iBooking\Client\Model\EventStudio
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param \iBooking\Client\Model\EventStudio $resource resource
     *
     * @return $this
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return \iBooking\Client\Model\EventStudio
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param \iBooking\Client\Model\EventStudio $activity activity
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

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