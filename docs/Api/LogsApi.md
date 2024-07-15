# OpenAPI\Client\LogsApi

All URIs are relative to http://localhost:59999, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**writeLog()**](LogsApi.md#writeLog) | **POST** /logs |  |


## `writeLog()`

```php
writeLog($write_log_request_body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$write_log_request_body = new \OpenAPI\Client\Model\WriteLogRequestBody(); // \OpenAPI\Client\Model\WriteLogRequestBody

try {
    $apiInstance->writeLog($write_log_request_body);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->writeLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **write_log_request_body** | [**\OpenAPI\Client\Model\WriteLogRequestBody**](../Model/WriteLogRequestBody.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
