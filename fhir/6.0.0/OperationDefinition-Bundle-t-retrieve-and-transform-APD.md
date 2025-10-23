# Retrieve and transform APD document - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Retrieve and transform APD document**

## OperationDefinition: Retrieve and transform APD document 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Bundle-t-retrieve-and-transform-APD | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:retrieve-and-transform-APD |

 
Retrieves a DK-HL7 Appointment (APD) XML document from national document sharing infrastructure and transforms the APD XML document to a FHIR Appointment (ehealth-appointment profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the APD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary.Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Appointment (ehealth-appointment profile) resource. 

URL: [base]/Bundle/$retrieve-and-transform-APD

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
  "id" : "Bundle-t-retrieve-and-transform-APD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Bundle-t-retrieve-and-transform-APD",
  "version" : "6.0.0",
  "name" : "retrieve-and-transform-APD",
  "title" : "Retrieve and transform APD document",
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
  "description" : "Retrieves a DK-HL7 Appointment (APD) XML document from national document sharing infrastructure and transforms the APD XML document to a FHIR Appointment (ehealth-appointment profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the APD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary.Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Appointment (ehealth-appointment profile) resource.",
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
  "code" : "retrieve-and-transform-APD",
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
