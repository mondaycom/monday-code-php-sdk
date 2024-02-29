# OpenAPI\Client\SecureStorageApi

All URIs are relative to http://localhost:59999, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSecureStorage()**](SecureStorageApi.md#deleteSecureStorage) | **DELETE** /secure-storage/{key} |  |
| [**getSecureStorage()**](SecureStorageApi.md#getSecureStorage) | **GET** /secure-storage/{key} |  |
| [**putSecureStorage()**](SecureStorageApi.md#putSecureStorage) | **PUT** /secure-storage/{key} |  |


## `deleteSecureStorage()`

```php
deleteSecureStorage($key)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string

try {
    $apiInstance->deleteSecureStorage($key);
} catch (Exception $e) {
    echo 'Exception when calling SecureStorageApi->deleteSecureStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |

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

## `getSecureStorage()`

```php
getSecureStorage($key): \OpenAPI\Client\Model\StorageDataContract
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string

try {
    $result = $apiInstance->getSecureStorage($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecureStorageApi->getSecureStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |

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

## `putSecureStorage()`

```php
putSecureStorage($key, $storage_data_contract)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecureStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string
$storage_data_contract = new \OpenAPI\Client\Model\StorageDataContract(); // \OpenAPI\Client\Model\StorageDataContract

try {
    $apiInstance->putSecureStorage($key, $storage_data_contract);
} catch (Exception $e) {
    echo 'Exception when calling SecureStorageApi->putSecureStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
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
