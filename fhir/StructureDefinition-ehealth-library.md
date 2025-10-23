# ehealth-library - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-library**

## Resource Profile: ehealth-library 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-library | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-library |

# Introduction

The Library resource is a general-purpose container for knowledge asset definitions. It can be used to describe and expose existing knowledge assets such as logic libraries and information model descriptions, as well as to describe a collection of knowledge assets.

# Scope and Usage

In scope of the eHealth Infrastructure, the Library resource is used for:

* specifying clinical decision rules 
* used for calculating situational context
* used for calculating operational context
* used for evaluating measurements and triaging based on this evaluation
 
* specifying input and output parameters for clinical decision rules

### Defining clinical decision rules

The clinical decision rules are defined as JBoss Drools rules and are stored in the `content` structure as a base64 encoded string. When defining the rule it is important that the rule package is set to "rules".

Input and output parameters used by the rule should be defined in the `parameters` structure with the `use` element set to the appropriate type of parameter. Only one output type should be defined. In the rule logic the output parameter should be defined as a global variable with the name "result".

It is important that the input and output parameters defined in the Library resource corresponds to the input and output parameters defined in the clinical decision rule logic. The eHealth infrastructure wont be able to execute a rule if any inconsistency exists.

When defining a rule to be used for evaluation of Observation resources, it is possible to specify that historical Observation resources with the same ServiceRequest reference should be used as input to the rule. This is done using the `dataRequirement` structure where the `dateFilter.valueDuration` is set. Observation resources where the `effective` element is overlapping this duration is given as input to the rule.

### Invoke clinical decision rules

The clinical decision rules used for calculating situational and operational context can be invoked using the `evaluate` operation on the specific Library resource. Evaluation of submitted measurements will be invoked automatic and asynchronous. The eHealth Infrastructure will create the relevant ClinicalImpression, Task and Communication resources based on the automatic evaluation of submitted measurements.

### Use of Library resources at time of decision support rules invocation

The decision support rule Library can be associated with a CarePlan / ServiceRequest through their references to PlanDefinition / ActivityDefinition resources. When a measurement is submitted in scope of a CarePlan, the answer values in a submitted QuestionnaireResponse can be found and passed in as parameters to the decision support rule as specified by the Library resources.

**Usages:**

* Refer to this Profile: [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md) and [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md)
* CapabilityStatements using this Profile: [library](CapabilityStatement-library.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-library)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-library.csv), [Excel](StructureDefinition-ehealth-library.xlsx), [Schematron](StructureDefinition-ehealth-library.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-library",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-library",
  "version" : "6.0.0",
  "name" : "ehealth-library",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "objimpl",
      "uri" : "http://hl7.org/fhir/object-implementation",
      "name" : "Object Implementation Information"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Library",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Library",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Library",
        "path" : "Library"
      },
      {
        "id" : "Library.extension",
        "path" : "Library.extension",
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
        "min" : 2
      },
      {
        "id" : "Library.extension:intendedAudience",
        "path" : "Library.extension",
        "sliceName" : "intendedAudience",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience"
            ]
          }
        ]
      },
      {
        "id" : "Library.extension:revision",
        "path" : "Library.extension",
        "sliceName" : "revision",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-revision"
            ]
          }
        ]
      },
      {
        "id" : "Library.extension:modifierRole",
        "path" : "Library.extension",
        "sliceName" : "modifierRole",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role"
            ]
          }
        ]
      },
      {
        "id" : "Library.version",
        "path" : "Library.version",
        "min" : 1
      },
      {
        "id" : "Library.type",
        "path" : "Library.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/library-type"
        }
      },
      {
        "id" : "Library.useContext.code",
        "path" : "Library.useContext.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/ehealth-usage-context-type"
        }
      },
      {
        "id" : "Library.jurisdiction",
        "path" : "Library.jurisdiction",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/jurisdiction"
        }
      },
      {
        "id" : "Library.parameter",
        "path" : "Library.parameter",
        "min" : 1
      }
    ]
  }
}

```
