# on-behalf-of - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **on-behalf-of**

## SearchParameter: on-behalf-of 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/on-behalf-of | *Version*:6.0.0 |
| Active as of 2021-05-06 | *Computable Name*:on-behalf-of |

 
Search parameter for finding communication based on on-behalf-of 

## on-behalf-of

Parameter `on-behalf-of`:`reference`

Search parameter for finding communication based on on-behalf-of

| | |
| :--- | :--- |
| Resource | [Communication](http://hl7.org/fhir/R4/communication.html) |
| Expression | `Communication.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-on-behalf-of')` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-on-behalf-of",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/on-behalf-of",
  "version" : "6.0.0",
  "name" : "on-behalf-of",
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
  "description" : "Search parameter for finding communication based on on-behalf-of",
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
  "code" : "on-behalf-of",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-on-behalf-of')",
  "xpathUsage" : "normal"
}

```
