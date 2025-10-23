# Transform to APD - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform to APD**

## OperationDefinition: Transform to APD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-APD | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:transform-to-APD |

 
Transforms a FHIR Appointment (ehealth-appointment profile) resource to a DK-HL7 Appointment Document (APD) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the APD XML document adhering to the DK-HL7 Appointment Document profile. 

URL: [base]/$transform-to-APD

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
  "id" : "-s-transform-to-APD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-APD",
  "version" : "6.0.0",
  "name" : "transform-to-APD",
  "title" : "Transform to APD",
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
  "description" : "Transforms a FHIR Appointment (ehealth-appointment profile) resource to a DK-HL7 Appointment Document (APD) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the APD XML document adhering to the DK-HL7 Appointment Document profile.",
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
  "code" : "transform-to-APD",
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
