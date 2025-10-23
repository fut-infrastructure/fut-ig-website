# ehealth-observation-wound-dimensions - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-observation-wound-dimensions**

## Resource Profile: ehealth-observation-wound-dimensions 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-wound-dimensions | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-observation-wound-dimensions |

# Introduction

An ObservationWoundDimension is a specialization of the Observation to support wound assessment and measurements.

# Scope and Usage

The scope and usage is the same as for the Observation in the eHealth Infrastructure, with the following restrictions.

## Wound size panel

The type of observation is a 'wound size panel' which have at least one of the components:

* width of wound
* length of wound
* depth of wound
* area of wound
* wound volume

## Derivation of wound dimensions

In the eHealth Infrastructure the ObservationWoundDimension resource is used in conjunction with the following resources.

* Media 
* The observation element `derivedFrom` must reference a Media resource with an image of the wound from which the measurement components are derived.
 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-observation-wound-dimensions)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-observation-wound-dimensions.csv), [Excel](StructureDefinition-ehealth-observation-wound-dimensions.xlsx), [Schematron](StructureDefinition-ehealth-observation-wound-dimensions.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-observation-wound-dimensions",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-wound-dimensions",
  "version" : "6.0.0",
  "name" : "ehealth-observation-wound-dimensions",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "constraint" : [
          {
            "key" : "observation-wound-dimensions-at-least-one-dimension",
            "severity" : "error",
            "human" : "Observation for wound must have at least one dimension",
            "expression" : "component.count() > 0",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-wound-dimensions"
          }
        ]
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "72287-6"
            }
          ]
        }
      },
      {
        "id" : "Observation.derivedFrom",
        "path" : "Observation.derivedFrom",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "description" : "Slice based on the component.code value",
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Observation.component.extension",
        "path" : "Observation.component.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Observation.component.extension:method",
        "path" : "Observation.component.extension",
        "sliceName" : "method",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:woundLength",
        "path" : "Observation.component",
        "sliceName" : "woundLength",
        "short" : "Length of wound",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:woundLength.extension:method",
        "path" : "Observation.component.extension",
        "sliceName" : "method",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:woundLength.code",
        "path" : "Observation.component.code",
        "fixedCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "39126-8"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:woundLength.value[x]",
        "path" : "Observation.component.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "patternQuantity" : {
          "system" : "http://unitsofmeasure.org",
          "code" : "cm"
        }
      },
      {
        "id" : "Observation.component:woundWidth",
        "path" : "Observation.component",
        "sliceName" : "woundWidth",
        "short" : "Width of wound",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:woundWidth.extension:method",
        "path" : "Observation.component.extension",
        "sliceName" : "method",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:woundWidth.code",
        "path" : "Observation.component.code",
        "fixedCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "39125-0"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:woundWidth.value[x]",
        "path" : "Observation.component.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "patternQuantity" : {
          "system" : "http://unitsofmeasure.org",
          "code" : "cm"
        }
      },
      {
        "id" : "Observation.component:woundDepth",
        "path" : "Observation.component",
        "sliceName" : "woundDepth",
        "short" : "Depth of wound",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:woundDepth.extension:method",
        "path" : "Observation.component.extension",
        "sliceName" : "method",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:woundDepth.code",
        "path" : "Observation.component.code",
        "fixedCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "39127-6"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:woundDepth.value[x]",
        "path" : "Observation.component.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "patternQuantity" : {
          "system" : "http://unitsofmeasure.org",
          "code" : "cm"
        }
      },
      {
        "id" : "Observation.component:woundArea",
        "path" : "Observation.component",
        "sliceName" : "woundArea",
        "short" : "Area of wound",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:woundArea.extension:method",
        "path" : "Observation.component.extension",
        "sliceName" : "method",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:woundArea.code",
        "path" : "Observation.component.code",
        "fixedCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "89260-4"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:woundArea.value[x]",
        "path" : "Observation.component.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "patternQuantity" : {
          "system" : "http://unitsofmeasure.org",
          "code" : "cm2"
        }
      },
      {
        "id" : "Observation.component:woundVolume",
        "path" : "Observation.component",
        "sliceName" : "woundVolume",
        "short" : "Wound volume",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:woundVolume.extension:method",
        "path" : "Observation.component.extension",
        "sliceName" : "method",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation-method"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:woundVolume.code",
        "path" : "Observation.component.code",
        "fixedCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "94083-3"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:woundVolume.value[x]",
        "path" : "Observation.component.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "patternQuantity" : {
          "system" : "http://unitsofmeasure.org",
          "code" : "cm3"
        }
      }
    ]
  }
}

```
