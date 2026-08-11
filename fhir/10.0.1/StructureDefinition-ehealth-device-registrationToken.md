# Registration token - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Registration token**

## Extension: Registration token 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-registrationToken | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:ehealth-device-registrationToken |

Registration token from a push notification service (e.g. FCM/APNs) for the patient's mobile device. Used by telemedicine solutions when sending push notifications.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-device](StructureDefinition-ehealth-device.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-device-registrationToken.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-device-registrationToken.csv), [Excel](StructureDefinition-ehealth-device-registrationToken.xlsx), [Schematron](StructureDefinition-ehealth-device-registrationToken.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-device-registrationToken",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-registrationToken",
  "version" : "10.0.1",
  "name" : "ehealth-device-registrationToken",
  "title" : "Registration token",
  "status" : "active",
  "date" : "2026-08-11T06:32:53+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Registration token from a push notification service (e.g. FCM/APNs) for the patient's mobile device. Used by telemedicine solutions when sending push notifications.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Element"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Registration token from the push notification service.",
      "definition" : "Registration token from a push notification service (e.g. FCM/APNs) for the patient's mobile device. Used by telemedicine solutions when sending push notifications."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-registrationToken"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
