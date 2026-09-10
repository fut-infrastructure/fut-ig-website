# import - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **import**

## OperationDefinition: import 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-import | *Version*:10.0.2 |
| Active as of 2021-05-06 | *Computable Name*:import |

 
Import terminology resources 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-import",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-import",
  "version" : "10.0.2",
  "name" : "import",
  "status" : "active",
  "kind" : "operation",
  "date" : "2021-05-06T08:31:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Import terminology resources",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : true,
  "code" : "import",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "uriFileLink",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "uri"
  },
  {
    "name" : "overwrite",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "boolean"
  },
  {
    "name" : "number-of-resources-created-or-updated",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "type" : "integer"
  }]
}

```
