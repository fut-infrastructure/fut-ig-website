# Questionnaire linkage item - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire linkage item**

## Extension: Questionnaire linkage item 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnairelinkage-item | *Version*:11.0.3 |
| Active as of 2026-10-29 | *Computable Name*:ehealth-questionnairelinkage-item |

A group of questions, across the questionnaires participating in the linkage, that are considered clinically meaningful to juxtapose (for example a patient's answer shown side by side with a relative's answer to the corresponding question). A group may span two or more questionnaires, need not cover all questionnaires in the linkage, and may link questions within a single questionnaire (for example across business versions).

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-questionnairelinkage](StructureDefinition-ehealth-questionnairelinkage.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-questionnairelinkage-item.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and their representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-ehealth-questionnairelinkage-item.csv), [Excel](../StructureDefinition-ehealth-questionnairelinkage-item.xlsx), [Schematron](../StructureDefinition-ehealth-questionnairelinkage-item.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-questionnairelinkage-item",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnairelinkage-item",
  "version" : "11.0.3",
  "name" : "ehealth-questionnairelinkage-item",
  "title" : "Questionnaire linkage item",
  "status" : "active",
  "date" : "2026-10-29T11:45:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "A group of questions, across the questionnaires participating in the linkage, that are considered clinically meaningful to juxtapose (for example a patient's answer shown side by side with a relative's answer to the corresponding question). A group may span two or more questionnaires, need not cover all questionnaires in the linkage, and may link questions within a single questionnaire (for example across business versions).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Element"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Group of linked questions",
      "definition" : "A group of questions, across the questionnaires participating in the linkage, that are considered clinically meaningful to juxtapose (for example a patient's answer shown side by side with a relative's answer to the corresponding question). A group may span two or more questionnaires, need not cover all questionnaires in the linkage, and may link questions within a single questionnaire (for example across business versions)."
    },
    {
      "id" : "Extension.extension:description",
      "path" : "Extension.extension",
      "sliceName" : "description",
      "short" : "Optional user-entered label of the group",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:description.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:description.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "description"
    },
    {
      "id" : "Extension.extension:description.value[x]",
      "path" : "Extension.extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.extension:linkage",
      "path" : "Extension.extension",
      "sliceName" : "linkage",
      "short" : "One linked question, identified by questionnaire and linkId",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Extension.extension:linkage.extension",
      "path" : "Extension.extension.extension",
      "min" : 2
    },
    {
      "id" : "Extension.extension:linkage.extension:questionnaire",
      "path" : "Extension.extension.extension",
      "sliceName" : "questionnaire",
      "short" : "The questionnaire containing the linked question. Must be one of the questionnaires referenced in the questionnaireLinkageFor extension",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:linkage.extension:questionnaire.extension",
      "path" : "Extension.extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:linkage.extension:questionnaire.url",
      "path" : "Extension.extension.extension.url",
      "fixedUri" : "questionnaire"
    },
    {
      "id" : "Extension.extension:linkage.extension:questionnaire.value[x]",
      "path" : "Extension.extension.extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire"]
      }]
    },
    {
      "id" : "Extension.extension:linkage.extension:linkId",
      "path" : "Extension.extension.extension",
      "sliceName" : "linkId",
      "short" : "The linkId of the linked question (Questionnaire.item.linkId) in the referenced questionnaire",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:linkage.extension:linkId.extension",
      "path" : "Extension.extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:linkage.extension:linkId.url",
      "path" : "Extension.extension.extension.url",
      "fixedUri" : "linkId"
    },
    {
      "id" : "Extension.extension:linkage.extension:linkId.value[x]",
      "path" : "Extension.extension.extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.extension:linkage.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "linkage"
    },
    {
      "id" : "Extension.extension:linkage.value[x]",
      "path" : "Extension.extension.value[x]",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnairelinkage-item"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
