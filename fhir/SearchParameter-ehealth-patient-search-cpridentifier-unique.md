# patientCPRIdentifierUnique - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patientCPRIdentifierUnique**

## SearchParameter: patientCPRIdentifierUnique 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifierUnique | *Version*:6.0.0 |
| Active as of 2022-11-15 | *Computable Name*:patientCPRIdentifierUnique |

 
Uniqueness constraint on search parameter patientCPRIdentifier 

## patientCPRIdentifierUnique

Parameter `patientCPRIdentifierUnique`:`token`

Uniqueness constraint on search parameter patientCPRIdentifier

| | |
| :--- | :--- |
| Resource | [Patient](http://hl7.org/fhir/R4/patient.html) |
| Expression | `Patient.identifier.where(system = 'urn:oid:1.2.208.176.1.2').value` |
| Processing Mode | Normal |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |

**Comparators**

| | |
| :--- | :--- |
| [patientCPRIdentifier](SearchParameter-ehealth-patient-search-cpridentifier.md) | `Patient` |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-patient-search-cpridentifier-unique",
  "extension" : [
    {
      "url" : "http://hapifhir.io/fhir/StructureDefinition/sp-unique",
      "valueBoolean" : true
    }
  ],
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifierUnique",
  "version" : "6.0.0",
  "name" : "patientCPRIdentifierUnique",
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
  "description" : "Uniqueness constraint on search parameter patientCPRIdentifier",
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
  "code" : "patientCPRIdentifierUnique",
  "base" : ["Patient"],
  "type" : "token",
  "expression" : "Patient.identifier.where(system = 'urn:oid:1.2.208.176.1.2').value",
  "xpathUsage" : "normal",
  "component" : [
    {
      "definition" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifier",
      "expression" : "Patient"
    }
  ]
}

```
