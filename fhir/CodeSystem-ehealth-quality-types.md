# Quality Types - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Quality Types**

## CodeSystem: Quality Types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/quality-types | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:QualityTypes |

 
Quality Types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [QualityTypes](ValueSet-ehealth-quality-types.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-quality-types",
  "url" : "http://ehealth.sundhed.dk/cs/quality-types",
  "version" : "6.0.0",
  "name" : "QualityTypes",
  "title" : "Quality Types",
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
  "description" : "Quality Types",
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
      "code" : "TBD2",
      "display" : "Example value2 - Under construction",
      "definition" : "Example value2 - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-03"
        }
      ]
    },
    {
      "code" : "SQ",
      "display" : "Situation Quality",
      "definition" : "Situation Quality. For this quality type, the quality code should be a code taken from the http://ehealth.sundhed.dk/vs/situation-quality value set."
    },
    {
      "code" : "DMQ",
      "display" : "Device Measuring Quality",
      "definition" : "Device Measuring Quality. For this quality type, the quality code should be a code taken from the http://ehealth.sundhed.dk/vs/device-measuring-quality value set."
    },
    {
      "code" : "UQ",
      "display" : "Usage Quality",
      "definition" : "Usage Quality. For this quality type, the quality code should be a code taken from the http://ehealth.sundhed.dk/vs/usage-quality value set."
    }
  ]
}

```
