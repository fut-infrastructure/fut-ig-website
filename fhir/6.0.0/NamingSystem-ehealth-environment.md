# eHealth Environment - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Environment**

## NamingSystem: eHealth Environment 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-environment | *Version*:6.0.0 |
| Active as of 2021-02-23 | *Computable Name*:eHealth Environment |

 
The eHealth Environment is assigned to PlanDefinition, ActivityDefinition and Questionnaire resources in the eHealth Infrastructure created on the environment 

### Summary

| | |
| :--- | :--- |
| Defining URL | http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-environment |
| Version | 6.0.0 |
| Name | eHealth Environment |
| Status | active |
| Definition | The eHealth Environment is assigned to PlanDefinition, ActivityDefinition and Questionnaire resources in the eHealth Infrastructure created on the environment |
| Publisher | Den telemedicinske infrastruktur (eHealth Infrastructure) |

### Identifiers

* **Type**: URI
  * **Value**: http://ehealth.sundhed.dk/id/ehealth-environment



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ehealth-environment",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-environment"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "6.0.0"
    }
  ],
  "name" : "eHealth Environment",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2021-02-23T00:00:00+00:00",
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
  "description" : "The eHealth Environment is assigned to PlanDefinition, ActivityDefinition and Questionnaire resources in the eHealth Infrastructure created on the environment",
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
      "type" : "uri",
      "value" : "http://ehealth.sundhed.dk/id/ehealth-environment"
    }
  ]
}

```
