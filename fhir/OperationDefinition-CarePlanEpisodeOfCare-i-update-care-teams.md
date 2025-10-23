# Modify care team assignment - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modify care team assignment**

## OperationDefinition: Modify care team assignment 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/CarePlanEpisodeOfCare-i-update-care-teams | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:update-care-teams |

 
The operation modifies the care team assignment of the care plan and all of its sub plans. 

URL: [base]/CarePlan/[id]/$update-care-teams

URL: [base]/EpisodeOfCare/[id]/$update-care-teams

### Parameters

* **Use**: IN
  * **Name**: addCareTeams
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: removeCareTeams
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: addCareteams
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: removeCareteams
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "CarePlanEpisodeOfCare-i-update-care-teams",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/CarePlanEpisodeOfCare-i-update-care-teams",
  "version" : "6.0.0",
  "name" : "update-care-teams",
  "title" : "Modify care team assignment",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:34:08+00:00",
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
  "description" : "The operation modifies the care team assignment of the care plan and all of its sub plans.",
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
  "affectsState" : true,
  "code" : "update-care-teams",
  "resource" : ["CarePlan", "EpisodeOfCare"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [
    {
      "name" : "addCareTeams",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Reference"
    },
    {
      "name" : "removeCareTeams",
      "use" : "in",
      "min" : 0,
      "max" : "*",
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
    }
  ]
}

```
