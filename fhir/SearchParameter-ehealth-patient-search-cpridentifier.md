# patientCPRIdentifier - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patientCPRIdentifier**

## SearchParameter: patientCPRIdentifier 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifier | *Version*:6.0.0 |
| Active as of 2022-11-15 | *Computable Name*:patientCPRIdentifier |

 
Search parameter for Patient DK-Core CPR identifier 

## patientCPRIdentifier

Parameter `patientCPRIdentifier`:`token`

Search parameter for Patient DK-Core CPR identifier

| | |
| :--- | :--- |
| Resource | [Patient](http://hl7.org/fhir/R4/patient.html) |
| Expression | `Patient.identifier.where(system = 'urn:oid:1.2.208.176.1.2').value` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-patient-search-cpridentifier",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifier",
  "version" : "6.0.0",
  "name" : "patientCPRIdentifier",
  "status" : "active",
  "date" : "2022-11-15T08:31:20+00:00",
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
  "description" : "Search parameter for Patient DK-Core CPR identifier",
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
  "code" : "patientCPRIdentifier",
  "base" : ["Patient"],
  "type" : "token",
  "expression" : "Patient.identifier.where(system = 'urn:oid:1.2.208.176.1.2').value",
  "xpathUsage" : "normal"
}

```
