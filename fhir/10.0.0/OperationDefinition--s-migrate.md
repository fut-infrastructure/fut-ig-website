# Data migration - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Data migration**

## OperationDefinition: Data migration 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-migrate | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:migrate |

 
Data migration 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-migrate",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-migrate",
  "version" : "10.0.0",
  "name" : "migrate",
  "title" : "Data migration",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-06T13:17:54+00:00",
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
