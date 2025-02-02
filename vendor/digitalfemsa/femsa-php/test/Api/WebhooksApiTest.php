<?php
/**
 * WebhooksApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Femsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Femsa API
 *
 * Femsa sdk
 *
 * The version of the OpenAPI document: 2.1.0
 * Contact: engineering@Femsa.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Femsa\Test\Api;

use DigitalFemsa\Api\WebhooksApi;
use DigitalFemsa\ApiException;
use DigitalFemsa\Configuration;
use DigitalFemsa\Model\WebhookRequest;
use DigitalFemsa\Model\WebhookUpdateRequest;
use PHPUnit\Framework\TestCase;

/**
 * WebhooksApiTest Class Doc Comment
 *
 * @category Class
 * @package  Femsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhooksApiTest extends TestCase
{

    protected static WebhooksApi $apiInstance;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        $config = Configuration::getDefaultConfiguration()->setHost(BaseTest::$host);
        self::$apiInstance = new WebhooksApi(null, $config);
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for createWebhook
     *
     * Create Webhook.
     *
     * @throws ApiException
     */
    public function testCreateWebhook()
    {
        $accept_language = 'es';
        $rq = new WebhookRequest([
            'url' => 'test.com'
        ]);
        $result = self::$apiInstance->createWebhook($rq, $accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for deleteWebhook
     *
     * Delete Webhook.
     *
     * @throws ApiException
     */
    public function testDeleteWebhook()
    {
        $accept_language = 'es';
        $result = self::$apiInstance->deleteWebhook('id', $accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for getWebhook
     *
     * Get Webhook.
     *
     * @throws ApiException
     */
    public function testGetWebhook()
    {
        $accept_language = 'es';
        $result = self::$apiInstance->getWebhook('id', $accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for getWebhooks
     *
     * Get List of Webhooks.
     *
     * @throws ApiException
     */
    public function testGetWebhooks()
    {
        $accept_language = 'es';
        $result = self::$apiInstance->getWebhooks($accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for testWebhook
     *
     * Test Webhook.
     *
     * @throws ApiException
     */
    public function testTestWebhook()
    {
        $accept_language = 'es';
        $result = self::$apiInstance->testWebhook('id', $accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }

    /**
     * Test case for updateWebhook
     *
     * Update Webhook.
     *
     * @throws ApiException
     */
    public function testUpdateWebhook()
    {
        $accept_language = 'es';
        $rq = new WebhookUpdateRequest([
            'url' => 'test.com'
        ]);
        $result = self::$apiInstance->updateWebhook('id', $rq, $accept_language);
        $this->assertNotEmpty($result, 'expected not empty result');
    }
}
