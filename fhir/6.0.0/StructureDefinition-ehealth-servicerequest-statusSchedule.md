# ServiceRequest status schedule - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ServiceRequest status schedule**

## Extension: ServiceRequest status schedule 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusSchedule | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-servicerequest-statusSchedule |

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-servicerequest-statusSchedule)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-servicerequest-statusSchedule.csv), [Excel](StructureDefinition-ehealth-servicerequest-statusSchedule.xlsx), [Schematron](StructureDefinition-ehealth-servicerequest-statusSchedule.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-servicerequest-statusSchedule",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusSchedule",
  "version" : "6.0.0",
  "name" : "ehealth-servicerequest-statusSchedule",
  "title" : "ServiceRequest status schedule",
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
        "short" : "ServiceRequest status schedule"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:status",
        "path" : "Extension.extension",
        "sliceName" : "status",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:status.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:status.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "status"
      },
      {
        "id" : "Extension.extension:status.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "code"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/request-status"
        }
      },
      {
        "id" : "Extension.extension:scheduledTime",
        "path" : "Extension.extension",
        "sliceName" : "scheduledTime",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:scheduledTime.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:scheduledTime.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "scheduledTime"
      },
      {
        "id" : "Extension.extension:scheduledTime.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusSchedule"
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
