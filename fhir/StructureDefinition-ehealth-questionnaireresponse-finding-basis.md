# Questionnaire response finding basis - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire response finding basis**

## Extension: Questionnaire response finding basis 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse-finding-basis | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-questionnaireresponse-finding-basis |

Basis for the overall clinical impression finding of the questionnaire response

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-questionnaireresponse-finding-basis)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-questionnaireresponse-finding-basis.csv), [Excel](StructureDefinition-ehealth-questionnaireresponse-finding-basis.xlsx), [Schematron](StructureDefinition-ehealth-questionnaireresponse-finding-basis.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-questionnaireresponse-finding-basis",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse-finding-basis",
  "version" : "6.0.0",
  "name" : "ehealth-questionnaireresponse-finding-basis",
  "title" : "Questionnaire response finding basis",
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
  "description" : "Basis for the overall clinical impression finding of the questionnaire response",
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
        "short" : "The basis for a clinical impression finding",
        "definition" : "Basis for the overall clinical impression finding of the questionnaire response"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 3
      },
      {
        "id" : "Extension.extension:linkId",
        "path" : "Extension.extension",
        "sliceName" : "linkId",
        "short" : "Unique id for item in questionnaire",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:linkId.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:linkId.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "linkId"
      },
      {
        "id" : "Extension.extension:linkId.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Extension.extension:value",
        "path" : "Extension.extension",
        "sliceName" : "value",
        "short" : "Value from questionnaire response",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:value.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:value.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "value"
      },
      {
        "id" : "Extension.extension:value.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "boolean"
          },
          {
            "code" : "decimal"
          },
          {
            "code" : "integer"
          },
          {
            "code" : "string"
          },
          {
            "code" : "Coding"
          }
        ]
      },
      {
        "id" : "Extension.extension:finding",
        "path" : "Extension.extension",
        "sliceName" : "finding",
        "short" : "What was found",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:finding.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:finding.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "finding"
      },
      {
        "id" : "Extension.extension:finding.value[x]",
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
        }
      },
      {
        "id" : "Extension.extension:finding.value[x]:valueCodeableConcept",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueCodeableConcept",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/clinicalimpression-finding-codes"
        }
      },
      {
        "id" : "Extension.extension:answerSignificance",
        "path" : "Extension.extension",
        "sliceName" : "answerSignificance",
        "short" : "The Answer significance for an answer",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
            ]
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse-finding-basis"
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
