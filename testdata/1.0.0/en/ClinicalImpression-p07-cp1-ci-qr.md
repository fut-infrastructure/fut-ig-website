# Triage of the questionnaire response — red - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Triage of the questionnaire response — red**

## Example ClinicalImpression: Triage of the questionnaire response — red



## Resource Content

```json
{
  "resourceType" : "ClinicalImpression",
  "id" : "p07-cp1-ci-qr",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "contained" : [{
    "resourceType" : "Parameters",
    "id" : "p07-cp1-dc-qr",
    "parameter" : [{
      "name" : "library",
      "valueReference" : {
        "reference" : "Library/library-questionnaire-triage"
      }
    },
    {
      "name" : "fact",
      "valueReference" : {
        "reference" : "ServiceRequest/p07-cp1-sr-extra-questionnaire"
      }
    },
    {
      "name" : "fact",
      "valueReference" : {
        "reference" : "Questionnaire/questionnaire"
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
      "reference" : "#p07-cp1-dc-qr"
    }
  },
  {
    "extension" : [{
      "url" : "linkId",
      "valueString" : "1.2.208.176.7.200.2,898d7b4b-bbb8-45d9-9a1b-956b11d2547b,ehealth.sundhed.dk"
    },
    {
      "url" : "finding",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-finding-codes",
          "code" : "red-question-answer",
          "display" : "red question and answer combination"
        }]
      }
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "En del"
        },
        {
          "url" : "operator",
          "valueCode" : "="
        }],
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-answer-Condition"
      },
      {
        "url" : "significance",
        "valueCoding" : {
          "system" : "http://ehealth.sundhed.dk/cs/questionnaire-item-significance-indicator",
          "code" : "red"
        }
      }],
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
    },
    {
      "url" : "value",
      "valueString" : "En del"
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse-finding-basis"
  },
  {
    "extension" : [{
      "url" : "linkId",
      "valueString" : "1.2.208.176.7.200.2,a5cc4f01-d9f7-4599-a0a6-e4522dbc8797,ehealth.sundhed.dk"
    },
    {
      "url" : "finding",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-finding-codes",
          "code" : "yellow-question-answer",
          "display" : "yellow question and answer combination"
        }]
      }
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Lidt"
        },
        {
          "url" : "operator",
          "valueCode" : "="
        }],
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-answer-Condition"
      },
      {
        "url" : "significance",
        "valueCoding" : {
          "system" : "http://ehealth.sundhed.dk/cs/questionnaire-item-significance-indicator",
          "code" : "yellow"
        }
      }],
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
    },
    {
      "url" : "value",
      "valueString" : "Lidt"
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse-finding-basis"
  },
  {
    "extension" : [{
      "url" : "linkId",
      "valueString" : "1.2.208.176.7.200.2,9d68396f-62f1-4cd7-9d64-3f0284e07d98,ehealth.sundhed.dk"
    },
    {
      "url" : "finding",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-finding-codes",
          "code" : "red-question-answer",
          "display" : "red question and answer combination"
        }]
      }
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Mørkegult (5)"
        },
        {
          "url" : "operator",
          "valueCode" : "="
        }],
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-answer-Condition"
      },
      {
        "url" : "significance",
        "valueCoding" : {
          "system" : "http://ehealth.sundhed.dk/cs/questionnaire-item-significance-indicator",
          "code" : "red"
        }
      }],
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
    },
    {
      "url" : "value",
      "valueString" : "Mørkegult (5)"
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse-finding-basis"
  },
  {
    "extension" : [{
      "url" : "linkId",
      "valueString" : "1.2.208.176.7.200.2,45c31bc2-27f9-43b8-afb1-be483dfc4b62,ehealth.sundhed.dk"
    },
    {
      "url" : "finding",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-finding-codes",
          "code" : "red-question-answer",
          "display" : "red question and answer combination"
        }]
      }
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Meget"
        },
        {
          "url" : "operator",
          "valueCode" : "="
        }],
        "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-answer-Condition"
      },
      {
        "url" : "significance",
        "valueCoding" : {
          "system" : "http://ehealth.sundhed.dk/cs/questionnaire-item-significance-indicator",
          "code" : "red"
        }
      }],
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
    },
    {
      "url" : "value",
      "valueString" : "Meget"
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse-finding-basis"
  }],
  "status" : "completed",
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-codes",
      "code" : "TriagingResult",
      "display" : "Result of triaging"
    }]
  },
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
      "reference" : "QuestionnaireResponse/p07-cp1-qr"
    }]
  }],
  "finding" : [{
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
