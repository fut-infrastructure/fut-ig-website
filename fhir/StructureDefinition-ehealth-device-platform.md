# Device platform - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device platform**

## Extension: Device platform 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-platform | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:ehealth-device-platform |

Platform identifier for the patient's mobile device (e.g. iOS, Android). Used together with the registration token to route push notifications via FCM/APNs.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-device](StructureDefinition-ehealth-device.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-device-platform.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-device-platform.csv), [Excel](StructureDefinition-ehealth-device-platform.xlsx), [Schematron](StructureDefinition-ehealth-device-platform.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-device-platform",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-platform",
  "version" : "10.0.2",
  "name" : "ehealth-device-platform",
  "title" : "Device platform",
  "status" : "active",
  "date" : "2026-09-10T10:12:06+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Platform identifier for the patient's mobile device (e.g. iOS, Android). Used together with the registration token to route push notifications via FCM/APNs.",
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
      "short" : "Device platform (iOS/Android).",
      "definition" : "Platform identifier for the patient's mobile device (e.g. iOS, Android). Used together with the registration token to route push notifications via FCM/APNs."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-platform"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/device-platform"
      }
    }]
  }
}

```
