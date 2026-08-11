# Transform from QFDD - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform from QFDD**

## OperationDefinition: Transform from QFDD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QFDD | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:transform-from-QFDD |

 
Transforms the DK-HL7 Questionnaire Form Definition Document (QFDD) to an eHealth Questionnaire resource. The input FHIR DocumentReference contains QFDD XML for the DK-HL7 Questionnaire Form Definition Document. The returned Bundle contains the eHealth Questionnaire and Composition resource which reference the returned eHealth Questionnaire. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-from-QFDD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QFDD",
  "version" : "10.0.1",
  "name" : "transform-from-QFDD",
  "title" : "Transform from QFDD",
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
  "description" : "Transforms the DK-HL7 Questionnaire Form Definition Document (QFDD) to an eHealth Questionnaire resource. The input FHIR DocumentReference contains QFDD XML for the DK-HL7 Questionnaire Form Definition Document. The returned Bundle contains the eHealth Questionnaire and Composition resource which reference the returned eHealth Questionnaire.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "transform-from-QFDD",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "documentReference",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "The input FHIR DocumentReference that contains the QFDD XML document.",
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
