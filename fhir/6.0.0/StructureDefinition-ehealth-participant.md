# Participant - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Participant**

## Extension: Participant 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-participant | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-participant |

The participating CareTeam or Practitioner.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md), [ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md) and [ehealth-material-communication](StructureDefinition-ehealth-material-communication.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-participant)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-participant.csv), [Excel](StructureDefinition-ehealth-participant.xlsx), [Schematron](StructureDefinition-ehealth-participant.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-participant",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-participant",
  "version" : "6.0.0",
  "name" : "ehealth-participant",
  "title" : "Participant",
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
  "description" : "The participating CareTeam or Practitioner.",
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
        "short" : "Who or what is participating",
        "definition" : "The participating CareTeam or Practitioner."
      },
      {
        "id" : "Extension.extension:function",
        "path" : "Extension.extension",
        "sliceName" : "function",
        "short" : "The function of the participant",
        "definition" : "The code defining the function of the participant.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:function.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:function.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "function"
      },
      {
        "id" : "Extension.extension:function.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "Coding"
          }
        ]
      },
      {
        "id" : "Extension.extension:actor",
        "path" : "Extension.extension",
        "sliceName" : "actor",
        "short" : "The participant",
        "definition" : "The CareTeam or Practitioner that is participating.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:actor.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:actor.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "actor"
      },
      {
        "id" : "Extension.extension:actor.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/CareTeam",
              "http://hl7.org/fhir/StructureDefinition/Practitioner"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Extension.extension:actorref",
        "path" : "Extension.extension",
        "sliceName" : "actorref",
        "short" : "The participant ref (string)",
        "definition" : "The CareTeam or Practitioner that is participating.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:actorref.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:actorref.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "actorref"
      },
      {
        "id" : "Extension.extension:actorref.value[x]",
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
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-participant"
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
