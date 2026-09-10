# topic - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **topic**

## SearchParameter: topic 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/topic | *Version*:10.0.2 |
| Active as of 2026-02-02 | *Computable Name*:topic |

 
Search parameter for finding communication based on topic 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-topic",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/topic",
  "version" : "10.0.2",
  "name" : "topic",
  "status" : "active",
  "date" : "2026-02-02T12:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Search parameter for finding communication based on topic",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "topic",
  "base" : ["Communication"],
  "type" : "token",
  "expression" : "Communication.topic",
  "xpathUsage" : "normal"
}

```
