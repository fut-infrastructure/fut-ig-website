# Episode of care 1 (completed) - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Episode of care 1 (completed)**

## Example EpisodeOfCare: Episode of care 1 (completed)

Profile: [ehealth-episodeofcare](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-episodeofcare.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Caremanager organization**: [Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing)))](Organization-org-region-nordjylland.md)

> **Managing organization**
* organisation: [Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing)))](Organization-org-region-nordjylland.md)
* period: 2025-07-07 09:00:00+0000 --> 2025-11-17 12:00:00+0000

> **Team history**
* careTeam: [CareTeam Telemedicinsk KOL-team](CareTeam-careteam-placeholder.md)
* period: 2025-07-07 09:00:00+0000 --> 2025-11-17 12:00:00+0000

**status**: Finished

> **statusHistory****status**: Planned**period**: 2025-07-07 09:00:00+0000 --> 2025-07-07 09:05:00+0000

> **statusHistory****status**: Active**period**: 2025-07-07 09:05:00+0000 --> 2025-11-17 12:00:00+0000

> **statusHistory****status**: Finished**period**: 2025-11-17 12:00:00+0000 --> (ongoing)

### Diagnoses

| | |
| :--- | :--- |
| - | **Condition** |
| * | [Condition Kronisk obstruktiv lungesygdom](Condition-p02-eoc1-cond.md) |

**patient**: [Ulrik Møller (official) Male, DoB: 1998-01-15 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1501989971 (use: official))](Patient-p02.md)

**period**: 2025-07-07 09:00:00+0000 --> 2025-11-17 12:00:00+0000

**team**: [CareTeam Telemedicinsk KOL-team](CareTeam-careteam-placeholder.md)



## Resource Content

```json
{
  "resourceType" : "EpisodeOfCare",
  "id" : "p02-eoc1",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization",
    "valueReference" : {
      "reference" : "Organization/org-region-nordjylland"
    }
  },
  {
    "extension" : [{
      "url" : "organisation",
      "valueReference" : {
        "reference" : "Organization/org-region-nordjylland"
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2025-07-07T09:00:00+00:00",
        "end" : "2025-11-17T12:00:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-managing-organization"
  },
  {
    "extension" : [{
      "url" : "careTeam",
      "valueReference" : {
        "reference" : "CareTeam/careteam-placeholder"
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2025-07-07T09:00:00+00:00",
        "end" : "2025-11-17T12:00:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamHistory"
  }],
  "status" : "finished",
  "statusHistory" : [{
    "status" : "planned",
    "period" : {
      "start" : "2025-07-07T09:00:00+00:00",
      "end" : "2025-07-07T09:05:00+00:00"
    }
  },
  {
    "status" : "active",
    "period" : {
      "start" : "2025-07-07T09:05:00+00:00",
      "end" : "2025-11-17T12:00:00+00:00"
    }
  },
  {
    "status" : "finished",
    "period" : {
      "start" : "2025-11-17T12:00:00+00:00"
    }
  }],
  "diagnosis" : [{
    "condition" : {
      "reference" : "Condition/p02-eoc1-cond"
    }
  }],
  "patient" : {
    "reference" : "Patient/p02"
  },
  "period" : {
    "start" : "2025-07-07T09:00:00+00:00",
    "end" : "2025-11-17T12:00:00+00:00"
  },
  "team" : [{
    "reference" : "CareTeam/careteam-placeholder"
  }]
}

```
