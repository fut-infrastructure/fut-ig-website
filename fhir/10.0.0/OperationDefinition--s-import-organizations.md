# Import organizations - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Import organizations**

## OperationDefinition: Import organizations 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-import-organizations | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:import-organizations |

 
Import a bundle containing at least one organization tree. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-import-organizations",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-import-organizations",
  "version" : "10.0.0",
  "name" : "import-organizations",
  "title" : "Import organizations",
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
  "description" : "Import a bundle containing at least one organization tree.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : true,
  "code" : "import-organizations",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "organizations",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "The bundle of organizations to import.",
    "type" : "Bundle"
  },
  {
    "name" : "bundle",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "type" : "Bundle"
  }]
}

```
