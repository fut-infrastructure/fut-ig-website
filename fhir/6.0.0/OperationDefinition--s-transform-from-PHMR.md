# Transform from PHMR - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform from PHMR**

## OperationDefinition: Transform from PHMR 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-PHMR | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:transform-from-PHMR |

 
Transforms a DK-HL7 Personal Health Monitoring Report (PHMR) XML document to FHIR Observation (ehealth-observation profile) resource. The input FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing.one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization. 

URL: [base]/$transform-from-PHMR

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
  "id" : "-s-transform-from-PHMR",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-PHMR",
  "version" : "6.0.0",
  "name" : "transform-from-PHMR",
  "title" : "Transform from PHMR",
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
  "description" : "Transforms a DK-HL7 Personal Health Monitoring Report (PHMR) XML document to FHIR Observation (ehealth-observation profile) resource. The input FHIR DocumentReference contains the PHMR XML document adhering to the DK-HL7 Personal Health Monitoring Report profile The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing.one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization.",
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
  "code" : "transform-from-PHMR",
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
