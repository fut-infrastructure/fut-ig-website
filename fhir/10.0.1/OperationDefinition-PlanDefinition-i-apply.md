# Create a careplan - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Create a careplan**

## OperationDefinition: Create a careplan 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/PlanDefinition-i-apply | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:apply |

 
Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template. 

### HTTP Methods

 
* If using POST the operation will persist resources and return the careplan.
* If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction. 

### Parameters

 
* CarePlan or Bundle of transient CarePlan and ServiceRequest resources.
 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "PlanDefinition-i-apply",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/PlanDefinition-i-apply",
  "version" : "10.0.1",
  "name" : "apply",
  "title" : "Create a careplan",
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
  "description" : "Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template.\n### HTTP Methods\n- If using POST the operation will persist resources and return the careplan.\n- If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction.\n### Parameters\n- episodeOfCare: Reference(EpisodeOfCare) - The episode of care for which the plan is being applied.\n### Output\nCarePlan or Bundle of transient CarePlan and ServiceRequest resources.\n",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "apply",
  "resource" : ["PlanDefinition"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [{
    "name" : "episodeOfCare",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "The episodeOfCare for which the plan is being applied.",
    "type" : "string"
  }]
}

```
