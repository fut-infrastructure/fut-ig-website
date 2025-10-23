# Questionnaire Types - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Types**

## CodeSystem: Questionnaire Types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/questionnaire-types | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:QuestionnaireTypes |
| *Other Identifiers:*OID:1.2.208.999.9.9 | |

 
Questionnaire Types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [QuestionnaireTypes](ValueSet-ehealth-questionnaire-types.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-questionnaire-types",
  "url" : "http://ehealth.sundhed.dk/cs/questionnaire-types",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.208.999.9.9"
    }
  ],
  "version" : "6.0.0",
  "name" : "QuestionnaireTypes",
  "title" : "Questionnaire Types",
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
  "description" : "Questionnaire Types",
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
      "code" : "TBD2",
      "display" : "Example value2 - Under construction",
      "definition" : "Example value2 - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-27"
        }
      ]
    },
    {
      "code" : "QR",
      "display" : "Questionnaire with Rules",
      "definition" : "Questionnaire with Rules",
      "designation" : [
        {
          "language" : "da",
          "value" : "Spørgeskema med regler"
        }
      ]
    },
    {
      "code" : "QQ",
      "display" : "Quality Questionnaire",
      "definition" : "Quality Questionnaire",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kvalitetsspørgeskema"
        }
      ]
    }
  ]
}

```
