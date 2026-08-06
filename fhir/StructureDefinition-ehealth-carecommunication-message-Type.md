# Message type - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Message type**

## Extension: Message type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-message-Type | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-carecommunication-message-Type |

The type of the message. inResponseTo is only allowed when the type is reply-message.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-carecommunication](StructureDefinition-ehealth-carecommunication.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-carecommunication-message-Type.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-carecommunication-message-Type.csv), [Excel](StructureDefinition-ehealth-carecommunication-message-Type.xlsx), [Schematron](StructureDefinition-ehealth-carecommunication-message-Type.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-carecommunication-message-Type",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-message-Type",
  "version" : "10.0.0",
  "name" : "ehealth-carecommunication-message-Type",
  "title" : "Message type",
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
  "description" : "The type of the message. inResponseTo is only allowed when the type is reply-message.",
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
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Element"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Message type",
      "definition" : "The type of the message. inResponseTo is only allowed when the type is reply-message."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-message-Type"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "Coding"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/ehealth-carecommunication-message-type"
      }
    }]
  }
}

```
