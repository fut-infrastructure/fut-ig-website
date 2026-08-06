# Ehealth provider affiliation - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ehealth provider affiliation**

## Extension: Ehealth provider affiliation 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provider-affiliation | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-provider-affiliation |

The Practitioner's association with a provider identifier (Danish: Ydernummer).

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-practitioner](StructureDefinition-ehealth-practitioner.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-provider-affiliation.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-provider-affiliation.csv), [Excel](StructureDefinition-ehealth-provider-affiliation.xlsx), [Schematron](StructureDefinition-ehealth-provider-affiliation.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-provider-affiliation",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provider-affiliation",
  "version" : "10.0.0",
  "name" : "ehealth-provider-affiliation",
  "title" : "Ehealth provider affiliation",
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
  "description" : "The Practitioner's association with a provider identifier (Danish: Ydernummer).",
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
      "short" : "Provider identifier affiliation.",
      "definition" : "The Practitioner's association with a provider identifier (Danish: Ydernummer)."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "min" : 1
    },
    {
      "id" : "Extension.extension:identifier",
      "path" : "Extension.extension",
      "sliceName" : "identifier",
      "short" : "Provider identifier (Danish: Ydernummer)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:identifier.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:identifier.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "identifier"
    },
    {
      "id" : "Extension.extension:identifier.value[x]",
      "path" : "Extension.extension.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Extension.extension:identifier.value[x]:valueIdentifier",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valueIdentifier",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "Extension.extension:identifier.value[x]:valueIdentifier.system",
      "path" : "Extension.extension.value[x].system",
      "min" : 1,
      "fixedUri" : "urn:oid:1.2.208.176.1.4"
    },
    {
      "id" : "Extension.extension:identifier.value[x]:valueIdentifier.value",
      "path" : "Extension.extension.value[x].value",
      "min" : 1
    },
    {
      "id" : "Extension.extension:period",
      "path" : "Extension.extension",
      "sliceName" : "period",
      "short" : "Validity period for the affiliation",
      "min" : 0,
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
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Extension.extension:period.value[x]:valuePeriod",
      "path" : "Extension.extension.value[x]",
      "sliceName" : "valuePeriod",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provider-affiliation"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
