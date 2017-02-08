# Waitlisted\ReservationApi

All URIs are relative to *https://www.waitlisted.co/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReservation**](ReservationApi.md#createReservation) | **POST** /reservations | 
[**deleteReservation**](ReservationApi.md#deleteReservation) | **DELETE** /reservations | 
[**getReservation**](ReservationApi.md#getReservation) | **GET** /reservations | 


# **createReservation**
> \Waitlisted\Models\ReservationsResponse createReservation($body)



Creates a new reservation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Waitlisted\Api\ReservationApi();
$body = new \Waitlisted\Models\Reservation(); // \Waitlisted\Models\Reservation | Reservation Data

try {
    $result = $api_instance->createReservation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->createReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Waitlisted\Models\Reservation**](../Model/\Waitlisted\Models\Reservation.md)| Reservation Data |

### Return type

[**\Waitlisted\Models\ReservationsResponse**](../Model/ReservationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReservation**
> deleteReservation($body)



Delete a reservation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Waitlisted\Api\ReservationApi();
$body = new \Waitlisted\Models\ReservationRequest(); // \Waitlisted\Models\ReservationRequest | Reservation Data

try {
    $api_instance->deleteReservation($body);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->deleteReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Waitlisted\Models\ReservationRequest**](../Model/\Waitlisted\Models\ReservationRequest.md)| Reservation Data |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReservation**
> \Waitlisted\Models\ReservationsResponse getReservation($email)



Get a reservation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Waitlisted\Api\ReservationApi();
$email = "email_example"; // string | Email address

try {
    $result = $api_instance->getReservation($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->getReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address |

### Return type

[**\Waitlisted\Models\ReservationsResponse**](../Model/ReservationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

