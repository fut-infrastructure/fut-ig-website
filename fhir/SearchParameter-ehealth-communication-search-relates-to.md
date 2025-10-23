# communicationRelatesTo - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **communicationRelatesTo**

## SearchParameter: communicationRelatesTo 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/relatesTo | *Version*:6.0.0 |
| Active as of 2024-07-26 | *Computable Name*:communicationRelatesTo |

 
Search parameter for finding communication based on either participant or episode of care 

## communicationRelatesTo

Parameter `communicationRelatesTo`:`reference`

Search parameter for finding communication based on either participant or episode of care

| | |
| :--- | :--- |
| Resource | [Communication](http://hl7.org/fhir/R4/communication.html) |
| Expression | `Communication.recipient | Communication.sender | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam').value | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value | Communication.extension.where(url='http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare').value` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-relates-to",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/relatesTo",
  "version" : "6.0.0",
  "name" : "communicationRelatesTo",
  "status" : "active",
  "date" : "2024-07-26T12:44:20+00:00",
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
  "description" : "Search parameter for finding communication based on either participant or episode of care",
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
  "code" : "communicationRelatesTo",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.recipient | Communication.sender | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam').value | Communication.extension.where(url='http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value | Communication.extension.where(url='http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare').value",
  "xpathUsage" : "normal"
}

```
