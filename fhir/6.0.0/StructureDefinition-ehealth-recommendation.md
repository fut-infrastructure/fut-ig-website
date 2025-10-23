# recommendation - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **recommendation**

## Extension: recommendation 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-recommendation | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-recommendation |

Recommendation state of the plan definition

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-actionguidance](StructureDefinition-ehealth-actionguidance.md), [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md), [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md) and [ehealth-view](StructureDefinition-ehealth-view.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-recommendation)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-recommendation.csv), [Excel](StructureDefinition-ehealth-recommendation.xlsx), [Schematron](StructureDefinition-ehealth-recommendation.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-recommendation",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-recommendation",
  "version" : "6.0.0",
  "name" : "ehealth-recommendation",
  "title" : "recommendation",
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
  "description" : "Recommendation state of the plan definition",
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
        "short" : "Recommendation state of the plan definition",
        "definition" : "Recommendation state of the plan definition"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-recommendation"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/plandefinition-recommendation"
        }
      }
    ]
  }
}

```
