# expunge - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **expunge**

## OperationDefinition: expunge 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Binary-its-expunge | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:expunge |



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Binary-its-expunge",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Binary-its-expunge",
  "version" : "10.0.2",
  "name" : "expunge",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-09-10T10:12:06+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : true,
  "code" : "expunge",
  "resource" : ["Binary"],
  "system" : true,
  "type" : true,
  "instance" : true,
  "parameter" : [{
    "name" : "limit",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "integer"
  },
  {
    "name" : "expungeDeletedResources",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "boolean"
  },
  {
    "name" : "expungePreviousVersions",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "boolean"
  },
  {
    "name" : "expungeEverything",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "boolean"
  },
  {
    "name" : "count",
    "use" : "out",
    "min" : 0,
    "max" : "1"
  }]
}

```
