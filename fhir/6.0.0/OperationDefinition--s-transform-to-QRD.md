# Transform to QRD - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform to QRD**

## OperationDefinition: Transform to QRD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-QRD | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:transform-to-QRD |

 
Transforms a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource to a DK-HL7 Questionnaire Response Document (QRD) XML document. The input FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse resource. a FHIR Questionnaire resource. The bundle must also contain a FHIR DocumentReference containing a QFDD xml file (base64 encoded)The returned FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. 

URL: [base]/$transform-to-QRD

### Parameters

* **Use**: IN
  * **Name**: bundle
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: documentReference
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [DocumentReference](http://hl7.org/fhir/R4/documentreference.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-to-QRD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-QRD",
  "version" : "6.0.0",
  "name" : "transform-to-QRD",
  "title" : "Transform to QRD",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:25:37+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Transforms a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource to a DK-HL7 Questionnaire Response Document (QRD) XML document. The input FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse resource. a FHIR Questionnaire resource. The bundle must also contain a FHIR DocumentReference containing a QFDD xml file (base64 encoded)The returned FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "affectsState" : false,
  "code" : "transform-to-QRD",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "bundle",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Bundle"
    },
    {
      "name" : "documentReference",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "DocumentReference"
    }
  ]
}

```
