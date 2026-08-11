# Identifier Extension - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Identifier Extension**

## Extension: Identifier Extension 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-payload-identifier | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:ehealth-carecommunication-payload-identifier |

Extension to hold an Identifier for a payload. Identifier.value shall be a UUID v4 in URN form (urn:uuid:).

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-carecommunication](StructureDefinition-ehealth-carecommunication.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-carecommunication-payload-identifier.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-carecommunication-payload-identifier.csv), [Excel](StructureDefinition-ehealth-carecommunication-payload-identifier.xlsx), [Schematron](StructureDefinition-ehealth-carecommunication-payload-identifier.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-carecommunication-payload-identifier",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-payload-identifier",
  "version" : "10.0.1",
  "name" : "ehealth-carecommunication-payload-identifier",
  "title" : "Identifier Extension",
  "status" : "active",
  "date" : "2026-08-11T06:32:53+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Extension to hold an Identifier for a payload. Identifier.value shall be a UUID v4 in URN form (urn:uuid:<uuid>).",
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
      "short" : "Identifier Extension",
      "definition" : "Extension to hold an Identifier for a payload. Identifier.value shall be a UUID v4 in URN form (urn:uuid:<uuid>)."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-payload-identifier"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Identifier"
      }]
    }]
  }
}

```
