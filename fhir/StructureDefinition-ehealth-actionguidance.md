# ehealth-actionguidance - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-actionguidance**

## Resource Profile: ehealth-actionguidance 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionguidance | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-actionguidance |

# Introduction

An Action guidance expresses a set of instructions to a clinician/employee in a given situation.

# Scope and Usage

The action guidance can be associated with one or more Questionnaires, which is why it is based on questions and answers. That is, which questions and answers in an associated Questionnaire should give rise to the presentation of instructions to the clinician/employee.

The profile is based on the native FHIR Basic resource and adds the following extensions:

* `ehealth-content` The element used for the actual modeling of action guidance.
* `ehealth-basic-title` Name for this action guidance.
* `ehealth-description` A description of this action guidance.
* `ehealth-purpose` Why this action definition is defined.
* `ehealth-version` The business version of the action guidance.
* `ehealth-useContext` The context that the content is intended to support.
* `ehealth-recommendation` The recommendation level of this action guidance.
* `ehealth-intendedAudience` Can be set to one or more Organizations to indicate for which Organization(s) this action guidance is intended to be used by. This is meant for filtering and is not enforced or in any way restricting which Organization has access.
* `ehealth-actionguidance-type` Type of action guidance.
* `ehealth-actionguidance-for` A reference to a resource for which this action guidance applies.
* `ehealth-modifier-role`
* `ehealth-status`

### Governance principles

#### Properties allowed to be changed in regard to the status

* Draft 
* No restriction
 
* Active 
* **ehealth-recommendation**, **ehealth-intendedAudience**, **ehealth-useContext**, **ehealth-modifier-role** and **ehealth-status**
 
* Retired 
* **ehealth-recommendation**, **ehealth-intendedAudience**, **ehealth-useContext**, **ehealth-modifier-role** and **ehealth-status**
 

## Update restrictions

The element `ehealth-modifier-role` specifies one or more Organization and each Organization's role in maintaining the Action guidance:

* `ehealth-modifier-role.reference` references the Organization.
* `ehealth-modifier-role.role` set to `owner` means that the referenced Organization can update the resource and alter the entities referenced by `ehealth-modifier-role`, for instance, by adding more co-authors.
* `ehealth-modifier-role.role` set to `co-author` means that the referenced Organization can update the resource but not alter the element `ehealth-modifier-role`.

During an update operation, when the ActionGuidance has a status of `active` or `retired`, only the following elements are permitted to be modified: `ehealth-recommendation`, `ehealth-intendedAudience`, `ehealth-useContext`, `ehealth-modifier-role` and `ehealth-status`.

## Lifecycle

The status field,`ehealth-status`, will express the lifecycle of the resource. Changes follow this pattern.

* When created it will have status `draft`.
* From status `draft` can change to either `active` or `retired`.
* From status `active` can only change to `retired`.

### UseContext

The `useContext` element specifies the context in which the ActionGuidance is applicable. It consists of:

* **`useContext.code`** – Defines the context type.
* **`useContext.valueCodeableConcept`** – Defines the context value (e.g., a specific condition when `useContext.code` is `focus`).

When using `useContext.code` from [http://ehealth.sundhed.dk/vs/ehealth-usage-context-type](https://ehealth.sundhed.dk/fhir/ValueSet-ehealth-usage-context-type.html), the `useContext.valueCodeableConcept` is validated against the ValueSet outlined for the chosen `useContext.code` as described in the description sections on [ehealth-usage-context-type ValueSet page](https://ehealth.sundhed.dk/fhir/ValueSet-ehealth-usage-context-type.html).

> **Note:** The `useContext` element can be updated at any time, regardless of the ActionGuidance status.

**Example:** An ActionGuidance applicable only to a specific intended solution (codes are fictional):

```
{
  "useContext": [
    {
      "code": {
        "system": "http://terminology.hl7.org/CodeSystem/usage-context-type",
        "code": "program"
      },
      "valueCodeableConcept": {
        "system": "http://ehealth.sundhed.dk/cs/ehealth-program",
        "code": "some-intended-solution",
        "display": "Some Intended Solution"
      }
    }
  ]
}

```

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-actionguidance.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-actionguidance.csv), [Excel](StructureDefinition-ehealth-actionguidance.xlsx), [Schematron](StructureDefinition-ehealth-actionguidance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-actionguidance",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionguidance",
  "version" : "10.0.0",
  "name" : "ehealth-actionguidance",
  "status" : "active",
  "date" : "2026-08-06T13:29:38+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Basic",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Basic",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Basic",
      "path" : "Basic"
    },
    {
      "id" : "Basic.extension",
      "path" : "Basic.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 4
    },
    {
      "id" : "Basic.extension:recommendation",
      "path" : "Basic.extension",
      "sliceName" : "recommendation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-recommendation"]
      }]
    },
    {
      "id" : "Basic.extension:intendedAudience",
      "path" : "Basic.extension",
      "sliceName" : "intendedAudience",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience"]
      }]
    },
    {
      "id" : "Basic.extension:modifierRole",
      "path" : "Basic.extension",
      "sliceName" : "modifierRole",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role"]
      }]
    },
    {
      "id" : "Basic.extension:title",
      "path" : "Basic.extension",
      "sliceName" : "title",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-basic-title"]
      }]
    },
    {
      "id" : "Basic.extension:version",
      "path" : "Basic.extension",
      "sliceName" : "version",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-version"]
      }]
    },
    {
      "id" : "Basic.extension:description",
      "path" : "Basic.extension",
      "sliceName" : "description",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-description"]
      }]
    },
    {
      "id" : "Basic.extension:purpose",
      "path" : "Basic.extension",
      "sliceName" : "purpose",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-purpose"]
      }]
    },
    {
      "id" : "Basic.extension:useContext",
      "path" : "Basic.extension",
      "sliceName" : "useContext",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-useContext"]
      }]
    },
    {
      "id" : "Basic.extension:status",
      "path" : "Basic.extension",
      "sliceName" : "status",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-status"]
      }]
    },
    {
      "id" : "Basic.extension:content",
      "path" : "Basic.extension",
      "sliceName" : "content",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-content"]
      }]
    },
    {
      "id" : "Basic.extension:type",
      "path" : "Basic.extension",
      "sliceName" : "type",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionguidance-type"]
      }]
    },
    {
      "id" : "Basic.extension:forType",
      "path" : "Basic.extension",
      "sliceName" : "forType",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-actionguidance-for"]
      }]
    },
    {
      "id" : "Basic.code",
      "path" : "Basic.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/basic-resource-type"
      }
    }]
  }
}

```
