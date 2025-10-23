# Questionnaire image - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire image**

## Extension: Questionnaire image 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-image | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-questionnaire-image |

Defines the images in the questionnaire answers and questions.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-questionnaire](StructureDefinition-ehealth-questionnaire.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-questionnaire-image)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-questionnaire-image.csv), [Excel](StructureDefinition-ehealth-questionnaire-image.xlsx), [Schematron](StructureDefinition-ehealth-questionnaire-image.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-questionnaire-image",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-image",
  "version" : "6.0.0",
  "name" : "ehealth-questionnaire-image",
  "title" : "Questionnaire image",
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
  "description" : "Defines the images in the questionnaire answers and questions.",
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
        "short" : "The image for a questionnaire",
        "definition" : "Defines the images in the questionnaire answers and questions."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 1
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
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "type" : [
          {
            "code" : "base64Binary"
          },
          {
            "code" : "boolean"
          },
          {
            "code" : "canonical"
          },
          {
            "code" : "code"
          },
          {
            "code" : "date"
          },
          {
            "code" : "dateTime"
          },
          {
            "code" : "decimal"
          },
          {
            "code" : "id"
          },
          {
            "code" : "instant"
          },
          {
            "code" : "integer"
          },
          {
            "code" : "markdown"
          },
          {
            "code" : "oid"
          },
          {
            "code" : "positiveInt"
          },
          {
            "code" : "string"
          },
          {
            "code" : "time"
          },
          {
            "code" : "unsignedInt"
          },
          {
            "code" : "uri"
          },
          {
            "code" : "url"
          },
          {
            "code" : "uuid"
          },
          {
            "code" : "Address"
          },
          {
            "code" : "Age"
          },
          {
            "code" : "Annotation"
          },
          {
            "code" : "Attachment"
          },
          {
            "code" : "CodeableConcept"
          },
          {
            "code" : "Coding"
          },
          {
            "code" : "ContactPoint"
          },
          {
            "code" : "Count"
          },
          {
            "code" : "Distance"
          },
          {
            "code" : "Duration"
          },
          {
            "code" : "HumanName"
          },
          {
            "code" : "Identifier"
          },
          {
            "code" : "Money"
          },
          {
            "code" : "Period"
          },
          {
            "code" : "Quantity"
          },
          {
            "code" : "Range"
          },
          {
            "code" : "Ratio"
          },
          {
            "code" : "Reference",
            "aggregation" : ["contained"]
          },
          {
            "code" : "SampledData"
          },
          {
            "code" : "Signature"
          },
          {
            "code" : "Timing"
          },
          {
            "code" : "ContactDetail"
          },
          {
            "code" : "Contributor"
          },
          {
            "code" : "DataRequirement"
          },
          {
            "code" : "Expression"
          },
          {
            "code" : "ParameterDefinition"
          },
          {
            "code" : "RelatedArtifact"
          },
          {
            "code" : "TriggerDefinition"
          },
          {
            "code" : "UsageContext"
          },
          {
            "code" : "Dosage"
          },
          {
            "code" : "Meta"
          }
        ]
      },
      {
        "id" : "Extension.extension:content.value[x]:valueReference",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueReference",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "Extension.extension:terms",
        "path" : "Extension.extension",
        "sliceName" : "terms",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:terms.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:terms.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "terms"
      },
      {
        "id" : "Extension.extension:terms.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-image"
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
