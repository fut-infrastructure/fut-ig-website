# date - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **date**

## SearchParameter: date 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/date | *Version*:11.0.1 |
| Active as of 2026-07-21 | *Computable Name*:date |

 
Search parameter for finding related persons based on period 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-relatedperson-search-date",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/date",
  "version" : "11.0.1",
  "name" : "date",
  "status" : "active",
  "date" : "2026-07-21T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Search parameter for finding related persons based on period",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "date",
  "base" : ["RelatedPerson"],
  "type" : "date",
  "expression" : "RelatedPerson.period",
  "xpathUsage" : "normal"
}

```
