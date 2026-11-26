# COPD questionnaire - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **COPD questionnaire**

## Questionnaire: KOL spørgeskema 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/Questionnaire/questionnaire | *Version*:1.0.0 |
| Active as of 2026-11-26 | *Computable Name*: |
| *Other Identifiers:*UUID:453c523b-78a0-41f3-bc02-b4e0ee4f4710 | |
| **Usage**: Clinical Focus: Kronisk obstruktiv lungesygdom | |

 
Test spørgeskema 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [A symptom questionnaire answered under the completed episode during an exacerbation. Breathlessness 'En del' and greenish sputum both carry red significance, so triage returns red and raises a task with priority asap.](QuestionnaireResponse-p01-cp1-qr.md)
* [A symptom questionnaire answered under the open episode with no symptoms reported. Every answer carries green significance, so triage returns green and the resulting task is routine.](QuestionnaireResponse-p01-cp2-qr.md)
* [A symptom questionnaire answered under the completed episode. 4 scored answers — 1 yellow, 3 green — so triage returns yellow and the resulting task is urgent.](QuestionnaireResponse-p02-cp1-qr.md)
* [A symptom questionnaire answered under the open episode. 5 scored answers — 4 red, 1 yellow — so triage returns red and the resulting task is asap.](QuestionnaireResponse-p02-cp2-qr.md)
* [A symptom questionnaire answered under the completed episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine.](QuestionnaireResponse-p03-cp1-qr.md)
* [A symptom questionnaire answered under the open episode. 4 scored answers — 1 yellow, 3 green — so triage returns yellow and the resulting task is urgent.](QuestionnaireResponse-p03-cp2-qr.md)
* [A symptom questionnaire answered under the completed episode. 4 scored answers — 3 red, 1 yellow — so triage returns red and the resulting task is asap.](QuestionnaireResponse-p04-cp1-qr.md)
* [A symptom questionnaire answered under the open episode. 4 scored answers — 1 yellow, 3 green — so triage returns yellow and the resulting task is urgent.](QuestionnaireResponse-p04-cp2-qr.md)
* [A symptom questionnaire answered under the completed episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine.](QuestionnaireResponse-p05-cp1-qr.md)
* [A symptom questionnaire answered under the open episode. 5 scored answers — 3 red, 1 yellow, 1 green — so triage returns red and the resulting task is asap.](QuestionnaireResponse-p05-cp2-qr.md)
* [A symptom questionnaire answered under the completed episode. 4 scored answers — 3 yellow, 1 green — so triage returns yellow and the resulting task is urgent.](QuestionnaireResponse-p06-cp1-qr.md)
* [A symptom questionnaire answered under the open episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine.](QuestionnaireResponse-p06-cp2-qr.md)
* [A symptom questionnaire answered under the completed episode. 4 scored answers — 3 red, 1 yellow — so triage returns red and the resulting task is asap.](QuestionnaireResponse-p07-cp1-qr.md)
* [A symptom questionnaire answered under the open episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine.](QuestionnaireResponse-p07-cp2-qr.md)
* [A symptom questionnaire answered under the open episode. 5 scored answers — 1 yellow, 4 green — so triage returns yellow and the resulting task is urgent.](QuestionnaireResponse-p08-cp1-qr.md)
* [A symptom questionnaire answered under the open episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine.](QuestionnaireResponse-p09-cp1-qr.md)
* [A symptom questionnaire answered under the open episode. 5 scored answers — 1 red, 3 yellow, 1 green — so triage returns red and the resulting task is asap.](QuestionnaireResponse-p10-cp1-qr.md)
* [A symptom questionnaire answered under the open episode. 4 scored answers — 1 yellow, 3 green — so triage returns yellow and the resulting task is urgent.](QuestionnaireResponse-p10-cp2-qr.md)
* [A symptom questionnaire answered under the open episode. 4 scored answers — 3 red, 1 green — so triage returns red and the resulting task is asap.](QuestionnaireResponse-p10-cp3-qr.md)
* [A symptom questionnaire answered under the open episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine.](QuestionnaireResponse-p10-cp4-qr.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "questionnaire",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire"]
  },
  "extension" : [{
    "extension" : [{
      "url" : "reference",
      "valueReference" : {
        "reference" : "Organization/org-region-midtjylland"
      }
    },
    {
      "url" : "role",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/modifier-role",
          "code" : "owner"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-type",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/questionnaire-types",
        "code" : "QR",
        "display" : "Questionnaire with Rules"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-employee-title",
    "valueString" : "KOL spørgeskema"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base",
    "valueIdentifier" : {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:e2f2b865-2cad-4dea-a404-456986414316",
      "assigner" : {
        "identifier" : {
          "system" : "http://ehealth.sundhed.dk/id/ehealth-environment",
          "value" : "dk.ehealth.sundhed.fhir.ig.testdata"
        }
      }
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base-environment",
    "valueIdentifier" : {
      "system" : "http://ehealth.sundhed.dk/id/ehealth-environment",
      "value" : "dk.ehealth.sundhed.fhir.ig.testdata"
    }
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/Questionnaire/questionnaire",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:453c523b-78a0-41f3-bc02-b4e0ee4f4710"
  }],
  "version" : "1.0.0",
  "title" : "KOL spørgeskema",
  "status" : "active",
  "date" : "2026-11-26T14:31:33+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Test spørgeskema",
  "useContext" : [{
    "code" : {
      "system" : "http://terminology.hl7.org/CodeSystem/usage-context-type",
      "code" : "focus"
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.176.2.4",
        "code" : "DJ44",
        "display" : "Kronisk obstruktiv lungesygdom"
      }]
    }
  }],
  "approvalDate" : "2025-09-02",
  "item" : [{
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-shortText",
      "valueString" : "Er du i behandling med Prednisolon pga. forværring af din KOL?"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-itemControl",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/questionnaire-item-control",
          "code" : "radio-button"
        }]
      }
    }],
    "linkId" : "1.2.208.176.7.200.2,02572a07-8923-4ea3-9ee9-f9aa10344379,ehealth.sundhed.dk",
    "prefix" : "S02",
    "text" : "Er du i behandling med Prednisolon pga. forværring af din KOL?",
    "_text" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
        "valueString" : "<p>Er du i behandling med Prednisolon pga. forværring af din KOL?</p>"
      }]
    },
    "type" : "choice",
    "required" : true,
    "answerOption" : [{
      "valueString" : "Ja",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "Ja"
        }]
      }
    },
    {
      "valueString" : "Nej",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Nej</p>"
        }]
      }
    }]
  },
  {
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-shortText",
      "valueString" : "Er du i behandling med Antibiotika pga. forværring af din KOL?"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-itemControl",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/questionnaire-item-control",
          "code" : "radio-button"
        }]
      }
    }],
    "linkId" : "1.2.208.176.7.200.2,0c8a7cbd-1dc9-4553-a0f3-9b3d046486a7,ehealth.sundhed.dk",
    "prefix" : "S03",
    "text" : "Er du i behandling med Antibiotika pga. forværring af din KOL?",
    "_text" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
        "valueString" : "<p>Er du i behandling med Antibiotika pga. forværring af din KOL?</p>"
      }]
    },
    "type" : "choice",
    "required" : true,
    "answerOption" : [{
      "valueString" : "Ja",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Ja</p>"
        }]
      }
    },
    {
      "valueString" : "Nej",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Nej</p>"
        }]
      }
    }]
  },
  {
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-shortText",
      "valueString" : "Oplever du mere åndenød inden for de seneste 24 timer?"
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Slet ikke"
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
          "code" : "green"
        }
      }],
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
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
      "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-itemControl",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/questionnaire-item-control",
          "code" : "radio-button"
        }]
      }
    }],
    "linkId" : "1.2.208.176.7.200.2,898d7b4b-bbb8-45d9-9a1b-956b11d2547b,ehealth.sundhed.dk",
    "prefix" : "S04",
    "text" : "Oplever du mere åndenød inden for de seneste 24 timer?",
    "_text" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
        "valueString" : "<p><br/>Oplever du mere åndenød inden for de seneste 24 timer?<br/></p>"
      }]
    },
    "type" : "choice",
    "required" : true,
    "answerOption" : [{
      "valueString" : "Slet ikke",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Slet ikke</p>"
        }]
      }
    },
    {
      "valueString" : "Lidt",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Lidt</p>"
        }]
      }
    },
    {
      "valueString" : "En del",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>En del</p>"
        }]
      }
    },
    {
      "valueString" : "Meget",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Meget</p>"
        }]
      }
    }]
  },
  {
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-shortText",
      "valueString" : "Oplever du mere hoste inden for de seneste 24 timer?"
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Slet ikke"
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
          "code" : "green"
        }
      }],
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
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
      "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-itemControl",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/questionnaire-item-control",
          "code" : "radio-button"
        }]
      }
    }],
    "linkId" : "1.2.208.176.7.200.2,a5cc4f01-d9f7-4599-a0a6-e4522dbc8797,ehealth.sundhed.dk",
    "prefix" : "S05",
    "text" : "Oplever du mere hoste inden for de seneste 24 timer?",
    "_text" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
        "valueString" : "<p><br/>Oplever du mere hoste inden for de seneste 24 timer?<br/></p>"
      }]
    },
    "type" : "choice",
    "required" : true,
    "answerOption" : [{
      "valueString" : "Slet ikke",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Slet ikke</p>"
        }]
      }
    },
    {
      "valueString" : "Lidt",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Lidt</p>"
        }]
      }
    },
    {
      "valueString" : "En del",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>En del</p>"
        }]
      }
    },
    {
      "valueString" : "Meget",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Meget</p>"
        }]
      }
    }]
  },
  {
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-shortText",
      "valueString" : "Hvilken farve har dit slim?"
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Klart (1)"
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
          "code" : "green"
        }
      }],
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Hvidligt (2)"
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
          "code" : "green"
        }
      }],
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Lysegult (3)"
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
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Grønligt (4)"
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
      "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-itemControl",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/questionnaire-item-control",
          "code" : "radio-button"
        }]
      }
    }],
    "linkId" : "1.2.208.176.7.200.2,9d68396f-62f1-4cd7-9d64-3f0284e07d98,ehealth.sundhed.dk",
    "prefix" : "S06",
    "text" : "Hvilken farve har dit slim?\nVær opmærksom på at du skal spytte på et hvidt underlag - eksempelvis en lommeserviet.",
    "_text" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
        "valueString" : "<p>Hvilken farve har dit slim?</p><p>Vær opmærksom på at du skal spytte på et hvidt underlag - eksempelvis en lommeserviet.</p>"
      }]
    },
    "type" : "choice",
    "required" : true,
    "answerOption" : [{
      "valueString" : "Klart (1)",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Klart (1)&nbsp;</p>"
        }]
      }
    },
    {
      "valueString" : "Hvidligt (2)",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Hvidligt (2)</p>"
        }]
      }
    },
    {
      "valueString" : "Lysegult (3)",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Lysegult (3)</p>"
        }]
      }
    },
    {
      "valueString" : "Grønligt (4)",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Grønligt (4)</p>"
        }]
      }
    },
    {
      "valueString" : "Mørkegult (5)",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Mørkegult (5)</p>"
        }]
      }
    }]
  },
  {
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-shortText",
      "valueString" : "Har du hostet mere slim op inden for de seneste 24 timer?"
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Slet ikke"
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
          "code" : "green"
        }
      }],
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-answerSignificance"
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
      "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-itemControl",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/questionnaire-item-control",
          "code" : "radio-button"
        }]
      }
    }],
    "linkId" : "1.2.208.176.7.200.2,45c31bc2-27f9-43b8-afb1-be483dfc4b62,ehealth.sundhed.dk",
    "prefix" : "S07",
    "text" : "Har du hostet mere slim op inden for de seneste 24 timer?",
    "_text" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
        "valueString" : "<p><br/>Har du hostet mere slim op inden for de seneste 24 timer?<br/></p>"
      }]
    },
    "type" : "choice",
    "required" : true,
    "answerOption" : [{
      "valueString" : "Slet ikke",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Slet ikke</p>"
        }]
      }
    },
    {
      "valueString" : "Lidt",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Lidt</p>"
        }]
      }
    },
    {
      "valueString" : "En del",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>En del&nbsp;</p>"
        }]
      }
    },
    {
      "valueString" : "Meget",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Meget</p>"
        }]
      }
    }]
  },
  {
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-shortText",
      "valueString" : "Har du noget at tilføje til dine målinger eller besvarelse?"
    },
    {
      "extension" : [{
        "extension" : [{
          "url" : "value",
          "valueString" : "Ja"
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
      "url" : "http://hl7.org/fhir/StructureDefinition/questionnaire-itemControl",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/questionnaire-item-control",
          "code" : "radio-button"
        }]
      }
    }],
    "linkId" : "1.2.208.176.7.200.2,c3cc4571-16ec-4325-9781-681521c3ebee,ehealth.sundhed.dk",
    "prefix" : "S08",
    "text" : "Har du noget at tilføje til dine målinger eller besvarelse?",
    "_text" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
        "valueString" : "<p><br/></p><p>Har du noget at tilføje til dine målinger eller besvarelse?<br/></p>"
      }]
    },
    "type" : "choice",
    "required" : true,
    "answerOption" : [{
      "valueString" : "Ja",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Ja</p>"
        }]
      }
    },
    {
      "valueString" : "Nej",
      "_valueString" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
          "valueString" : "<p>Nej</p>"
        }]
      }
    }]
  },
  {
    "extension" : [{
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire-shortText",
      "valueString" : "Angiv kommentar"
    }],
    "linkId" : "1.2.208.176.7.200.2,f3fc74d3-1231-4356-87c5-433204e73f1e,ehealth.sundhed.dk",
    "prefix" : "S09",
    "text" : "Kommentar",
    "_text" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/rendering-xhtml",
        "valueString" : "<p><br/></p><p><b>Kommentar</b></p><br/><p></p><p><br/></p>"
      }]
    },
    "type" : "text",
    "enableWhen" : [{
      "question" : "1.2.208.176.7.200.2,c3cc4571-16ec-4325-9781-681521c3ebee,ehealth.sundhed.dk",
      "operator" : "=",
      "answerString" : "Ja"
    }],
    "enableBehavior" : "any",
    "required" : true
  }]
}

```
