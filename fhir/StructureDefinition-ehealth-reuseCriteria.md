# Reuse criteria - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reuse criteria**

## Extension: Reuse criteria 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-reuseCriteria | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-reuseCriteria |

Defines if and when a response can be reused

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md) and [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-reuseCriteria)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-reuseCriteria.csv), [Excel](StructureDefinition-ehealth-reuseCriteria.xlsx), [Schematron](StructureDefinition-ehealth-reuseCriteria.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-reuseCriteria",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-reuseCriteria",
  "version" : "6.0.0",
  "name" : "ehealth-reuseCriteria",
  "title" : "Reuse criteria",
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
  "description" : "Defines if and when a response can be reused",
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
        "short" : "Criteria to be met for reuse of responses to be allowed",
        "definition" : "Defines if and when a response can be reused"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:allowed",
        "path" : "Extension.extension",
        "sliceName" : "allowed",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:allowed.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:allowed.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "allowed"
      },
      {
        "id" : "Extension.extension:allowed.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      },
      {
        "id" : "Extension.extension:situationQuality",
        "path" : "Extension.extension",
        "sliceName" : "situationQuality",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:situationQuality.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:situationQuality.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "situationQuality"
      },
      {
        "id" : "Extension.extension:situationQuality.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:usageQuality",
        "path" : "Extension.extension",
        "sliceName" : "usageQuality",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:usageQuality.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:usageQuality.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "usageQuality"
      },
      {
        "id" : "Extension.extension:usageQuality.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:deviceMeasuringQuality",
        "path" : "Extension.extension",
        "sliceName" : "deviceMeasuringQuality",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:deviceMeasuringQuality.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:deviceMeasuringQuality.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "deviceMeasuringQuality"
      },
      {
        "id" : "Extension.extension:deviceMeasuringQuality.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.extension:dataActuality",
        "path" : "Extension.extension",
        "sliceName" : "dataActuality",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:dataActuality.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:dataActuality.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "dataActuality"
      },
      {
        "id" : "Extension.extension:dataActuality.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Duration"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-reuseCriteria"
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
