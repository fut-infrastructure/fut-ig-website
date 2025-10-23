# ClinicalImpression Investigation Item Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ClinicalImpression Investigation Item Codes**

## CodeSystem: ClinicalImpression Investigation Item Codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/clinicalimpression-investigation-item-codes | *Version*:6.0.0 |
| Active as of 2024-01-29 | *Computable Name*:ClinicalImpressionInvestigationItemCodes |

 
Clinical Impression Investigation Item Codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ClinicalImpressionInvestigationItemCodes](ValueSet-ehealth-clinicalimpression-investigation-item-codes.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-clinicalimpression-investigation-item-codes",
  "url" : "http://ehealth.sundhed.dk/cs/clinicalimpression-investigation-item-codes",
  "version" : "6.0.0",
  "name" : "ClinicalImpressionInvestigationItemCodes",
  "title" : "ClinicalImpression Investigation Item Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-01-29T00:00:00+00:00",
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
  "description" : "Clinical Impression Investigation Item Codes",
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
      "code" : "item-for-investigation",
      "display" : "Item for investigation",
      "definition" : "Item for investigation",
      "designation" : [
        {
          "language" : "da",
          "value" : "Undersøgelseselement"
        }
      ]
    },
    {
      "code" : "item-modified",
      "display" : "Item modified",
      "definition" : "Item modified",
      "designation" : [
        {
          "language" : "da",
          "value" : "Modificeret element"
        }
      ]
    }
  ]
}

```
