# Transform from PHMR - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform from PHMR**

## OperationDefinition: Transform from PHMR 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-PHMR | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:transform-from-PHMR |

 
Transforms a DK-HL7 Personal Health Monitoring Report (PHMR) XML document to FHIR Observation (ehealth-observation profile) resource. The input FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing.one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-from-PHMR",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-PHMR",
  "version" : "10.0.1",
  "name" : "transform-from-PHMR",
  "title" : "Transform from PHMR",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-11T06:32:53+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Transforms a DK-HL7 Personal Health Monitoring Report (PHMR) XML document to FHIR Observation (ehealth-observation profile) resource. The input FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing.one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "transform-from-PHMR",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "documentReference",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "The input FHIR DocumentReference that contains the PHMR XML document.",
    "type" : "DocumentReference"
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
