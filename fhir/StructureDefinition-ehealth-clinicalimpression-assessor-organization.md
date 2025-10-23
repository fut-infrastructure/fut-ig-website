# assessor-Organization - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **assessor-Organization**

## Extension: assessor-Organization 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-assessor-organization | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-clinicalimpression-assessor-organization |

The organization that the assessor is a part of.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-clinicalimpression-assessor-organization)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-clinicalimpression-assessor-organization.csv), [Excel](StructureDefinition-ehealth-clinicalimpression-assessor-organization.xlsx), [Schematron](StructureDefinition-ehealth-clinicalimpression-assessor-organization.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-clinicalimpression-assessor-organization",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-assessor-organization",
  "version" : "6.0.0",
  "name" : "ehealth-clinicalimpression-assessor-organization",
  "title" : "assessor-Organization",
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
  "description" : "The organization that the assessor is a part of.",
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
        "short" : "Assessors Organization",
        "definition" : "The organization that the assessor is a part of."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-assessor-organization"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
