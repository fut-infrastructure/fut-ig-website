# Copyright item indicator - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Copyright item indicator**

## Extension: Copyright item indicator 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-item-is-copyright | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-questionnaire-item-is-copyright |

Indicates that the item is part of a copyright structure (CDA Document sharing - QFDD/QRD)

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-questionnaire](StructureDefinition-ehealth-questionnaire.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-questionnaire-item-is-copyright)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-questionnaire-item-is-copyright.csv), [Excel](StructureDefinition-ehealth-questionnaire-item-is-copyright.xlsx), [Schematron](StructureDefinition-ehealth-questionnaire-item-is-copyright.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-questionnaire-item-is-copyright",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-item-is-copyright",
  "version" : "6.0.0",
  "name" : "ehealth-questionnaire-item-is-copyright",
  "title" : "Copyright item indicator",
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
  "description" : "Indicates that the item is part of a copyright structure (CDA Document sharing - QFDD/QRD)",
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
        "short" : "Indicates that the item is part of a copyright structure (CDA Document sharing - QFDD/QRD)",
        "definition" : "Indicates that the item is part of a copyright structure (CDA Document sharing - QFDD/QRD)"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-item-is-copyright"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      }
    ]
  }
}

```
