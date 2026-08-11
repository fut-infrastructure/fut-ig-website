# Is context allowed - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Is context allowed**

## OperationDefinition: Is context allowed 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/EpisodeOfCare-i-is-context-allowed | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:is-context-allowed |

 
Checks that it is allowed to set an EpisodeOfCare as context. If the user requesting context is a patient, then the patient input parameter should be specified. If the user requesting context is a practitioner, then the careTeam input parameter should be specified. Throws an exception if it is not allowed to select the Episode Of Care context. 

## Output

 
For valid Episode of Care is returned references that cause the Episode of Care to be valid context. For a practitioner, two output parameters will be returned on success: 
* CareTeam: The Careteam that gave access
* EpisodeOfCare/CarePlan: The EpisodeOfCare or CarePlan that referenced the CareTeam
 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "EpisodeOfCare-i-is-context-allowed",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/EpisodeOfCare-i-is-context-allowed",
  "version" : "10.0.1",
  "name" : "is-context-allowed",
  "title" : "Is context allowed",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-11T06:32:53+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Checks that it is allowed to set an EpisodeOfCare as context.\r\nIf the user requesting context is a patient, then the patient input parameter should be specified.\r\nIf the user requesting context is a practitioner, then the careTeam input parameter should be specified.\r\nThrows an exception if it is not allowed to select the Episode Of Care context.\r\n## Output\r\nFor valid Episode of Care is returned references that cause the Episode of Care to be valid context. \r\nFor a practitioner, two output parameters will be returned on success:\r\n- CareTeam: The Careteam that gave access\r\n- EpisodeOfCare/CarePlan: The EpisodeOfCare or CarePlan that referenced the CareTeam",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "is-context-allowed",
  "resource" : ["EpisodeOfCare"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [{
    "name" : "patient",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "If the user requesting context is a patient, then the patient input parameter should be specified.",
    "type" : "Reference"
  },
  {
    "name" : "careTeam",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "If the user requesting context is a practitioner, then the careTeam input parameter should be specified.",
    "type" : "Reference"
  },
  {
    "name" : "return",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "type" : "Parameters"
  }]
}

```
