# Performer - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Performer**

## Extension: Performer 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performer | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-performer |

The actual performer in an appointment, eg. teacher in a group class

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md), [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md) and [ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Extension: [Appointment/group-appointment01](Appointment-group-appointment01.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-performer)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-performer.csv), [Excel](StructureDefinition-ehealth-performer.xlsx), [Schematron](StructureDefinition-ehealth-performer.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-performer",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performer",
  "version" : "6.0.0",
  "name" : "ehealth-performer",
  "title" : "Performer",
  "status" : "active",
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
  "description" : "The actual performer in an appointment, eg. teacher in a group class",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Element"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Performer",
        "definition" : "The actual performer in an appointment, eg. teacher in a group class"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performer"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
