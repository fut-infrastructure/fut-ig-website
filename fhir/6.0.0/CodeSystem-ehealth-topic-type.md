# Topic Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Topic Type**

## CodeSystem: Topic Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/topic-type | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:TopicType |

 
Topic type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [TopicType](ValueSet-ehealth-topic-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-topic-type",
  "url" : "http://ehealth.sundhed.dk/cs/topic-type",
  "version" : "6.0.0",
  "name" : "TopicType",
  "title" : "Topic Type",
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
  "description" : "Topic type",
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
      "code" : "self-treatment",
      "display" : "Self-treatment",
      "definition" : "Self-treatment",
      "designation" : [
        {
          "language" : "da",
          "value" : "Selvbehandling"
        }
      ]
    }
  ]
}

```
