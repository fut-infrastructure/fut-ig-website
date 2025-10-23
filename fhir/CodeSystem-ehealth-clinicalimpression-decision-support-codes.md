# ClinicalImpression Decision Support Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ClinicalImpression Decision Support Codes**

## CodeSystem: ClinicalImpression Decision Support Codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/clinicalimpression-decision-support-codes | *Version*:6.0.0 |
| Active as of 2025-09-08 | *Computable Name*:ClinicalImpressionDecisionSupportCodes |

 
Decision support codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ClinicalImpressionFindingCodes](ValueSet-ehealth-clinicalimpression-finding-codes.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-clinicalimpression-decision-support-codes",
  "url" : "http://ehealth.sundhed.dk/cs/clinicalimpression-decision-support-codes",
  "version" : "6.0.0",
  "name" : "ClinicalImpressionDecisionSupportCodes",
  "title" : "ClinicalImpression Decision Support Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-09-08T00:00:00+00:00",
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
  "description" : "Decision support codes",
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
  "concept" : [
    {
      "code" : "deviation-found",
      "display" : "Deviation found",
      "definition" : "Deviation found suggesting possible deterioration of condition",
      "designation" : [
        {
          "language" : "da",
          "value" : "Der er fundet afvigelse, der tyder på at borgeren vil opleve forværring af sygdom eller tilstand"
        }
      ]
    },
    {
      "code" : "no-deviation-found",
      "display" : "No deviation found",
      "definition" : "No deviation found suggesting possible deterioration of condition",
      "designation" : [
        {
          "language" : "da",
          "value" : "Der er ikke fundet afvigelse, der tyder på at borgeren vil opleve forværring af sygdom eller tilstand"
        }
      ]
    },
    {
      "code" : "insufficient-data",
      "display" : "Insufficient data",
      "definition" : "Insufficient data for determining deviation suggesting possible deterioration of condition",
      "designation" : [
        {
          "language" : "da",
          "value" : "Utilstrækkelige data forhindrer bestemmelse af afvigelse, der tyder på at borgeren vil opleve forværring af sygdom eller tilstand"
        }
      ]
    }
  ]
}

```
