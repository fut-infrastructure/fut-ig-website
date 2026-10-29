# Message Type CodeSystem - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Message Type CodeSystem**

## CodeSystem: Message Type CodeSystem 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/message-type | *Version*:11.0.3 |
| Active as of 2026-10-29 | *Computable Name*:MessageTypeCS |

 
Allowed codes for message type. 

This Code system is referenced in the definition of the following value sets:

* [Message Type ValueSet](ValueSet-MessageType.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MessageTypeCS",
  "url" : "http://ehealth.sundhed.dk/cs/message-type",
  "version" : "11.0.3",
  "name" : "MessageTypeCS",
  "title" : "Message Type CodeSystem",
  "status" : "active",
  "date" : "2026-10-29T11:45:20+00:00",
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
