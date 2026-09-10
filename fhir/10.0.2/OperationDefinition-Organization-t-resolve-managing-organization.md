# Resolve managing organization (data controller) - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Resolve managing organization (data controller)**

## OperationDefinition: Resolve managing organization (data controller) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-t-resolve-managing-organization | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:resolve-managing-organization |

 
Given an organisation, returns the corresponding root authority (the GDPR data controller) by traversing the SOR / FK Organisation hierarchy upwards via Organization.partOf. 

## Input

 
A single mandatory reference 'organization' to the organisation to resolve from. 

## Output

 
The resolved authority Organization (a municipality or a region). An OperationOutcome with HTTP 404 is returned when no authority can be resolved for the organisation. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Organization-t-resolve-managing-organization",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-t-resolve-managing-organization",
  "version" : "10.0.2",
  "name" : "resolve-managing-organization",
  "title" : "Resolve managing organization (data controller)",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-09-10T10:04:36+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Given an organisation, returns the corresponding root authority (the GDPR data controller) by traversing the SOR / FK Organisation hierarchy upwards via Organization.partOf.\r\n## Input\r\nA single mandatory reference 'organization' to the organisation to resolve from.\r\n## Output\r\nThe resolved authority Organization (a municipality or a region).\r\nAn OperationOutcome with HTTP 404 is returned when no authority can be resolved for the organisation.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "resolve-managing-organization",
  "resource" : ["Organization"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [{
    "name" : "organization",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Mandatory reference to the organisation to resolve the data-controller authority from.",
    "type" : "Reference"
  },
  {
    "name" : "return",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "type" : "Organization"
  }]
}

```
