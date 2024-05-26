# OpenAPI\Client\StorageApi

All URIs are relative to http://localhost:59999, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteByKeyFromStorage()**](StorageApi.md#deleteByKeyFromStorage) | **DELETE** /storage/{key} |  |
| [**getByKeyFromStorage()**](StorageApi.md#getByKeyFromStorage) | **GET** /storage/{key} |  |
| [**incrementCounter()**](StorageApi.md#incrementCounter) | **PUT** /storage/counter/increment |  |
| [**upsertByKeyFromStorage()**](StorageApi.md#upsertByKeyFromStorage) | **PUT** /storage/{key} |  |


## `deleteByKeyFromStorage()`

```php
deleteByKeyFromStorage($key, $x_monday_access_token)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string
$x_monday_access_token = 'x_monday_access_token_example'; // string

try {
    $apiInstance->deleteByKeyFromStorage($key, $x_monday_access_token);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteByKeyFromStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
| **x_monday_access_token** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByKeyFromStorage()`

```php
getByKeyFromStorage($key, $shared, $x_monday_access_token): \OpenAPI\Client\Model\StorageDataContract
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string
$shared = True; // bool
$x_monday_access_token = 'x_monday_access_token_example'; // string

try {
    $result = $apiInstance->getByKeyFromStorage($key, $shared, $x_monday_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getByKeyFromStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
| **shared** | **bool**|  | |
| **x_monday_access_token** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\StorageDataContract**](../Model/StorageDataContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incrementCounter()`

```php
incrementCounter($x_monday_access_token, $increment_counter_params): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_monday_access_token = 'x_monday_access_token_example'; // string
$increment_counter_params = new \OpenAPI\Client\Model\IncrementCounterParams(); // \OpenAPI\Client\Model\IncrementCounterParams

try {
    $result = $apiInstance->incrementCounter($x_monday_access_token, $increment_counter_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->incrementCounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monday_access_token** | **string**|  | |
| **increment_counter_params** | [**\OpenAPI\Client\Model\IncrementCounterParams**](../Model/IncrementCounterParams.md)|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertByKeyFromStorage()`

```php
upsertByKeyFromStorage($key, $x_monday_access_token, $storage_data_contract, $shared, $previous_version): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string
$x_monday_access_token = 'x_monday_access_token_example'; // string
$storage_data_contract = new \OpenAPI\Client\Model\StorageDataContract(); // \OpenAPI\Client\Model\StorageDataContract
$shared = True; // bool
$previous_version = 'previous_version_example'; // string

try {
    $result = $apiInstance->upsertByKeyFromStorage($key, $x_monday_access_token, $storage_data_contract, $shared, $previous_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->upsertByKeyFromStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
| **x_monday_access_token** | **string**|  | |
| **storage_data_contract** | [**\OpenAPI\Client\Model\StorageDataContract**](../Model/StorageDataContract.md)|  | |
| **shared** | **bool**|  | [optional] |
| **previous_version** | **string**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
