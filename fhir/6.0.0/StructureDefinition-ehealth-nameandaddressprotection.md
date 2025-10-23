# Name and address protection - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Name and address protection**

## Extension: Name and address protection 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-nameandaddressprotection | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-nameandaddressprotection |

Period of name and address protection. Patients with name and address protection are marked with security label ‘restricted’ (R in http://hl7.org/fhir/v3/Confidentiality).

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-patient](StructureDefinition-ehealth-patient.md) and [ehealth-skrs-patient](StructureDefinition-ehealth-skrs-patient.md)
* Examples for this Extension: [Patient/291](Patient-291.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-nameandaddressprotection)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-nameandaddressprotection.csv), [Excel](StructureDefinition-ehealth-nameandaddressprotection.xlsx), [Schematron](StructureDefinition-ehealth-nameandaddressprotection.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-nameandaddressprotection",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-nameandaddressprotection",
  "version" : "6.0.0",
  "name" : "ehealth-nameandaddressprotection",
  "title" : "Name and address protection",
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
  "description" : "Period of name and address protection. Patients with name and address protection are marked with security label ‘restricted’ (R in http://hl7.org/fhir/v3/Confidentiality).",
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
        "short" : "Period of name and address protection",
        "definition" : "Period of name and address protection. Patients with name and address protection are marked with security label ‘restricted’ (R in http://hl7.org/fhir/v3/Confidentiality)."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-nameandaddressprotection"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Period"
          }
        ]
      }
    ]
  }
}

```
