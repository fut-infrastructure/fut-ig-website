# DateTime Extension - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DateTime Extension**

## Extension: DateTime Extension 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-datetime | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:ehealth-carecommunication-datetime |

Date and time of the payload segment.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-carecommunication](StructureDefinition-ehealth-carecommunication.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-carecommunication-datetime.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-carecommunication-datetime.csv), [Excel](StructureDefinition-ehealth-carecommunication-datetime.xlsx), [Schematron](StructureDefinition-ehealth-carecommunication-datetime.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-carecommunication-datetime",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-datetime",
  "version" : "10.0.1",
  "name" : "ehealth-carecommunication-datetime",
  "title" : "DateTime Extension",
  "status" : "active",
  "date" : "2026-08-11T06:44:23+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Date and time of the payload segment.",
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
      "short" : "Payload dateTime",
      "definition" : "Date and time of the payload segment."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-datetime"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "dateTime"
      }]
    }]
  }
}

```
