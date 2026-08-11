# careTeamRecipient - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **careTeamRecipient**

## SearchParameter: careTeamRecipient 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/careTeamRecipient | *Version*:10.0.1 |
| Active as of 2021-05-06 | *Computable Name*:careTeamRecipient |

 
Search parameter for finding communication based on CareTeam recipient 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-careTeamRecipient",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/careTeamRecipient",
  "version" : "10.0.1",
  "name" : "careTeamRecipient",
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
  "description" : "Search parameter for finding communication based on CareTeam recipient",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "careTeamRecipient",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam')",
  "xpathUsage" : "normal"
}

```
