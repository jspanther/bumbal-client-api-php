# BumbalClient\TagsApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTag**](TagsApi.md#createTag) | **POST** /tags | Add a new Tag
[**deleteTag**](TagsApi.md#deleteTag) | **DELETE** /tags/{tagId} | Delete a Tag
[**retrieveListTags**](TagsApi.md#retrieveListTags) | **PUT** /tags | Retrieve List of Tags
[**retrieveTag**](TagsApi.md#retrieveTag) | **GET** /tags/{tagId} | Retrieve a Tag
[**updateTag**](TagsApi.md#updateTag) | **PUT** /tags/{tagId} | Update a Tag


# **createTag**
> \BumbalClient\Model\ApiResponse createTag($body)

Add a new Tag

Add a new Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\TagsApi();
$body = new \BumbalClient\Model\TagModel(); // \BumbalClient\Model\TagModel | Tag object that needs to be created

try {
    $result = $api_instance->createTag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\TagModel**](../Model/\BumbalClient\Model\TagModel.md)| Tag object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTag**
> \BumbalClient\Model\ApiResponse deleteTag($tag_id)

Delete a Tag

Delete a Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\TagsApi();
$tag_id = 789; // int | ID of tag to delete

try {
    $result = $api_instance->deleteTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| ID of tag to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListTags**
> \BumbalClient\Model\TagModel[] retrieveListTags($arguments)

Retrieve List of Tags

Retrieve List of Tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\TagsApi();
$arguments = new \BumbalClient\Model\TagsRetrieveListArguments(); // \BumbalClient\Model\TagsRetrieveListArguments | Tags RetrieveList Arguments

try {
    $result = $api_instance->retrieveListTags($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->retrieveListTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\TagsRetrieveListArguments**](../Model/\BumbalClient\Model\TagsRetrieveListArguments.md)| Tags RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\TagModel[]**](../Model/TagModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTag**
> \BumbalClient\Model\TagModel retrieveTag($tag_id)

Retrieve a Tag

Retrieve an Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\TagsApi();
$tag_id = 789; // int | ID of tag to retrieve

try {
    $result = $api_instance->retrieveTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->retrieveTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| ID of tag to retrieve |

### Return type

[**\BumbalClient\Model\TagModel**](../Model/TagModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTag**
> \BumbalClient\Model\ApiResponse updateTag($tag_id)

Update a Tag

Update an Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\TagsApi();
$tag_id = 789; // int | ID of tag to update

try {
    $result = $api_instance->updateTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| ID of tag to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
