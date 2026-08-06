# Traverse to SOR - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Traverse to SOR**

## OperationDefinition: Traverse to SOR 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-i-traverse-to-sor | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:traverse-to-sor |

 
Traverse upforwards to the first SOR organization Http response code 404 will be returned if no related SOR organization could be found 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Organization-i-traverse-to-sor",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-i-traverse-to-sor",
  "version" : "10.0.0",
  "name" : "traverse-to-sor",
  "title" : "Traverse to SOR",
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
  "description" : "Traverse upforwards to the first SOR organization\nHttp response code 404 will be returned if no related SOR organization could be found",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "traverse-to-sor",
  "resource" : ["Organization"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [{
    "name" : "return",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "type" : "Organization"
  }]
}

```
