# Data migration - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Data migration**

## OperationDefinition: Data migration 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-migrate | *Version*:11.0.0 |
| Active as of 2026-10-21 | *Computable Name*:migrate |

 
Data migration 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-migrate",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-migrate",
  "version" : "11.0.0",
  "name" : "migrate",
  "title" : "Data migration",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-10-21T13:41:32+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Data migration",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : true,
  "code" : "migrate",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "migrationId",
    "use" : "in",
    "min" : 1,
    "max" : "1"
  }]
}

```
