# Action Trigger - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Action Trigger**

## Extension: Action Trigger 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionTrigger | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-actionTrigger |

Defines a reaction along with its trigger conditions.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-actionTrigger)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-actionTrigger.csv), [Excel](StructureDefinition-ehealth-actionTrigger.xlsx), [Schematron](StructureDefinition-ehealth-actionTrigger.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-actionTrigger",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionTrigger",
  "version" : "6.0.0",
  "name" : "ehealth-actionTrigger",
  "title" : "Action Trigger",
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
  "description" : "Defines a reaction along with its trigger conditions.",
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
        "short" : "Reaction and trigger conditions",
        "definition" : "Defines a reaction along with its trigger conditions."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 3
      },
      {
        "id" : "Extension.extension:triggerCondition",
        "path" : "Extension.extension",
        "sliceName" : "triggerCondition",
        "min" : 1,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-triggerCondition"
            ]
          }
        ]
      },
      {
        "id" : "Extension.extension:triggerBehavior",
        "path" : "Extension.extension",
        "sliceName" : "triggerBehavior",
        "short" : "Controls how multiple triggerCondition must be met",
        "definition" : "Controls how multiple triggerCondition must be met - all or one-or-more.",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:triggerBehavior.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:triggerBehavior.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "triggerBehavior"
      },
      {
        "id" : "Extension.extension:triggerBehavior.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.extension:triggerBehavior.value[x]:valueCode",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueCode",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/trigger-behavior"
        }
      },
      {
        "id" : "Extension.extension:offset",
        "path" : "Extension.extension",
        "sliceName" : "offset",
        "short" : "Offset applied to timing bounds",
        "definition" : "Controls offset applied to timing bounds of the current action when trigger conditions are met and reaction triggered.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:offset.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:offset.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "offset"
      },
      {
        "id" : "Extension.extension:offset.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Extension.extension:offset.value[x]:valueDuration",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueDuration",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Duration"
          }
        ]
      },
      {
        "id" : "Extension.extension:action",
        "path" : "Extension.extension",
        "sliceName" : "action",
        "short" : "Reaction to perform on current action",
        "definition" : "Reaction to perform on current action when trigger conditions are met",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:action.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:action.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "action"
      },
      {
        "id" : "Extension.extension:action.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.extension:action.value[x]:valueCoding",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueCoding",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/action"
        }
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionTrigger"
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
