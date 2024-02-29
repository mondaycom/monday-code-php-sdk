# OpenAPI\Client\QueueApi

All URIs are relative to http://localhost:59999, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**publishMessage()**](QueueApi.md#publishMessage) | **POST** /queue |  |
| [**validateSecret()**](QueueApi.md#validateSecret) | **POST** /queue/validate-secret |  |


## `publishMessage()`

```php
publishMessage($publish_message_params): \OpenAPI\Client\Model\PublishMessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publish_message_params = new \OpenAPI\Client\Model\PublishMessageParams(); // \OpenAPI\Client\Model\PublishMessageParams

try {
    $result = $apiInstance->publishMessage($publish_message_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->publishMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publish_message_params** | [**\OpenAPI\Client\Model\PublishMessageParams**](../Model/PublishMessageParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PublishMessageResponse**](../Model/PublishMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateSecret()`

```php
validateSecret($validate_secret_params): \OpenAPI\Client\Model\ValidateSecretResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$validate_secret_params = new \OpenAPI\Client\Model\ValidateSecretParams(); // \OpenAPI\Client\Model\ValidateSecretParams

try {
    $result = $apiInstance->validateSecret($validate_secret_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->validateSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_secret_params** | [**\OpenAPI\Client\Model\ValidateSecretParams**](../Model/ValidateSecretParams.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ValidateSecretResponse**](../Model/ValidateSecretResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
