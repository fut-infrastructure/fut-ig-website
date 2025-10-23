# Create Patient - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Create Patient**

## OperationDefinition: Create Patient 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-patient-create | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:Create Patient |

 
Creates a Patient resource on the server and returns it in the response. If the patient already exists, it is returned instead. If the CPR number does not match a patient on the service, looks up the CPR in the national registry and finds any potential prior CPRs used by the person. If a prior CPR number matches a patient on the service, updates the patient with national data, and returns a patient with the newest data. NOTE: This means that the returned patient can have a different identifier than the one used for the request. If no prior CPR matches, creates a new patient using national data. If the CPR is invalid, i.e. does not correspond to a patient on the national registry, it errors. 

### Note

 
This operation is currently the only way to create Patient resources in the eHealth Infrastructure, as it ensures that the correct bindings from national registers 

URL: [base]/Patient/$createPatient

### Parameters

* **Use**: IN
  * **Name**: crn
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Identifier](http://hl7.org/fhir/R4/datatypes.html#Identifier)
  * **Binding**: 
  * **Documentation**: The social security number of the person on which this operation is executed.
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Patient](http://hl7.org/fhir/R4/patient.html)
  * **Binding**: 
  * **Documentation**: The Patient resource that has been created on the server or an already created patient

See the wiki for examples on how to use the operation.



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ehealth-patient-create",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-patient-create",
  "version" : "6.0.0",
  "name" : "Create Patient",
  "status" : "active",
  "kind" : "operation",
  "date" : "2019-02-02",
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
  "description" : "Creates a Patient resource on the server and returns it in the response. If the patient already exists, it is returned instead. If the CPR number does not match a patient on the service, looks up the CPR in the national registry and finds any potential prior CPRs used by the person. If a prior CPR number matches a patient on the service, updates the patient with national data, and returns a patient with the newest data. NOTE: This means that the returned patient can have a different identifier than the one used for the request. If no prior CPR matches, creates a new patient using national data. If the CPR is invalid, i.e. does not correspond to a patient on the national registry, it errors. \r\n\r\n### Note\r\nThis operation is currently the only way to create Patient resources in the eHealth Infrastructure, as it ensures that the correct bindings from national registers",
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
  "code" : "createPatient",
  "comment" : "See the wiki for examples on how to use the operation.",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [
    {
      "name" : "crn",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "documentation" : "The social security number of the person on which this operation is executed.",
      "type" : "Identifier"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 1,
      "max" : "1",
      "documentation" : "The Patient resource that has been created on the server or an already created patient",
      "type" : "Patient"
    }
  ]
}

```
