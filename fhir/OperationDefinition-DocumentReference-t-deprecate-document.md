# Deprecate document - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Deprecate document**

## OperationDefinition: Deprecate document 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/DocumentReference-t-deprecate-document | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:deprecate-document |

 
Deprecates a shared document. The operation takes a documentIdentifier and cpr-number as parameters and finds the DocumentReference with the corresponding masterIdentifier. masterIdentifier should be unique for DocumentReference so if less than 0 or more than 1 are found the operation throws and exception. If the found documentReference has a patient which cpr number matches the provided value the document is deprecated. iti-57 is used to deprecate the document on XDS. On successthe documentReference status is updated to superseded and updated in the database. 

URL: [base]/DocumentReference/$deprecate-document

### Parameters

* **Use**: IN
  * **Name**: documentId
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)([token](https://hl7.org/fhir/R4/search.html#token))
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: cpr
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)([string](https://hl7.org/fhir/R4/search.html#string))
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "DocumentReference-t-deprecate-document",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/DocumentReference-t-deprecate-document",
  "version" : "6.0.0",
  "name" : "deprecate-document",
  "title" : "Deprecate document",
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
  "description" : "Deprecates a shared document. The operation takes a documentIdentifier and cpr-number as parameters and finds the DocumentReference with the corresponding masterIdentifier. masterIdentifier should be unique for DocumentReference so if less than 0 or more than 1 are found the operation throws and exception. If the found documentReference has a patient which cpr number matches the provided value the document is deprecated. iti-57 is used to deprecate the document on XDS. On successthe documentReference status is updated to superseded and updated in the database.",
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
  "code" : "deprecate-document",
  "resource" : ["DocumentReference"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [
    {
      "name" : "documentId",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "string",
      "searchType" : "token"
    },
    {
      "name" : "cpr",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "string",
      "searchType" : "string"
    }
  ]
}

```
