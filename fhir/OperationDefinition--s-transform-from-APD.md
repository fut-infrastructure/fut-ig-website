# Transform from APD - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform from APD**

## OperationDefinition: Transform from APD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-APD | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:transform-from-APD |

 
Transforms a DK-HL7 Appointment Document (APD) XML document to a FHIR Appointment (ehealth-appointment profile) resource. The input FHIR DocumentReference (ehealth-documentreference profile) contains the APD XML document. The caller must ensure that the APD XML document is valid and adheres to the DK-HL7 Appointment Document profile. The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-from-APD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-from-APD",
  "version" : "10.0.1",
  "name" : "transform-from-APD",
  "title" : "Transform from APD",
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
  "description" : "Transforms a DK-HL7 Appointment Document (APD) XML document to a FHIR Appointment (ehealth-appointment profile) resource. The input FHIR DocumentReference (ehealth-documentreference profile) contains the APD XML document. The caller must ensure that the APD XML document is valid and adheres to the DK-HL7 Appointment Document profile. The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "transform-from-APD",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "documentReference",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "The input FHIR DocumentReference (ehealth-documentreference profile) that contains the APD XML document.",
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
