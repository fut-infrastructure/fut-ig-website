# Answer significance - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Answer significance**

## Extension: Answer significance 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-questionnaire-answerSignificance |

Defines the Answer significance for an answer option in the questionnaire.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-questionnaire](StructureDefinition-ehealth-questionnaire.md) and [Questionnaire response finding basis](StructureDefinition-ehealth-questionnaireresponse-finding-basis.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-questionnaire-answerSignificance)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-questionnaire-answerSignificance.csv), [Excel](StructureDefinition-ehealth-questionnaire-answerSignificance.xlsx), [Schematron](StructureDefinition-ehealth-questionnaire-answerSignificance.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-questionnaire-answerSignificance",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance",
  "version" : "6.0.0",
  "name" : "ehealth-questionnaire-answerSignificance",
  "title" : "Answer significance",
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
  "description" : "Defines the Answer significance for an answer option in the questionnaire.",
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
        "short" : "The Answer significance for an answer",
        "definition" : "Defines the Answer significance for an answer option in the questionnaire."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:answerCondition",
        "path" : "Extension.extension",
        "sliceName" : "answerCondition",
        "min" : 1,
        "max" : "2",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-answer-Condition"
            ]
          }
        ]
      },
      {
        "id" : "Extension.extension:significance",
        "path" : "Extension.extension",
        "sliceName" : "significance",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:significance.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:significance.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "significance"
      },
      {
        "id" : "Extension.extension:significance.value[x]",
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
        "id" : "Extension.extension:significance.value[x]:valueCoding",
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
          "valueSet" : "http://ehealth.sundhed.dk/vs/questionnaire-item-significance-indicator"
        }
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
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
