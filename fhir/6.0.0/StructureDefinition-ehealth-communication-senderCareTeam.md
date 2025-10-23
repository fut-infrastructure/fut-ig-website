# Sender careteam - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sender careteam**

## Extension: Sender careteam 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-communication-senderCareTeam |

CareTeam that is a sender of a Communication

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-communication](StructureDefinition-ehealth-communication.md) and [ehealth-message](StructureDefinition-ehealth-message.md)
* Examples for this Extension: [Communication/message01](Communication-message01.md)
* Search Parameters using this Extension: [careTeamSender](SearchParameter-ehealth-communication-search-careTeamSender.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-communication-senderCareTeam)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-communication-senderCareTeam.csv), [Excel](StructureDefinition-ehealth-communication-senderCareTeam.xlsx), [Schematron](StructureDefinition-ehealth-communication-senderCareTeam.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-communication-senderCareTeam",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam",
  "version" : "6.0.0",
  "name" : "ehealth-communication-senderCareTeam",
  "title" : "Sender careteam",
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
  "description" : "CareTeam that is a sender of a Communication",
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
        "short" : "CareTeam message sender",
        "definition" : "CareTeam that is a sender of a Communication"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
