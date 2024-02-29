# OpenAPI\Client\StorageApi

All URIs are relative to http://localhost:59999, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStorage()**](StorageApi.md#deleteStorage) | **DELETE** /storage/{key} |  |
| [**getStorage()**](StorageApi.md#getStorage) | **GET** /storage/{key} |  |
| [**putStorage()**](StorageApi.md#putStorage) | **PUT** /storage/{key} |  |
| [**storageIncrementCounter()**](StorageApi.md#storageIncrementCounter) | **PUT** /storage/{key}/counter/increment |  |


## `deleteStorage()`

```php
deleteStorage($key, $x_monday_access_token)
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
    $apiInstance->deleteStorage($key, $x_monday_access_token);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteStorage: ', $e->getMessage(), PHP_EOL;
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

## `getStorage()`

```php
getStorage($key, $shared, $x_monday_access_token): \OpenAPI\Client\Model\StorageDataContract
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
    $result = $apiInstance->getStorage($key, $shared, $x_monday_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getStorage: ', $e->getMessage(), PHP_EOL;
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

## `putStorage()`

```php
putStorage($key, $x_monday_access_token, $shared, $previous_version, $storage_data_contract)
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
$shared = True; // bool
$previous_version = 'previous_version_example'; // string
$storage_data_contract = new \OpenAPI\Client\Model\StorageDataContract(); // \OpenAPI\Client\Model\StorageDataContract

try {
    $apiInstance->putStorage($key, $x_monday_access_token, $shared, $previous_version, $storage_data_contract);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->putStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
| **x_monday_access_token** | **string**|  | |
| **shared** | **bool**|  | |
| **previous_version** | **string**|  | |
| **storage_data_contract** | [**\OpenAPI\Client\Model\StorageDataContract**](../Model/StorageDataContract.md)|  | |

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

## `storageIncrementCounter()`

```php
storageIncrementCounter($x_monday_access_token, $key, $increment_counter_params)
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
$key = 'key_example'; // string
$increment_counter_params = new \OpenAPI\Client\Model\IncrementCounterParams(); // \OpenAPI\Client\Model\IncrementCounterParams

try {
    $apiInstance->storageIncrementCounter($x_monday_access_token, $key, $increment_counter_params);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageIncrementCounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monday_access_token** | **string**|  | |
| **key** | **string**|  | |
| **increment_counter_params** | [**\OpenAPI\Client\Model\IncrementCounterParams**](../Model/IncrementCounterParams.md)|  | |

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
