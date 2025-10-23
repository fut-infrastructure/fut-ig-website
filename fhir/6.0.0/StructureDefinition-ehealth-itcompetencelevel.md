# IT competence level - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IT competence level**

## Extension: IT competence level 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-itcompetencelevel | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-itcompetencelevel |

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-patient](StructureDefinition-ehealth-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-itcompetencelevel)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-itcompetencelevel.csv), [Excel](StructureDefinition-ehealth-itcompetencelevel.xlsx), [Schematron](StructureDefinition-ehealth-itcompetencelevel.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-itcompetencelevel",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-itcompetencelevel",
  "version" : "6.0.0",
  "name" : "ehealth-itcompetencelevel",
  "title" : "IT competence level",
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
        "short" : "IT competence level"
      },
      {
        "id" : "Extension.extension:deviceType",
        "path" : "Extension.extension",
        "sliceName" : "deviceType",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Extension.extension:deviceType.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:deviceType.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "deviceType"
      },
      {
        "id" : "Extension.extension:deviceType.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/device-types"
        }
      },
      {
        "id" : "Extension.extension:score",
        "path" : "Extension.extension",
        "sliceName" : "score",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Extension.extension:score.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:score.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "score"
      },
      {
        "id" : "Extension.extension:score.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/itcompetencelevel-codes"
        }
      },
      {
        "id" : "Extension.extension:description",
        "path" : "Extension.extension",
        "sliceName" : "description",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Extension.extension:description.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:description.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "description"
      },
      {
        "id" : "Extension.extension:description.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-itcompetencelevel"
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
