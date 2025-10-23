# Create a careplan - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Create a careplan**

## OperationDefinition: Create a careplan 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/PlanDefinition-i-apply | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:apply |

 
Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template. If using POST the operation will persist resources and return the careplan. If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction. 

URL: [base]/PlanDefinition/[id]/$apply

### Parameters

* **Use**: IN
  * **Name**: episodeOfCare
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "PlanDefinition-i-apply",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/PlanDefinition-i-apply",
  "version" : "6.0.0",
  "name" : "apply",
  "title" : "Create a careplan",
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
  "description" : "Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template. If using POST the operation will persist resources and return the careplan. If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction.",
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
  "affectsState" : false,
  "code" : "apply",
  "resource" : ["PlanDefinition"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [
    {
      "name" : "episodeOfCare",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "string"
    }
  ]
}

```
