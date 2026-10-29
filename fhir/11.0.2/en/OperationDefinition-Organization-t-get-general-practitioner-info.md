# Get organization information for a healthcare provider with provider number - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Get organization information for a healthcare provider with provider number**

## OperationDefinition: Get organization information for a healthcare provider with provider number 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-t-get-general-practitioner-info | *Version*:11.0.2 |
| Active as of 2026-10-29 | *Computable Name*:get-general-practitioner-info |

 
The operation resolves the input provider number to an actual Organization. The Organization returned depends on how many organizations exist in the service with that provider number. When a single Organization has the provider number that Organization is returned. When multiple Organization resources have the same provider number, the shared parent Organization is returned. If no shared parent Organization exists, the Organization with the most recent lastUpdated timestamp is returned. Active Organization resources are preferred. When no active Organization has the provider number, the same selection is applied to inactive Organization resources as a fallback. An OperationOutcome with an explicit error is returned in case the provider number is not exactly 6 digits, or in case no Organization has the provider number. A typical use of the operation is to get name, address and telecom details for a general practitioner. Most provider numbers are assigned to a single organization but some provider numbers are shared by multiple entities (organizations) within a common practice. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Organization-t-get-general-practitioner-info",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-t-get-general-practitioner-info",
  "version" : "11.0.2",
  "name" : "get-general-practitioner-info",
  "title" : "Get organization information for a healthcare provider with provider number",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-10-29T09:11:21+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The operation resolves the input provider number to an actual Organization. \nThe Organization returned depends on how many organizations exist in the service with that provider number. When a single Organization has the provider number that Organization is returned. \nWhen multiple Organization resources have the same provider number, the shared parent Organization is returned. \nIf no shared parent Organization exists, the Organization with the most recent lastUpdated timestamp is returned. \nActive Organization resources are preferred. When no active Organization has the provider number, the same selection is applied to inactive Organization resources as a fallback. \nAn OperationOutcome with an explicit error is returned in case the provider number is not exactly 6 digits, or in case no Organization has the provider number. \nA typical use of the operation is to get name, address and telecom details for a general practitioner. Most provider numbers are assigned to a single organization but some provider numbers are shared by multiple entities (organizations) within a common practice.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "get-general-practitioner-info",
  "resource" : ["Organization"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [{
    "name" : "organization",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Reference to Organization. \nThe provider number needs to be stated in the input reference with Reference.identifier.system: urn:oid:1.2.208.176.1.4 and Reference.identifier.value set to the provider number.",
    "type" : "Reference"
  },
  {
    "name" : "return",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "documentation" : "The Organization that has the given provider number. \nWhen multiple Organization resources have the same provider number, the shared parent Organization is returned, or the newest Organization if there is no shared parent. \nWhen no active Organization has the provider number, inactive Organization resources are considered as a fallback.",
    "type" : "Organization"
  }]
}

```
