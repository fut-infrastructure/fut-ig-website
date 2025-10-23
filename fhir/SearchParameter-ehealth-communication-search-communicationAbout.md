# communicationAbout - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **communicationAbout**

## SearchParameter: communicationAbout 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/about | *Version*:6.0.0 |
| Active as of 2022-08-09 | *Computable Name*:communicationAbout |

 
Search parameter for finding communication based on about 

## communicationAbout

Parameter `communicationAbout`:`reference`

Search parameter for finding communication based on about

| | |
| :--- | :--- |
| Resource | [Communication](http://hl7.org/fhir/R4/communication.html) |
| Expression | `Communication.about` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-communicationAbout",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/about",
  "version" : "6.0.0",
  "name" : "communicationAbout",
  "status" : "active",
  "date" : "2022-08-09T12:05:00+00:00",
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
  "description" : "Search parameter for finding communication based on about",
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
  "code" : "communicationAbout",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.about",
  "xpathUsage" : "normal"
}

```
