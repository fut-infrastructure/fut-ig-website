# Transform to QRD - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform to QRD**

## OperationDefinition: Transform to QRD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-QRD | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:transform-to-QRD |

 
Transforms a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource to a DK-HL7 Questionnaire Response Document (QRD) XML document. The input FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse resource. a FHIR Questionnaire resource. The bundle must also contain a FHIR DocumentReference containing a QFDD xml file (base64 encoded)The returned FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-to-QRD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-QRD",
  "version" : "10.0.0",
  "name" : "transform-to-QRD",
  "title" : "Transform to QRD",
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
  "description" : "Transforms a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource to a DK-HL7 Questionnaire Response Document (QRD) XML document. The input FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse resource. a FHIR Questionnaire resource. The bundle must also contain a FHIR DocumentReference containing a QFDD xml file (base64 encoded)The returned FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "transform-to-QRD",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "bundle",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "A FHIR Bundle containing the FHIR Composition resource, referencing a FHIR QuestionnaireResponse, a FHIR Questionnaire and a FHIR DocumentReference containing the QFDD XML file (base64 encoded).",
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
