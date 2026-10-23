# Message Type ValueSet - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Message Type ValueSet**

## ValueSet: Message Type ValueSet 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-carecommunication-message-type | *Version*:11.0.1 |
| Active as of 2026-10-23 | *Computable Name*:MessageType |

 
Allowed message types: new-message, reply-message, forward-message. 

 **References** 

* [Message type](StructureDefinition-ehealth-carecommunication-message-Type.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "MessageType",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-carecommunication-message-type",
  "version" : "11.0.1",
  "name" : "MessageType",
  "title" : "Message Type ValueSet",
  "status" : "active",
  "date" : "2026-10-23T09:30:26+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Allowed message types: new-message, reply-message, forward-message.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/message-type",
      "concept" : [{
        "code" : "new-message",
        "display" : "New Message"
      },
      {
        "code" : "reply-message",
        "display" : "Reply Message"
      },
      {
        "code" : "forward-message",
        "display" : "Forward Message"
      }]
    }]
  }
}

```
