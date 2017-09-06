# 
Bumbal API documentation

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bumbal/bumbal-client-api-php.git"
    }
  ],
  "require": {
    "bumbal/bumbal-client-api-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

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

## Documentation for API Endpoints

All URIs are relative to *http://localhost/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivityApi* | [**deleteActivity**](docs/Api/ActivityApi.md#deleteactivity) | **DELETE** /activity/{activityId} | Delete an activity
*ActivityApi* | [**retrieveActivity**](docs/Api/ActivityApi.md#retrieveactivity) | **GET** /activity/{activityId} | Find activity by ID
*ActivityApi* | [**retrieveListActivity**](docs/Api/ActivityApi.md#retrievelistactivity) | **PUT** /activity | Retrieve List of Activities
*ActivityApi* | [**setActivity**](docs/Api/ActivityApi.md#setactivity) | **POST** /activity/set | Set (create or update) an Activity
*ActivityApi* | [**updateActivity**](docs/Api/ActivityApi.md#updateactivity) | **PUT** /activity/{activityId} | Update a activity
*AddressApi* | [**createAddress**](docs/Api/AddressApi.md#createaddress) | **POST** /address/set | Add a new Address
*AddressApi* | [**deleteAddress**](docs/Api/AddressApi.md#deleteaddress) | **DELETE** /address/{addressId} | Delete an Address
*AddressApi* | [**retrieveAddress**](docs/Api/AddressApi.md#retrieveaddress) | **GET** /address/{addressId} | Retrieve a Address
*AddressApi* | [**retrieveListAddress**](docs/Api/AddressApi.md#retrievelistaddress) | **PUT** /address | Retrieve List of Addresses
*AddressApi* | [**updateAddress**](docs/Api/AddressApi.md#updateaddress) | **PUT** /address/{addressId} | Update a Address
*AddressappliedApi* | [**retrieveAddressApplied**](docs/Api/AddressappliedApi.md#retrieveaddressapplied) | **GET** /address-applied/{addressId} | Retrieve an Applied Address
*AddressappliedApi* | [**updateAddressApplied**](docs/Api/AddressappliedApi.md#updateaddressapplied) | **PUT** /address-applied/{addressId} | Update a Address
*AssignmentApi* | [**deleteAssignment**](docs/Api/AssignmentApi.md#deleteassignment) | **DELETE** /assignment/{assignmentId} | Delete an assignment
*AssignmentApi* | [**retrieveAssignment**](docs/Api/AssignmentApi.md#retrieveassignment) | **GET** /assignment/{assignmentId} | Find assignment by ID
*AssignmentApi* | [**retrieveListAssignment**](docs/Api/AssignmentApi.md#retrievelistassignment) | **PUT** /assignment | Retrieve List of Assignments
*AssignmentApi* | [**setAssignment**](docs/Api/AssignmentApi.md#setassignment) | **POST** /assignment/set | Set (create or update) an Assignment
*AssignmentApi* | [**updateAssignment**](docs/Api/AssignmentApi.md#updateassignment) | **PUT** /assignment/{assignmentId} | Update a assignment
*AutoplanApi* | [**autoPlanCheckProgress**](docs/Api/AutoplanApi.md#autoplancheckprogress) | **GET** /auto-plan/check-progress/{processUUID} | Check Progress on a Auto Plan Process
*AutoplanApi* | [**autoPlanFinish**](docs/Api/AutoplanApi.md#autoplanfinish) | **POST** /auto-plan/finish | Finish a Auto Plan Process
*AutoplanApi* | [**autoPlanStart**](docs/Api/AutoplanApi.md#autoplanstart) | **POST** /auto-plan/start | Start a Auto Plan Process
*CarApi* | [**createCar**](docs/Api/CarApi.md#createcar) | **POST** /car | Add a car
*CarApi* | [**deleteCar**](docs/Api/CarApi.md#deletecar) | **DELETE** /car/{carId} | Delete an car
*CarApi* | [**retrieveCar**](docs/Api/CarApi.md#retrievecar) | **GET** /car/{carId} | Find car by ID
*CarApi* | [**retrieveListCar**](docs/Api/CarApi.md#retrievelistcar) | **PUT** /car | Retrieve List of Cars
*CarApi* | [**setCar**](docs/Api/CarApi.md#setcar) | **POST** /car/set | Set (create or update) a car
*CarApi* | [**updateCar**](docs/Api/CarApi.md#updatecar) | **PUT** /car/{carId} | Update a car
*DriverApi* | [**createDriver**](docs/Api/DriverApi.md#createdriver) | **POST** /driver | Add a driver
*DriverApi* | [**deleteDriver**](docs/Api/DriverApi.md#deletedriver) | **DELETE** /driver/{driverId} | Delete an driver
*DriverApi* | [**retrieveDriver**](docs/Api/DriverApi.md#retrievedriver) | **GET** /driver/{driverId} | Find driver by ID
*DriverApi* | [**retrieveListDriver**](docs/Api/DriverApi.md#retrievelistdriver) | **PUT** /driver | Retrieve List of Drivers
*DriverApi* | [**setDriver**](docs/Api/DriverApi.md#setdriver) | **POST** /driver/set | Set (create or update) a driver
*DriverApi* | [**updateDriver**](docs/Api/DriverApi.md#updatedriver) | **PUT** /driver/{driverId} | Update a driver
*EquipmentApi* | [**createEquipment**](docs/Api/EquipmentApi.md#createequipment) | **POST** /equipment | Add a new Equipment
*EquipmentApi* | [**deleteEquipment**](docs/Api/EquipmentApi.md#deleteequipment) | **DELETE** /equipment/{equipmentId} | Delete an Equipment
*EquipmentApi* | [**retrieveEquipment**](docs/Api/EquipmentApi.md#retrieveequipment) | **GET** /equipment/{equipmentId} | Retrieve a Equipment
*EquipmentApi* | [**retrieveListEquipment**](docs/Api/EquipmentApi.md#retrievelistequipment) | **PUT** /equipment | Retrieve List of Equipment
*EquipmentApi* | [**updateEquipment**](docs/Api/EquipmentApi.md#updateequipment) | **PUT** /equipment/{equipmentId} | Update a Equipment
*FileApi* | [**createFile**](docs/Api/FileApi.md#createfile) | **POST** /file | Add a new File
*FileApi* | [**deleteFile**](docs/Api/FileApi.md#deletefile) | **DELETE** /file/{fileId} | Delete an File
*FileApi* | [**retrieveFile**](docs/Api/FileApi.md#retrievefile) | **GET** /file/{fileId} | Retrieve a File
*FileApi* | [**retrieveListFile**](docs/Api/FileApi.md#retrievelistfile) | **PUT** /file | Retrieve List of Files
*FileApi* | [**updateFile**](docs/Api/FileApi.md#updatefile) | **PUT** /file/{fileId} | Update a File
*InstantmessagingApi* | [**instantMessagingList**](docs/Api/InstantmessagingApi.md#instantmessaginglist) | **POST** /instant-messaging/list | List conversations
*InstantmessagingApi* | [**instantMessagingPost**](docs/Api/InstantmessagingApi.md#instantmessagingpost) | **POST** /instant-messaging/post | Post a message to some one
*InstantmessagingApi* | [**instantMessagingRetrieveConversation**](docs/Api/InstantmessagingApi.md#instantmessagingretrieveconversation) | **POST** /instant-messaging/retrieve-conversation | Retrieve Conversation
*NoteApi* | [**createNote**](docs/Api/NoteApi.md#createnote) | **POST** /note | Add a note
*NoteApi* | [**deleteNote**](docs/Api/NoteApi.md#deletenote) | **DELETE** /note/{noteId} | Delete an note
*NoteApi* | [**retrieveListNote**](docs/Api/NoteApi.md#retrievelistnote) | **PUT** /note | Retrieve List of Notes
*NoteApi* | [**retrieveNote**](docs/Api/NoteApi.md#retrievenote) | **GET** /note/{noteId} | Find note by ID
*NoteApi* | [**setNote**](docs/Api/NoteApi.md#setnote) | **POST** /note/set | Set (create or update) a note
*NoteApi* | [**updateNote**](docs/Api/NoteApi.md#updatenote) | **PUT** /note/{noteId} | Update a note
*PackagelineApi* | [**createPackageLine**](docs/Api/PackagelineApi.md#createpackageline) | **POST** /package-line | Create or update an PackageLine
*PackagelineApi* | [**deletePackageLine**](docs/Api/PackagelineApi.md#deletepackageline) | **DELETE** /package-line/{packageLineId} | Delete an package-line
*PackagelineApi* | [**retrieveListPackageLine**](docs/Api/PackagelineApi.md#retrievelistpackageline) | **PUT** /package-line | Retrieve List of PackageLines
*PackagelineApi* | [**retrievePackageLine**](docs/Api/PackagelineApi.md#retrievepackageline) | **GET** /package-line/{packageLineId} | Find package-line by ID
*PackagelineApi* | [**setPackageLine**](docs/Api/PackagelineApi.md#setpackageline) | **POST** /package-line/set | Set (create or update) an PackageLine
*PackagelineApi* | [**updatePackageLine**](docs/Api/PackagelineApi.md#updatepackageline) | **PUT** /package-line/{packageLineId} | Update a package-line
*PartyApi* | [**createParty**](docs/Api/PartyApi.md#createparty) | **POST** /party | Create or update an Party
*PartyApi* | [**deleteParty**](docs/Api/PartyApi.md#deleteparty) | **DELETE** /party/{partyId} | Delete an party
*PartyApi* | [**retrieveListParty**](docs/Api/PartyApi.md#retrievelistparty) | **PUT** /party | Retrieve List of Partys
*PartyApi* | [**retrieveParty**](docs/Api/PartyApi.md#retrieveparty) | **GET** /party/{partyId} | Find party by ID
*PartyApi* | [**setParty**](docs/Api/PartyApi.md#setparty) | **POST** /party/set | Set (create or update) an Party
*PartyApi* | [**updateParty**](docs/Api/PartyApi.md#updateparty) | **PUT** /party/{partyId} | Update a party
*PlannerApi* | [**plannerAddActivitiesToRoute**](docs/Api/PlannerApi.md#planneraddactivitiestoroute) | **POST** /planner/add-activities-to-route | Add Activities To Route
*PlannerApi* | [**plannerCalculateDriveTime**](docs/Api/PlannerApi.md#plannercalculatedrivetime) | **POST** /planner/calculate-drive-time | Calculate Drive Time
*PlannerApi* | [**plannerChangeActivitySequence**](docs/Api/PlannerApi.md#plannerchangeactivitysequence) | **POST** /planner/change-activity-sequence | Change Activity Sequence
*PlannerApi* | [**plannerLockActivities**](docs/Api/PlannerApi.md#plannerlockactivities) | **POST** /planner/lock-activities | Lock Activities on Route
*PlannerApi* | [**plannerRemoveActivitiesFromRoute**](docs/Api/PlannerApi.md#plannerremoveactivitiesfromroute) | **POST** /planner/remove-activities-from-route | Remove Activities From Route
*RecurrenceApi* | [**deleteRecurrence**](docs/Api/RecurrenceApi.md#deleterecurrence) | **DELETE** /recurrence/{recurrenceId} | Delete an Recurrence
*RecurrenceApi* | [**retrieveListRecurrence**](docs/Api/RecurrenceApi.md#retrievelistrecurrence) | **PUT** /recurrence | Retrieve List of Recurrences
*RecurrenceApi* | [**retrieveRecurrence**](docs/Api/RecurrenceApi.md#retrieverecurrence) | **GET** /recurrence/{recurrenceId} | Retrieve a Recurrence
*RecurrenceApi* | [**updateRecurrence**](docs/Api/RecurrenceApi.md#updaterecurrence) | **PUT** /recurrence/{recurrenceId} | Update a Recurrence
*RouteApi* | [**createRoute**](docs/Api/RouteApi.md#createroute) | **POST** /route | Add a new Route
*RouteApi* | [**deleteRoute**](docs/Api/RouteApi.md#deleteroute) | **DELETE** /route/{routeId} | Delete an Route
*RouteApi* | [**retrieveListRoute**](docs/Api/RouteApi.md#retrievelistroute) | **PUT** /route | Retrieve List of Routes
*RouteApi* | [**retrieveRoute**](docs/Api/RouteApi.md#retrieveroute) | **GET** /route/{routeId} | Retrieve a Route
*RouteApi* | [**setRoute**](docs/Api/RouteApi.md#setroute) | **POST** /route/set | Set (create or update) an Route
*RouteApi* | [**updateRoute**](docs/Api/RouteApi.md#updateroute) | **PUT** /route/{routeId} | Update a Route
*SettingsApi* | [**retrieveListSettings**](docs/Api/SettingsApi.md#retrievelistsettings) | **PUT** /settings | Retrieve List of Settingss
*SettingsApi* | [**retrieveSettings**](docs/Api/SettingsApi.md#retrievesettings) | **GET** /settings/{settingsId} | Retrieve a Settings
*SettingsApi* | [**updateSettings**](docs/Api/SettingsApi.md#updatesettings) | **PUT** /settings/{settingsId} | Update a Settings
*SystemApi* | [**systemGetVariables**](docs/Api/SystemApi.md#systemgetvariables) | **GET** /system/get-variables | Retrieve System Variables
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /tags | Add a new Tag
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /tags/{tagId} | Delete a Tag
*TagsApi* | [**retrieveListTags**](docs/Api/TagsApi.md#retrievelisttags) | **PUT** /tags | Retrieve List of Tags
*TagsApi* | [**retrieveTag**](docs/Api/TagsApi.md#retrievetag) | **GET** /tags/{tagId} | Retrieve a Tag
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /tags/{tagId} | Update a Tag
*TagtypeApi* | [**createTagType**](docs/Api/TagtypeApi.md#createtagtype) | **POST** /tag-type | Add a new Tag type
*TagtypeApi* | [**deleteTagType**](docs/Api/TagtypeApi.md#deletetagtype) | **DELETE** /tag-type/{tagTypeId} | Delete a Tag type
*TagtypeApi* | [**retrieveListTagType**](docs/Api/TagtypeApi.md#retrievelisttagtype) | **PUT** /tag-type | Retrieve List of Tag types
*TagtypeApi* | [**retrieveTagType**](docs/Api/TagtypeApi.md#retrievetagtype) | **GET** /tag-type/{tagTypeId} | Retrieve a Tag type
*TagtypeApi* | [**setTagType**](docs/Api/TagtypeApi.md#settagtype) | **POST** /tag-type/set | Set (create or update) Tag type
*TagtypeApi* | [**updateTagType**](docs/Api/TagtypeApi.md#updatetagtype) | **PUT** /tag-type/{tagTypeId} | Update a Tag type
*TracktraceApi* | [**retrieveActivityStatus**](docs/Api/TracktraceApi.md#retrieveactivitystatus) | **GET** /track-trace/retrieve-activity-status/{activityId} | Retrieve Activity Status
*TracktraceApi* | [**retrieveRouteStatus**](docs/Api/TracktraceApi.md#retrieveroutestatus) | **GET** /track-trace/retrieve-route-status/{routeId} | Retrieve Route Status
*TrailerApi* | [**createTrailer**](docs/Api/TrailerApi.md#createtrailer) | **POST** /trailer | Add a trailer
*TrailerApi* | [**deleteTrailer**](docs/Api/TrailerApi.md#deletetrailer) | **DELETE** /trailer/{trailerId} | Delete an trailer
*TrailerApi* | [**retrieveListTrailer**](docs/Api/TrailerApi.md#retrievelisttrailer) | **PUT** /trailer | Retrieve List of Trailers
*TrailerApi* | [**retrieveTrailer**](docs/Api/TrailerApi.md#retrievetrailer) | **GET** /trailer/{trailerId} | Find trailer by ID
*TrailerApi* | [**setTrailer**](docs/Api/TrailerApi.md#settrailer) | **POST** /trailer/set | Set (create or update) a trailer
*TrailerApi* | [**updateTrailer**](docs/Api/TrailerApi.md#updatetrailer) | **PUT** /trailer/{trailerId} | Update a trailer
*UsersApi* | [**checkCredentialsUser**](docs/Api/UsersApi.md#checkcredentialsuser) | **GET** /users/check-credentials | Checks the credentials of a User
*UsersApi* | [**retrieveListUsers**](docs/Api/UsersApi.md#retrievelistusers) | **PUT** /users | Retrieve List of Userss
*UsersApi* | [**retrieveUsers**](docs/Api/UsersApi.md#retrieveusers) | **GET** /users/{usersId} | Retrieve a Users
*UsersApi* | [**updateUsers**](docs/Api/UsersApi.md#updateusers) | **PUT** /users/{usersId} | Update a Users
*WorkerApi* | [**addActionToWorkerStack**](docs/Api/WorkerApi.md#addactiontoworkerstack) | **POST** /worker/add-action-to-stack | Add Action To Worker Stack


## Documentation For Models

 - [ActivityFiltersModel](docs/Model/ActivityFiltersModel.md)
 - [ActivityListResponse](docs/Model/ActivityListResponse.md)
 - [ActivityModel](docs/Model/ActivityModel.md)
 - [ActivityOptionsModel](docs/Model/ActivityOptionsModel.md)
 - [ActivityRetrieveListArguments](docs/Model/ActivityRetrieveListArguments.md)
 - [AddressAppliedModel](docs/Model/AddressAppliedModel.md)
 - [AddressFiltersModel](docs/Model/AddressFiltersModel.md)
 - [AddressListResponse](docs/Model/AddressListResponse.md)
 - [AddressModel](docs/Model/AddressModel.md)
 - [AddressOptionsModel](docs/Model/AddressOptionsModel.md)
 - [AddressRetrieveListArguments](docs/Model/AddressRetrieveListArguments.md)
 - [ApiResponse](docs/Model/ApiResponse.md)
 - [AssignmentFiltersModel](docs/Model/AssignmentFiltersModel.md)
 - [AssignmentModel](docs/Model/AssignmentModel.md)
 - [AssignmentOptionsModel](docs/Model/AssignmentOptionsModel.md)
 - [AssignmentRetrieveListArguments](docs/Model/AssignmentRetrieveListArguments.md)
 - [CarFiltersModel](docs/Model/CarFiltersModel.md)
 - [CarModel](docs/Model/CarModel.md)
 - [CarOptionsModel](docs/Model/CarOptionsModel.md)
 - [CarRetrieveListArguments](docs/Model/CarRetrieveListArguments.md)
 - [CommunicationModel](docs/Model/CommunicationModel.md)
 - [DriverFiltersModel](docs/Model/DriverFiltersModel.md)
 - [DriverModel](docs/Model/DriverModel.md)
 - [DriverOptionsModel](docs/Model/DriverOptionsModel.md)
 - [DriverRetrieveListArguments](docs/Model/DriverRetrieveListArguments.md)
 - [EquipmentFiltersModel](docs/Model/EquipmentFiltersModel.md)
 - [EquipmentModel](docs/Model/EquipmentModel.md)
 - [EquipmentOptionsModel](docs/Model/EquipmentOptionsModel.md)
 - [EquipmentRetrieveListArguments](docs/Model/EquipmentRetrieveListArguments.md)
 - [FileFiltersModel](docs/Model/FileFiltersModel.md)
 - [FileModel](docs/Model/FileModel.md)
 - [FileOptionsModel](docs/Model/FileOptionsModel.md)
 - [FileRetrieveListArguments](docs/Model/FileRetrieveListArguments.md)
 - [GPSLocationModel](docs/Model/GPSLocationModel.md)
 - [InstructionModel](docs/Model/InstructionModel.md)
 - [LinkModel](docs/Model/LinkModel.md)
 - [MetaDataModel](docs/Model/MetaDataModel.md)
 - [NoteFiltersModel](docs/Model/NoteFiltersModel.md)
 - [NoteModel](docs/Model/NoteModel.md)
 - [NoteOptionsModel](docs/Model/NoteOptionsModel.md)
 - [NoteRetrieveListArguments](docs/Model/NoteRetrieveListArguments.md)
 - [PackageLineFiltersModel](docs/Model/PackageLineFiltersModel.md)
 - [PackageLineModel](docs/Model/PackageLineModel.md)
 - [PackageLineOptionsModel](docs/Model/PackageLineOptionsModel.md)
 - [PackageLineRetrieveListArguments](docs/Model/PackageLineRetrieveListArguments.md)
 - [PartyFiltersModel](docs/Model/PartyFiltersModel.md)
 - [PartyModel](docs/Model/PartyModel.md)
 - [PartyOptionsModel](docs/Model/PartyOptionsModel.md)
 - [PartyRetrieveListArguments](docs/Model/PartyRetrieveListArguments.md)
 - [RecurrenceFiltersModel](docs/Model/RecurrenceFiltersModel.md)
 - [RecurrenceModel](docs/Model/RecurrenceModel.md)
 - [RecurrenceOptionsModel](docs/Model/RecurrenceOptionsModel.md)
 - [RecurrenceRetrieveListArguments](docs/Model/RecurrenceRetrieveListArguments.md)
 - [RouteFiltersModel](docs/Model/RouteFiltersModel.md)
 - [RouteModel](docs/Model/RouteModel.md)
 - [RouteOptionsModel](docs/Model/RouteOptionsModel.md)
 - [RouteRetrieveListArguments](docs/Model/RouteRetrieveListArguments.md)
 - [SettingsFiltersModel](docs/Model/SettingsFiltersModel.md)
 - [SettingsModel](docs/Model/SettingsModel.md)
 - [SettingsOptionsModel](docs/Model/SettingsOptionsModel.md)
 - [SettingsRetrieveListArguments](docs/Model/SettingsRetrieveListArguments.md)
 - [TagModel](docs/Model/TagModel.md)
 - [TagTypeFiltersModel](docs/Model/TagTypeFiltersModel.md)
 - [TagTypeModel](docs/Model/TagTypeModel.md)
 - [TagTypeOptionsModel](docs/Model/TagTypeOptionsModel.md)
 - [TagTypeRetrieveListArguments](docs/Model/TagTypeRetrieveListArguments.md)
 - [TagsFiltersModel](docs/Model/TagsFiltersModel.md)
 - [TagsOptionsModel](docs/Model/TagsOptionsModel.md)
 - [TagsRetrieveListArguments](docs/Model/TagsRetrieveListArguments.md)
 - [TimeSlotModel](docs/Model/TimeSlotModel.md)
 - [TrailerFiltersModel](docs/Model/TrailerFiltersModel.md)
 - [TrailerModel](docs/Model/TrailerModel.md)
 - [TrailerOptionsModel](docs/Model/TrailerOptionsModel.md)
 - [TrailerRetrieveListArguments](docs/Model/TrailerRetrieveListArguments.md)
 - [UsersFiltersModel](docs/Model/UsersFiltersModel.md)
 - [UsersModel](docs/Model/UsersModel.md)
 - [UsersOptionsModel](docs/Model/UsersOptionsModel.md)
 - [UsersRetrieveListArguments](docs/Model/UsersRetrieveListArguments.md)
 - [VariablesModel](docs/Model/VariablesModel.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: ApiKey
- **Location**: HTTP header


## Author

gerb@bumbal.eu


