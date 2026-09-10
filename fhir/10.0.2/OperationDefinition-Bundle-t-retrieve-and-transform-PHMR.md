# Retrieve and transform PHMR document - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Retrieve and transform PHMR document**

## OperationDefinition: Retrieve and transform PHMR document 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Bundle-t-retrieve-and-transform-PHMR | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:retrieve-and-transform-PHMR |

 
Retrieves a DK-HL7 Personal Health Monitoring Report (PHMR) XML document from national document sharing infrastructure and transforms the PHMR XML document to FHIR Observation (ehealth-observation profile) resources.Input (url) is the element DocumentReference.content.attachment.url for metadata about the PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Bundle-t-retrieve-and-transform-PHMR",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Bundle-t-retrieve-and-transform-PHMR",
  "version" : "10.0.2",
  "name" : "retrieve-and-transform-PHMR",
  "title" : "Retrieve and transform PHMR document",
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
  "description" : "Retrieves a DK-HL7 Personal Health Monitoring Report (PHMR) XML document from national document sharing infrastructure and transforms the PHMR XML document to FHIR Observation (ehealth-observation profile) resources.Input (url) is the element DocumentReference.content.attachment.url for metadata about the PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "retrieve-and-transform-PHMR",
  "resource" : ["Bundle"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [{
    "name" : "url",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "This is the element DocumentReference.content.attachment.url for metadata about the PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure",
    "type" : "string",
    "searchType" : "uri"
  },
  {
    "name" : "consentOverride",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary.",
    "type" : "boolean"
  },
  {
    "name" : "reason",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.",
    "type" : "string"
  },
  {
    "name" : "bundle",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "type" : "Bundle"
  }]
}

```
