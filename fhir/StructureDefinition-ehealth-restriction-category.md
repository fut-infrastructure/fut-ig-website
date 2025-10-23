# Restriction category - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Restriction category**

## Extension: Restriction category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-restriction-category |

The resource is intended for certain category of workflow/responsibility only

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-communication](StructureDefinition-ehealth-communication.md), [ehealth-message](StructureDefinition-ehealth-message.md) and [ehealth-task](StructureDefinition-ehealth-task.md)
* Examples for this Extension: [Communication/message01](Communication-message01.md)
* Search Parameters using this Extension: [restrictionCategory](SearchParameter-ehealth-communication-search-restrictionCategory.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-restriction-category)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-restriction-category.csv), [Excel](StructureDefinition-ehealth-restriction-category.xlsx), [Schematron](StructureDefinition-ehealth-restriction-category.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-restriction-category",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category",
  "version" : "6.0.0",
  "name" : "ehealth-restriction-category",
  "title" : "Restriction category",
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
  "description" : "The resource is intended for certain category of workflow/responsibility only",
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
        "short" : "Restriction category",
        "definition" : "The resource is intended for certain category of workflow/responsibility only"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/restriction-category"
        }
      }
    ]
  }
}

```
