# ehealth-composition - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-composition**

## Resource Profile: ehealth-composition 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-composition | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-composition |

# Introduction

A set of healthcare-related information that is assembled together into a single logical document that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. While a Composition defines the structure, it does not actually contain the content: rather the full content of a document is contained in a Bundle, of which the Composition is the first resource contained.

# Scope and Usage

In scope of the eHealth infrastructure, the Composition is used primarily for internal use when assembling resources into documents during publication to national document sharing.

When retrieving documents from national document sharing, these are represented as Clinical Document Architecture (CDA) XML documents. When choosing to transform the content to FHIR resources, the resulting Composition is the FHIR resource tying the other, resulting resources together as a document.

**Usages:**

* Refer to this Profile: [ehealth-composition](StructureDefinition-ehealth-composition.md)
* CapabilityStatements using this Profile: [document-transformation](CapabilityStatement-document-transformation.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-composition.csv), [Excel](StructureDefinition-ehealth-composition.xlsx), [Schematron](StructureDefinition-ehealth-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-composition",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-composition",
  "version" : "6.0.0",
  "name" : "ehealth-composition",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "fhirdocumentreference",
      "uri" : "http://hl7.org/fhir/documentreference",
      "name" : "FHIR DocumentReference"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition"
      },
      {
        "id" : "Composition.extension",
        "path" : "Composition.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.extension:authorOrganization",
        "path" : "Composition.extension",
        "sliceName" : "authorOrganization",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-composition-authorOrganization"
            ]
          }
        ]
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/document-type"
        }
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/document-class"
        }
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "min" : 1
      },
      {
        "id" : "Composition.encounter",
        "path" : "Composition.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Encounter"],
            "aggregation" : ["bundled", "contained"]
          }
        ]
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Composition.attester.party",
        "path" : "Composition.attester.party",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ]
          }
        ]
      },
      {
        "id" : "Composition.custodian",
        "path" : "Composition.custodian",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ],
            "aggregation" : ["bundled", "contained"]
          }
        ]
      },
      {
        "id" : "Composition.relatesTo.target[x]",
        "path" : "Composition.relatesTo.target[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.relatesTo.target[x]:targetIdentifier",
        "path" : "Composition.relatesTo.target[x]",
        "sliceName" : "targetIdentifier",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ]
      },
      {
        "id" : "Composition.relatesTo.target[x]:targetReference",
        "path" : "Composition.relatesTo.target[x]",
        "sliceName" : "targetReference",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-composition"
            ]
          }
        ]
      },
      {
        "id" : "Composition.event.code",
        "path" : "Composition.event.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/event-type-codes"
        }
      }
    ]
  }
}

```
