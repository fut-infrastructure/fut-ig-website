# patientCPRIdentifier - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patientCPRIdentifier**

## SearchParameter: patientCPRIdentifier 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifier | *Version*:10.0.2 |
| Active as of 2022-11-15 | *Computable Name*:patientCPRIdentifier |

 
Search parameter for Patient DK-Core CPR identifier 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-patient-search-cpridentifier",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Patient/cprIdentifier",
  "version" : "10.0.2",
  "name" : "patientCPRIdentifier",
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
  "description" : "Search parameter for Patient DK-Core CPR identifier",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "patientCPRIdentifier",
  "base" : ["Patient"],
  "type" : "token",
  "expression" : "Patient.identifier.where(system = 'urn:oid:1.2.208.176.1.2').value",
  "xpathUsage" : "normal"
}

```
