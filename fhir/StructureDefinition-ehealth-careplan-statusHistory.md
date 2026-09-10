# Careplan status history - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Careplan status history**

## Extension: Careplan status history 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan-statusHistory | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:ehealth-careplan-statusHistory |

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-careplan](StructureDefinition-ehealth-careplan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-careplan-statusHistory.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-careplan-statusHistory.csv), [Excel](StructureDefinition-ehealth-careplan-statusHistory.xlsx), [Schematron](StructureDefinition-ehealth-careplan-statusHistory.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-careplan-statusHistory",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan-statusHistory",
  "version" : "10.0.2",
  "name" : "ehealth-careplan-statusHistory",
  "title" : "Careplan status history",
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
      "short" : "Careplan status history"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "min" : 2
    },
    {
      "id" : "Extension.extension:status",
      "path" : "Extension.extension",
      "sliceName" : "status",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:status.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:status.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "status"
    },
    {
      "id" : "Extension.extension:status.value[x]",
      "path" : "Extension.extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept"
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
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan-statusHistory"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
