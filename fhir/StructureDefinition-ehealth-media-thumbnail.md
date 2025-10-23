# Media Thumbnail representation - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Media Thumbnail representation**

## Extension: Media Thumbnail representation 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media-thumbnail | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-media-thumbnail |

A downsampled version of a Media resource content.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-media](StructureDefinition-ehealth-media.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-media-thumbnail)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-media-thumbnail.csv), [Excel](StructureDefinition-ehealth-media-thumbnail.xlsx), [Schematron](StructureDefinition-ehealth-media-thumbnail.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-media-thumbnail",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media-thumbnail",
  "version" : "6.0.0",
  "name" : "ehealth-media-thumbnail",
  "title" : "Media Thumbnail representation",
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
  "description" : "A downsampled version of a Media resource content.",
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
        "short" : "Media Thumbnail",
        "definition" : "A downsampled version of a Media resource content."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 5
      },
      {
        "id" : "Extension.extension:sizeCategory",
        "path" : "Extension.extension",
        "sliceName" : "sizeCategory",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:sizeCategory.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:sizeCategory.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "sizeCategory"
      },
      {
        "id" : "Extension.extension:sizeCategory.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/thumbnail-size-category"
        }
      },
      {
        "id" : "Extension.extension:status",
        "path" : "Extension.extension",
        "sliceName" : "status",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:status.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:status.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "status"
      },
      {
        "id" : "Extension.extension:status.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/thumbnail-status"
        }
      },
      {
        "id" : "Extension.extension:width",
        "path" : "Extension.extension",
        "sliceName" : "width",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:width.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:width.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "width"
      },
      {
        "id" : "Extension.extension:width.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "positiveInt"
          }
        ]
      },
      {
        "id" : "Extension.extension:height",
        "path" : "Extension.extension",
        "sliceName" : "height",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:height.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:height.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "height"
      },
      {
        "id" : "Extension.extension:height.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "positiveInt"
          }
        ]
      },
      {
        "id" : "Extension.extension:content",
        "path" : "Extension.extension",
        "sliceName" : "content",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:content.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:content.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "content"
      },
      {
        "id" : "Extension.extension:content.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Attachment"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media-thumbnail"
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
