# Quality - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Quality**

## Extension: Quality 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-quality |

Minimum required or actually assessed quality values. The qualityType element states the type of quality. For different values of qualityType the required or assessed quality value (qualityCode) must be from different value sets. The relation between qualityType and allowed value sets are defined in the definition of value set http://ehealth.sundhed.dk/vs/quality-types.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md), [ehealth-media](StructureDefinition-ehealth-media.md), [ehealth-observation](StructureDefinition-ehealth-observation.md) and [ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-quality)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-quality.csv), [Excel](StructureDefinition-ehealth-quality.xlsx), [Schematron](StructureDefinition-ehealth-quality.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-quality",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality",
  "version" : "6.0.0",
  "name" : "ehealth-quality",
  "title" : "Quality",
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
  "description" : "Minimum required or actually assessed quality values. The qualityType element states the type of quality. For different values of qualityType the required or assessed quality value (qualityCode) must be from different value sets. The relation between qualityType and allowed value sets are defined in the definition of value set http://ehealth.sundhed.dk/vs/quality-types.",
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
        "short" : "Minimum requirements for qualities",
        "definition" : "Minimum required or actually assessed quality values. The qualityType element states the type of quality. For different values of qualityType the required or assessed quality value (qualityCode) must be from different value sets. The relation between qualityType and allowed value sets are defined in the definition of value set http://ehealth.sundhed.dk/vs/quality-types."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:qualityType",
        "path" : "Extension.extension",
        "sliceName" : "qualityType",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:qualityType.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:qualityType.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "qualityType"
      },
      {
        "id" : "Extension.extension:qualityType.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/quality-types"
        }
      },
      {
        "id" : "Extension.extension:qualityCode",
        "path" : "Extension.extension",
        "sliceName" : "qualityCode",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:qualityCode.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:qualityCode.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "qualityCode"
      },
      {
        "id" : "Extension.extension:qualityCode.value[x]",
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
        "short" : "Included ValueSets: Usage quality (http://ehealth.sundhed.dk/vs/usage-quality), device measuring quality (http://ehealth.sundhed.dk/vs/device-measuring-quality) and situation quality (http://ehealth.sundhed.dk/vs/situation-quality)",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:qualityCode.value[x]:valueCodeableConcept",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueCodeableConcept",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality"
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
