# ClinicalImpression Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ClinicalImpression Codes**

## CodeSystem: ClinicalImpression Codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/clinicalimpression-codes | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:ClinicalImpressionCodes |

 
Assessment types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ClinicalImpressionCodes](ValueSet-ehealth-clinicalimpression-codes.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-clinicalimpression-codes",
  "url" : "http://ehealth.sundhed.dk/cs/clinicalimpression-codes",
  "version" : "6.0.0",
  "name" : "ClinicalImpressionCodes",
  "title" : "ClinicalImpression Codes",
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
  "description" : "Assessment types",
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
          "valueDateTime" : "2020-02-03"
        }
      ]
    },
    {
      "code" : "TriagingResult",
      "display" : "Result of triaging",
      "definition" : "Result of triaging",
      "designation" : [
        {
          "language" : "da",
          "value" : "Triageringsresultat"
        }
      ]
    },
    {
      "code" : "MeasurementAssessment",
      "display" : "Assessment of measurement",
      "definition" : "Assessment of measurement",
      "designation" : [
        {
          "language" : "da",
          "value" : "Vurdering af måling"
        }
      ]
    },
    {
      "code" : "MeasurementTypeUnexpected",
      "display" : "Measurement of unexpected type",
      "definition" : "Measurement of unexpected type",
      "designation" : [
        {
          "language" : "da",
          "value" : "Uventet måling"
        }
      ]
    },
    {
      "code" : "MeasurementTimingUnexpected",
      "display" : "Measurement not expected",
      "definition" : "Measurement not expected",
      "designation" : [
        {
          "language" : "da",
          "value" : "Måling ikke forventet på tidspunktet"
        }
      ]
    },
    {
      "code" : "ClinicalDecisionSupportResult",
      "display" : "Generic result of CDS",
      "definition" : "Generic result of CDS",
      "designation" : [
        {
          "language" : "da",
          "value" : "Resultat af beslutningsstøtte"
        }
      ]
    },
    {
      "code" : "approved-view",
      "display" : "Approved View",
      "definition" : "Approved View",
      "designation" : [
        {
          "language" : "da",
          "value" : "Godkendt visning"
        }
      ]
    },
    {
      "code" : "MeasurementValidityUpdate",
      "display" : "Update of measurement validity",
      "definition" : "Update of measurement validity",
      "designation" : [
        {
          "language" : "da",
          "value" : "Opdatering af gyldighed for måling"
        }
      ]
    }
  ]
}

```
