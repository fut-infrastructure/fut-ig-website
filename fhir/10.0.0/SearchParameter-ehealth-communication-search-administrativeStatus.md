# administrativeStatus - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **administrativeStatus**

## SearchParameter: administrativeStatus 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/administrativeStatus | *Version*:10.0.0 |
| Active as of 2021-05-06 | *Computable Name*:administrativeStatus |

 
Search parameter for finding communication based on administrative status 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-administrativeStatus",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/administrativeStatus",
  "version" : "10.0.0",
  "name" : "administrativeStatus",
  "status" : "active",
  "date" : "2021-05-06T08:31:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Search parameter for finding communication based on administrative status",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "administrativeStatus",
  "base" : ["Communication"],
  "type" : "token",
  "expression" : "Communication.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-administrative-status')",
  "xpathUsage" : "normal"
}

```
