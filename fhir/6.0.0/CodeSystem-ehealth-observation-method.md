# Observation Method - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation Method**

## CodeSystem: Observation Method 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/observation-method | *Version*:6.0.0 |
| Active as of 2024-10-28 | *Computable Name*:observationMethod |

 
Identifies how an observation is acquired. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ObservationMethod](ValueSet-ehealth-observation-method.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-observation-method",
  "url" : "http://ehealth.sundhed.dk/cs/observation-method",
  "version" : "6.0.0",
  "name" : "observationMethod",
  "title" : "Observation Method",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-10-28T00:00:00+00:00",
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
  "description" : "Identifies how an observation is acquired.",
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
      "code" : "measured",
      "display" : "Measured",
      "definition" : "Measured",
      "designation" : [
        {
          "language" : "da",
          "value" : "Målt"
        }
      ]
    },
    {
      "code" : "calculated",
      "display" : "Calculated",
      "definition" : "Calculated",
      "designation" : [
        {
          "language" : "da",
          "value" : "Beregnet"
        }
      ]
    }
  ]
}

```
