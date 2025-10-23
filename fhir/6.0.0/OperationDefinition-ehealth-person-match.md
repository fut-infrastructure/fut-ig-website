# Person name lookup - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Person name lookup**

## OperationDefinition: Person name lookup 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-person-match | *Version*:6.0.0 |
| Active as of 2019-10-16 | *Computable Name*:Person name lookup |

 
This operation is used to lookup a citizen. It first attempts lookup on the service and, if a match is found, returns a Person resource with name, identifier, deceased-status and a link to the Patient resource. If not, it proceeds to find any prior CPR-numbers associated with the query CPR in the national infrastructure and checks if any of those match a patient on the service. If a match is found, it returns a Person resource with the same information. NOTE: This means that the returned patient can have a different identifier than the one used for request. If no match is found, it finds base information on the national infrastructure and returns a 'limited' Person resource containing only the identifier, name and deceased-state of the person. The operation is an implementation of[https://www.hl7.org/fhir/stu3/patient-operations.html#match](https://www.hl7.org/fhir/stu3/patient-operations.html#match)on the Person resource. 

URL: [base]/Person/$match

### Parameters

* **Use**: IN
  * **Name**: resource
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Person](http://hl7.org/fhir/R4/person.html)
  * **Binding**: 
  * **Documentation**: The social security number of the person on which this operation is executed, wrapped in a Person. If the person exists in the infrastructure a link to the patient is provided
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: A bundle containing a set of Person records that represent possible matches, optionally it may also contain an OperationOutcome with further information about the search results (such as warnings or information messages, such as a count of records that were close but eliminated) If the operation was unsuccessful, then an OperationOutcome may be returned along with a BadRequest status Code (e.g. security issue, or insufficient properties in person fragment - check against profile) Note: as this the only out parameter, it is a resource, and it has the name 'return', the result of this operation is returned directly as a resource.



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ehealth-person-match",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-person-match",
  "version" : "6.0.0",
  "name" : "Person name lookup",
  "status" : "active",
  "kind" : "operation",
  "date" : "2019-10-16",
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
  "description" : "This operation is used to lookup a citizen. It first attempts lookup on the service and, if a match is found, returns a Person resource with name, identifier, deceased-status and a link to the Patient resource. If not, it proceeds to find any prior CPR-numbers associated with the query CPR in the national infrastructure and checks if any of those match a patient on the service. If a match is found, it returns a Person resource with the same information. NOTE: This means that the returned patient can have a different identifier than the one used for request. If no match is found, it finds base information on the national infrastructure and returns a 'limited' Person resource containing only the identifier, name and deceased-state of the person. The operation is an implementation of [https://www.hl7.org/fhir/stu3/patient-operations.html#match](https://www.hl7.org/fhir/stu3/patient-operations.html#match) on the Person resource.",
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
  "code" : "match",
  "resource" : ["Person"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [
    {
      "name" : "resource",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "documentation" : "The social security number of the person on which this operation is executed, wrapped in a Person. If the person exists in the infrastructure a link to the patient is provided",
      "type" : "Person"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 1,
      "max" : "1",
      "documentation" : "A bundle containing a set of Person records that represent possible matches, optionally it may also contain an OperationOutcome with further information about the search results (such as warnings or information messages, such as a count of records that were close but eliminated)  If the operation was unsuccessful, then an OperationOutcome may be returned along with a BadRequest status Code (e.g. security issue, or insufficient properties in person fragment - check against profile)  Note: as this the only out parameter, it is a resource, and it has the name 'return', the result of this operation is returned directly as a resource.",
      "type" : "Bundle"
    }
  ]
}

```
