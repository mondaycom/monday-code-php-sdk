<?php
require_once('../php-client/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\SecureStorageApi();
$key = 'some_key2'; // string
$storage_data_contract = new OpenAPI\Client\Model\StorageDataContract();
$storage_data_contract->setValue('some-secure-storage-value');

try {
    $apiInstance->putSecureStorage($key, $storage_data_contract);
} catch (Exception $e) {
    echo 'Exception when calling SecureStorageApi->putSecureStorage: ', $e->getMessage(), PHP_EOL;
}
