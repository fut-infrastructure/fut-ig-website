# Trigger Condition - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Trigger Condition**

## Extension: Trigger Condition 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-triggerCondition | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-triggerCondition |

Conditions for a triggering action to be met for other action to be triggered.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Action Trigger](StructureDefinition-ehealth-actionTrigger.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-triggerCondition)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-triggerCondition.csv), [Excel](StructureDefinition-ehealth-triggerCondition.xlsx), [Schematron](StructureDefinition-ehealth-triggerCondition.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-triggerCondition",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-triggerCondition",
  "version" : "6.0.0",
  "name" : "ehealth-triggerCondition",
  "title" : "Trigger Condition",
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
  "description" : "Conditions for a triggering action to be met for other action to be triggered.",
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
        "short" : "Conditions for a triggering action",
        "definition" : "Conditions for a triggering action to be met for other action to be triggered."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:actionId",
        "path" : "Extension.extension",
        "sliceName" : "actionId",
        "short" : "What action is triggering action",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:actionId.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:actionId.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "actionId"
      },
      {
        "id" : "Extension.extension:actionId.value[x]",
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
        "id" : "Extension.extension:actionId.value[x]:valueId",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueId",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "id"
          }
        ]
      },
      {
        "id" : "Extension.extension:count",
        "path" : "Extension.extension",
        "sliceName" : "count",
        "short" : "Amount of measurements for triggering action.",
        "definition" : "Amount of measurements (Observation, QuestionnaireResponse or Media) for triggering action that must have been submitted.",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:count.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:count.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "count"
      },
      {
        "id" : "Extension.extension:count.value[x]",
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
        "id" : "Extension.extension:count.value[x]:valueInteger",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueInteger",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "integer"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-triggerCondition"
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
