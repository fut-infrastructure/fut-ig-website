# communicationRelatesTo - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **communicationRelatesTo**

## SearchParameter: communicationRelatesTo 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/relatesTo | *Version*:10.0.1 |
| Active as of 2024-07-26 | *Computable Name*:communicationRelatesTo |

 
Search parameter for finding communication based on either participant or episode of care 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-relates-to",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/relatesTo",
  "version" : "10.0.1",
  "name" : "communicationRelatesTo",
  "status" : "active",
  "date" : "2024-07-26T12:44:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Search parameter for finding communication based on either participant or episode of care",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "communicationRelatesTo",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.recipient | Communication.sender | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam').value | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value | Communication.extension.where(url='http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare').value",
  "xpathUsage" : "normal"
}

```
