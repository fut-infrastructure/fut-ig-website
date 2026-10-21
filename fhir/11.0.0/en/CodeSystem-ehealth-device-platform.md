# Device Platform - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device Platform**

## CodeSystem: Device Platform 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/device-platform | *Version*:11.0.0 |
| Active as of 2026-05-07 | *Computable Name*:DevicePlatform |

 
Push notification service identifier for a citizen's mobile device. Used together with a registration token to direct push notifications to the right push notification service. 

This Code system is referenced in the definition of the following value sets:

* [Device Platform](ValueSet-ehealth-device-platform.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-device-platform",
  "url" : "http://ehealth.sundhed.dk/cs/device-platform",
  "version" : "11.0.0",
  "name" : "DevicePlatform",
  "title" : "Device Platform",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-05-07T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Push notification service identifier for a citizen's mobile device. Used together with a registration token to direct push notifications to the right push notification service.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "APN",
    "display" : "Apple Push Notification service",
    "definition" : "Apple Push Notification service (APNs) - typically used for iOS devices.",
    "designation" : [{
      "language" : "da",
      "value" : "Apple Push Notification service"
    }]
  },
  {
    "code" : "FCM",
    "display" : "Firebase Cloud Messaging",
    "definition" : "Firebase Cloud Messaging (FCM) - typically used for Android devices.",
    "designation" : [{
      "language" : "da",
      "value" : "Firebase Cloud Messaging"
    }]
  }]
}

```
