# BumbalClient\FileApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFile**](FileApi.md#createFile) | **POST** /file | Add a new File
[**deleteFile**](FileApi.md#deleteFile) | **DELETE** /file/{fileId} | Delete an File
[**retrieveFile**](FileApi.md#retrieveFile) | **GET** /file/{fileId} | Retrieve a File
[**retrieveListFile**](FileApi.md#retrieveListFile) | **PUT** /file | Retrieve List of Files
[**updateFile**](FileApi.md#updateFile) | **PUT** /file/{fileId} | Update a File


# **createFile**
> \BumbalClient\Model\ApiResponse createFile($body)

Add a new File

Add a new File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\FileApi();
$body = new \BumbalClient\Model\FileModel(); // \BumbalClient\Model\FileModel | File object that needs to be created

try {
    $result = $api_instance->createFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->createFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\FileModel**](../Model/\BumbalClient\Model\FileModel.md)| File object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFile**
> \BumbalClient\Model\ApiResponse deleteFile($file_id)

Delete an File

Delete an File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\FileApi();
$file_id = 789; // int | ID of file to update

try {
    $result = $api_instance->deleteFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| ID of file to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveFile**
> \BumbalClient\Model\FileModel retrieveFile($file_id)

Retrieve a File

Retrieve an File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\FileApi();
$file_id = 789; // int | ID of file to retrieve

try {
    $result = $api_instance->retrieveFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->retrieveFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| ID of file to retrieve |

### Return type

[**\BumbalClient\Model\FileModel**](../Model/FileModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListFile**
> \BumbalClient\Model\FileModel[] retrieveListFile($arguments)

Retrieve List of Files

Retrieve List of Files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\FileApi();
$arguments = new \BumbalClient\Model\FileRetrieveListArguments(); // \BumbalClient\Model\FileRetrieveListArguments | File RetrieveList Arguments

try {
    $result = $api_instance->retrieveListFile($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->retrieveListFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\FileRetrieveListArguments**](../Model/\BumbalClient\Model\FileRetrieveListArguments.md)| File RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\FileModel[]**](../Model/FileModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFile**
> \BumbalClient\Model\ApiResponse updateFile($file_id)

Update a File

Update an File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\FileApi();
$file_id = 789; // int | ID of file to update

try {
    $result = $api_instance->updateFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| ID of file to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
