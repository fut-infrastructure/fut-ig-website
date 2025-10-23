# Restriction Category - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Restriction Category**

## CodeSystem: Restriction Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/restriction-category | *Version*:6.0.0 |
| Active as of 2019-08-05 | *Computable Name*:RestrictionCategory |

 
Restriction Category 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RestrictionCategory](ValueSet-ehealth-restriction-category.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-restriction-category",
  "url" : "http://ehealth.sundhed.dk/cs/restriction-category",
  "version" : "6.0.0",
  "name" : "RestrictionCategory",
  "title" : "Restriction Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-08-05T00:00:00+00:00",
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
  "description" : "Restriction Category",
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
      "code" : "None",
      "display" : "None",
      "definition" : "No restiction category. Should not be combined with other values",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-03-23"
        }
      ]
    },
    {
      "code" : "measurement-monitoring",
      "display" : "Monitoring of measurement(s)",
      "definition" : "Monitoring of measurement(s)"
    },
    {
      "code" : "measuring-support",
      "display" : "Support of measurement(s)",
      "definition" : "Support of measurement(s)"
    },
    {
      "code" : "none",
      "display" : "None",
      "definition" : "No restiction category. Should not be combined with other values"
    }
  ]
}

```
