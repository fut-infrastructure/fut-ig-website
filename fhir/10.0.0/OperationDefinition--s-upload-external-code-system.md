# upload-external-code-system - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **upload-external-code-system**

## OperationDefinition: upload-external-code-system 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-upload-external-code-system | *Version*:10.0.0 |
| Active as of 2021-05-06 | *Computable Name*:upload-external-code-system |



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-upload-external-code-system",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-upload-external-code-system",
  "version" : "10.0.0",
  "name" : "upload-external-code-system",
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
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : true,
  "code" : "upload-external-code-system",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "url",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "type" : "string",
    "searchType" : "string"
  },
  {
    "name" : "localfile",
    "use" : "in",
    "min" : 1,
    "max" : "*",
    "type" : "string"
  },
  {
    "name" : "package",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "type" : "Attachment"
  },
  {
    "name" : "conceptCount",
    "use" : "out",
    "min" : 1,
    "max" : "1",
    "type" : "integer"
  }]
}

```
