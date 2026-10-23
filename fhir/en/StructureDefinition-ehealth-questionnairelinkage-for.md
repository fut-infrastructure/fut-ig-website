# Questionnaire linkage for - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire linkage for**

## Extension: Questionnaire linkage for 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnairelinkage-for | *Version*:11.0.1 |
| Active as of 2026-10-23 | *Computable Name*:ehealth-questionnairelinkage-for |

A questionnaire participating in the linkage, given as a normal (not version-specific) reference. Each questionnaire business version is a separate Questionnaire resource, so two versions of the same questionnaire may both participate in a linkage by referencing both resources. The reference SHOULD carry the referenced questionnaire's business identifier in Reference.identifier as an environment-independent handle.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-questionnairelinkage](StructureDefinition-ehealth-questionnairelinkage.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-questionnairelinkage-for.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and their representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-ehealth-questionnairelinkage-for.csv), [Excel](../StructureDefinition-ehealth-questionnairelinkage-for.xlsx), [Schematron](../StructureDefinition-ehealth-questionnairelinkage-for.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-questionnairelinkage-for",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnairelinkage-for",
  "version" : "11.0.1",
  "name" : "ehealth-questionnairelinkage-for",
  "title" : "Questionnaire linkage for",
  "status" : "active",
  "date" : "2026-10-23T09:30:26+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "A questionnaire participating in the linkage, given as a normal (not version-specific) reference. Each questionnaire business version is a separate Questionnaire resource, so two versions of the same questionnaire may both participate in a linkage by referencing both resources. The reference SHOULD carry the referenced questionnaire's business identifier in Reference.identifier as an environment-independent handle.",
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
      "short" : "Questionnaire participating in the linkage",
      "definition" : "A questionnaire participating in the linkage, given as a normal (not version-specific) reference. Each questionnaire business version is a separate Questionnaire resource, so two versions of the same questionnaire may both participate in a linkage by referencing both resources. The reference SHOULD carry the referenced questionnaire's business identifier in Reference.identifier as an environment-independent handle."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnairelinkage-for"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire"]
      }]
    }]
  }
}

```
