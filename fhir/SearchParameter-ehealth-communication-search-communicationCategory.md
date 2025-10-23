# communicationCategory - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **communicationCategory**

## SearchParameter: communicationCategory 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/category | *Version*:6.0.0 |
| Active as of 2021-05-06 | *Computable Name*:communicationCategory |

 
Search parameter for finding communication based on the category code 

## communicationCategory

Parameter `communicationCategory`:`token`

Search parameter for finding communication based on the category code

| | |
| :--- | :--- |
| Resource | [Communication](http://hl7.org/fhir/R4/communication.html) |
| Expression | `Communication.category.coding` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-communicationCategory",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/category",
  "version" : "6.0.0",
  "name" : "communicationCategory",
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
  "description" : "Search parameter for finding communication based on the category code",
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
  "code" : "communicationCategory",
  "base" : ["Communication"],
  "type" : "token",
  "expression" : "Communication.category.coding",
  "xpathUsage" : "normal"
}

```
