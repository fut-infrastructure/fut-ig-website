# Transform from QRD based on FHIR Questionnaire - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform from QRD based on FHIR Questionnaire**

## OperationDefinition: Transform from QRD based on FHIR Questionnaire 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QRD-based-on-questionnaire | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:transform-from-QRD-based-on-questionnaire |

 
Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input bundle must contain the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. And a FHIR Questionnaire resource. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-from-QRD-based-on-questionnaire",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QRD-based-on-questionnaire",
  "version" : "10.0.0",
  "name" : "transform-from-QRD-based-on-questionnaire",
  "title" : "Transform from QRD based on FHIR Questionnaire",
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
  "description" : "Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input bundle must contain the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. And a FHIR Questionnaire resource. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "transform-from-QRD-based-on-questionnaire",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "bundle",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "A FHIR Bundle that contains the QRD XML document and a FHIR Questionnaire resource.",
    "type" : "Bundle"
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
