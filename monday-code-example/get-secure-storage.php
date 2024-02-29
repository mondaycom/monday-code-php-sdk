<?php
require_once('../php-client/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\SecureStorageApi();
$key = 'some_key2'; // string

try {
    $result = $apiInstance->getSecureStorage($key);
    print_r($result);
    echo sprintf('Secure storage value: %s', $result->getValue());
    echo json_last_error_msg();
} catch (Exception $e) {
    echo 'Exception when calling SecureStorageApi->getSecureStorage: ', $e->getMessage(), PHP_EOL;
}
