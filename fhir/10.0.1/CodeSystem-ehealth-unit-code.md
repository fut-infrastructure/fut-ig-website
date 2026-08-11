# eHealth Unit Codes - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Unit Codes**

## CodeSystem: eHealth Unit Codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-unit-code | *Version*:10.0.1 |
| Active as of 2020-10-19 | *Computable Name*:eHealthUnitCodes |

 
Unit Codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [eHealthUnitCodes](ValueSet-ehealth-unit-code.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-unit-code",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-unit-code",
  "version" : "10.0.1",
  "name" : "eHealthUnitCodes",
  "title" : "eHealth Unit Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-10-19T08:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Unit Codes",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "1/30sec",
    "display" : "one per 30 seconds",
    "definition" : "Number of occurrences in 30 seconds",
    "designation" : [{
      "language" : "da",
      "value" : "1/ 30 sek"
    }]
  },
  {
    "code" : "1/60sec",
    "display" : "one per 60 seconds",
    "definition" : "Number of occurrences in 60 seconds",
    "designation" : [{
      "language" : "da",
      "value" : "1/ 60 sek"
    }]
  },
  {
    "code" : "percentpoint",
    "display" : "percent point",
    "definition" : "Percentage point",
    "designation" : [{
      "language" : "da",
      "value" : "procentpoint"
    }]
  }]
}

```
