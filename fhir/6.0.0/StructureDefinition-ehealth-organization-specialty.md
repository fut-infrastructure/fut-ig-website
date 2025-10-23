# Organization specialty - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization specialty**

## Extension: Organization specialty 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-specialty | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-organization-specialty |

The specialty of the organization

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-organization](StructureDefinition-ehealth-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-organization-specialty)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-organization-specialty.csv), [Excel](StructureDefinition-ehealth-organization-specialty.xlsx), [Schematron](StructureDefinition-ehealth-organization-specialty.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-organization-specialty",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-specialty",
  "version" : "6.0.0",
  "name" : "ehealth-organization-specialty",
  "title" : "Organization specialty",
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
  "description" : "The specialty of the organization",
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
        "short" : "The organization's specialty",
        "definition" : "The specialty of the organization"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 1
      },
      {
        "id" : "Extension.extension:specialty",
        "path" : "Extension.extension",
        "sliceName" : "specialty",
        "short" : "The specialty code",
        "definition" : "The code defining the specialty of the organization.",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:specialty.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:specialty.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "specialty"
      },
      {
        "id" : "Extension.extension:specialty.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/organization-specialty"
        }
      },
      {
        "id" : "Extension.extension:primaryIndicator",
        "path" : "Extension.extension",
        "sliceName" : "primaryIndicator",
        "short" : "Indicator of primary specialty",
        "definition" : "Indicates if the specialty is the primary specialty of the organization.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:primaryIndicator.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:primaryIndicator.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "primaryIndicator"
      },
      {
        "id" : "Extension.extension:primaryIndicator.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-specialty"
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
