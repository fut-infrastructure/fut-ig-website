# includeAsExtra - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **includeAsExtra**

## Extension: includeAsExtra 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-include-as-extra |

Used to mark that the action/service request may be performed as extra, meaning the action/service request may also be performed outside the resolved timing slots.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md) and [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-include-as-extra)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-include-as-extra.csv), [Excel](StructureDefinition-ehealth-include-as-extra.xlsx), [Schematron](StructureDefinition-ehealth-include-as-extra.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-include-as-extra",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
  "version" : "6.0.0",
  "name" : "ehealth-include-as-extra",
  "title" : "includeAsExtra",
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
  "description" : "Used to mark that the action/service request may be performed as extra, meaning the action/service request may also be performed outside the resolved timing slots.",
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
        "short" : "Used to mark that the action/service request may be performed as extra, meaning the action/service request may also be performed outside the resolved timing slots.",
        "definition" : "Used to mark that the action/service request may be performed as extra, meaning the action/service request may also be performed outside the resolved timing slots."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      }
    ]
  }
}

```
