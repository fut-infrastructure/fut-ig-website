# eHealth Telecom Purpose codes - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Telecom Purpose codes**

## CodeSystem: eHealth Telecom Purpose codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/telecom-purpose | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:EhealthTelecomPurposeCS |

 
Codes indicating the purpose of a telecom contact point. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EhealthTelecomPurposeVS](ValueSet-ehealth-telecom-purpose.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-telecom-purpose",
  "url" : "http://ehealth.sundhed.dk/cs/telecom-purpose",
  "version" : "10.0.1",
  "name" : "EhealthTelecomPurposeCS",
  "title" : "eHealth Telecom Purpose codes",
  "status" : "active",
  "date" : "2026-08-11T06:32:53+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Codes indicating the purpose of a telecom contact point.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "complete",
  "count" : 1,
  "concept" : [{
    "code" : "video-appointment-reminder-sms",
    "display" : "SMS reminder to related person for video appointment"
  }]
}

```
