# MessageMedium - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MessageMedium**

## ValueSet: (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/message-medium | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:MessageMedium |

 
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
  "id" : "message-medium",
  "url" : "http://ehealth.sundhed.dk/vs/message-medium",
  "version" : "11.0.3",
  "name" : "MessageMedium",
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
      "system" : "http://ehealth.sundhed.dk/cs/message-medium",
      "concept" : [{
        "code" : "nemsms"
      },
      {
        "code" : "eboks"
      },
      {
        "code" : "application-event"
      }]
    }]
  }
}

```
