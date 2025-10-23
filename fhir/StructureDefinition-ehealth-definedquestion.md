# ehealth-definedquestion - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-definedquestion**

## Resource Profile: ehealth-definedquestion 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-definedquestion | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-definedquestion |

# Introduction

The ehealth-definedquestion profile of StructureDefinition represents the concept of a DefinedQuestion. A DefinedQuestion is a standalone representation of a question and possibly its answer options that can be used in one or more Questionnaire resources. Although a Questionnaire can be constructed without being based on any DefinedQuestion, it is expected that a catalogue of DefinedQuestion will emerge over time and the particular DefinedQuestion will be reused in multiple Questionnaire.

The DefinedQuestion concept is based on ideas described in `https://www.hl7.org/fhir/stu3/questionnaire.html#2.38.5.4`. Whether a DefinedQuestion is referenced in a Questionnaire or not, it is the Questionnaire's own definition which takes precedence.

# Scope and Usage

In the eHealth Infrastructure, a reference to a DefinedQuestion by `url` in a Questionnaire question is used to enable robust extraction in automated processing rule(s) of answer(s) to that question from corresponding QuestionnaireResponse. An answer in a QuestionnaireResponse is already unambiguously related to a question in a Questionnaire through the question's `linkId`. If the same question is used in another Questionnaire it will likely end up with a different `linkId` in that Questionnaire. By referencing a DefinedQuestion by its `url` in `Questionnaire.item.definition`, the same question can be referenced unambiguously in multiple Questionnaire.

Multiple DefinedQuestion with identical `url` can coexist as long as they have differing business versions in `version`. This way, different versions of the same question can have different answer options.

When using a DefinedQuestion in a Questionnaire, the `Questionnaire.item.definition` element must contain the `url` followed by a pipe and the business version thereby referencing a versioned DefinedQuestion.

An automated processing rule captured in a Library resource can, when extracting answer(s) to the question in a QuestionnaireResponse, choose to search for either the versioned reference or the version-less reference to a DefinedQuestion. The latter can be obtained by disregarding the pipe and business version in the rule logic.

The actual details of the DefinedQuestion's question and possible answers are described in the `ElementDefinition` found in either `snapshot.element` or `differential.element`.

**Usages:**

* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md) and [questionnaire](CapabilityStatement-questionnaire.md)
* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-definedquestion)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-definedquestion.csv), [Excel](StructureDefinition-ehealth-definedquestion.xlsx), [Schematron](StructureDefinition-ehealth-definedquestion.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-definedquestion",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-definedquestion",
  "version" : "6.0.0",
  "name" : "ehealth-definedquestion",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "iso11179",
      "uri" : "http://metadata-standards.org/11179/",
      "name" : "ISO 11179"
    },
    {
      "identity" : "objimpl",
      "uri" : "http://hl7.org/fhir/object-implementation",
      "name" : "Object Implementation Information"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "StructureDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/StructureDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "StructureDefinition",
        "path" : "StructureDefinition"
      }
    ]
  }
}

```
