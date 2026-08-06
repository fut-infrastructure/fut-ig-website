# EpisodeOfCare/42 - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EpisodeOfCare/42**

## Example EpisodeOfCare: EpisodeOfCare/42

version: 2

Profile: [ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md)

**Caremanager organization**: [Organization 63785662-18ad-4896-b960-505e94bdc5c4](Organization-108752.md)

> **Managing organization**
* organisation: [Organization 63785662-18ad-4896-b960-505e94bdc5c4](Organization-108752.md)
* period: 2023-01-01 00:00:00+0000 --> 2023-12-31 00:00:00+0000

**status**: Planned

### Diagnoses

| | |
| :--- | :--- |
| - | **Condition** |
| * | [Condition Boligens indretning](Condition-42.md) |

**patient**: [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#2512489996 (use: official, ))](Patient-102.md)

**period**: 2023-01-01 00:00:00+0000 --> (ongoing)



## Resource Content

```json
{
  "resourceType" : "EpisodeOfCare",
  "id" : "42",
  "meta" : {
    "versionId" : "2",
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare"]
  },
  "extension" : [{
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization",
    "valueReference" : {
      "reference" : "Organization/108752"
    }
  },
  {
    "extension" : [{
      "url" : "organisation",
      "valueReference" : {
        "reference" : "Organization/108752"
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2023-01-01T00:00:00Z",
        "end" : "2023-12-31T00:00:00Z"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-managing-organization"
  }],
  "status" : "planned",
  "diagnosis" : [{
    "condition" : {
      "reference" : "Condition/42"
    }
  }],
  "patient" : {
    "reference" : "Patient/102"
  },
  "period" : {
    "start" : "2023-01-01T00:00:00Z"
  }
}

```
