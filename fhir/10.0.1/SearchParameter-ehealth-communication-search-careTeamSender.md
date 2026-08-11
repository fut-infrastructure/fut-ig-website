# careTeamSender - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **careTeamSender**

## SearchParameter: careTeamSender 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/careTeamSender | *Version*:10.0.1 |
| Active as of 2021-05-06 | *Computable Name*:careTeamSender |

 
Search parameter for finding communication based on CareTeam sender 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-careTeamSender",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/careTeamSender",
  "version" : "10.0.1",
  "name" : "careTeamSender",
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
  "description" : "Search parameter for finding communication based on CareTeam sender",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "careTeamSender",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam')",
  "xpathUsage" : "normal"
}

```
