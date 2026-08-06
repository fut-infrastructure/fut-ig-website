# communicationCategory - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **communicationCategory**

## SearchParameter: communicationCategory 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/category | *Version*:10.0.0 |
| Active as of 2021-05-06 | *Computable Name*:communicationCategory |

 
Search parameter for finding communication based on the category code 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-communicationCategory",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/category",
  "version" : "10.0.0",
  "name" : "communicationCategory",
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
  "description" : "Search parameter for finding communication based on the category code",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "communicationCategory",
  "base" : ["Communication"],
  "type" : "token",
  "expression" : "Communication.category.coding",
  "xpathUsage" : "normal"
}

```
