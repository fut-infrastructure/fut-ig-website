# Task Category - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Task Category**

## CodeSystem: Task Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/task-category | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:TaskCategory |

 
Task Category 

 This Code system is referenced in the content logical definition of the following value sets: 

* [eHealth Message Reason Code](ValueSet-ehealth-message-reasonCode.md)
* [TaskCategory](ValueSet-ehealth-task-category.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-task-category",
  "url" : "http://ehealth.sundhed.dk/cs/task-category",
  "version" : "6.0.0",
  "name" : "TaskCategory",
  "title" : "Task Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Task Category",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : true,
  "content" : "complete",
  "property" : [
    {
      "code" : "deprecated",
      "uri" : "http://hl7.org/fhir/concept-properties#deprecated",
      "description" : "Indicates that the concept is deprecated and should not be used",
      "type" : "dateTime"
    }
  ],
  "concept" : [
    {
      "code" : "TBD",
      "display" : "Example value - Under construction",
      "definition" : "Example value - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-27"
        }
      ]
    },
    {
      "code" : "MissingMeasurementResolving",
      "display" : "Need resolving of why scheduled measurement has not been submitted",
      "definition" : "Need resolving of why scheduled measurement has not been submitted",
      "designation" : [
        {
          "language" : "da",
          "value" : "Undersøg hvorfor der ikke er indsendt Måledata (måling og/eller spørgeskemabesvarelse)."
        }
      ]
    },
    {
      "code" : "UnexpectedMeasurementResolving",
      "display" : "Need resolving of why unexpected measurement was submitted",
      "definition" : "Need resolving of why unexpected measurement was submitted",
      "designation" : [
        {
          "language" : "da",
          "value" : "Undersøg hvorfor der uventet er indsendt Måledata (måling og/eller spørgeskemabesvarelse)."
        }
      ]
    },
    {
      "code" : "MeasurementForAssessment",
      "display" : "Need assessment of measurement",
      "definition" : "Need assessment of measurement",
      "designation" : [
        {
          "language" : "da",
          "value" : "Måledata (måling og/eller spørgeskemabesvarelse) er modtaget og klar til vurdering"
        }
      ]
    },
    {
      "code" : "OpenSSLOrder",
      "display" : "Need processing of open SSL order",
      "definition" : "Need processing of open SSL order",
      "designation" : [
        {
          "language" : "da",
          "value" : "Behandling af åben SSL bestilling"
        }
      ]
    },
    {
      "code" : "CalibrationNeeded",
      "display" : "Device in need of calibration",
      "definition" : "Device in need of calibration",
      "designation" : [
        {
          "language" : "da",
          "value" : "Måleudstyr har behov for kalibrering"
        }
      ]
    },
    {
      "code" : "MeasurementForAssessmentFailureInAutoProcessing",
      "display" : "Measurement Assessment failure during automated processing",
      "definition" : "Measurement Assessment failure during automated processing",
      "designation" : [
        {
          "language" : "da",
          "value" : "Indsendte måledata (måling og/eller spørgeskemabesvarelse) kunne ikke vurderes af systemet. Du skal selv vurdere måledata."
        }
      ]
    },
    {
      "code" : "LibraryUseMismatchFixingNeeded",
      "display" : "Input and rule did not match",
      "definition" : "Input and rule did not match",
      "designation" : [
        {
          "language" : "da",
          "value" : "Input og regel passer ikke sammen"
        }
      ]
    },
    {
      "code" : "RefRangeNeeded",
      "display" : "Missing reference range required for automated processing",
      "definition" : "Missing reference range required for automated processing",
      "designation" : [
        {
          "language" : "da",
          "value" : "Opsætning af grænseværdi mangler, hvilket er nødvendig for at systemet kan foretage vurdering"
        }
      ]
    },
    {
      "code" : "RefRangeFixingNeeded",
      "display" : "Reference range required for automated processing needs fixing",
      "definition" : "Reference range required for automated processing needs fixing",
      "designation" : [
        {
          "language" : "da",
          "value" : "Grænseværdiopsætning er forkert og justering er nødvendig for at systemet kan foretage vurdering"
        }
      ]
    },
    {
      "code" : "RefBaseNeeded",
      "display" : "Missing in force reference base required for automatic processing",
      "definition" : "Missing in force reference base required for automatic processing",
      "designation" : [
        {
          "language" : "da",
          "value" : "Der mangler en referenceværdi for at måledata (måling eller spørgeskemabesvarelse) kan vurderes af systemet"
        }
      ]
    },
    {
      "code" : "RefBaseFixingNeeded",
      "display" : "In force reference base required for automatic processing needs fixing",
      "definition" : "In force reference base required for automatic processing needs fixing",
      "designation" : [
        {
          "language" : "da",
          "value" : "Referenceværdi er forkert og justering er nødvendig for at systemet kan foretage vurdering"
        }
      ]
    },
    {
      "code" : "RequiredQuestionAnswerMissing",
      "display" : "Missing question answers required for automated processing",
      "definition" : "Missing question answers required for automated processing",
      "designation" : [
        {
          "language" : "da",
          "value" : "Spørgsmål mangler besvarelse i spørgeskemabesvarelse for at vurdering af spørgeskemabesvarelse kan foretages af systemet"
        }
      ]
    },
    {
      "code" : "ExpectedDelivery",
      "display" : "Delivery expected",
      "definition" : "Delivery expected",
      "designation" : [
        {
          "language" : "da",
          "value" : "Forventet levering"
        }
      ]
    },
    {
      "code" : "MeasurementForAssessmentNotTriaged",
      "display" : "Need assessment of measurement where triage was not performed during automated processing",
      "definition" : "Need assessment of measurement where triage was not performed during automated processing",
      "designation" : [
        {
          "language" : "da",
          "value" : "Indsendte måledata (måling og/eller spørgeskemabesvarelse) er ikke vurderet af systemet. Du skal selv vurdere måledata."
        }
      ]
    },
    {
      "code" : "MeasurementForAssessmentAbsentValue",
      "display" : "Need assessment of measurement with absent value",
      "definition" : "Need assessment of measurement with absent value",
      "designation" : [
        {
          "language" : "da",
          "value" : "Indsendte måledata (måling) har fravær af målt værdi."
        }
      ]
    },
    {
      "code" : "HandoverNegotiation",
      "display" : "Need negotiation for handover of CarePlans between CareTeams",
      "definition" : "Need negotiation for handover of CarePlans between CareTeams",
      "designation" : [
        {
          "language" : "da",
          "value" : "Forhandlingsprocess for overdragelse af plan(er) mellem behandlerteams"
        }
      ]
    }
  ]
}

```
