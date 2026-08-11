# eHealth Message Channel codes - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Message Channel codes**

## CodeSystem: eHealth Message Channel codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-message-channel | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:EhealthMessageChannelCS |

 
Codes indicating the channel used to send a message. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EhealthMessageChannelVS](ValueSet-ehealth-message-channel.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-message-channel",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-message-channel",
  "version" : "10.0.1",
  "name" : "EhealthMessageChannelCS",
  "title" : "eHealth Message Channel codes",
  "status" : "active",
  "date" : "2026-08-11T06:44:23+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Codes indicating the channel used to send a message.",
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
    "code" : "sms",
    "display" : "SMS"
  }]
}

```
