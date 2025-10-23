# Modified role - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modified role**

## Extension: Modified role 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-modifier-role |

This is a modifier role that can hold a role and a reference to the item who has the role. Ex. owner + a reference to the owner organization.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-actionguidance](StructureDefinition-ehealth-actionguidance.md), [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md), [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md), [ehealth-library](StructureDefinition-ehealth-library.md)...Show 3 more,[ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md),[ehealth-questionnaire](StructureDefinition-ehealth-questionnaire.md)and[ehealth-view](StructureDefinition-ehealth-view.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-modifier-role)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-modifier-role.csv), [Excel](StructureDefinition-ehealth-modifier-role.xlsx), [Schematron](StructureDefinition-ehealth-modifier-role.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-modifier-role",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role",
  "version" : "6.0.0",
  "name" : "ehealth-modifier-role",
  "title" : "Modified role",
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
  "description" : "This is a modifier role that can hold a role and a reference to the item who has the role. Ex. owner + a reference to the owner organization.",
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
        "short" : "Modifier role",
        "definition" : "This is a modifier role that can hold a role and a reference to the item who has the role. Ex. owner + a reference to the owner organization."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:reference",
        "path" : "Extension.extension",
        "sliceName" : "reference",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:reference.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:reference.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "reference"
      },
      {
        "id" : "Extension.extension:reference.value[x]",
        "path" : "Extension.extension.value[x]",
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
      },
      {
        "id" : "Extension.extension:role",
        "path" : "Extension.extension",
        "sliceName" : "role",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:role.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:role.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "role"
      },
      {
        "id" : "Extension.extension:role.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/modifier-role"
        }
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
