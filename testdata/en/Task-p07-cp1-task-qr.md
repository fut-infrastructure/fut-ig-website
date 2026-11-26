# Evaluate questionnaire response triage — asap - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Evaluate questionnaire response triage — asap**

## Example Task: Evaluate questionnaire response triage — asap

Profile: [ehealth-task](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-task.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**EpisodeOfCare**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-12-01 09:00:00+0000 --> 2026-04-13 12:00:00+0000](EpisodeOfCare-p07-eoc1.md)

**Task category**: Need assessment of measurement

**Task responsible**: [CareTeam Telemedicinsk KOL-team](CareTeam-careteam-placeholder.md)

**Restriction category**: Monitoring of measurement(s)

**CarePlan reference**: [CarePlan: extension = ->EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-12-01 09:00:00+0000 --> 2026-04-13 12:00:00+0000,,,,; instantiatesCanonical = http://ehealth.sundhed.dk/testdata/PlanDefinition/plandefinition; status = completed; intent = order; period = 2025-12-01 09:05:00+0000 --> (ongoing)](CarePlan-p07-cp1.md)

**status**: Requested

**intent**: plan

**priority**: ASAP

**description**: Spørgeskemabesvarelse til evaluering

**focus**: [ClinicalImpression Result of triaging](ClinicalImpression-p07-cp1-ci-qr.md)

**for**: [Karl Larsen (official) Male, DoB: 1982-09-15 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1509829345 (use: official))](Patient-p07.md)

**authoredOn**: 2026-02-19 10:00:10+0000



## Resource Content

```json
{
  "resourceType" : "Task",
  "id" : "p07-cp1-task-qr",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p07-eoc1"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-category",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/task-category",
        "code" : "MeasurementForAssessment",
        "display" : "Need assessment of measurement"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible",
    "valueReference" : {
      "reference" : "CareTeam/careteam-placeholder"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/restriction-category",
        "code" : "measurement-monitoring",
        "display" : "Monitoring of measurement(s)"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-reference-careplan",
    "valueReference" : {
      "reference" : "CarePlan/p07-cp1"
    }
  }],
  "status" : "requested",
  "intent" : "plan",
  "priority" : "asap",
  "description" : "Spørgeskemabesvarelse til evaluering",
  "focus" : {
    "reference" : "ClinicalImpression/p07-cp1-ci-qr"
  },
  "for" : {
    "reference" : "Patient/p07"
  },
  "authoredOn" : "2026-02-19T10:00:10+00:00"
}

```
