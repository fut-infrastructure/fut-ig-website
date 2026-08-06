# Sender Extension, contains the sending PractitionerRole, Practitioner and CareTeam. - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sender Extension, contains the sending PractitionerRole, Practitioner and CareTeam.**

## Extension: Sender Extension, contains the sending PractitionerRole, Practitioner and CareTeam. 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-sender | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-carecommunication-sender |

References the sending PractitionerRole (Actor), the Practitioner, and optionally a CareTeam.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-carecommunication](StructureDefinition-ehealth-carecommunication.md)
* Search Parameters using this Extension: [careCommunicationSenderCareTeam](SearchParameter-ehealth-communication-search-careCommunicationSenderCareTeam.md) and [careCommunicationSenderPractitioner](SearchParameter-ehealth-communication-search-careCommunicationSenderPractitioner.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-carecommunication-sender.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-carecommunication-sender.csv), [Excel](StructureDefinition-ehealth-carecommunication-sender.xlsx), [Schematron](StructureDefinition-ehealth-carecommunication-sender.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-carecommunication-sender",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-sender",
  "version" : "10.0.0",
  "name" : "ehealth-carecommunication-sender",
  "title" : "Sender Extension, contains the sending PractitionerRole, Practitioner and CareTeam.",
  "status" : "active",
  "date" : "2026-08-06T13:17:54+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "References the sending PractitionerRole (Actor), the Practitioner, and optionally a CareTeam.",
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
      "short" : "Sender Extension, contains the sending PractitionerRole, Practitioner and CareTeam.",
      "definition" : "References the sending PractitionerRole (Actor), the Practitioner, and optionally a CareTeam."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "min" : 2
    },
    {
      "id" : "Extension.extension:actor",
      "path" : "Extension.extension",
      "sliceName" : "actor",
      "short" : "Sending PractitionerRole",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
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
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/PractitionerRole"]
      }]
    },
    {
      "id" : "Extension.extension:practitioner",
      "path" : "Extension.extension",
      "sliceName" : "practitioner",
      "short" : "The underlying Practitioner for this sender",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Extension.extension:practitioner.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:practitioner.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "practitioner"
    },
    {
      "id" : "Extension.extension:practitioner.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Practitioner"]
      }]
    },
    {
      "id" : "Extension.extension:contactPoint",
      "path" : "Extension.extension",
      "sliceName" : "contactPoint",
      "short" : "Optional contactpoint for the sender",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Extension.extension:contactPoint.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:contactPoint.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "contactPoint"
    },
    {
      "id" : "Extension.extension:contactPoint.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "Extension.extension:careTeam",
      "path" : "Extension.extension",
      "sliceName" : "careTeam",
      "short" : "Optionally, the involved CareTeam",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Extension.extension:careTeam.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:careTeam.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "careTeam"
    },
    {
      "id" : "Extension.extension:careTeam.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/CareTeam"]
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-sender"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
