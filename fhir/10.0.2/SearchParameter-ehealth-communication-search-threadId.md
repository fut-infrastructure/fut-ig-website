# threadId - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **threadId**

## SearchParameter: threadId 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/threadId | *Version*:10.0.2 |
| Active as of 2021-05-06 | *Computable Name*:threadId |

 
Search parameter for finding communication based on thread id 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-threadId",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/threadId",
  "version" : "10.0.2",
  "name" : "threadId",
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
  "description" : "Search parameter for finding communication based on thread id",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "threadId",
  "base" : ["Communication"],
  "type" : "string",
  "expression" : "Communication.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-thread-id')",
  "xpathUsage" : "normal"
}

```
