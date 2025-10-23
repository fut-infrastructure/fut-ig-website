# Group id - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Group id**

## Extension: Group id 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-id | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-group-id |

A logical id identifying a set of messages, which have the same recipient (considered a 'group message'). Must be supplied by the client, eg. as a UUID

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md), [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md), [ehealth-message](StructureDefinition-ehealth-message.md) and [ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Extension: [Appointment/group-appointment01](Appointment-group-appointment01.md)
* Search Parameters using this Extension: [appointmentGroupId](SearchParameter-ehealth-appointment-search-groupId.md) and [communicationGroupId](SearchParameter-ehealth-communication-search-groupId.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-group-id)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-group-id.csv), [Excel](StructureDefinition-ehealth-group-id.xlsx), [Schematron](StructureDefinition-ehealth-group-id.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-group-id",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-id",
  "version" : "6.0.0",
  "name" : "ehealth-group-id",
  "title" : "Group id",
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
  "description" : "A logical id identifying a set of messages, which have the same recipient (considered a 'group message'). Must be supplied by the client, eg. as a UUID",
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
        "short" : "Logical id identifying a set of messages with the same recipient",
        "definition" : "A logical id identifying a set of messages, which have the same recipient (considered a 'group message'). Must be supplied by the client, eg. as a UUID"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-id"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
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
