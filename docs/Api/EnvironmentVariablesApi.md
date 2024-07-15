# OpenAPI\Client\EnvironmentVariablesApi

All URIs are relative to http://localhost:59999, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEnvironmentVariable()**](EnvironmentVariablesApi.md#getEnvironmentVariable) | **GET** /environment-variables/{name} |  |
| [**getEnvironmentVariableKeys()**](EnvironmentVariablesApi.md#getEnvironmentVariableKeys) | **GET** /environment-variables |  |


## `getEnvironmentVariable()`

```php
getEnvironmentVariable($name): mixed
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnvironmentVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->getEnvironmentVariable($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentVariablesApi->getEnvironmentVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentVariableKeys()`

```php
getEnvironmentVariableKeys(): string[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnvironmentVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEnvironmentVariableKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentVariablesApi->getEnvironmentVariableKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
