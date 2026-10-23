# MessageCategory - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MessageCategory**

## ValueSet: (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/message-category | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:MessageCategory |

 
The set of possible message types 

 **References** 

* [ehealth-communication-request](StructureDefinition-ehealth-communication-request.md)
* [ehealth-message](StructureDefinition-ehealth-message.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "message-category",
  "url" : "http://ehealth.sundhed.dk/vs/message-category",
  "version" : "11.0.1",
  "name" : "MessageCategory",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The set of possible message types",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/message-category",
      "concept" : [{
        "code" : "message"
      },
      {
        "code" : "notification"
      },
      {
        "code" : "advice"
      },
      {
        "code" : "note"
      }]
    }]
  }
}

```
