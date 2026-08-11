# Transform to QFDD - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform to QFDD**

## OperationDefinition: Transform to QFDD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-QFDD | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:transform-to-QFDD |

 
Transforms an eHealth Questionnaire resource to the DK-HL7 Questionnaire Form Definition Document (QFDD). The input Bundle contains an eHealth Questionnaire and Composition resource which reference the returned eHealth Questionnaire. The returned Bundle in case of no validation errors contains the FHIR DocumentReference containing the QFDD XML for the DK-HL7 Questionnaire Form Definition Document and an OperationOutcome will possible warnings. In case of validation errors the Bundle will only contain an OperationOutcome with the validation errors/warnings. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-to-QFDD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-QFDD",
  "version" : "10.0.1",
  "name" : "transform-to-QFDD",
  "title" : "Transform to QFDD",
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
  "description" : "Transforms an eHealth Questionnaire resource to the DK-HL7 Questionnaire Form Definition Document (QFDD). The input Bundle contains an eHealth Questionnaire and Composition resource which reference the returned eHealth Questionnaire. The returned Bundle in case of no validation errors contains the FHIR DocumentReference containing the QFDD XML for the DK-HL7 Questionnaire Form Definition Document and an OperationOutcome will possible warnings. In case of validation errors the Bundle will only contain an OperationOutcome with the validation errors/warnings.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "transform-to-QFDD",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "bundle",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "The input FHIR Bundle that contains the eHealth Questionnaire and Composition resource which reference the eHealth Questionnaire to be transformed to QFDD XML.",
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
