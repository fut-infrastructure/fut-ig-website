# Aggregate Group ID - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aggregate Group ID**

## Extension: Aggregate Group ID 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-aggregate-group-id | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:ehealth-aggregate-group-id |

Id that link a group of measurements together by an aggregate group id, intended use is for Aggregated Triage.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-aggregate-group-id.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-aggregate-group-id.csv), [Excel](StructureDefinition-ehealth-aggregate-group-id.xlsx), [Schematron](StructureDefinition-ehealth-aggregate-group-id.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-aggregate-group-id",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-aggregate-group-id",
  "version" : "10.0.1",
  "name" : "ehealth-aggregate-group-id",
  "title" : "Aggregate Group ID",
  "status" : "active",
  "date" : "2026-08-11T06:44:23+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Id that link a group of measurements together by an aggregate group id, intended use is for Aggregated Triage.",
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
      "short" : "Aggregate Group ID",
      "definition" : "Id that link a group of measurements together by an aggregate group id, intended use is for Aggregated Triage."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-aggregate-group-id"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
