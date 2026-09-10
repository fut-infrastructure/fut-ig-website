# What the consent is related to - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **What the consent is related to**

## Extension: What the consent is related to 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent-affiliation | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:ehealth-consent-affiliation |

Which resources the consent is affiliated with, for instance EpisodeOfCare and CarePlan

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-consent](StructureDefinition-ehealth-consent.md)
* Examples for this Extension: [Consent/23](Consent-23.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-consent-affiliation.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-consent-affiliation.csv), [Excel](StructureDefinition-ehealth-consent-affiliation.xlsx), [Schematron](StructureDefinition-ehealth-consent-affiliation.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-consent-affiliation",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent-affiliation",
  "version" : "10.0.2",
  "name" : "ehealth-consent-affiliation",
  "title" : "What the consent is related to",
  "status" : "active",
  "date" : "2026-09-10T10:04:36+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Which resources the consent is affiliated with, for instance EpisodeOfCare and CarePlan",
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
      "short" : "Affiliation to EpisodeOfCare and optionally CarePlan",
      "definition" : "Which resources the consent is affiliated with, for instance EpisodeOfCare and CarePlan"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent-affiliation"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan"],
        "aggregation" : ["referenced"]
      }]
    }]
  }
}

```
