# Intended audience - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Intended audience**

## Extension: Intended audience 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-intendedAudience |

Specifies that the resource is only intended for use in the specified organisations. Leave blank if the resource is intended for global use.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-actionguidance](StructureDefinition-ehealth-actionguidance.md), [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md), [ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md), [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md)...Show 3 more,[ehealth-library](StructureDefinition-ehealth-library.md),[ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md)and[ehealth-view](StructureDefinition-ehealth-view.md)
* Examples for this Extension: [Appointment/group-appointment01](Appointment-group-appointment01.md) and [Appointment/group-videoappointment01](Appointment-group-videoappointment01.md)
* Search Parameters using this Extension: [intended-audience](SearchParameter-ehealth-appointment-search-intended-audience.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-intendedAudience)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-intendedAudience.csv), [Excel](StructureDefinition-ehealth-intendedAudience.xlsx), [Schematron](StructureDefinition-ehealth-intendedAudience.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-intendedAudience",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience",
  "version" : "6.0.0",
  "name" : "ehealth-intendedAudience",
  "title" : "Intended audience",
  "status" : "active",
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
  "description" : "Specifies that the resource is only intended for use in the specified organisations. Leave blank if the resource is intended for global use.",
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
        "short" : "The intended audience of the resource",
        "definition" : "Specifies that the resource is only intended for use in the specified organisations. Leave blank if the resource is intended for global use."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
