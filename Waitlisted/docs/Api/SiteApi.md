# Waitlisted\SiteApi

All URIs are relative to *https://www.waitlisted.co/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSite**](SiteApi.md#getSite) | **GET** /site | 


# **getSite**
> \Waitlisted\Models\SiteResponse getSite()



Get site settings and reservation count.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Waitlisted\Api\SiteApi();

try {
    $result = $api_instance->getSite();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Waitlisted\Models\SiteResponse**](../Model/SiteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

