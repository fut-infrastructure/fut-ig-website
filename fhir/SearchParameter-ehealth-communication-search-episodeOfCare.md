# episodeOfCare - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **episodeOfCare**

## SearchParameter: episodeOfCare 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/episodeOfCare | *Version*:6.0.0 |
| Active as of 2021-05-06 | *Computable Name*:episodeOfCare |

 
Search parameter for finding communication based on episodeOfCare 

## episodeOfCare

Parameter `episodeOfCare`:`reference`

Search parameter for finding communication based on episodeOfCare

| | |
| :--- | :--- |
| Resource | [Communication](http://hl7.org/fhir/R4/communication.html) |
| Expression | `Communication.extension('http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare')` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-episodeOfCare",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/episodeOfCare",
  "version" : "6.0.0",
  "name" : "episodeOfCare",
  "status" : "active",
  "date" : "2021-05-06T08:31:20+00:00",
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
  "description" : "Search parameter for finding communication based on episodeOfCare",
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
  "code" : "episodeOfCare",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.extension('http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare')",
  "xpathUsage" : "normal"
}

```
