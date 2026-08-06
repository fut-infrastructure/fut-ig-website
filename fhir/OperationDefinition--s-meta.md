# meta - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **meta**

## OperationDefinition: meta 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-meta | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:meta |



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-meta",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-meta",
  "version" : "10.0.0",
  "name" : "meta",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-06T13:29:38+00:00",
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
  "affectsState" : false,
  "code" : "meta",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "return",
    "use" : "out",
    "min" : 0,
    "max" : "1"
  }]
}

```
