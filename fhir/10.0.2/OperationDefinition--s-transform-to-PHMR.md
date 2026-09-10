# Transform to PHMR - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform to PHMR**

## OperationDefinition: Transform to PHMR 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-PHMR | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:transform-to-PHMR |

 
Transforms a FHIR Observation (ehealth-observation profile) resource to a DK-HL7 Personal Health Monitoring Report (PHMR) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-to-PHMR",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-PHMR",
  "version" : "10.0.2",
  "name" : "transform-to-PHMR",
  "title" : "Transform to PHMR",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-09-10T10:04:36+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Transforms a FHIR Observation (ehealth-observation profile) resource to a DK-HL7 Personal Health Monitoring Report (PHMR) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "transform-to-PHMR",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "bundle",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "The input FHIR Bundle that contains the FHIR Composition referencing FHIR Observation (ehealth-observation profile) resources to be transformed to PHMR XML.",
    "type" : "Bundle"
  },
  {
    "name" : "documentReference",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "type" : "DocumentReference"
  }]
}

```
