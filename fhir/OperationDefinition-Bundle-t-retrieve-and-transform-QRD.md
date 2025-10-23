# Retrieve and transform QRD document - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Retrieve and transform QRD document**

## OperationDefinition: Retrieve and transform QRD document 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Bundle-t-retrieve-and-transform-QRD | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:retrieve-and-transform-QRD |

 
Retrieves a DK-HL7 Questionnaire Response Document (QRD) XML document from national document sharing infrastructure and transforms the QRD XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (bundle) must contain a Questionnaire FHIR resource corresponding to the questionnaire definition (QFDD) that the QRD references and is a response to.Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource, if the Questionnaire FHIR resource was provided as an input, and if the transformation was successful.If the Questionnaire FHIR resource was not provided as an input, or if the transformation was not successful, the returned FHIR Bundle contains the QRD XML document that was retrieved from the national document sharing infrastructure. 

URL: [base]/Bundle/$retrieve-and-transform-QRD

### Parameters

* **Use**: IN
  * **Name**: url
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)([uri](https://hl7.org/fhir/R4/search.html#uri))
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: bundle
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
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
  * **Name**: bundle
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Bundle-t-retrieve-and-transform-QRD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Bundle-t-retrieve-and-transform-QRD",
  "version" : "6.0.0",
  "name" : "retrieve-and-transform-QRD",
  "title" : "Retrieve and transform QRD document",
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
  "description" : "Retrieves a DK-HL7 Questionnaire Response Document (QRD) XML document from national document sharing infrastructure and transforms the QRD XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (bundle) must contain a Questionnaire FHIR resource corresponding to the questionnaire definition (QFDD) that the QRD references and is a response to.Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource, if the Questionnaire FHIR resource was provided as an input, and if the transformation was successful.If the Questionnaire FHIR resource was not provided as an input, or if the transformation was not successful, the returned FHIR Bundle contains the QRD XML document that was retrieved from the national document sharing infrastructure.",
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
  "code" : "retrieve-and-transform-QRD",
  "resource" : ["Bundle"],
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
      "name" : "bundle",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "Bundle"
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
      "name" : "bundle",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Bundle"
    }
  ]
}

```
