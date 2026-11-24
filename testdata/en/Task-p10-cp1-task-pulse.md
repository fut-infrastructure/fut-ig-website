# Assess pulse triage — urgent - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Assess pulse triage — urgent**

## Example Task: Assess pulse triage — urgent

Profile: [ehealth-task](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-task.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**EpisodeOfCare**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-29 09:00:00+0000 --> (ongoing)](EpisodeOfCare-p10-eoc1.md)

**Task category**: Need assessment of measurement

**Task responsible**: [CareTeam Telemedicinsk KOL-team](CareTeam-careteam-placeholder.md)

**Restriction category**: Monitoring of measurement(s)

**CarePlan reference**: [CarePlan: extension = ->EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-29 09:00:00+0000 --> (ongoing),,,; instantiatesCanonical = http://ehealth.sundhed.dk/testdata/PlanDefinition/plandefinition; status = active; intent = order; period = 2026-09-29 09:05:00+0000 --> (ongoing)](CarePlan-p10-cp1.md)

**status**: Requested

**intent**: plan

**priority**: Urgent

**description**: Måling til vurdering

**focus**: [ClinicalImpression Result of triaging](ClinicalImpression-p10-cp1-ci-pulse.md)

**for**: [Martin Kristensen (official) Male, DoB: 2004-10-05 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#0510049527 (use: official))](Patient-p10.md)

**authoredOn**: 2026-09-30 10:00:10+0000



## Resource Content

```json
{
  "resourceType" : "Task",
  "id" : "p10-cp1-task-pulse",
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
      "reference" : "EpisodeOfCare/p10-eoc1"
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
      "reference" : "CarePlan/p10-cp1"
    }
  }],
  "status" : "requested",
  "intent" : "plan",
  "priority" : "urgent",
  "description" : "Måling til vurdering",
  "focus" : {
    "reference" : "ClinicalImpression/p10-cp1-ci-pulse"
  },
  "for" : {
    "reference" : "Patient/p10"
  },
  "authoredOn" : "2026-09-30T10:00:10+00:00"
}

```
