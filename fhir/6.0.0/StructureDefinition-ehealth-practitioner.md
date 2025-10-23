# ehealth-practitioner - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-practitioner**

## Resource Profile: ehealth-practitioner 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-practitioner |

# Introduction

A person who is directly or indirectly involved in the provisioning of healthcare.

Practitioner covers all individuals who are engaged in the healthcare process and healthcare-related services as part of their formal responsibilities and this resource is used for attribution of activities and responsibilities to these individuals.

# Scope and Usage

### Creation

The create operation on Practitioner is for internal use only and will be protected by privileges.

**Usages:**

* Refer to this Profile: [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-careteam](StructureDefinition-ehealth-careteam.md), [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md)...Show 23 more,[ehealth-communication](StructureDefinition-ehealth-communication.md),[ehealth-composition](StructureDefinition-ehealth-composition.md),[ehealth-condition](StructureDefinition-ehealth-condition.md),[Suppliers](StructureDefinition-ehealth-device-suppliers.md),[ehealth-device](StructureDefinition-ehealth-device.md),[ehealth-deviceusestatement](StructureDefinition-ehealth-deviceusestatement.md),[ehealth-documentreference](StructureDefinition-ehealth-documentreference.md),[ehealth-goal](StructureDefinition-ehealth-goal.md),[ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md),[ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md),[ehealth-media](StructureDefinition-ehealth-media.md),[ehealth-message](StructureDefinition-ehealth-message.md),[ehealth-observation](StructureDefinition-ehealth-observation.md),[Performer](StructureDefinition-ehealth-performer.md),[ehealth-practitionerrole](StructureDefinition-ehealth-practitionerrole.md),[ehealth-provenance](StructureDefinition-ehealth-provenance.md),[ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md),[Responsible](StructureDefinition-ehealth-responsible.md),[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md),[Task responsible](StructureDefinition-ehealth-task-responsible.md),[ehealth-task](StructureDefinition-ehealth-task.md),[ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)and[ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Profile: [Practitioner/107302](Practitioner-107302.md), [Practitioner/123](Practitioner-123.md) and [Practitioner/42](Practitioner-42.md)
* CapabilityStatements using this Profile: [organization](CapabilityStatement-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-practitioner.csv), [Excel](StructureDefinition-ehealth-practitioner.xlsx), [Schematron](StructureDefinition-ehealth-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-practitioner",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
  "version" : "6.0.0",
  "name" : "ehealth-practitioner",
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner"
      },
      {
        "id" : "Practitioner.name",
        "path" : "Practitioner.name",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Practitioner.qualification",
        "path" : "Practitioner.qualification"
      },
      {
        "id" : "Practitioner.qualification.issuer",
        "path" : "Practitioner.qualification.issuer",
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
        "id" : "Practitioner.qualification:officialHealthAuthorization",
        "path" : "Practitioner.qualification",
        "sliceName" : "officialHealthAuthorization"
      },
      {
        "id" : "Practitioner.qualification:officialHealthAuthorization.issuer",
        "path" : "Practitioner.qualification.issuer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ]
          }
        ]
      }
    ]
  }
}

```
