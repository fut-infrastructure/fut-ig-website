# Aggregation Mode - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aggregation Mode**

## CodeSystem: Aggregation Mode 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/aggregation-mode-types | *Version*:10.0.0 |
| Active as of 2026-06-18 | *Computable Name*:AggregationMode |

 
Aggregation Mode 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AggregationModeTypes](ValueSet-aggregation-mode-types.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-aggregation-mode-types",
  "url" : "http://ehealth.sundhed.dk/cs/aggregation-mode-types",
  "version" : "10.0.0",
  "name" : "AggregationMode",
  "title" : "Aggregation Mode",
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
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "none",
    "display" : "None",
    "definition" : "No Aggregation Mode"
  },
  {
    "code" : "strict",
    "display" : "Strict",
    "definition" : "Strict Aggregation Mode"
  },
  {
    "code" : "robust",
    "display" : "Robust",
    "definition" : "Robust Aggregation Mode"
  }]
}

```
