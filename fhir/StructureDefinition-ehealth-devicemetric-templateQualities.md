# Template qualities - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Template qualities**

## Extension: Template qualities 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-devicemetric-templateQualities |

Device quality default settings for an initial, a degraded, and an overridden device quality.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-devicemetric](StructureDefinition-ehealth-devicemetric.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-devicemetric-templateQualities)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-devicemetric-templateQualities.csv), [Excel](StructureDefinition-ehealth-devicemetric-templateQualities.xlsx), [Schematron](StructureDefinition-ehealth-devicemetric-templateQualities.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-devicemetric-templateQualities",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities",
  "version" : "6.0.0",
  "name" : "ehealth-devicemetric-templateQualities",
  "title" : "Template qualities",
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
  "description" : "Device quality default settings for an initial, a degraded, and an overridden device quality.",
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
        "short" : "Device quality default settings",
        "definition" : "Device quality default settings for an initial, a degraded, and an overridden device quality."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:category",
        "path" : "Extension.extension",
        "sliceName" : "category",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:category.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:category.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "category"
      },
      {
        "id" : "Extension.extension:category.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/devicemetric-quality-types"
        }
      },
      {
        "id" : "Extension.extension:value",
        "path" : "Extension.extension",
        "sliceName" : "value",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:value.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:value.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "value"
      },
      {
        "id" : "Extension.extension:value.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "decimal"
          },
          {
            "code" : "integer"
          },
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities"
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
