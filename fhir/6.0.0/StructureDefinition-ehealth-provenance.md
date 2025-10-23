# ehealth-provenance - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-provenance**

## Resource Profile: ehealth-provenance 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-provenance |

# Introduction

Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.

# Scope and Usage

In scope of the eHealth Infrastructure, Provenance resources are used for a number of different purposes. Some of these purposes are purely internal to the infrastructure, whereas others are of relevance to clients of the infrastructure.

The details of different usages of Provenance resources relevant to clients are described in the following sections together with the resources and operations they are supporting.

### Reuse of measurements

When a client submits measurements in the form of Observation, QuestionnaireResponse and/or Media, the client can submit one or more of these as reused resources, provided that reuse requirements have been met. For each resource where data is reused, the client must construct a Provenance that:

* identifies the resource containing reused data through the `target` element
* identifies the resource from where data was reused through the `entity[0].what` element
* identifies a `policy` which states reuse

Each such Provenance must be submitted along with the resources containing reused data.

See [eHealth-observation](StructureDefinition-ehealth-observation.md#marking-observations-as-reused) for further details.

### Tracking measurements submitted in the same bundle

Provenance resources are created internally by the eHealth infrastructure to link correlated resources which are submitted together in one bundle:

See [eHealth-observation](StructureDefinition-ehealth-observation.md#marking-resources-submitted-in-same-bundle) for further details.

### Stating legal frameworks and data privacy regulations for episodes of care

Provenance resources are submitted by a client for creation when an EpisodeOfCare (in profile ehealth-episodeofcare) is created using the `create-episode-of-care` operation.

Some of these provenance resources hold information about which legal frame the EpisodeOfCare is created under through the Provenance element `policy`. This could be for instance the health law (in Danish: "Sundhedsloven") or other relevant legal frameworks.

Other of these provenance resources define which data privacy regulations are applicable to data concerning patient, practitioners, and suppliers under the episode of care. This, too, is captured in `policy`.

See [create-episode-of-care](OperationDefinition--s-create-episode-of-care.md) for further details.

**Usages:**

* Refer to this Profile: [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md) and [ehealth-task](StructureDefinition-ehealth-task.md)
* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md), [measurement](CapabilityStatement-measurement.md) and [organization](CapabilityStatement-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-provenance)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-provenance.csv), [Excel](StructureDefinition-ehealth-provenance.xlsx), [Schematron](StructureDefinition-ehealth-provenance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-provenance",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance",
  "version" : "6.0.0",
  "name" : "ehealth-provenance",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w3c.prov",
      "uri" : "http://www.w3.org/ns/prov",
      "name" : "W3C PROV"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "fhirauditevent",
      "uri" : "http://hl7.org/fhir/auditevent",
      "name" : "FHIR AuditEvent Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Provenance",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Provenance",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Provenance",
        "path" : "Provenance"
      },
      {
        "id" : "Provenance.policy",
        "path" : "Provenance.policy",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/ehealth-provenance-policies"
        }
      },
      {
        "id" : "Provenance.agent.who",
        "path" : "Provenance.agent.who",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ]
          }
        ]
      },
      {
        "id" : "Provenance.agent.onBehalfOf",
        "path" : "Provenance.agent.onBehalfOf",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ]
          }
        ]
      },
      {
        "id" : "Provenance.entity.extension",
        "path" : "Provenance.entity.extension",
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
        "id" : "Provenance.entity.extension:dateTimeOfReusedEntity",
        "path" : "Provenance.entity.extension",
        "sliceName" : "dateTimeOfReusedEntity",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance-dateTimeOfReusedEntity"
            ]
          }
        ]
      }
    ]
  }
}

```
