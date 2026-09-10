# communicationParticipant - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **communicationParticipant**

## SearchParameter: communicationParticipant 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/participant | *Version*:10.0.2 |
| Active as of 2024-01-30 | *Computable Name*:communicationParticipant |

 
Search parameter for finding communication based on participant 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-participant",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/participant",
  "version" : "10.0.2",
  "name" : "communicationParticipant",
  "status" : "active",
  "date" : "2024-01-30T12:40:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Search parameter for finding communication based on participant",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "communicationParticipant",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.recipient | Communication.sender | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam').value | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value",
  "xpathUsage" : "normal"
}

```
