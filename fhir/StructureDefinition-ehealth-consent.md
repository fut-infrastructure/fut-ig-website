# ehealth-consent - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-consent**

## Resource Profile: ehealth-consent 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-consent |

# Introduction

A Consent resource is a record of a healthcare consumer’s policy choices, which permits or denies identified actors(s) or identified role(s) to perform one or more actions within a given policy context, for specific purpose(s) and period of time.

# Scope and Usage

In the eHealth infrastructure a Consent resource is used

1. as a record of the fact that a Patient has given a Consent and
1. to enforce data policies that require Consent to be given and recorded for a Patient.

## Registration of Consent

When a Patient gives a consent, this consent must be recorded as a Consent resource. This resource can be created by the Patient herself or by a Practitioner as a result of conversations or correspondence with the Patient.

eHealth operates with two categories of consents:

1. Category**PITEOC**: Consent given by a Patient to be enrolled into a telemedical EpisodeOfCare. This Consent is interpretated to also apply to all CarePlan instances related to the consented EpisodeOfCare.
1. Category**SSLPCI**: Consent given by a Patient to have his/her contact information (physical address and telecommunication endpoints) being disclosed to a specified actor supplying device(s) and service(s) to the Patient as part of an EpisodeOfCare and related CarePlan(s).

Consents of category **PITEOC** are expressed by creating a Consent resource with:

* `Consent.category.coding.system = "http://ehealth.sundhed.dk/cs/consent-category"`
* `Consent.category.coding.code = "PITEOC"`.

Consents of category **SSLPCI** are expressed by creating a Consent resource with:

* `Consent.category.coding.system = "http://ehealth.sundhed.dk/cs/consent-category"`
* `Consent.category.coding.code = "SSLPCI"`.

## Enforcement of Consent

Business rules are built into eHealth infrastructure to ensure that data can only be processed or forwarded to other systems and actors when the proper Consent is given.

This means, that:

1. An EpisodeOfCare can only change status to`active`if a Consent with category PITEOC has been given.
1. An SSL Order can only change status to`submitted`if a Consent with category SSLPCI has been given.

In addition to the `Consent.category` element, the following elements must be set on a Consent resource for the policy enforcing business logic to take effect:

* `Consent.patient` - the patient who is the subject of this consent (must coincide with the `EpisodeOfCare.patient` referenced by `Consent.data.reference`)
* `Consent.data.reference` - the EpisodeOfCare for which this Consent is in force.
* `Consent.actor` - the actor (Organization, CareTeam, Practitioner) whose behaviour is controlled by this consent.
* `Consent.status` - the status of this consent (only active consents are considered to be in force)
* `Consent.period` - the (possibly open-ended) period for which this consent is in force.

For more information see the element descriptions in the [snapshot table](#tabs) on this page and also see the example Consent resources on the [Examples tab](StructureDefinition-ehealth-consent-examples.md).

# Remarks on operations

## Update

The update operation on Consent only accepts changes to the **patient**, **category**, **data.reference**, **actor**, **status**, and **period** contents.

**Usages:**

* Refer to this Profile: [ehealth-consent](StructureDefinition-ehealth-consent.md)
* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-consent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-consent.csv), [Excel](StructureDefinition-ehealth-consent.xlsx), [Schematron](StructureDefinition-ehealth-consent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-consent",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent",
  "version" : "6.0.0",
  "name" : "ehealth-consent",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Consent",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Consent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Consent",
        "path" : "Consent"
      },
      {
        "id" : "Consent.category",
        "path" : "Consent.category",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/consent-category"
        }
      },
      {
        "id" : "Consent.patient",
        "path" : "Consent.patient",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Consent.organization",
        "path" : "Consent.organization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Consent.source[x]",
        "path" : "Consent.source[x]",
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
        "id" : "Consent.source[x]:sourceReference",
        "path" : "Consent.source[x]",
        "sliceName" : "sourceReference",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-documentreference",
              "http://hl7.org/fhir/StructureDefinition/Contract",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse"
            ]
          }
        ]
      }
    ]
  }
}

```
