# BumbalClient\ActivityApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createActivity**](ActivityApi.md#createActivity) | **POST** /activity | Create an Activity
[**deleteActivity**](ActivityApi.md#deleteActivity) | **DELETE** /activity/{activityId} | Delete an activity
[**retrieveActivity**](ActivityApi.md#retrieveActivity) | **GET** /activity/{activityId} | Find activity by ID
[**retrieveListActivity**](ActivityApi.md#retrieveListActivity) | **PUT** /activity | Retrieve List of Activities
[**updateActivity**](ActivityApi.md#updateActivity) | **PUT** /activity/{activityId} | Update a activity


# **createActivity**
> \BumbalClient\Model\ApiResponse createActivity($body)

Create an Activity

Create an Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\ActivityApi();
$body = new \BumbalClient\Model\ActivityModel(); // \BumbalClient\Model\ActivityModel | Activity object

try {
    $result = $api_instance->createActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ActivityModel**](../Model/\BumbalClient\Model\ActivityModel.md)| Activity object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteActivity**
> \BumbalClient\Model\ApiResponse deleteActivity($activity_id)

Delete an activity

Delete an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\ActivityApi();
$activity_id = 789; // int | ID of the activity to delete

try {
    $result = $api_instance->deleteActivity($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of the activity to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveActivity**
> \BumbalClient\Model\ActivityModel retrieveActivity($activity_id, $include_activity_status, $include_activity_type_name, $include_activity_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_activity_communication, $include_activity_links, $include_packagelines_info)

Find activity by ID

Returns a single activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\ActivityApi();
$activity_id = 789; // int | ID of activity to return
$include_activity_status = true; // bool | Show the text value of the status
$include_activity_type_name = true; // bool | Show the text value of the activity type
$include_activity_meta_data = true; // bool | Include meta data connected to this Activity
$include_address_object = true; // bool | Include address data
$include_time_slots = true; // bool | Include TimeSlots
$include_time_slot_tags = true; // bool | Include tags from TimeSlots
$include_route_info = true; // bool | Include route data
$include_driver_info = true; // bool | Include driver data
$include_activity_communication = true; // bool | Include Communication Settings
$include_activity_links = true; // bool | Include Link Data
$include_packagelines_info = true; // bool | Include PackageLines

try {
    $result = $api_instance->retrieveActivity($activity_id, $include_activity_status, $include_activity_type_name, $include_activity_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_activity_communication, $include_activity_links, $include_packagelines_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->retrieveActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of activity to return |
 **include_activity_status** | **bool**| Show the text value of the status |
 **include_activity_type_name** | **bool**| Show the text value of the activity type |
 **include_activity_meta_data** | **bool**| Include meta data connected to this Activity |
 **include_address_object** | **bool**| Include address data |
 **include_time_slots** | **bool**| Include TimeSlots |
 **include_time_slot_tags** | **bool**| Include tags from TimeSlots |
 **include_route_info** | **bool**| Include route data |
 **include_driver_info** | **bool**| Include driver data |
 **include_activity_communication** | **bool**| Include Communication Settings |
 **include_activity_links** | **bool**| Include Link Data |
 **include_packagelines_info** | **bool**| Include PackageLines |

### Return type

[**\BumbalClient\Model\ActivityModel**](../Model/ActivityModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListActivity**
> \BumbalClient\Model\ActivityModel[] retrieveListActivity($arguments)

Retrieve List of Activities

Retrieve List of Activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\ActivityApi();
$arguments = new \BumbalClient\Model\ActivityRetrieveListArguments(); // \BumbalClient\Model\ActivityRetrieveListArguments | Activity RetrieveList Arguments

try {
    $result = $api_instance->retrieveListActivity($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->retrieveListActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ActivityRetrieveListArguments**](../Model/\BumbalClient\Model\ActivityRetrieveListArguments.md)| Activity RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ActivityModel[]**](../Model/ActivityModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateActivity**
> \BumbalClient\Model\ApiResponse updateActivity($activity_id, $body)

Update a activity

Update a activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\ActivityApi();
$activity_id = 789; // int | ID of activity to update
$body = new \BumbalClient\Model\ActivityModel(); // \BumbalClient\Model\ActivityModel | Activity object that needs to be updated

try {
    $result = $api_instance->updateActivity($activity_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->updateActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of activity to update |
 **body** | [**\BumbalClient\Model\ActivityModel**](../Model/\BumbalClient\Model\ActivityModel.md)| Activity object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
