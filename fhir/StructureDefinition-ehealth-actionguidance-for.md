# Ehealth action guidance for - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ehealth action guidance for**

## Extension: Ehealth action guidance for 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionguidance-for | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-actionguidance-for |

Action guidance for

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-actionguidance](StructureDefinition-ehealth-actionguidance.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-actionguidance-for)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-actionguidance-for.csv), [Excel](StructureDefinition-ehealth-actionguidance-for.xlsx), [Schematron](StructureDefinition-ehealth-actionguidance-for.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-actionguidance-for",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionguidance-for",
  "version" : "6.0.0",
  "name" : "ehealth-actionguidance-for",
  "title" : "Ehealth action guidance for",
  "status" : "active",
  "date" : "2025-10-23T10:34:08+00:00",
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
  "description" : "Action guidance for",
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
        "short" : "Action guidance for",
        "definition" : "Action guidance for"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:forType",
        "path" : "Extension.extension",
        "sliceName" : "forType",
        "short" : "In type is stated what this is a reference to",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:forType.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:forType.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "forType"
      },
      {
        "id" : "Extension.extension:forType.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.extension:forType.value[x]:valueCoding",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueCoding",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/action-guidance-for-types"
        }
      },
      {
        "id" : "Extension.extension:forReference",
        "path" : "Extension.extension",
        "sliceName" : "forReference",
        "short" : "What resource is this an action guide for",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:forReference.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:forReference.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "forReference"
      },
      {
        "id" : "Extension.extension:forReference.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.extension:forReference.value[x]:valueReference",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueReference",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionguidance-for"
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
