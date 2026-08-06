# Managing organization - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Managing organization**

## Extension: Managing organization 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-managing-organization | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-managing-organization |

An organization that has assumed responsibility for the episode of care during a given period. Replaces the standard EpisodeOfCare.managingOrganization to allow multiple managing organizations over time.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md)
* Examples for this Extension: [EpisodeOfCare/42](EpisodeOfCare-42.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-managing-organization.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-managing-organization.csv), [Excel](StructureDefinition-ehealth-managing-organization.xlsx), [Schematron](StructureDefinition-ehealth-managing-organization.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-managing-organization",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-managing-organization",
  "version" : "10.0.0",
  "name" : "ehealth-managing-organization",
  "title" : "Managing organization",
  "status" : "active",
  "date" : "2026-08-06T13:29:38+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "An organization that has assumed responsibility for the episode of care during a given period. Replaces the standard EpisodeOfCare.managingOrganization to allow multiple managing organizations over time.",
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
      "short" : "Managing organization for a period",
      "definition" : "An organization that has assumed responsibility for the episode of care during a given period. Replaces the standard EpisodeOfCare.managingOrganization to allow multiple managing organizations over time."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "min" : 2
    },
    {
      "id" : "Extension.extension:organisation",
      "path" : "Extension.extension",
      "sliceName" : "organisation",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:organisation.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:organisation.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "organisation"
    },
    {
      "id" : "Extension.extension:organisation.value[x]",
      "path" : "Extension.extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"],
        "aggregation" : ["referenced"]
      }]
    },
    {
      "id" : "Extension.extension:period",
      "path" : "Extension.extension",
      "sliceName" : "period",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:period.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:period.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "period"
    },
    {
      "id" : "Extension.extension:period.value[x]",
      "path" : "Extension.extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "Extension.extension:period.value[x].start",
      "path" : "Extension.extension.value[x].start",
      "min" : 1
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-managing-organization"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
