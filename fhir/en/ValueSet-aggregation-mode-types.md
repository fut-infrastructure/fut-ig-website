# Aggregation Mode Types - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aggregation Mode Types**

## ValueSet: Aggregation Mode Types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/aggregation-mode-types | *Version*:11.0.1 |
| Active as of 2026-06-18 | *Computable Name*:AggregationModeTypes |

 
Aggregation Mode 

 **References** 

* [Aggregation Mode](StructureDefinition-ehealth-aggregation-mode.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "aggregation-mode-types",
  "url" : "http://ehealth.sundhed.dk/vs/aggregation-mode-types",
  "version" : "11.0.1",
  "name" : "AggregationModeTypes",
  "title" : "Aggregation Mode Types",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-18T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Aggregation Mode",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/aggregation-mode-types"
    }]
  }
}

```
