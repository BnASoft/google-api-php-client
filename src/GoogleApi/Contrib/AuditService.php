<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace GoogleApi\Contrib;
use GoogleApi\Client;
use GoogleApi\Service\Model;
use GoogleApi\Service\Service;
use GoogleApi\Service\ServiceResource;

  /**
   * The "activities" collection of methods.
   * Typical usage is:
   *  <code>
   *   $auditService = new AuditService(...);
   *   $activities = $auditService->activities;
   *  </code>
   */
  class ActivitiesServiceResource extends ServiceResource {


    /**
     * Retrieves a list of activities for a specific customer and application. (activities.list)
     *
     * @param string $customerId Represents the customer who is the owner of target object on which action was performed.
     * @param string $applicationId Application ID of the application on which the event was performed.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string actorEmail Email address of the user who performed the action.
     * @opt_param string actorApplicationId Application ID of the application which interacted on behalf of the user while performing the event.
     * @opt_param string actorIpAddress IP Address of host where the event was performed. Supports both IPv4 and IPv6 addresses.
     * @opt_param string caller Type of the caller.
     * @opt_param int maxResults Number of activity records to be shown in each page.
     * @opt_param string eventName Name of the event being queried.
     * @opt_param string startTime Return events which occured at or after this time.
     * @opt_param string endTime Return events which occured at or before this time.
     * @opt_param string continuationToken Next page URL.
     * @return Activities
     */
    public function listActivities($customerId, $applicationId, $optParams = array()) {
      $params = array('customerId' => $customerId, 'applicationId' => $applicationId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Activities($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Audit (v1).
 *
 * <p>
 * Lets you access user activities in your enterprise made through various applications.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/google-apps/admin-audit/get_started" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class AuditService extends Service {
  public $activities;
  /**
   * Constructs the internal representation of the Audit service.
   *
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->servicePath = 'apps/reporting/audit/v1/';
    $this->version = 'v1';
    $this->serviceName = 'audit';

    $client->addService($this->serviceName, $this->version);
    $this->activities = new ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"list": {"parameters": {"actorEmail": {"type": "string", "location": "query"}, "actorApplicationId": {"location": "query", "type": "string", "format": "int64"}, "actorIpAddress": {"type": "string", "location": "query"}, "caller": {"enum": ["application_owner", "customer"], "type": "string", "location": "query"}, "maxResults": {"format": "int32", "maximum": "1000", "minimum": "1", "location": "query", "type": "integer"}, "customerId": {"required": true, "type": "string", "location": "path"}, "eventName": {"type": "string", "location": "query"}, "startTime": {"type": "string", "location": "query"}, "endTime": {"type": "string", "location": "query"}, "applicationId": {"location": "path", "required": true, "type": "string", "format": "int64"}, "continuationToken": {"type": "string", "location": "query"}}, "response": {"$ref": "Activities"}, "httpMethod": "GET", "path": "{customerId}/{applicationId}", "id": "audit.activities.list"}}}', true));

  }
}

class Activities extends Model {
  protected $__itemsType = 'Activity';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $next;
  public function setItems(/* array(Activity) */ $items) {
    $this->assertIsArray($items, 'Activity', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNext($next) {
    $this->next = $next;
  }
  public function getNext() {
    return $this->next;
  }
}

class Activity extends Model {
  protected $__actorType = 'ActivityActor';
  protected $__actorDataType = '';
  public $actor;
  protected $__eventsType = 'ActivityEvents';
  protected $__eventsDataType = 'array';
  public $events;
  protected $__idType = 'ActivityId';
  protected $__idDataType = '';
  public $id;
  public $ipAddress;
  public $kind;
  public $ownerDomain;
  public function setActor(ActivityActor $actor) {
    $this->actor = $actor;
  }
  public function getActor() {
    return $this->actor;
  }
  public function setEvents(/* array(ActivityEvents) */ $events) {
    $this->assertIsArray($events, 'ActivityEvents', __METHOD__);
    $this->events = $events;
  }
  public function getEvents() {
    return $this->events;
  }
  public function setId(ActivityId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIpAddress($ipAddress) {
    $this->ipAddress = $ipAddress;
  }
  public function getIpAddress() {
    return $this->ipAddress;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOwnerDomain($ownerDomain) {
    $this->ownerDomain = $ownerDomain;
  }
  public function getOwnerDomain() {
    return $this->ownerDomain;
  }
}

class ActivityActor extends Model {
  public $applicationId;
  public $callerType;
  public $email;
  public $key;
  public function setApplicationId($applicationId) {
    $this->applicationId = $applicationId;
  }
  public function getApplicationId() {
    return $this->applicationId;
  }
  public function setCallerType($callerType) {
    $this->callerType = $callerType;
  }
  public function getCallerType() {
    return $this->callerType;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setKey($key) {
    $this->key = $key;
  }
  public function getKey() {
    return $this->key;
  }
}

class ActivityEvents extends Model {
  public $eventType;
  public $name;
  protected $__parametersType = 'ActivityEventsParameters';
  protected $__parametersDataType = 'array';
  public $parameters;
  public function setEventType($eventType) {
    $this->eventType = $eventType;
  }
  public function getEventType() {
    return $this->eventType;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setParameters(/* array(ActivityEventsParameters) */ $parameters) {
    $this->assertIsArray($parameters, 'ActivityEventsParameters', __METHOD__);
    $this->parameters = $parameters;
  }
  public function getParameters() {
    return $this->parameters;
  }
}

class ActivityEventsParameters extends Model {
  public $name;
  public $value;
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class ActivityId extends Model {
  public $applicationId;
  public $customerId;
  public $time;
  public $uniqQualifier;
  public function setApplicationId($applicationId) {
    $this->applicationId = $applicationId;
  }
  public function getApplicationId() {
    return $this->applicationId;
  }
  public function setCustomerId($customerId) {
    $this->customerId = $customerId;
  }
  public function getCustomerId() {
    return $this->customerId;
  }
  public function setTime($time) {
    $this->time = $time;
  }
  public function getTime() {
    return $this->time;
  }
  public function setUniqQualifier($uniqQualifier) {
    $this->uniqQualifier = $uniqQualifier;
  }
  public function getUniqQualifier() {
    return $this->uniqQualifier;
  }
}
