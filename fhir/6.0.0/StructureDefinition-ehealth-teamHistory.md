# Team history - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Team history**

## Extension: Team history 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamHistory | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-teamHistory |

History of assigned careTeam

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-careplan](StructureDefinition-ehealth-careplan.md) and [ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-teamHistory)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-teamHistory.csv), [Excel](StructureDefinition-ehealth-teamHistory.xlsx), [Schematron](StructureDefinition-ehealth-teamHistory.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-teamHistory",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamHistory",
  "version" : "6.0.0",
  "name" : "ehealth-teamHistory",
  "title" : "Team history",
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
  "description" : "History of assigned careTeam",
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
        "short" : "History of assigned careTeam",
        "definition" : "History of assigned careTeam"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:careTeam",
        "path" : "Extension.extension",
        "sliceName" : "careTeam",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:careTeam.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:careTeam.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "careTeam"
      },
      {
        "id" : "Extension.extension:careTeam.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
            ],
            "aggregation" : ["referenced"]
          }
        ]
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
        "type" : [
          {
            "code" : "Period"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamHistory"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
