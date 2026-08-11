# Message Type CodeSystem - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Message Type CodeSystem**

## CodeSystem: Message Type CodeSystem 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/message-type | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:MessageTypeCS |

 
Allowed codes for message type. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MessageType](ValueSet-MessageType.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MessageTypeCS",
  "url" : "http://ehealth.sundhed.dk/cs/message-type",
  "version" : "10.0.1",
  "name" : "MessageTypeCS",
  "title" : "Message Type CodeSystem",
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
  "description" : "Allowed codes for message type.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "complete",
  "count" : 3,
  "concept" : [{
    "code" : "new-message",
    "display" : "New Message"
  },
  {
    "code" : "reply-message",
    "display" : "Reply"
  },
  {
    "code" : "forward-message",
    "display" : "Forward"
  }]
}

```
