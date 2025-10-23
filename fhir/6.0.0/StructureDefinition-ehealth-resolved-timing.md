# Resolved timing - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Resolved timing**

## Extension: Resolved timing 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-resolved-timing |

Resolved timing reflects whether a measurement (Observation, QuestionnaireResponse or Media) has been performed ad-hoc or as fulfillment of a measurement regime time slot in which case the extent of the time slot is given by start and end. If the measurement regime has a form for which a time slot cannot be resolved or determining is/was not supported, the type unresolved is used.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-media](StructureDefinition-ehealth-media.md), [ehealth-observation](StructureDefinition-ehealth-observation.md), [ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md) and [ehealth-task](StructureDefinition-ehealth-task.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-resolved-timing)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-resolved-timing.csv), [Excel](StructureDefinition-ehealth-resolved-timing.xlsx), [Schematron](StructureDefinition-ehealth-resolved-timing.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-resolved-timing",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing",
  "version" : "6.0.0",
  "name" : "ehealth-resolved-timing",
  "title" : "Resolved timing",
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
  "description" : "Resolved timing reflects whether a measurement (Observation, QuestionnaireResponse or Media) has been performed ad-hoc or as fulfillment of a measurement regime time slot in which case the extent of the time slot is given by start and end. If the measurement regime has a form for which a time slot cannot be resolved or determining is/was not supported, the type unresolved is used.",
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
        "short" : "Resolved Timing",
        "definition" : "Resolved timing reflects whether a measurement (Observation, QuestionnaireResponse or Media) has been performed ad-hoc or as fulfillment of a measurement regime time slot in which case the extent of the time slot is given by start and end. If the measurement regime has a form for which a time slot cannot be resolved or determining is/was not supported, the type unresolved is used."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:serviceRequestVersionId",
        "path" : "Extension.extension",
        "sliceName" : "serviceRequestVersionId",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:serviceRequestVersionId.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:serviceRequestVersionId.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "serviceRequestVersionId"
      },
      {
        "id" : "Extension.extension:serviceRequestVersionId.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "id"
          }
        ]
      },
      {
        "id" : "Extension.extension:start",
        "path" : "Extension.extension",
        "sliceName" : "start",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:start.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:start.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "start"
      },
      {
        "id" : "Extension.extension:start.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Extension.extension:end",
        "path" : "Extension.extension",
        "sliceName" : "end",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:end.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:end.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "end"
      },
      {
        "id" : "Extension.extension:end.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Extension.extension:type",
        "path" : "Extension.extension",
        "sliceName" : "type",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:type.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:type.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "type"
      },
      {
        "id" : "Extension.extension:type.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/resolved-timing-type"
        }
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing"
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
