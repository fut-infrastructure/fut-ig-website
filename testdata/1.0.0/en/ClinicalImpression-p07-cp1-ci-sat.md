# Triage of saturation 84% — red - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Triage of saturation 84% — red**

## Example ClinicalImpression: Triage of saturation 84% — red



## Resource Content

```json
{
  "resourceType" : "ClinicalImpression",
  "id" : "p07-cp1-ci-sat",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "contained" : [{
    "resourceType" : "Parameters",
    "id" : "p07-cp1-dc-sat",
    "parameter" : [{
      "name" : "library",
      "valueReference" : {
        "reference" : "Library/library-observation-absolute-triage"
      }
    },
    {
      "name" : "fact",
      "valueReference" : {
        "reference" : "ServiceRequest/p07-cp1-sr-extra-saturation"
      }
    }]
  }],
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p07-eoc1"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-careplan",
    "valueReference" : {
      "reference" : "CarePlan/p07-cp1"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-decisionContext",
    "valueReference" : {
      "reference" : "#p07-cp1-dc-sat"
    }
  }],
  "status" : "completed",
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-codes",
      "code" : "TriagingResult",
      "display" : "Result of triaging"
    }]
  },
  "description" : "Automatisk processering grundet måling modtaget",
  "subject" : {
    "reference" : "Patient/p07"
  },
  "effectiveDateTime" : "2026-02-19T10:00:10+00:00",
  "date" : "2026-02-19T10:00:10+00:00",
  "investigation" : [{
    "code" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-investigation-item-codes",
        "code" : "item-for-investigation",
        "display" : "Item for investigation"
      }]
    },
    "item" : [{
      "reference" : "Observation/p07-cp1-sat"
    }]
  }],
  "finding" : [{
    "itemCodeableConcept" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU03011",
        "display" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?"
      },
      {
        "system" : "http://snomed.info/sct",
        "code" : "442096005",
        "display" : "Measurement finding outside reference range"
      },
      {
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "RAL",
        "display" : "Terapeutiske grænseværdier for RØD alarm"
      }]
    }
  },
  {
    "itemCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-finding-codes",
        "code" : "red",
        "display" : "Red overall assessment"
      }]
    }
  }]
}

```
