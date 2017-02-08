<?php
/**
 * ReservationApi
 * PHP version 5
 *
 * @category Class
 * @package  Waitlisted
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Waitlisted API
 *
 * Waitlisted API
 *
 * OpenAPI spec version: 2.0.0
 * 
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

namespace Waitlisted\Api;

use \Waitlisted\Configuration;
use \Waitlisted\ApiClient;
use \Waitlisted\ApiException;
use \Waitlisted\ObjectSerializer;

/**
 * ReservationApi Class Doc Comment
 *
 * @category Class
 * @package  Waitlisted
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReservationApi
{

    /**
     * API Client
     *
     * @var \Waitlisted\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Waitlisted\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Waitlisted\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://www.waitlisted.co/api/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Waitlisted\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Waitlisted\ApiClient $apiClient set the API client
     *
     * @return ReservationApi
     */
    public function setApiClient(\Waitlisted\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createReservation
     *
     * 
     *
     * @param \Waitlisted\Models\Reservation $body Reservation Data (required)
     * @return \Waitlisted\Models\ReservationsResponse
     * @throws \Waitlisted\ApiException on non-2xx response
     */
    public function createReservation($body)
    {
        list($response) = $this->createReservationWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createReservationWithHttpInfo
     *
     * 
     *
     * @param \Waitlisted\Models\Reservation $body Reservation Data (required)
     * @return Array of \Waitlisted\Models\ReservationsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Waitlisted\ApiException on non-2xx response
     */
    public function createReservationWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createReservation');
        }
        // parse inputs
        $resourcePath = "/reservations";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Waitlisted\Models\ReservationsResponse',
                '/reservations'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Waitlisted\Models\ReservationsResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Waitlisted\Models\ReservationsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Waitlisted\Models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Waitlisted\Models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Waitlisted\Models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteReservation
     *
     * 
     *
     * @param \Waitlisted\Models\ReservationRequest $body Reservation Data (required)
     * @return void
     * @throws \Waitlisted\ApiException on non-2xx response
     */
    public function deleteReservation($body)
    {
        list($response) = $this->deleteReservationWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation deleteReservationWithHttpInfo
     *
     * 
     *
     * @param \Waitlisted\Models\ReservationRequest $body Reservation Data (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Waitlisted\ApiException on non-2xx response
     */
    public function deleteReservationWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling deleteReservation');
        }
        // parse inputs
        $resourcePath = "/reservations";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/reservations'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Waitlisted\Models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Waitlisted\Models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getReservation
     *
     * 
     *
     * @param string $email Email address (required)
     * @return \Waitlisted\Models\ReservationsResponse
     * @throws \Waitlisted\ApiException on non-2xx response
     */
    public function getReservation($email)
    {
        list($response) = $this->getReservationWithHttpInfo($email);
        return $response;
    }

    /**
     * Operation getReservationWithHttpInfo
     *
     * 
     *
     * @param string $email Email address (required)
     * @return Array of \Waitlisted\Models\ReservationsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Waitlisted\ApiException on non-2xx response
     */
    public function getReservationWithHttpInfo($email)
    {
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling getReservation');
        }
        // parse inputs
        $resourcePath = "/reservations";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Waitlisted\Models\ReservationsResponse',
                '/reservations'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Waitlisted\Models\ReservationsResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Waitlisted\Models\ReservationsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Waitlisted\Models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
