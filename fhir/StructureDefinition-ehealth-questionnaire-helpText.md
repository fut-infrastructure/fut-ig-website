# Help text - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Help text**

## Extension: Help text 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-helpText | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-questionnaire-helpText |

Help text for questions. xhtml contains an equivalent of the text string, but includes additional XHTML markup, such as bold, italics, styles, tables, etc. Existing restrictions on XHTML content apply. Note that using markdown allows for greater flexibility of display.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-questionnaire](StructureDefinition-ehealth-questionnaire.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-questionnaire-helpText)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-questionnaire-helpText.csv), [Excel](StructureDefinition-ehealth-questionnaire-helpText.xlsx), [Schematron](StructureDefinition-ehealth-questionnaire-helpText.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-questionnaire-helpText",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-helpText",
  "version" : "6.0.0",
  "name" : "ehealth-questionnaire-helpText",
  "title" : "Help text",
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
  "description" : "Help text for questions. xhtml contains an equivalent of the text string, but includes additional XHTML markup, such as bold, italics, styles, tables, etc. Existing restrictions on XHTML content apply. Note that using markdown allows for greater flexibility of display.",
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
        "short" : "Help text",
        "definition" : "Help text for questions. xhtml contains an equivalent of the text string, but includes additional XHTML markup, such as bold, italics, styles, tables, etc. Existing restrictions on XHTML content apply. Note that using markdown allows for greater flexibility of display."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 1
      },
      {
        "id" : "Extension.extension:text",
        "path" : "Extension.extension",
        "sliceName" : "text",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:text.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:text.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "text"
      },
      {
        "id" : "Extension.extension:text.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Extension.extension:xhtml",
        "path" : "Extension.extension",
        "sliceName" : "xhtml",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:xhtml.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:xhtml.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "xhtml"
      },
      {
        "id" : "Extension.extension:xhtml.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-helpText"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
