# Transform to APD - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transform to APD**

## OperationDefinition: Transform to APD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-APD | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:transform-to-APD |

 
Transforms a FHIR Appointment (ehealth-appointment profile) resource to a DK-HL7 Appointment Document (APD) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the APD XML document adhering to the DK-HL7 Appointment Document profile. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-transform-to-APD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-transform-to-APD",
  "version" : "10.0.1",
  "name" : "transform-to-APD",
  "title" : "Transform to APD",
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
  "description" : "Transforms a FHIR Appointment (ehealth-appointment profile) resource to a DK-HL7 Appointment Document (APD) XML document. The input FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR Appointment (ehealth-appointment profile) resource and referenced resources such as FHIR Organization. The returned FHIR DocumentReference contains the APD XML document adhering to the DK-HL7 Appointment Document profile.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "transform-to-APD",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "bundle",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "The input FHIR Bundle that contains the FHIR Composition referencing a FHIR Appointment (ehealth-appointment profile) resource to be transformed to APD XML.",
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
