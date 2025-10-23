# View investigation item - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **View investigation item**

## Extension: View investigation item 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-viewInvestigationItem | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-clinicalimpression-viewInvestigationItem |

Investigation item for View resources so they can be approved.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-clinicalimpression-viewInvestigationItem)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-clinicalimpression-viewInvestigationItem.csv), [Excel](StructureDefinition-ehealth-clinicalimpression-viewInvestigationItem.xlsx), [Schematron](StructureDefinition-ehealth-clinicalimpression-viewInvestigationItem.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-clinicalimpression-viewInvestigationItem",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-viewInvestigationItem",
  "version" : "6.0.0",
  "name" : "ehealth-clinicalimpression-viewInvestigationItem",
  "title" : "View investigation item",
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
  "description" : "Investigation item for View resources so they can be approved.",
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
        "short" : "View item",
        "definition" : "Investigation item for View resources so they can be approved."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-viewInvestigationItem"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-view"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
