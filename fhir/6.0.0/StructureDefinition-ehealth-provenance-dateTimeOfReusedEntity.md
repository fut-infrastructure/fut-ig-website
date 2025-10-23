# Date/time of re-used entity - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Date/time of re-used entity**

## Extension: Date/time of re-used entity 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance-dateTimeOfReusedEntity | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-provenance-dateTimeOfReusedEntity |

Contains date and time of Reused Entity

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-provenance](StructureDefinition-ehealth-provenance.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-provenance-dateTimeOfReusedEntity)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-provenance-dateTimeOfReusedEntity.csv), [Excel](StructureDefinition-ehealth-provenance-dateTimeOfReusedEntity.xlsx), [Schematron](StructureDefinition-ehealth-provenance-dateTimeOfReusedEntity.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-provenance-dateTimeOfReusedEntity",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance-dateTimeOfReusedEntity",
  "version" : "6.0.0",
  "name" : "ehealth-provenance-dateTimeOfReusedEntity",
  "title" : "Date/time of re-used entity",
  "status" : "active",
  "date" : "2025-10-23T10:25:37+00:00",
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
  "description" : "Contains date and time of Reused Entity",
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
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Element"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Contains date and time of Reused Entity",
        "definition" : "Contains date and time of Reused Entity"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance-dateTimeOfReusedEntity"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "dateTime"
          },
          {
            "code" : "Period"
          }
        ]
      }
    ]
  }
}

```
