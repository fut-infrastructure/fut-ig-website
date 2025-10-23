# communicationParticipant - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **communicationParticipant**

## SearchParameter: communicationParticipant 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/participant | *Version*:6.0.0 |
| Active as of 2024-01-30 | *Computable Name*:communicationParticipant |

 
Search parameter for finding communication based on participant 

## communicationParticipant

Parameter `communicationParticipant`:`reference`

Search parameter for finding communication based on participant

| | |
| :--- | :--- |
| Resource | [Communication](http://hl7.org/fhir/R4/communication.html) |
| Expression | `Communication.recipient | Communication.sender | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam').value | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-participant",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/participant",
  "version" : "6.0.0",
  "name" : "communicationParticipant",
  "status" : "active",
  "date" : "2024-01-30T12:40:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Search parameter for finding communication based on participant",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "code" : "communicationParticipant",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.recipient | Communication.sender | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam').value | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value",
  "xpathUsage" : "normal"
}

```
