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
   * The "contacts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new MirrorService(...);
   *   $contacts = $mirrorService->contacts;
   *  </code>
   */
  class ContactsServiceResource extends ServiceResource {


    /**
     * Deletes a contact. (contacts.delete)
     *
     * @param string $id The ID of the contact.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a single contact by ID. (contacts.get)
     *
     * @param string $id The ID of the contact.
     * @param array $optParams Optional parameters.
     * @return Contact
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Contact($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a new contact. (contacts.insert)
     *
     * @param Contact $postBody
     * @param array $optParams Optional parameters.
     * @return Contact
     */
    public function insert(Contact $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Contact($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of contacts for the authenticated user. (contacts.list)
     *
     * @param array $optParams Optional parameters.
     * @return ContactsListResponse
     */
    public function listContacts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ContactsListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a contact in place. This method supports patch semantics. (contacts.patch)
     *
     * @param string $id The ID of the contact.
     * @param Contact $postBody
     * @param array $optParams Optional parameters.
     * @return Contact
     */
    public function patch($id, Contact $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Contact($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a contact in place. (contacts.update)
     *
     * @param string $id The ID of the contact.
     * @param Contact $postBody
     * @param array $optParams Optional parameters.
     * @return Contact
     */
    public function update($id, Contact $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Contact($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "locations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new MirrorService(...);
   *   $locations = $mirrorService->locations;
   *  </code>
   */
  class LocationsServiceResource extends ServiceResource {


    /**
     * Gets a single location by ID. (locations.get)
     *
     * @param string $id The ID of the location or latest for the last known location.
     * @param array $optParams Optional parameters.
     * @return Location
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Location($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of locations for the user. (locations.list)
     *
     * @param array $optParams Optional parameters.
     * @return LocationsListResponse
     */
    public function listLocations($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new LocationsListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "subscriptions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new MirrorService(...);
   *   $subscriptions = $mirrorService->subscriptions;
   *  </code>
   */
  class SubscriptionsServiceResource extends ServiceResource {


    /**
     * Deletes a subscription. (subscriptions.delete)
     *
     * @param string $id The ID of the subscription.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Creates a new subscription. (subscriptions.insert)
     *
     * @param Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Subscription
     */
    public function insert(Subscription $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Subscription($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of subscriptions for the authenticated user and service. (subscriptions.list)
     *
     * @param array $optParams Optional parameters.
     * @return SubscriptionsListResponse
     */
    public function listSubscriptions($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new SubscriptionsListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing subscription in place. (subscriptions.update)
     *
     * @param string $id The ID of the subscription.
     * @param Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Subscription
     */
    public function update($id, Subscription $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Subscription($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "timeline" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new MirrorService(...);
   *   $timeline = $mirrorService->timeline;
   *  </code>
   */
  class TimelineServiceResource extends ServiceResource {


    /**
     * Deletes a timeline item. (timeline.delete)
     *
     * @param string $id The ID of the timeline item.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a single timeline item by ID. (timeline.get)
     *
     * @param string $id The ID of the timeline item.
     * @param array $optParams Optional parameters.
     * @return TimelineItem
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new TimelineItem($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a new item into the timeline. (timeline.insert)
     *
     * @param TimelineItem $postBody
     * @param array $optParams Optional parameters.
     * @return TimelineItem
     */
    public function insert(TimelineItem $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new TimelineItem($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of timeline items for the authenticated user. (timeline.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy Controls the order in which timeline items are returned.
     * @opt_param bool includeDeleted If true, tombstone records for deleted items will be returned.
     * @opt_param string maxResults The maximum number of items to include in the response, used for paging.
     * @opt_param string pageToken Token for the page of results to return.
     * @opt_param string sourceItemId If provided, only items with the given sourceItemId will be returned.
     * @opt_param bool pinnedOnly If true, only pinned items will be returned.
     * @opt_param string bundleId If provided, only items with the given bundleId will be returned.
     * @return TimelineListResponse
     */
    public function listTimeline($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new TimelineListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a timeline item in place. This method supports patch semantics. (timeline.patch)
     *
     * @param string $id The ID of the timeline item.
     * @param TimelineItem $postBody
     * @param array $optParams Optional parameters.
     * @return TimelineItem
     */
    public function patch($id, TimelineItem $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new TimelineItem($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a timeline item in place. (timeline.update)
     *
     * @param string $id The ID of the timeline item.
     * @param TimelineItem $postBody
     * @param array $optParams Optional parameters.
     * @return TimelineItem
     */
    public function update($id, TimelineItem $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new TimelineItem($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "attachments" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new MirrorService(...);
   *   $attachments = $mirrorService->attachments;
   *  </code>
   */
  class TimelineAttachmentsServiceResource extends ServiceResource {


    /**
     * Deletes an attachment from a timeline item. (attachments.delete)
     *
     * @param string $itemId The ID of the timeline item the attachment belongs to.
     * @param string $attachmentId The ID of the attachment.
     * @param array $optParams Optional parameters.
     */
    public function delete($itemId, $attachmentId, $optParams = array()) {
      $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves an attachment on a timeline item by item ID and attachment ID. (attachments.get)
     *
     * @param string $itemId The ID of the timeline item the attachment belongs to.
     * @param string $attachmentId The ID of the attachment.
     * @param array $optParams Optional parameters.
     * @return Attachment
     */
    public function get($itemId, $attachmentId, $optParams = array()) {
      $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Attachment($data);
      } else {
        return $data;
      }
    }
    /**
     * Adds a new attachment to a timeline item. (attachments.insert)
     *
     * @param string $itemId The ID of the timeline item the attachment belongs to.
     * @param array $optParams Optional parameters.
     * @return Attachment
     */
    public function insert($itemId, $optParams = array()) {
      $params = array('itemId' => $itemId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Attachment($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of attachments for a timeline item. (attachments.list)
     *
     * @param string $itemId The ID of the timeline item whose attachments should be listed.
     * @param array $optParams Optional parameters.
     * @return AttachmentsListResponse
     */
    public function listTimelineAttachments($itemId, $optParams = array()) {
      $params = array('itemId' => $itemId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new AttachmentsListResponse($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Mirror (v1).
 *
 * <p>
 * API for interacting with Glass users via the timeline.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.Google.com/glass" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class MirrorService extends Service {
  public $contacts;
  public $locations;
  public $subscriptions;
  public $timeline;
  public $timeline_attachments;
  /**
   * Constructs the internal representation of the Mirror service.
   *
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->servicePath = 'mirror/v1/';
    $this->version = 'v1';
    $this->serviceName = 'mirror';

    $client->addService($this->serviceName, $this->version);
    $this->contacts = new ContactsServiceResource($this, $this->serviceName, 'contacts', json_decode('{"methods": {"insert": {"request": {"$ref": "Contact"}, "id": "mirror.contacts.insert", "httpMethod": "POST", "path": "contacts", "response": {"$ref": "Contact"}}, "get": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "response": {"$ref": "Contact"}, "httpMethod": "GET", "path": "contacts/{id}", "id": "mirror.contacts.get"}, "list": {"path": "contacts", "response": {"$ref": "ContactsListResponse"}, "id": "mirror.contacts.list", "httpMethod": "GET"}, "update": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Contact"}, "response": {"$ref": "Contact"}, "httpMethod": "PUT", "path": "contacts/{id}", "id": "mirror.contacts.update"}, "patch": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Contact"}, "response": {"$ref": "Contact"}, "httpMethod": "PATCH", "path": "contacts/{id}", "id": "mirror.contacts.patch"}, "delete": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "contacts/{id}", "id": "mirror.contacts.delete"}}}', true));
    $this->locations = new LocationsServiceResource($this, $this->serviceName, 'locations', json_decode('{"methods": {"list": {"path": "locations", "response": {"$ref": "LocationsListResponse"}, "id": "mirror.locations.list", "httpMethod": "GET"}, "get": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "response": {"$ref": "Location"}, "httpMethod": "GET", "path": "locations/{id}", "id": "mirror.locations.get"}}}', true));
    $this->subscriptions = new SubscriptionsServiceResource($this, $this->serviceName, 'subscriptions', json_decode('{"methods": {"insert": {"request": {"$ref": "Subscription"}, "id": "mirror.subscriptions.insert", "httpMethod": "POST", "path": "subscriptions", "response": {"$ref": "Subscription"}}, "list": {"path": "subscriptions", "response": {"$ref": "SubscriptionsListResponse"}, "id": "mirror.subscriptions.list", "httpMethod": "GET"}, "update": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Subscription"}, "response": {"$ref": "Subscription"}, "httpMethod": "PUT", "path": "subscriptions/{id}", "id": "mirror.subscriptions.update"}, "delete": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "subscriptions/{id}", "id": "mirror.subscriptions.delete"}}}', true));
    $this->timeline = new TimelineServiceResource($this, $this->serviceName, 'timeline', json_decode('{"methods": {"insert": {"supportsMediaUpload": true, "mediaUpload": {"maxSize": "10MB", "protocols": {"simple": {"path": "/upload/mirror/v1/timeline", "multipart": true}, "resumable": {"path": "/resumable/upload/mirror/v1/timeline", "multipart": true}}, "accept": ["audio/*", "image/*", "video/*"]}, "request": {"$ref": "TimelineItem"}, "id": "mirror.timeline.insert", "httpMethod": "POST", "path": "timeline", "response": {"$ref": "TimelineItem"}}, "get": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "response": {"$ref": "TimelineItem"}, "httpMethod": "GET", "path": "timeline/{id}", "id": "mirror.timeline.get"}, "list": {"parameters": {"orderBy": {"enum": ["displayTime", "writeTime"], "type": "string", "location": "query"}, "includeDeleted": {"type": "boolean", "location": "query"}, "maxResults": {"location": "query", "type": "integer", "format": "uint32"}, "pageToken": {"type": "string", "location": "query"}, "sourceItemId": {"type": "string", "location": "query"}, "pinnedOnly": {"type": "boolean", "location": "query"}, "bundleId": {"type": "string", "location": "query"}}, "id": "mirror.timeline.list", "httpMethod": "GET", "path": "timeline", "response": {"$ref": "TimelineListResponse"}}, "update": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "supportsMediaUpload": true, "mediaUpload": {"maxSize": "10MB", "protocols": {"simple": {"path": "/upload/mirror/v1/timeline/{id}", "multipart": true}, "resumable": {"path": "/resumable/upload/mirror/v1/timeline/{id}", "multipart": true}}, "accept": ["audio/*", "image/*", "video/*"]}, "request": {"$ref": "TimelineItem"}, "response": {"$ref": "TimelineItem"}, "httpMethod": "PUT", "path": "timeline/{id}", "id": "mirror.timeline.update"}, "patch": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "TimelineItem"}, "response": {"$ref": "TimelineItem"}, "httpMethod": "PATCH", "path": "timeline/{id}", "id": "mirror.timeline.patch"}, "delete": {"parameters": {"id": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "timeline/{id}", "id": "mirror.timeline.delete"}}}', true));
    $this->timeline_attachments = new TimelineAttachmentsServiceResource($this, $this->serviceName, 'attachments', json_decode('{"methods": {"insert": {"parameters": {"itemId": {"required": true, "type": "string", "location": "path"}}, "supportsMediaUpload": true, "mediaUpload": {"maxSize": "10MB", "protocols": {"simple": {"path": "/upload/mirror/v1/timeline/{itemId}/attachments", "multipart": true}, "resumable": {"path": "/resumable/upload/mirror/v1/timeline/{itemId}/attachments", "multipart": true}}, "accept": ["audio/*", "image/*", "video/*"]}, "response": {"$ref": "Attachment"}, "httpMethod": "POST", "path": "timeline/{itemId}/attachments", "id": "mirror.timeline.attachments.insert"}, "get": {"parameters": {"itemId": {"required": true, "type": "string", "location": "path"}, "attachmentId": {"required": true, "type": "string", "location": "path"}}, "response": {"$ref": "Attachment"}, "httpMethod": "GET", "path": "timeline/{itemId}/attachments/{attachmentId}", "id": "mirror.timeline.attachments.get", "supportsMediaDownload": true}, "list": {"parameters": {"itemId": {"required": true, "type": "string", "location": "path"}}, "response": {"$ref": "AttachmentsListResponse"}, "httpMethod": "GET", "path": "timeline/{itemId}/attachments", "id": "mirror.timeline.attachments.list"}, "delete": {"parameters": {"itemId": {"required": true, "type": "string", "location": "path"}, "attachmentId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "timeline/{itemId}/attachments/{attachmentId}", "id": "mirror.timeline.attachments.delete"}}}', true));

  }
}



class Attachment extends Model {
  public $contentType;
  public $contentUrl;
  public $id;
  public $isProcessingContent;
  public function setContentType($contentType) {
    $this->contentType = $contentType;
  }
  public function getContentType() {
    return $this->contentType;
  }
  public function setContentUrl($contentUrl) {
    $this->contentUrl = $contentUrl;
  }
  public function getContentUrl() {
    return $this->contentUrl;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIsProcessingContent($isProcessingContent) {
    $this->isProcessingContent = $isProcessingContent;
  }
  public function getIsProcessingContent() {
    return $this->isProcessingContent;
  }
}

class AttachmentsListResponse extends Model {
  protected $__itemsType = 'Attachment';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(Attachment) */ $items) {
    $this->assertIsArray($items, 'Attachment', __METHOD__);
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
}

class Contact extends Model {
  public $acceptTypes;
  public $displayName;
  public $id;
  public $imageUrls;
  public $kind;
  public $phoneNumber;
  public $priority;
  public $source;
  public $type;
  public function setAcceptTypes(/* array(string) */ $acceptTypes) {
    $this->assertIsArray($acceptTypes, 'string', __METHOD__);
    $this->acceptTypes = $acceptTypes;
  }
  public function getAcceptTypes() {
    return $this->acceptTypes;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setImageUrls(/* array(string) */ $imageUrls) {
    $this->assertIsArray($imageUrls, 'string', __METHOD__);
    $this->imageUrls = $imageUrls;
  }
  public function getImageUrls() {
    return $this->imageUrls;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPhoneNumber($phoneNumber) {
    $this->phoneNumber = $phoneNumber;
  }
  public function getPhoneNumber() {
    return $this->phoneNumber;
  }
  public function setPriority($priority) {
    $this->priority = $priority;
  }
  public function getPriority() {
    return $this->priority;
  }
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class ContactsListResponse extends Model {
  protected $__itemsType = 'Contact';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(Contact) */ $items) {
    $this->assertIsArray($items, 'Contact', __METHOD__);
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
}

class Location extends Model {
  public $accuracy;
  public $address;
  public $displayName;
  public $id;
  public $kind;
  public $latitude;
  public $longitude;
  public $timestamp;
  public function setAccuracy($accuracy) {
    $this->accuracy = $accuracy;
  }
  public function getAccuracy() {
    return $this->accuracy;
  }
  public function setAddress($address) {
    $this->address = $address;
  }
  public function getAddress() {
    return $this->address;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLatitude($latitude) {
    $this->latitude = $latitude;
  }
  public function getLatitude() {
    return $this->latitude;
  }
  public function setLongitude($longitude) {
    $this->longitude = $longitude;
  }
  public function getLongitude() {
    return $this->longitude;
  }
  public function setTimestamp($timestamp) {
    $this->timestamp = $timestamp;
  }
  public function getTimestamp() {
    return $this->timestamp;
  }
}

class LocationsListResponse extends Model {
  protected $__itemsType = 'Location';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(Location) */ $items) {
    $this->assertIsArray($items, 'Location', __METHOD__);
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
}

class MenuItem extends Model {
  public $action;
  public $id;
  public $removeWhenSelected;
  protected $__valuesType = 'MenuValue';
  protected $__valuesDataType = 'array';
  public $values;
  public function setAction($action) {
    $this->action = $action;
  }
  public function getAction() {
    return $this->action;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setRemoveWhenSelected($removeWhenSelected) {
    $this->removeWhenSelected = $removeWhenSelected;
  }
  public function getRemoveWhenSelected() {
    return $this->removeWhenSelected;
  }
  public function setValues(/* array(MenuValue) */ $values) {
    $this->assertIsArray($values, 'MenuValue', __METHOD__);
    $this->values = $values;
  }
  public function getValues() {
    return $this->values;
  }
}

class MenuValue extends Model {
  public $displayName;
  public $iconUrl;
  public $state;
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setIconUrl($iconUrl) {
    $this->iconUrl = $iconUrl;
  }
  public function getIconUrl() {
    return $this->iconUrl;
  }
  public function setState($state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
}

class Notification extends Model {
  public $collection;
  public $itemId;
  public $operation;
  protected $__userActionsType = 'UserAction';
  protected $__userActionsDataType = 'array';
  public $userActions;
  public $userToken;
  public $verifyToken;
  public function setCollection($collection) {
    $this->collection = $collection;
  }
  public function getCollection() {
    return $this->collection;
  }
  public function setItemId($itemId) {
    $this->itemId = $itemId;
  }
  public function getItemId() {
    return $this->itemId;
  }
  public function setOperation($operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
  public function setUserActions(/* array(UserAction) */ $userActions) {
    $this->assertIsArray($userActions, 'UserAction', __METHOD__);
    $this->userActions = $userActions;
  }
  public function getUserActions() {
    return $this->userActions;
  }
  public function setUserToken($userToken) {
    $this->userToken = $userToken;
  }
  public function getUserToken() {
    return $this->userToken;
  }
  public function setVerifyToken($verifyToken) {
    $this->verifyToken = $verifyToken;
  }
  public function getVerifyToken() {
    return $this->verifyToken;
  }
}

class NotificationConfig extends Model {
  public $deliveryTime;
  public $level;
  public function setDeliveryTime($deliveryTime) {
    $this->deliveryTime = $deliveryTime;
  }
  public function getDeliveryTime() {
    return $this->deliveryTime;
  }
  public function setLevel($level) {
    $this->level = $level;
  }
  public function getLevel() {
    return $this->level;
  }
}

class Subscription extends Model {
  public $callbackUrl;
  public $collection;
  public $id;
  public $kind;
  protected $__notificationType = 'Notification';
  protected $__notificationDataType = '';
  public $notification;
  public $operation;
  public $updated;
  public $userToken;
  public $verifyToken;
  public function setCallbackUrl($callbackUrl) {
    $this->callbackUrl = $callbackUrl;
  }
  public function getCallbackUrl() {
    return $this->callbackUrl;
  }
  public function setCollection($collection) {
    $this->collection = $collection;
  }
  public function getCollection() {
    return $this->collection;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNotification(Notification $notification) {
    $this->notification = $notification;
  }
  public function getNotification() {
    return $this->notification;
  }
  public function setOperation(/* array(string) */ $operation) {
    $this->assertIsArray($operation, 'string', __METHOD__);
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setUserToken($userToken) {
    $this->userToken = $userToken;
  }
  public function getUserToken() {
    return $this->userToken;
  }
  public function setVerifyToken($verifyToken) {
    $this->verifyToken = $verifyToken;
  }
  public function getVerifyToken() {
    return $this->verifyToken;
  }
}

class SubscriptionsListResponse extends Model {
  protected $__itemsType = 'Subscription';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(Subscription) */ $items) {
    $this->assertIsArray($items, 'Subscription', __METHOD__);
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
}

class TimelineItem extends Model {
  protected $__attachmentsType = 'Attachment';
  protected $__attachmentsDataType = 'array';
  public $attachments;
  public $bundleId;
  public $canonicalUrl;
  public $created;
  protected $__creatorType = 'Contact';
  protected $__creatorDataType = '';
  public $creator;
  public $displayTime;
  public $etag;
  public $html;
  public $htmlPages;
  public $id;
  public $inReplyTo;
  public $isBundleCover;
  public $isDeleted;
  public $isPinned;
  public $kind;
  protected $__locationType = 'Location';
  protected $__locationDataType = '';
  public $location;
  protected $__menuItemsType = 'MenuItem';
  protected $__menuItemsDataType = 'array';
  public $menuItems;
  protected $__notificationType = 'NotificationConfig';
  protected $__notificationDataType = '';
  public $notification;
  public $pinScore;
  protected $__recipientsType = 'Contact';
  protected $__recipientsDataType = 'array';
  public $recipients;
  public $selfLink;
  public $sourceItemId;
  public $speakableText;
  public $text;
  public $title;
  public $updated;
  public function setAttachments(/* array(Attachment) */ $attachments) {
    $this->assertIsArray($attachments, 'Attachment', __METHOD__);
    $this->attachments = $attachments;
  }
  public function getAttachments() {
    return $this->attachments;
  }
  public function setBundleId($bundleId) {
    $this->bundleId = $bundleId;
  }
  public function getBundleId() {
    return $this->bundleId;
  }
  public function setCanonicalUrl($canonicalUrl) {
    $this->canonicalUrl = $canonicalUrl;
  }
  public function getCanonicalUrl() {
    return $this->canonicalUrl;
  }
  public function setCreated($created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setCreator(Contact $creator) {
    $this->creator = $creator;
  }
  public function getCreator() {
    return $this->creator;
  }
  public function setDisplayTime($displayTime) {
    $this->displayTime = $displayTime;
  }
  public function getDisplayTime() {
    return $this->displayTime;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setHtml($html) {
    $this->html = $html;
  }
  public function getHtml() {
    return $this->html;
  }
  public function setHtmlPages(/* array(string) */ $htmlPages) {
    $this->assertIsArray($htmlPages, 'string', __METHOD__);
    $this->htmlPages = $htmlPages;
  }
  public function getHtmlPages() {
    return $this->htmlPages;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInReplyTo($inReplyTo) {
    $this->inReplyTo = $inReplyTo;
  }
  public function getInReplyTo() {
    return $this->inReplyTo;
  }
  public function setIsBundleCover($isBundleCover) {
    $this->isBundleCover = $isBundleCover;
  }
  public function getIsBundleCover() {
    return $this->isBundleCover;
  }
  public function setIsDeleted($isDeleted) {
    $this->isDeleted = $isDeleted;
  }
  public function getIsDeleted() {
    return $this->isDeleted;
  }
  public function setIsPinned($isPinned) {
    $this->isPinned = $isPinned;
  }
  public function getIsPinned() {
    return $this->isPinned;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocation(Location $location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setMenuItems(/* array(MenuItem) */ $menuItems) {
    $this->assertIsArray($menuItems, 'MenuItem', __METHOD__);
    $this->menuItems = $menuItems;
  }
  public function getMenuItems() {
    return $this->menuItems;
  }
  public function setNotification(NotificationConfig $notification) {
    $this->notification = $notification;
  }
  public function getNotification() {
    return $this->notification;
  }
  public function setPinScore($pinScore) {
    $this->pinScore = $pinScore;
  }
  public function getPinScore() {
    return $this->pinScore;
  }
  public function setRecipients(/* array(Contact) */ $recipients) {
    $this->assertIsArray($recipients, 'Contact', __METHOD__);
    $this->recipients = $recipients;
  }
  public function getRecipients() {
    return $this->recipients;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSourceItemId($sourceItemId) {
    $this->sourceItemId = $sourceItemId;
  }
  public function getSourceItemId() {
    return $this->sourceItemId;
  }
  public function setSpeakableText($speakableText) {
    $this->speakableText = $speakableText;
  }
  public function getSpeakableText() {
    return $this->speakableText;
  }
  public function setText($text) {
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
}

class TimelineListResponse extends Model {
  protected $__itemsType = 'TimelineItem';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems(/* array(TimelineItem) */ $items) {
    $this->assertIsArray($items, 'TimelineItem', __METHOD__);
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
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class UserAction extends Model {
  public $payload;
  public $type;
  public function setPayload($payload) {
    $this->payload = $payload;
  }
  public function getPayload() {
    return $this->payload;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}
