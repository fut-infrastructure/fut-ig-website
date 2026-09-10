# episodeOfCare - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **episodeOfCare**

## SearchParameter: episodeOfCare 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/episodeOfCare | *Version*:10.0.2 |
| Active as of 2021-05-06 | *Computable Name*:episodeOfCare |

 
Search parameter for finding communication based on episodeOfCare 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-episodeOfCare",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/episodeOfCare",
  "version" : "10.0.2",
  "name" : "episodeOfCare",
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
  "description" : "Search parameter for finding communication based on episodeOfCare",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "episodeOfCare",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.extension('http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare')",
  "xpathUsage" : "normal"
}

```
