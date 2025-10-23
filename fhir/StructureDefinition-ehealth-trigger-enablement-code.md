# triggerEnablementCode - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **triggerEnablementCode**

## Extension: triggerEnablementCode 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-trigger-enablement-code | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-trigger-enablement-code |

Controls whether this ServiceRequest will react to trigger conditions expressed in other activities of the plan.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-trigger-enablement-code)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-trigger-enablement-code.csv), [Excel](StructureDefinition-ehealth-trigger-enablement-code.xlsx), [Schematron](StructureDefinition-ehealth-trigger-enablement-code.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-trigger-enablement-code",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-trigger-enablement-code",
  "version" : "6.0.0",
  "name" : "ehealth-trigger-enablement-code",
  "title" : "triggerEnablementCode",
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
  "description" : "Controls whether this ServiceRequest will react to trigger conditions expressed in other activities of the plan.",
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
        "short" : "Enablement of reaction to triggering conditions being met.",
        "definition" : "Controls whether this ServiceRequest will react to trigger conditions expressed in other activities of the plan."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-trigger-enablement-code"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "code"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/trigger-enablement-code"
        }
      }
    ]
  }
}

```
