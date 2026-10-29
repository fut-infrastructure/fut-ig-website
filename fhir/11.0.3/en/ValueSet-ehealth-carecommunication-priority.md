# eHealth CareCommunication Priorities - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth CareCommunication Priorities**

## ValueSet: eHealth CareCommunication Priorities 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-carecommunication-priority | *Version*:11.0.3 |
| Active as of 2026-10-29 | *Computable Name*:EhealthCareCommunicationPriorityVS |

 
Priorities used for CareCommunication messages. 

 **References** 

* [ehealth-carecommunication](StructureDefinition-ehealth-carecommunication.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-carecommunication-priority",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-carecommunication-priority",
  "version" : "11.0.3",
  "name" : "EhealthCareCommunicationPriorityVS",
  "title" : "eHealth CareCommunication Priorities",
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
  "description" : "Priorities used for CareCommunication messages.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-carecommunication-priority"
    }]
  }
}

```
