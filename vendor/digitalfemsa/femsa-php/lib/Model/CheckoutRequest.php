<?php
/**
 * CheckoutRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DigitalFemsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Femsa API
 *
 * Femsa sdk
 *
 * The version of the OpenAPI document: 2.1.0
 * Contact: engineering@femsa.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalFemsa\Model;

use \ArrayAccess;
use \DigitalFemsa\ObjectSerializer;

/**
 * CheckoutRequest Class Doc Comment
 *
 * @category Class
 * @description [Checkout](https://developers.femsa.com/v2.1.0/reference/payment-link) details
 * @package  DigitalFemsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'checkout_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowed_payment_methods' => 'string[]',
        'expires_at' => 'int',
        'failure_url' => 'string',
        'name' => 'string',
        'on_demand_enabled' => 'bool',
        'success_url' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowed_payment_methods' => null,
        'expires_at' => 'int64',
        'failure_url' => null,
        'name' => null,
        'on_demand_enabled' => null,
        'success_url' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allowed_payment_methods' => false,
        'expires_at' => false,
        'failure_url' => false,
        'name' => false,
        'on_demand_enabled' => false,
        'success_url' => false,
        'type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'allowed_payment_methods' => 'allowed_payment_methods',
        'expires_at' => 'expires_at',
        'failure_url' => 'failure_url',
        'name' => 'name',
        'on_demand_enabled' => 'on_demand_enabled',
        'success_url' => 'success_url',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_payment_methods' => 'setAllowedPaymentMethods',
        'expires_at' => 'setExpiresAt',
        'failure_url' => 'setFailureUrl',
        'name' => 'setName',
        'on_demand_enabled' => 'setOnDemandEnabled',
        'success_url' => 'setSuccessUrl',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_payment_methods' => 'getAllowedPaymentMethods',
        'expires_at' => 'getExpiresAt',
        'failure_url' => 'getFailureUrl',
        'name' => 'getName',
        'on_demand_enabled' => 'getOnDemandEnabled',
        'success_url' => 'getSuccessUrl',
        'type' => 'getType'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('allowed_payment_methods', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('failure_url', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('on_demand_enabled', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['allowed_payment_methods'] === null) {
            $invalidProperties[] = "'allowed_payment_methods' can't be null";
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
     * Gets allowed_payment_methods
     *
     * @return string[]
     */
    public function getAllowedPaymentMethods()
    {
        return $this->container['allowed_payment_methods'];
    }

    /**
     * Sets allowed_payment_methods
     *
     * @param string[] $allowed_payment_methods Are the payment methods available for this link
     *
     * @return self
     */
    public function setAllowedPaymentMethods($allowed_payment_methods)
    {
        if (is_null($allowed_payment_methods)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_methods cannot be null');
        }
        $this->container['allowed_payment_methods'] = $allowed_payment_methods;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return int|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param int|null $expires_at Unix timestamp of checkout expiration
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        if (is_null($expires_at)) {
            throw new \InvalidArgumentException('non-nullable expires_at cannot be null');
        }
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets failure_url
     *
     * @return string|null
     */
    public function getFailureUrl()
    {
        return $this->container['failure_url'];
    }

    /**
     * Sets failure_url
     *
     * @param string|null $failure_url Redirection url back to the site in case of failed payment, applies only to HostedPayment.
     *
     * @return self
     */
    public function setFailureUrl($failure_url)
    {
        if (is_null($failure_url)) {
            throw new \InvalidArgumentException('non-nullable failure_url cannot be null');
        }
        $this->container['failure_url'] = $failure_url;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Reason for payment
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets on_demand_enabled
     *
     * @return bool|null
     */
    public function getOnDemandEnabled()
    {
        return $this->container['on_demand_enabled'];
    }

    /**
     * Sets on_demand_enabled
     *
     * @param bool|null $on_demand_enabled on_demand_enabled
     *
     * @return self
     */
    public function setOnDemandEnabled($on_demand_enabled)
    {
        if (is_null($on_demand_enabled)) {
            throw new \InvalidArgumentException('non-nullable on_demand_enabled cannot be null');
        }
        $this->container['on_demand_enabled'] = $on_demand_enabled;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url Redirection url back to the site in case of successful payment, applies only to HostedPayment
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            throw new \InvalidArgumentException('non-nullable success_url cannot be null');
        }
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type This field represents the type of checkout
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


