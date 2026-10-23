# eHealth CareCommunication Categories - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth CareCommunication Categories**

## ValueSet: eHealth CareCommunication Categories 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-carecommunication-category | *Version*:11.0.1 |
| Active as of 2026-10-23 | *Computable Name*:EhealthCareCommunicationCategoryVS |

 
Categories used for CareCommunciation messages. 

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
  "id" : "ehealth-carecommunication-category",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-carecommunication-category",
  "version" : "11.0.1",
  "name" : "EhealthCareCommunicationCategoryVS",
  "title" : "eHealth CareCommunication Categories",
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
  "description" : "Categories used for CareCommunciation messages.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-carecommunication-category"
    }]
  }
}

```
