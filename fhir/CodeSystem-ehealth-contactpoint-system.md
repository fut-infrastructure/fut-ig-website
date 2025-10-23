# ContactPoint System - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ContactPoint System**

## CodeSystem: ContactPoint System 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/contactpoint-system | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:ContactPointSystem |

 
Contact Point System 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ContactPointSystem](ValueSet-ehealth-contactpoint-system.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-contactpoint-system",
  "url" : "http://ehealth.sundhed.dk/cs/contactpoint-system",
  "version" : "6.0.0",
  "name" : "ContactPointSystem",
  "title" : "ContactPoint System",
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
  "description" : "Contact Point System",
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
      "code" : "EAN",
      "display" : "Global location number",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Global location number"
        },
        {
          "language" : "da",
          "value" : "EAN-nummer"
        }
      ]
    }
  ]
}

```
