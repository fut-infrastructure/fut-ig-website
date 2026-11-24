# Care plan (completed) - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Care plan (completed)**

## Example CarePlan: Care plan (completed)

Profile: [ehealth-careplan](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-careplan.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-06-02 09:00:00+0000 --> 2025-10-13 12:00:00+0000](EpisodeOfCare-p01-eoc1.md)

> **Careplan status history**
* status: Draft
* period: 2025-06-02 09:05:00+0000 --> 2025-06-02 09:05:01+0000

> **Careplan status history**
* status: Active
* period: 2025-06-02 09:05:01+0000 --> 2025-10-13 11:55:00+0000

> **Careplan status history**
* status: Completed
* period: 2025-10-13 11:55:00+0000 --> (ongoing)

> **Team history**
* careTeam: [CareTeam Telemedicinsk KOL-team](CareTeam-careteam-placeholder.md)
* period: 2025-06-02 09:05:00+0000 --> 2025-10-13 11:55:00+0000

**instantiatesCanonical**: [Målinger og spørgeskema (iltmætning, puls og spørgeskema)](PlanDefinition-plandefinition.md)

**status**: Completed

**intent**: Order

**subject**: [Sonja Knudsen (official) Female, DoB: 1975-08-05 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#0508754760 (use: official))](Patient-p01.md)

**period**: 2025-06-02 09:05:00+0000 --> (ongoing)

**careTeam**: [CareTeam Telemedicinsk KOL-team](CareTeam-careteam-placeholder.md)

**addresses**: [Condition Kronisk obstruktiv lungesygdom](Condition-p01-eoc1-cond.md)

> **activity****reference**: [ServiceRequest Head activity](ServiceRequest-p01-cp1-sr-head.md)

> **activity****reference**: [ServiceRequest Instruktion](ServiceRequest-p01-cp1-sr-intro.md)

> **activity****reference**: [ServiceRequest Instruktion](ServiceRequest-p01-cp1-sr-sat-pulse-intro.md)

> **activity****reference**: [ServiceRequest Instruktion](ServiceRequest-p01-cp1-sr-sat-pulse-prep.md)

> **activity****reference**: [ServiceRequest Same device group](ServiceRequest-p01-cp1-sr-sat-pulse.md)

> **activity****reference**: [ServiceRequest Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?](ServiceRequest-p01-cp1-sr-saturation.md)

> **activity****reference**: [ServiceRequest Hjerte—Systole; frekv. = ? × 1/min](ServiceRequest-p01-cp1-sr-pulse.md)

> **activity****reference**: [ServiceRequest Master Questionnaire](ServiceRequest-p01-cp1-sr-questionnaire.md)

> **activity****reference**: [ServiceRequest Instruktion](ServiceRequest-p01-cp1-sr-closing.md)

> **activity****reference**: [ServiceRequest Head activity](ServiceRequest-p01-cp1-sr-extra-head.md)

> **activity****reference**: [ServiceRequest Same device group](ServiceRequest-p01-cp1-sr-extra-sat-pulse.md)

> **activity****reference**: [ServiceRequest Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?](ServiceRequest-p01-cp1-sr-extra-saturation.md)

> **activity****reference**: [ServiceRequest Hjerte—Systole; frekv. = ? × 1/min](ServiceRequest-p01-cp1-sr-extra-pulse.md)

> **activity****reference**: [ServiceRequest Master Questionnaire](ServiceRequest-p01-cp1-sr-extra-questionnaire.md)



## Resource Content

```json
{
  "resourceType" : "CarePlan",
  "id" : "p01-cp1",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p01-eoc1"
    }
  },
  {
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/request-status",
          "code" : "draft"
        }]
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2025-06-02T09:05:00+00:00",
        "end" : "2025-06-02T09:05:01+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan-statusHistory"
  },
  {
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/request-status",
          "code" : "active"
        }]
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2025-06-02T09:05:01+00:00",
        "end" : "2025-10-13T11:55:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan-statusHistory"
  },
  {
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/request-status",
          "code" : "completed"
        }]
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2025-10-13T11:55:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan-statusHistory"
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
        "start" : "2025-06-02T09:05:00+00:00",
        "end" : "2025-10-13T11:55:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamHistory"
  }],
  "instantiatesCanonical" : ["http://ehealth.sundhed.dk/testdata/PlanDefinition/plandefinition"],
  "status" : "completed",
  "intent" : "order",
  "subject" : {
    "reference" : "Patient/p01"
  },
  "period" : {
    "start" : "2025-06-02T09:05:00+00:00"
  },
  "careTeam" : [{
    "reference" : "CareTeam/careteam-placeholder"
  }],
  "addresses" : [{
    "reference" : "Condition/p01-eoc1-cond"
  }],
  "activity" : [{
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-head"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-intro"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-sat-pulse-intro"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-sat-pulse-prep"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-sat-pulse"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-saturation"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-pulse"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-questionnaire"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-closing"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-extra-head"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-extra-sat-pulse"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-extra-saturation"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-extra-pulse"
    }
  },
  {
    "reference" : {
      "reference" : "ServiceRequest/p01-cp1-sr-extra-questionnaire"
    }
  }]
}

```
