# ehealth-guidanceresponse - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-guidanceresponse**

## Resource Profile: ehealth-guidanceresponse 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-guidanceresponse | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-guidanceresponse |

# Introduction

The GuidanceResponse resource is used to represent the result of invoking a decision support service. It provides a container for the status of the response, any warnings or messages returned by the service, as well as the output data of the module and any suggested actions to be performed.

# Scope and Usage

In the eHealth Infrastructure, a GuidanceResponse is returned when invoking the operation `evaluate` on a Library instance. This could be performed as part of decision support usage or for determining qualities such as the situation quality for a measurement based on answer(s) in a QuestionnaireResponse. In the description of `Library.evaluate` there is an example of input and output where GuidanceResponse use is reflected.

A GuidanceResponse contains a mandatory element `module` which references a knowledge module through a [ServiceDefinition](http://hl7.org/fhir/STU3/servicedefinition.html) resource. In the eHealth Infrastructure, knowledge modules are represented as Library instances and the ServiceDefinition is not used in the eHealth Infrastructure. As it is not otherwise used, ServiceDefinition is left un-profiled and referenced as a contained resource in GuidanceResponse.

When returned from the eHealth Infrastructure, the GuidanceResponse `module` is a reference to a contained ServiceDefinition containing minimal content. The ServiceDefinition element `relatedArtifact` is set to reference the Library.

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-guidanceresponse)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-guidanceresponse.csv), [Excel](StructureDefinition-ehealth-guidanceresponse.xlsx), [Schematron](StructureDefinition-ehealth-guidanceresponse.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-guidanceresponse",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-guidanceresponse",
  "version" : "6.0.0",
  "name" : "ehealth-guidanceresponse",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "GuidanceResponse",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/GuidanceResponse",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "GuidanceResponse",
        "path" : "GuidanceResponse"
      },
      {
        "id" : "GuidanceResponse.extension",
        "path" : "GuidanceResponse.extension",
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
        "id" : "GuidanceResponse.extension:episodeOfCare",
        "path" : "GuidanceResponse.extension",
        "sliceName" : "episodeOfCare",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-guidanceresponse-episodeOfCare"
            ]
          }
        ]
      },
      {
        "id" : "GuidanceResponse.extension:episodeOfCare.value[x]",
        "path" : "GuidanceResponse.extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "GuidanceResponse.subject",
        "path" : "GuidanceResponse.subject",
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
        "id" : "GuidanceResponse.performer",
        "path" : "GuidanceResponse.performer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "GuidanceResponse.evaluationMessage",
        "path" : "GuidanceResponse.evaluationMessage",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/OperationOutcome"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "GuidanceResponse.result",
        "path" : "GuidanceResponse.result",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan",
              "http://hl7.org/fhir/StructureDefinition/RequestGroup"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
