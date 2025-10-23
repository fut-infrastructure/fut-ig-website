# Title - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Title**

## Extension: Title 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-title | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-title |

The title of the message

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-message](StructureDefinition-ehealth-message.md)
* Examples for this Extension: [Communication/message01](Communication-message01.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-title)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-title.csv), [Excel](StructureDefinition-ehealth-title.xlsx), [Schematron](StructureDefinition-ehealth-title.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-title",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-title",
  "version" : "6.0.0",
  "name" : "ehealth-title",
  "title" : "Title",
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
  "description" : "The title of the message",
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
        "short" : "Message title",
        "definition" : "The title of the message"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-title"
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
