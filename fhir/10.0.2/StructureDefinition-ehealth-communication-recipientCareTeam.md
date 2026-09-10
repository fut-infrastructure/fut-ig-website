# Recipient careteam - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Recipient careteam**

## Extension: Recipient careteam 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:ehealth-communication-recipientCareTeam |

CareTeam that is a recipient of a Communication

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-communication](StructureDefinition-ehealth-communication.md) and [ehealth-message](StructureDefinition-ehealth-message.md)
* Search Parameters using this Extension: [careTeamRecipient](SearchParameter-ehealth-communication-search-careTeamRecipient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-communication-recipientCareTeam.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-communication-recipientCareTeam.csv), [Excel](StructureDefinition-ehealth-communication-recipientCareTeam.xlsx), [Schematron](StructureDefinition-ehealth-communication-recipientCareTeam.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-communication-recipientCareTeam",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam",
  "version" : "10.0.2",
  "name" : "ehealth-communication-recipientCareTeam",
  "title" : "Recipient careteam",
  "status" : "active",
  "date" : "2026-09-10T10:04:36+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "CareTeam that is a recipient of a Communication",
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
      "short" : "CareTeam message recipient",
      "definition" : "CareTeam that is a recipient of a Communication"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"],
        "aggregation" : ["referenced"]
      }]
    }]
  }
}

```
