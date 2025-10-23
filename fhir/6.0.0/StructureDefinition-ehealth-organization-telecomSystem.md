# Telecom System - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Telecom System**

## Extension: Telecom System 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-telecomSystem | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-organization-telecomSystem |

| | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| Type of communications system required to make use of the contact point: phone | fax | email | pager | url | sms | ean | other |

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-organization](StructureDefinition-ehealth-organization.md)
* Examples for this Extension: [63785662-18ad-4896-b960-505e94bdc5c4](Organization-108752.md) and [Organization02](Organization-8564.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-organization-telecomSystem)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-organization-telecomSystem.csv), [Excel](StructureDefinition-ehealth-organization-telecomSystem.xlsx), [Schematron](StructureDefinition-ehealth-organization-telecomSystem.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-organization-telecomSystem",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-telecomSystem",
  "version" : "6.0.0",
  "name" : "ehealth-organization-telecomSystem",
  "title" : "Telecom System",
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
  "description" : "Type of communications system required to make use of the contact point: phone | fax | email | pager | url | sms | ean | other",
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
        "short" : "Type of communications system required to make use of the contact point: phone | fax | email | pager | url | sms | ean | other",
        "definition" : "Type of communications system required to make use of the contact point: phone | fax | email | pager | url | sms | ean | other"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-telecomSystem"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/contactpoint-system"
        }
      }
    ]
  }
}

```
