# Sygdoms- og diagnosekoder - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdoms- og diagnosekoder**

## ValueSet: Sygdoms- og diagnosekoder 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/health-conditions | *Version*:11.0.2 |
| Active as of 2022-01-14 | *Computable Name*:Health_conditions |

 
Health Condition Codes 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-health-conditions",
  "url" : "http://ehealth.sundhed.dk/vs/health-conditions",
  "version" : "11.0.2",
  "name" : "Health_conditions",
  "title" : "Sygdoms- og diagnosekoder",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-01-14T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Health Condition Codes",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:oid:1.2.208.176.2.4",
      "concept" : [{
        "code" : "DJ44"
      },
      {
        "code" : "DE10"
      },
      {
        "code" : "DI20"
      }]
    }]
  }
}

```
