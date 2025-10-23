# Reference range - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reference range**

## Extension: Reference range 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-referenceRange |

Provides guide for interpretation. Must have at least a low or a high.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md) and [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-referenceRange)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-referenceRange.csv), [Excel](StructureDefinition-ehealth-referenceRange.xlsx), [Schematron](StructureDefinition-ehealth-referenceRange.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-referenceRange",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange",
  "version" : "6.0.0",
  "name" : "ehealth-referenceRange",
  "title" : "Reference range",
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
  "description" : "Provides guide for interpretation. Must have at least a low or a high.",
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
        "short" : "Provides guide for interpretation.",
        "definition" : "Provides guide for interpretation. Must have at least a low or a high."
      },
      {
        "id" : "Extension.extension:low",
        "path" : "Extension.extension",
        "sliceName" : "low",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:low.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:low.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "low"
      },
      {
        "id" : "Extension.extension:low.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Quantity",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/SimpleQuantity"]
          }
        ]
      },
      {
        "id" : "Extension.extension:high",
        "path" : "Extension.extension",
        "sliceName" : "high",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:high.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:high.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "high"
      },
      {
        "id" : "Extension.extension:high.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Quantity",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/SimpleQuantity"]
          }
        ]
      },
      {
        "id" : "Extension.extension:type",
        "path" : "Extension.extension",
        "sliceName" : "type",
        "min" : 0,
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
          "valueSet" : "http://ehealth.sundhed.dk/vs/reference-range-type"
        }
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
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
