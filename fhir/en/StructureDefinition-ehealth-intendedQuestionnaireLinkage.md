# intendedQuestionnaireLinkage - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **intendedQuestionnaireLinkage**

## Extension: intendedQuestionnaireLinkage 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedQuestionnaireLinkage | *Version*:11.0.2 |
| Active as of 2026-10-29 | *Computable Name*:ehealth-intendedQuestionnaireLinkage |

References the QuestionnaireLinkage(s) intended to be used when presenting the questionnaire responses of the action/service request, e.g. for cross-questionnaire or cross-version comparison. On PlanDefinition.action (any nesting level) it designates the linkages recommended by the plan template author; $apply copies it to the created ServiceRequest.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md) and [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-intendedQuestionnaireLinkage.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and their representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-ehealth-intendedQuestionnaireLinkage.csv), [Excel](../StructureDefinition-ehealth-intendedQuestionnaireLinkage.xlsx), [Schematron](../StructureDefinition-ehealth-intendedQuestionnaireLinkage.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-intendedQuestionnaireLinkage",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedQuestionnaireLinkage",
  "version" : "11.0.2",
  "name" : "ehealth-intendedQuestionnaireLinkage",
  "title" : "intendedQuestionnaireLinkage",
  "status" : "active",
  "date" : "2026-10-29T09:18:06+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "References the QuestionnaireLinkage(s) intended to be used when presenting the questionnaire responses of the action/service request, e.g. for cross-questionnaire or cross-version comparison. On PlanDefinition.action (any nesting level) it designates the linkages recommended by the plan template author; $apply copies it to the created ServiceRequest.",
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
      "short" : "QuestionnaireLinkage(s) intended for presenting the questionnaire responses of the action/service request",
      "definition" : "References the QuestionnaireLinkage(s) intended to be used when presenting the questionnaire responses of the action/service request, e.g. for cross-questionnaire or cross-version comparison. On PlanDefinition.action (any nesting level) it designates the linkages recommended by the plan template author; $apply copies it to the created ServiceRequest."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedQuestionnaireLinkage"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnairelinkage"]
      }]
    }]
  }
}

```
