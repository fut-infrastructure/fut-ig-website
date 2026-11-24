# Assess saturation triage — routine - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Assess saturation triage — routine**

## Example Task: Assess saturation triage — routine

Profile: [ehealth-task](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-task.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**EpisodeOfCare**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-10-06 09:00:00+0000 --> 2026-02-16 12:00:00+0000](EpisodeOfCare-p05-eoc1.md)

**Task category**: Need assessment of measurement

**Task responsible**: [CareTeam Telemedicinsk KOL-team](CareTeam-careteam-placeholder.md)

**Restriction category**: Monitoring of measurement(s)

**CarePlan reference**: [CarePlan: extension = ->EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-10-06 09:00:00+0000 --> 2026-02-16 12:00:00+0000,,,,; instantiatesCanonical = http://ehealth.sundhed.dk/testdata/PlanDefinition/plandefinition; status = completed; intent = order; period = 2025-10-06 09:05:00+0000 --> (ongoing)](CarePlan-p05-cp1.md)

**status**: Requested

**intent**: plan

**priority**: Routine

**description**: Måling til vurdering

**focus**: [ClinicalImpression Result of triaging](ClinicalImpression-p05-cp1-ci-sat.md)

**for**: [Grete Kristensen (official) Female, DoB: 1989-12-05 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#0512894992 (use: official))](Patient-p05.md)

**authoredOn**: 2025-12-25 08:30:10+0000



## Resource Content

```json
{
  "resourceType" : "Task",
  "id" : "p05-cp1-task-sat",
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
      "reference" : "EpisodeOfCare/p05-eoc1"
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
      "reference" : "CarePlan/p05-cp1"
    }
  }],
  "status" : "requested",
  "intent" : "plan",
  "priority" : "routine",
  "description" : "Måling til vurdering",
  "focus" : {
    "reference" : "ClinicalImpression/p05-cp1-ci-sat"
  },
  "for" : {
    "reference" : "Patient/p05"
  },
  "authoredOn" : "2025-12-25T08:30:10+00:00"
}

```
