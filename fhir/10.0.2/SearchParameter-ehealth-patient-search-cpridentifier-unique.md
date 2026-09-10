# patientCPRIdentifierUnique - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patientCPRIdentifierUnique**

## SearchParameter: patientCPRIdentifierUnique 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifierUnique | *Version*:10.0.2 |
| Active as of 2022-11-15 | *Computable Name*:patientCPRIdentifierUnique |

 
Uniqueness constraint on search parameter patientCPRIdentifier 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-patient-search-cpridentifier-unique",
  "extension" : [{
    "url" : "http://hapifhir.io/fhir/StructureDefinition/sp-unique",
    "valueBoolean" : true
  }],
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifierUnique",
  "version" : "10.0.2",
  "name" : "patientCPRIdentifierUnique",
  "status" : "active",
  "date" : "2022-11-15T08:31:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Uniqueness constraint on search parameter patientCPRIdentifier",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "patientCPRIdentifierUnique",
  "base" : ["Patient"],
  "type" : "token",
  "expression" : "Patient.identifier.where(system = 'urn:oid:1.2.208.176.1.2').value",
  "xpathUsage" : "normal",
  "component" : [{
    "definition" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifier",
    "expression" : "Patient"
  }]
}

```
