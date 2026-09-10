# Telecom purpose - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Telecom purpose**

## Extension: Telecom purpose 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-telecom-purpose | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:ehealth-telecom-purpose |

The purpose of a telecom contact point on a RelatedPerson.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-relatedperson](StructureDefinition-ehealth-relatedperson.md)
* Examples for this Extension: [RelatedPerson/relatedperson-videosms](RelatedPerson-relatedperson-videosms.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-telecom-purpose.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-telecom-purpose.csv), [Excel](StructureDefinition-ehealth-telecom-purpose.xlsx), [Schematron](StructureDefinition-ehealth-telecom-purpose.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-telecom-purpose",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-telecom-purpose",
  "version" : "10.0.2",
  "name" : "ehealth-telecom-purpose",
  "title" : "Telecom purpose",
  "status" : "active",
  "date" : "2026-09-10T10:12:06+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The purpose of a telecom contact point on a RelatedPerson.",
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
    "expression" : "RelatedPerson.telecom"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Purpose of telecom contact point",
      "definition" : "The purpose of a telecom contact point on a RelatedPerson."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-telecom-purpose"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Coding"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/telecom-purpose"
      }
    }]
  }
}

```
