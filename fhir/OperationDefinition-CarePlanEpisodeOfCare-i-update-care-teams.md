# Modify care team assignment - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modify care team assignment**

## OperationDefinition: Modify care team assignment 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/CarePlanEpisodeOfCare-i-update-care-teams | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:update-care-teams |

 
The operation modifies the care team assignment of the care plan and all of its sub plans. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "CarePlanEpisodeOfCare-i-update-care-teams",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/CarePlanEpisodeOfCare-i-update-care-teams",
  "version" : "10.0.1",
  "name" : "update-care-teams",
  "title" : "Modify care team assignment",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-11T06:44:23+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The operation modifies the care team assignment of the care plan and all of its sub plans.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : true,
  "code" : "update-care-teams",
  "resource" : ["CarePlan", "EpisodeOfCare"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [{
    "name" : "addCareTeams",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "documentation" : "Care teams to add",
    "type" : "Reference"
  },
  {
    "name" : "removeCareTeams",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "documentation" : "Care teams to remove",
    "type" : "Reference"
  },
  {
    "name" : "addCareteams",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "type" : "Reference"
  },
  {
    "name" : "removeCareteams",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "type" : "Reference"
  }]
}

```
