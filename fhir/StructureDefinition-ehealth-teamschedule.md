# Team schedule - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Team schedule**

## Extension: Team schedule 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamschedule | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-teamschedule |

Scheduled team change

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-careplan](StructureDefinition-ehealth-careplan.md) and [ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-teamschedule)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-teamschedule.csv), [Excel](StructureDefinition-ehealth-teamschedule.xlsx), [Schematron](StructureDefinition-ehealth-teamschedule.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-teamschedule",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamschedule",
  "version" : "6.0.0",
  "name" : "ehealth-teamschedule",
  "title" : "Team schedule",
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
  "description" : "Scheduled team change",
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
        "short" : "Team Schedule",
        "definition" : "Scheduled team change"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:careteam",
        "path" : "Extension.extension",
        "sliceName" : "careteam",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:careteam.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:careteam.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "careteam"
      },
      {
        "id" : "Extension.extension:careteam.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
            ],
            "aggregation" : ["referenced"]
          }
        ]
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
        "id" : "Extension.extension:addCareteam",
        "path" : "Extension.extension",
        "sliceName" : "addCareteam",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Extension.extension:addCareteam.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:addCareteam.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "addCareteam"
      },
      {
        "id" : "Extension.extension:addCareteam.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamschedule"
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
