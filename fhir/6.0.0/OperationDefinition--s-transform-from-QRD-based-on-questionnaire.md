# Transform from QRD based on FHIR Questionnaire - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform from QRD based on FHIR Questionnaire**

## OperationDefinition: Transform from QRD based on FHIR Questionnaire 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QRD-based-on-questionnaire | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:transform-from-QRD-based-on-questionnaire |

 
Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input bundle must contain the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. And a FHIR Questionnaire resource. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource. 

URL: [base]/$transform-from-QRD-based-on-questionnaire

### Parameters

* **Use**: IN
  * **Name**: bundle
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
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
  "id" : "-s-transform-from-QRD-based-on-questionnaire",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-QRD-based-on-questionnaire",
  "version" : "6.0.0",
  "name" : "transform-from-QRD-based-on-questionnaire",
  "title" : "Transform from QRD based on FHIR Questionnaire",
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
  "description" : "Transforms a DK-HL7 Questionnaire Response Document (QRD) XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource. The input bundle must contain the QRD XML document adhering to the DK-HL7 Questionnaire Response Document profile. And a FHIR Questionnaire resource. The returned FHIR Bundle contains FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource.",
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
  "code" : "transform-from-QRD-based-on-questionnaire",
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
      "name" : "bundle",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Bundle"
    }
  ]
}

```
