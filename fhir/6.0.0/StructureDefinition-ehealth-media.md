# ehealth-media - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-media**

## Resource Profile: ehealth-media 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-media |

# Introduction

A photo, video, or audio recording acquired or used in healthcare. The actual content may be inline or provided by direct reference.

# Scope and Usage

In scope of the eHealth infrastructure Media resources are used with measurements, so that submitted measurement bundles can consist of e.g. Observations, QuestionnaireResponses, and Media. The actual media data can be contained as a payload of the Media resource (using the `content.data` element) or be referenced from the Media resource (using the `content.url` element).

### Usage mode

The use of a Media resource is defined by the `usageMode` element. The following values are allowed:

* raw: The media is an original raw data file, eg. an original image of a wound.
* metadata: The media has no content, but it specifies metadata about the media, eg. the location of a wound specified by the `bodySite` element.
* overlay: The media is an overlay on top of a raw media, eg. a perimeter drawing on top of an image of a wound.

### Media grouping

Media resources can grouped together using the `relatedTo` element. Eg. an overlay media is related to the raw media. Media connected through `relatedTo` will be grouped together by means of a series id in the element `series`. The series id is maintained by the eHealth infrastructure. Grouping can only done among media resources that are based on the same service request. A group of media can be retrieved by searching for media resources by `series` id.

### Storage of media

Media content delivered inline in the `content.data` element will be extracted and stored outside the resource in the eHealth infrastructure, and the element `content.url` will be set to allow retrieval of the content. The eHealth infrastructure will anonymize media image content. Sensitive metadata in the image will be removed before the image is stored. Media content delivered by reference in the `content.url` element will not be stored or anonymized by the eHealth infrastructure.

### Image thumbnails

The eHealth infrastructure will automatically generate thumbnail representations of media image content delivered inline. The sizes of thumbnails are determined by configuration in the eHealth infrastructure. When retrieving a media, the thumbnail representations can be found in the `thumbnail` element. Thumbnails are generated asynchronously, so they may not be available immediately after the media is submitted. Each thumbnail representations will have `status` set to 'requested' and have no `content` element until the thumbnail is generated. In case that errors prevent the generation of a thumbnail, the `status` of the thumbnail will be set to 'failed'.

### Update of media

Media resources can be updated, to change `status`, or to allow grouping of media that was not grouped at the time of submission by updating `relatedTo`, or to modify the `content` of a media submitted with usage mode 'overlay'. Update of `content` is only allowed for media with `usageMode` 'overlay'. The `status` of a Media resource can be updated from any of: 'preparation' | 'in-progress' | 'on-hold' | 'completed' to 'stopped'. Update of any other elements is denied.

### Searching media

It is possible to search for Media based on:

* episodeOfCare
* subject
* type
* period
* deviceMeasuringQuality
* qualityCode
* qualityType
* series
* usageMode
* relatedTo

At least one of "subject" and "episodeOfCare" must be provided. "period" searches on range of "occurence".

**Usages:**

* Refer to this Profile: [Media investigation item](StructureDefinition-ehealth-clinicalimpression-mediaInvestigationItem.md), [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md), [Related to](StructureDefinition-ehealth-media-related-to.md) and [ehealth-observation-wound-dimensions](StructureDefinition-ehealth-observation-wound-dimensions.md)
* CapabilityStatements using this Profile: [measurement](CapabilityStatement-measurement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-media)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-media.csv), [Excel](StructureDefinition-ehealth-media.xlsx), [Schematron](StructureDefinition-ehealth-media.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-media",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media",
  "version" : "6.0.0",
  "name" : "ehealth-media",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "dicom",
      "uri" : "http://nema.org/dicom",
      "name" : "DICOM Tag Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Media",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Media",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Media",
        "path" : "Media",
        "constraint" : [
          {
            "key" : "ehealth-media-usageMode-metadata-no-content",
            "severity" : "error",
            "human" : "Media with usage mode 'metadata' cannot have content.",
            "expression" : "extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media-usage-mode').value = 'metadata' implies (content.data.empty() and content.url.empty())",
            "xpath" : "f:usageMode/f:valueCode/@value='metadata' implies (empty(f:content/f:data) and empty(f:content/f:url))",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media"
          }
        ]
      },
      {
        "id" : "Media.extension",
        "path" : "Media.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 3
      },
      {
        "id" : "Media.extension:episodeOfCare",
        "path" : "Media.extension",
        "sliceName" : "episodeOfCare",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare"
            ]
          }
        ]
      },
      {
        "id" : "Media.extension:episodeOfCare.value[x]",
        "path" : "Media.extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Media.extension:quality",
        "path" : "Media.extension",
        "sliceName" : "quality",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality"
            ]
          }
        ]
      },
      {
        "id" : "Media.extension:resolvedTiming",
        "path" : "Media.extension",
        "sliceName" : "resolvedTiming",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing"
            ]
          }
        ]
      },
      {
        "id" : "Media.extension:thumbnail",
        "path" : "Media.extension",
        "sliceName" : "thumbnail",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media-thumbnail"
            ]
          }
        ]
      },
      {
        "id" : "Media.extension:usageMode",
        "path" : "Media.extension",
        "sliceName" : "usageMode",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media-usage-mode"
            ]
          }
        ]
      },
      {
        "id" : "Media.extension:relatedTo",
        "path" : "Media.extension",
        "sliceName" : "relatedTo",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media-related-to"
            ]
          }
        ]
      },
      {
        "id" : "Media.extension:series",
        "path" : "Media.extension",
        "sliceName" : "series",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media-series-id"
            ]
          }
        ]
      },
      {
        "id" : "Media.basedOn",
        "path" : "Media.basedOn",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Media.modality",
        "path" : "Media.modality",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/media-modality"
        }
      },
      {
        "id" : "Media.view",
        "path" : "Media.view",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/media-view"
        }
      },
      {
        "id" : "Media.subject",
        "path" : "Media.subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://hl7.org/fhir/StructureDefinition/Group",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://hl7.org/fhir/StructureDefinition/Specimen"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Media.subject.reference",
        "path" : "Media.subject.reference",
        "min" : 1
      },
      {
        "id" : "Media.created[x]",
        "path" : "Media.created[x]",
        "min" : 1
      },
      {
        "id" : "Media.operator",
        "path" : "Media.operator",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Media.bodySite",
        "path" : "Media.bodySite",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/body-site"
        }
      },
      {
        "id" : "Media.device",
        "path" : "Media.device",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Media.note.author[x]",
        "path" : "Media.note.author[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Media.note.author[x]:authorReference",
        "path" : "Media.note.author[x]",
        "sliceName" : "authorReference",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Media.note.author[x]:authorString",
        "path" : "Media.note.author[x]",
        "sliceName" : "authorString",
        "min" : 0,
        "max" : "1",
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
