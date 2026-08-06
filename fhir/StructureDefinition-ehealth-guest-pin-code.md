# Guest PIN code - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Guest PIN code**

## Extension: Guest PIN code 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-guest-pin-code | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-guest-pin-code |

The PIN code to be used to gain access to a video meeting. Is provided by the service, not the client, and is not updateable.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md) and [ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Extension: [Appointment/group-videoappointment01](Appointment-group-videoappointment01.md) and [Appointment/videoappointment01](Appointment-videoappointment01.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-guest-pin-code.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-guest-pin-code.csv), [Excel](StructureDefinition-ehealth-guest-pin-code.xlsx), [Schematron](StructureDefinition-ehealth-guest-pin-code.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-guest-pin-code",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-guest-pin-code",
  "version" : "10.0.0",
  "name" : "ehealth-guest-pin-code",
  "title" : "Guest PIN code",
  "status" : "active",
  "date" : "2026-08-06T13:29:38+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The PIN code to be used to gain access to a video meeting. Is provided by the service, not the client, and is not updateable.",
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
      "short" : "Guest PIN code",
      "definition" : "The PIN code to be used to gain access to a video meeting. Is provided by the service, not the client, and is not updateable."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-guest-pin-code"
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
