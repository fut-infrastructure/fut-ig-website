# Author organization - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Author organization**

## Extension: Author organization 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-composition-authorOrganization | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-composition-authorOrganization |

Organization that authored the Composition

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-composition](StructureDefinition-ehealth-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-composition-authorOrganization)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-composition-authorOrganization.csv), [Excel](StructureDefinition-ehealth-composition-authorOrganization.xlsx), [Schematron](StructureDefinition-ehealth-composition-authorOrganization.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-composition-authorOrganization",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-composition-authorOrganization",
  "version" : "6.0.0",
  "name" : "ehealth-composition-authorOrganization",
  "title" : "Author organization",
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
  "description" : "Organization that authored the Composition",
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
        "short" : "Organization that authored the Composition",
        "definition" : "Organization that authored the Composition"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-composition-authorOrganization"
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
            "aggregation" : ["bundled", "contained"]
          }
        ]
      }
    ]
  }
}

```
