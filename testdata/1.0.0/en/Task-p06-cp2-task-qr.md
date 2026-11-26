# Evaluate questionnaire response triage — routine - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Evaluate questionnaire response triage — routine**

## Example Task: Evaluate questionnaire response triage — routine

Profile: [ehealth-task](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-task.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**EpisodeOfCare**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-29 09:00:00+0000 --> (ongoing)](EpisodeOfCare-p06-eoc2.md)

**Task category**: Need assessment of measurement

**Task responsible**: [CareTeam Telemedicinsk KOL-team](CareTeam-careteam-placeholder.md)

**Restriction category**: Monitoring of measurement(s)

**CarePlan reference**: [CarePlan: extension = ->EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-29 09:00:00+0000 --> (ongoing),,,; instantiatesCanonical = http://ehealth.sundhed.dk/testdata/PlanDefinition/plandefinition; status = active; intent = order; period = 2026-09-29 09:05:00+0000 --> (ongoing)](CarePlan-p06-cp2.md)

**status**: Requested

**intent**: plan

**priority**: Routine

**description**: Spørgeskemabesvarelse til evaluering

**focus**: [ClinicalImpression Result of triaging](ClinicalImpression-p06-cp2-ci-qr.md)

**for**: [Andreas Bonde (official) Male, DoB: 1996-07-12 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1207969563 (use: official))](Patient-p06.md)

**authoredOn**: 2026-09-30 08:30:10+0000



## Resource Content

```json
{
  "resourceType" : "Task",
  "id" : "p06-cp2-task-qr",
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
      "reference" : "EpisodeOfCare/p06-eoc2"
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
      "reference" : "CarePlan/p06-cp2"
    }
  }],
  "status" : "requested",
  "intent" : "plan",
  "priority" : "routine",
  "description" : "Spørgeskemabesvarelse til evaluering",
  "focus" : {
    "reference" : "ClinicalImpression/p06-cp2-ci-qr"
  },
  "for" : {
    "reference" : "Patient/p06"
  },
  "authoredOn" : "2026-09-30T08:30:10+00:00"
}

```
