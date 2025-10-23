# Retrieve document - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Retrieve document**

## OperationDefinition: Retrieve document 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Binary-t-retrieve-document | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:retrieve-document |

 
Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD/APD/PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring.The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents.The value is logged in the Infrastructure. 

URL: [base]/Binary/$retrieve-document

### Parameters

* **Use**: IN
  * **Name**: url
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)([uri](https://hl7.org/fhir/R4/search.html#uri))
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: consentOverride
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [boolean](http://hl7.org/fhir/R4/datatypes.html#boolean)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: reason
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Binary](http://hl7.org/fhir/R4/binary.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Binary-t-retrieve-document",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Binary-t-retrieve-document",
  "version" : "6.0.0",
  "name" : "retrieve-document",
  "title" : "Retrieve document",
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
  "description" : "Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD/APD/PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed  by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring.The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents.The value is logged in the Infrastructure.",
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
  "code" : "retrieve-document",
  "resource" : ["Binary"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [
    {
      "name" : "url",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "string",
      "searchType" : "uri"
    },
    {
      "name" : "consentOverride",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "boolean"
    },
    {
      "name" : "reason",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "string"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Binary"
    }
  ]
}

```
