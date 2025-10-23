# Transform from APD - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform from APD**

## OperationDefinition: Transform from APD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-APD | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:transform-from-APD |

 
Transforms a DK-HL7 Appointment Document (APD) XML document to a FHIR Appointment (ehealth-appointment profile) resource. The input FHIR DocumentReference (ehealth-documentreference profile) contains the APD XML document. The caller must ensure that the APD XML document is valid and adheres to the DK-HL7 Appointment Document profile. The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource. 

URL: [base]/$transform-from-APD

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
  "id" : "-s-transform-from-APD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-APD",
  "version" : "6.0.0",
  "name" : "transform-from-APD",
  "title" : "Transform from APD",
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
  "description" : "Transforms a DK-HL7 Appointment Document (APD) XML document to a FHIR Appointment (ehealth-appointment profile) resource. The input FHIR DocumentReference (ehealth-documentreference profile) contains the APD XML document. The caller must ensure that the APD XML document is valid and adheres to the DK-HL7 Appointment Document profile. The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource.",
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
  "code" : "transform-from-APD",
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
