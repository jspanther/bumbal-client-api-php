<?php
/**
 * SettingsApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\API;

use \BumbalClient\ApiClient;
use \BumbalClient\ApiException;
use \BumbalClient\Configuration;
use \BumbalClient\ObjectSerializer;

/**
 * SettingsApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettingsApi
{
    /**
     * API Client
     *
     * @var \BumbalClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BumbalClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BumbalClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/api/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BumbalClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BumbalClient\ApiClient $apiClient set the API client
     *
     * @return SettingsApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation retrieveListSettings
     *
     * Retrieve List of Settingss
     *
     * @param \BumbalClient\Model\SettingsRetrieveListArguments $arguments Settings RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\SettingsModel[]
     */
    public function retrieveListSettings($arguments)
    {
        list($response) = $this->retrieveListSettingsWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListSettingsWithHttpInfo
     *
     * Retrieve List of Settingss
     *
     * @param \BumbalClient\Model\SettingsRetrieveListArguments $arguments Settings RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\SettingsModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListSettingsWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListSettings');
        }
        // parse inputs
        $resourcePath = "/settings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\SettingsModel[]',
                '/settings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\SettingsModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\SettingsModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveSettings
     *
     * Retrieve a Settings
     *
     * @param int $settings_id ID of settings to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\SettingsModel
     */
    public function retrieveSettings($settings_id)
    {
        list($response) = $this->retrieveSettingsWithHttpInfo($settings_id);
        return $response;
    }

    /**
     * Operation retrieveSettingsWithHttpInfo
     *
     * Retrieve a Settings
     *
     * @param int $settings_id ID of settings to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\SettingsModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveSettingsWithHttpInfo($settings_id)
    {
        // verify the required parameter 'settings_id' is set
        if ($settings_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $settings_id when calling retrieveSettings');
        }
        // parse inputs
        $resourcePath = "/settings/{settingsId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($settings_id !== null) {
            $resourcePath = str_replace(
                "{" . "settingsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($settings_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\SettingsModel',
                '/settings/{settingsId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\SettingsModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\SettingsModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateSettings
     *
     * Update a Settings
     *
     * @param int $settings_id ID of settings to update (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function updateSettings($settings_id)
    {
        list($response) = $this->updateSettingsWithHttpInfo($settings_id);
        return $response;
    }

    /**
     * Operation updateSettingsWithHttpInfo
     *
     * Update a Settings
     *
     * @param int $settings_id ID of settings to update (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateSettingsWithHttpInfo($settings_id)
    {
        // verify the required parameter 'settings_id' is set
        if ($settings_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $settings_id when calling updateSettings');
        }
        // parse inputs
        $resourcePath = "/settings/{settingsId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($settings_id !== null) {
            $resourcePath = str_replace(
                "{" . "settingsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($settings_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/settings/{settingsId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
