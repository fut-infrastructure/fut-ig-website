# Resolved Timing Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Resolved Timing Type**

## CodeSystem: Resolved Timing Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/resolved-timing-type | *Version*:6.0.0 |
| Active as of 2021-02-26 | *Computable Name*:ResolvedTimingType |

 
Resolved Timing Type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ResolvedTimingType](ValueSet-resolved-timing-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "resolved-timing-type",
  "url" : "http://ehealth.sundhed.dk/cs/resolved-timing-type",
  "version" : "6.0.0",
  "name" : "ResolvedTimingType",
  "title" : "Resolved Timing Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-02-26T00:00:00+00:00",
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
  "description" : "Resolved Timing Type",
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
      "code" : "Resolved",
      "display" : "Resolved",
      "definition" : "Resolved",
      "designation" : [
        {
          "language" : "da",
          "value" : "Opløst måleregimetid"
        }
      ]
    },
    {
      "code" : "Unresolved",
      "display" : "Unresolved",
      "definition" : "Unresolved",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ej opløst måleregimetid"
        }
      ]
    },
    {
      "code" : "Adhoc",
      "display" : "Adhoc",
      "definition" : "Adhoc",
      "designation" : [
        {
          "language" : "da",
          "value" : "Adhoc"
        }
      ]
    },
    {
      "code" : "Extra",
      "display" : "Extra",
      "definition" : "Extra",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ekstra"
        }
      ]
    }
  ]
}

```
