# hapi.fhir.reindex-status - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **hapi.fhir.reindex-status**

## OperationDefinition: hapi.fhir.reindex-status 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-hapi.fhir.reindex-status | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:hapi.fhir.reindex-status |



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-hapi.fhir.reindex-status",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-hapi.fhir.reindex-status",
  "version" : "10.0.1",
  "name" : "hapi.fhir.reindex-status",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-11T06:44:23+00:00",
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
  "code" : "hapi.fhir.reindex-status",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "_jobId",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Query the server for the status of a reindex operation",
    "type" : "string"
  },
  {
    "name" : "_return",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "If provided, specifies that a specific part of the job report should be returned",
    "type" : "code"
  }]
}

```
