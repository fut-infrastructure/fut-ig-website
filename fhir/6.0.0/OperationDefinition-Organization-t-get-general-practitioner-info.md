# Get organization information for a healthcare provider with provider number - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Get organization information for a healthcare provider with provider number**

## OperationDefinition: Get organization information for a healthcare provider with provider number 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-t-get-general-practitioner-info | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:get-general-practitioner-info |

 
The operation resolves the input organization(s) to the shared organization for the one or more organizations that have the given provider number. The Organization returned depends on how many active Organization exist in the service with that provider number. When a single Organization has the provider number that Organization is returned. When multiple Organization resources have the same provider number, the shared parent Organization is returned. An OperationOutcome with an explicit error is returned in case multiple organizations share the provider number but do not have a shared parent, or in case input organizations have different provider numbers. A typical use of the operation is to get name, address and telecom details for a general practitioner. Many provider numbers are assigned to a single organization but some provider numbers are shared by multiple entities (organizations) within in a common practice. 

URL: [base]/Organization/$get-general-practitioner-info

### Parameters

* **Use**: IN
  * **Name**: organization
  * **Scope**: 
  * **Cardinality**: 1..2147483647
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: Reference to Organization. The provider number needs to be stated in the input reference with Reference.identifier.system: urn:oid:1.2.208.176.1.4 and Reference.identifier.value set to the provider number.
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Organization](http://hl7.org/fhir/R4/organization.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Organization-t-get-general-practitioner-info",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-t-get-general-practitioner-info",
  "version" : "6.0.0",
  "name" : "get-general-practitioner-info",
  "title" : "Get organization information for a healthcare provider with provider number",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:25:37+00:00",
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
  "description" : "The operation resolves the input organization(s) to the shared organization for the one or more organizations that have the given provider number. \nThe Organization returned depends on how many active Organization exist in the service with that provider number. When a single Organization has the provider number that Organization is returned. \nWhen multiple Organization resources have the same provider number, the shared parent Organization is returned. \nAn OperationOutcome with an explicit error is returned in case multiple organizations share the provider number but do not have a shared parent, or in case input organizations have different provider numbers. \nA typical use of the operation is to get name, address and telecom details for a general practitioner. Many provider numbers are assigned to a single organization but some provider numbers are shared by multiple entities (organizations) within in a common practice.",
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
  "code" : "get-general-practitioner-info",
  "resource" : ["Organization"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [
    {
      "name" : "organization",
      "use" : "in",
      "min" : 1,
      "max" : "2147483647",
      "documentation" : "Reference to Organization. \nThe provider number needs to be stated in the input reference with Reference.identifier.system: urn:oid:1.2.208.176.1.4 and Reference.identifier.value set to the provider number.",
      "type" : "Reference"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Organization"
    }
  ]
}

```
