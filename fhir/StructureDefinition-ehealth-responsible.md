# Responsible - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Responsible**

## Extension: Responsible 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-responsible |

Individuals, careteam and/or organization who are responsible in the given context

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md), [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md) and [ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Extension: [Appointment/appointment01](Appointment-appointment01.md), [Appointment/group-appointment01](Appointment-group-appointment01.md), [Appointment/group-videoappointment01](Appointment-group-videoappointment01.md) and [Appointment/videoappointment01](Appointment-videoappointment01.md)
* Search Parameters using this Extension: [responsible](SearchParameter-ehealth-appointment-search-responsible.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-responsible)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-responsible.csv), [Excel](StructureDefinition-ehealth-responsible.xlsx), [Schematron](StructureDefinition-ehealth-responsible.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-responsible",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible",
  "version" : "6.0.0",
  "name" : "ehealth-responsible",
  "title" : "Responsible",
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
  "description" : "Individuals, careteam and/or organization who are responsible in the given context",
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
        "short" : "Responsible careteam/practitioner",
        "definition" : "Individuals, careteam and/or organization who are responsible in the given context"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible"
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
