# Answer condition - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Answer condition**

## Extension: Answer condition 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-answer-Condition | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-answer-Condition |

Defines the Answer condition for an answer option in the questionnaire.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Answer significance](StructureDefinition-ehealth-questionnaire-answerSignificance.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-answer-Condition)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-answer-Condition.csv), [Excel](StructureDefinition-ehealth-answer-Condition.xlsx), [Schematron](StructureDefinition-ehealth-answer-Condition.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-answer-Condition",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-answer-Condition",
  "version" : "6.0.0",
  "name" : "ehealth-answer-Condition",
  "title" : "Answer condition",
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
  "description" : "Defines the Answer condition for an answer option in the questionnaire.",
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
        "short" : "An Answer condition for an answer",
        "definition" : "Defines the Answer condition for an answer option in the questionnaire."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:value",
        "path" : "Extension.extension",
        "sliceName" : "value",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:value.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:value.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "value"
      },
      {
        "id" : "Extension.extension:value.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "boolean"
          },
          {
            "code" : "decimal"
          },
          {
            "code" : "integer"
          },
          {
            "code" : "string"
          },
          {
            "code" : "Coding"
          }
        ]
      },
      {
        "id" : "Extension.extension:operator",
        "path" : "Extension.extension",
        "sliceName" : "operator",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:operator.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:operator.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "operator"
      },
      {
        "id" : "Extension.extension:operator.value[x]",
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
        "id" : "Extension.extension:operator.value[x]:valueCode",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueCode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/questionnaire-enable-operator"
        }
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-answer-Condition"
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
