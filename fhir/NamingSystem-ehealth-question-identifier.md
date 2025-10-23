# eHealthQuestionIdentifier - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealthQuestionIdentifier**

## NamingSystem: eHealthQuestionIdentifier 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-question-identifier | *Version*:6.0.0 |
| Active as of 2020-04-17 | *Computable Name*:eHealthQuestionIdentifier |

 
The eHealth Question Identifier is assigned to questions (not to be confused with question codes) in a questionnaire created in the eHealth Infrastructure. 

### Summary

| | |
| :--- | :--- |
| Defining URL | http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-question-identifier |
| Version | 6.0.0 |
| Name | eHealthQuestionIdentifier |
| Status | active |
| Definition | The eHealth Question Identifier is assigned to questions (not to be confused with question codes) in a questionnaire created in the eHealth Infrastructure. |
| Publisher | Den telemedicinske infrastruktur (eHealth Infrastructure) |

### Identifiers

* **Type**: OID
  * **Value**: 1.2.208.176.7.200.2
* **Type**: URI
  * **Value**: http://ehealth.sundhed.dk/id/ehealth-question-identifier



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ehealth-question-identifier",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-question-identifier"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "6.0.0"
    }
  ],
  "name" : "eHealthQuestionIdentifier",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2020-04-17T00:00:00+00:00",
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
  "responsible" : "ehealth.sundhed.dk",
  "description" : "The eHealth Question Identifier is assigned to questions (not to be confused with question codes) in a questionnaire created in the eHealth Infrastructure.",
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
  "uniqueId" : [
    {
      "type" : "oid",
      "value" : "1.2.208.176.7.200.2"
    },
    {
      "type" : "uri",
      "value" : "http://ehealth.sundhed.dk/id/ehealth-question-identifier"
    }
  ]
}

```
