# ehealth-deviceusestatement - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-deviceusestatement**

## Resource Profile: ehealth-deviceusestatement 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-deviceusestatement |

# Introduction

The DeviceUseStatement resource represents a record of a device being used by a patient in the context of a careplan over a certain period of time.

# Scope and Usage

This resource records the use of a healthcare-related device by a patient in the context of a careplan. The resource can be used to note the use of a clinical device such as a spyrometer, blood pressure monitor, and other devices required to fulfil the careplan.

If the same device is used simultaneously for the fulfilment of more than one careplan for the same patient, then more than one active DeviceUseStatement will exist.

A DeviceUseStatement is considered active only when its status field is `Active`. For logging purposes the `whenUsed` element is updated to reflect the period in which the DeviceUseStatement is active; but this element alone does not indicate whether the the DeviceUseStatement is `Active` or not. A DeviceUseStatement which is `Active` will have a `whenUsed.end` which is `null`.

DeviceUseStatements which have been in status `Active` cannot be deleted.

DeviceUseStatements resources are created and updated automatically based on actions and information provided in the Service, Support & Logistics (SSL) domain of the eHealth Infrastructure. The use of DeviceUseStatements therefore concerns reading and searching only.

### Life cycle

The SSL services manage the lifecycle of DeviceUseStatement resources. When the SSL services receive a message that a device has been delivered to a patient, then the SSL services first creates a Device, and subsequently a DeviceUseStatement with reference to the created Device resource.

When the SSL services are signaled that a Device is no longer being used, then the SSL services will update the corresponding DeviceUseStatement automatically.

It is possible for a Practitioner (as opposed to the SSL services) to also create and maintain DeviceUseStatements; and also to override what was set by the SSL services.

It can be relevant for a Practitioner to create a DeviceUseStatement in the case where a patient uses a privately owned Device instead of an SSL provisioned device.

**Usages:**

* CapabilityStatements using this Profile: [device](CapabilityStatement-device.md)
* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-deviceusestatement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-deviceusestatement.csv), [Excel](StructureDefinition-ehealth-deviceusestatement.xlsx), [Schematron](StructureDefinition-ehealth-deviceusestatement.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-deviceusestatement",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement",
  "version" : "6.0.0",
  "name" : "ehealth-deviceusestatement",
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
      "identity" : "quick",
      "uri" : "http://siframework.org/cqf",
      "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DeviceUseStatement",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DeviceUseStatement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DeviceUseStatement",
        "path" : "DeviceUseStatement"
      },
      {
        "id" : "DeviceUseStatement.extension",
        "path" : "DeviceUseStatement.extension",
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
        "id" : "DeviceUseStatement.extension:Context",
        "path" : "DeviceUseStatement.extension",
        "sliceName" : "Context",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context"
            ]
          }
        ]
      },
      {
        "id" : "DeviceUseStatement.subject",
        "path" : "DeviceUseStatement.subject",
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
        "id" : "DeviceUseStatement.source",
        "path" : "DeviceUseStatement.source",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "DeviceUseStatement.device",
        "path" : "DeviceUseStatement.device",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device"
            ]
          }
        ]
      },
      {
        "id" : "DeviceUseStatement.note.author[x]",
        "path" : "DeviceUseStatement.note.author[x]",
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
        "id" : "DeviceUseStatement.note.author[x]:authorReference",
        "path" : "DeviceUseStatement.note.author[x]",
        "sliceName" : "authorReference",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "DeviceUseStatement.note.author[x]:authorString",
        "path" : "DeviceUseStatement.note.author[x]",
        "sliceName" : "authorString",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      }
    ]
  }
}

```
