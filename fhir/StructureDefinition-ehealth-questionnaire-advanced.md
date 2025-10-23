# ehealth-questionnaire-advanced - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-questionnaire-advanced**

## Resource Profile: ehealth-questionnaire-advanced 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-advanced | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-questionnaire-advanced |

# Introduction

QuestionnaireAdvanced inherits all functionality from EHealthQuestionnaire while adding the option to have mathematical calculations as part of the Questionnaire.

# Scope and Usage

Same scope and usage as the standart Questionnaire in the eHealth infrastructure.

### Setting minimal and maximal number of permitted choices

A question where possible answers are given as a list of options (of `item.type` set to `choice`) can allow multiple choices by setting `item.repeats` to `true`. When no further constraints are set, `item.repeats` set to `true` means that any number of the options can be provided as answer to the question in a QuestionnaireResponse. The standard extensions `item.questionnaire-minOccurs` and `item.questionnaire-maxOccurs` can be used to set such further constraints.

* `item.questionnaire-minOccurs` sets the minimum number of answers allowed, for instance 2 (of the number of options, say, 5). The element shall be set only when its value is greater than one.
* `item.questionnaire-maxOccurs` sets the maximum number of answers allowed, for instance 3 (of the number of options, say 5). The element shall be set only when its value is greater than one.

When exactly one answer shall be required, `item.requied` shall be set to `true` and `item.repeats` shall be set to `false`. When exactly one answer is permitted, `item.requied` shall be set to `false` and `item.repeats` shall be set to `false`. In these cases, the `minOCcurs` and `maxOccurs` shall not be used.

### Feedback to the Patient

The Questionnaire resource supports the Question Feedback Pattern from [DK QFDD questionnaires](http://svn.medcom.dk/svn/releases/Standarder/HL7/PRO/QFDD/Dokumentation/DK-QFDD-v1.1.pdf). This enables immediate feedback to the patient upon answering a question.

The feedback is pre-defined in the Questionnaire resource using the `item.feedback` element, so that for each item a patient feedback can be prepared. The feedback will be shown to the patient if the patient's answer to an item lies within a given interval. The mechanism only works for questions which can be answered with a numeric value. The interval is defined by the `min` and a `max` elements of the feedback extension. If the Patient answers the item with a numeric value in the interval given by min-max then the `value` of the feedback extension is intended to be shown to the Patient.

### Recommendation

In the `recommendation` element, a questionnaire can optionally hold a "degree of recommendation" intended to aid the Practitioner in deciding whether or not the Questionnaire should be applied to the Patient.

### Calculated Expressions

In the EHealthQuestionnaireAdvanced a `calculatedExpression` can be added to an Item in the questionnaire. This expression can be set to take inputs from `ordinalValues` or `variables` which can then be processed by the expression. By setting the `usageMode` the Practitioner can decide when to display the calculation, for example whether it should be visible right away or only when all variables have been entered.

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-questionnaire-advanced)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-questionnaire-advanced.csv), [Excel](StructureDefinition-ehealth-questionnaire-advanced.xlsx), [Schematron](StructureDefinition-ehealth-questionnaire-advanced.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-questionnaire-advanced",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-advanced",
  "version" : "6.0.0",
  "name" : "ehealth-questionnaire-advanced",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "objimpl",
      "uri" : "http://hl7.org/fhir/object-implementation",
      "name" : "Object Implementation Information"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Questionnaire",
  "baseDefinition" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Questionnaire",
        "path" : "Questionnaire"
      },
      {
        "id" : "Questionnaire.extension:variable",
        "path" : "Questionnaire.extension",
        "sliceName" : "variable",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/variable"]
          }
        ]
      },
      {
        "id" : "Questionnaire.item.extension:calculatedExpression",
        "path" : "Questionnaire.item.extension",
        "sliceName" : "calculatedExpression",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-calculatedExpression"
            ]
          }
        ]
      },
      {
        "id" : "Questionnaire.item.extension:usageMode",
        "path" : "Questionnaire.item.extension",
        "sliceName" : "usageMode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/questionnaire-usageMode"
            ]
          }
        ]
      },
      {
        "id" : "Questionnaire.item.answerOption.extension:ordinalValue",
        "path" : "Questionnaire.item.answerOption.extension",
        "sliceName" : "ordinalValue",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/ordinalValue"]
          }
        ]
      }
    ]
  }
}

```
