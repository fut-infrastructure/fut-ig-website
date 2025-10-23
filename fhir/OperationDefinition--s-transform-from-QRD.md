# Transform from QRD - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform from QRD**

## OperationDefinition: Transform from QRD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QRD | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:transform-from-QRD |

 
Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource. 

URL: [base]/$transform-from-QRD

### Parameters

* **Use**: IN
  * **Name**: documentReference
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [DocumentReference](http://hl7.org/fhir/R4/documentreference.html)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: bundle
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-from-QRD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QRD",
  "version" : "6.0.0",
  "name" : "transform-from-QRD",
  "title" : "Transform from QRD",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:34:08+00:00",
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
  "description" : "Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input FHIR DocumentReference contains the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource.",
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
  "code" : "transform-from-QRD",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "documentReference",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "DocumentReference"
    },
    {
      "name" : "bundle",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Bundle"
    }
  ]
}

```
