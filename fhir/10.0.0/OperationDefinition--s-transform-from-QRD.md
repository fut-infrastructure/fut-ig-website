# Transform from QRD - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform from QRD**

## OperationDefinition: Transform from QRD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QRD | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:transform-from-QRD |

 
Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-from-QRD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QRD",
  "version" : "10.0.0",
  "name" : "transform-from-QRD",
  "title" : "Transform from QRD",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-06T13:17:54+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "transform-from-QRD",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "documentReference",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "A FHIR DocumentReference that contains the QRD XML document.",
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
