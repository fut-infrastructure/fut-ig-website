# relatedPersonCPRIdentifierPatientParauthUnique - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **relatedPersonCPRIdentifierPatientParauthUnique**

## SearchParameter: relatedPersonCPRIdentifierPatientParauthUnique 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/cprIdentifierPatientParauthUnique | *Version*:11.0.3 |
| Active as of 2026-10-26 | *Computable Name*:relatedPersonCPRIdentifierPatientParauthUnique |

 
Uniqueness constraint: a patient can have at most one RelatedPerson with a given CPR identifier and the relationship code PARAUTH. 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-relatedperson-cpridentifier-patient-parauth-unique",
  "extension" : [{
    "url" : "http://hapifhir.io/fhir/StructureDefinition/sp-unique",
    "valueBoolean" : true
  }],
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/cprIdentifierPatientParauthUnique",
  "version" : "11.0.3",
  "name" : "relatedPersonCPRIdentifierPatientParauthUnique",
  "status" : "active",
  "date" : "2026-10-26T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Uniqueness constraint: a patient can have at most one RelatedPerson with a given CPR identifier and the relationship code PARAUTH.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "relatedPersonCPRIdentifierPatientParauthUnique",
  "base" : ["RelatedPerson"],
  "type" : "composite",
  "expression" : "RelatedPerson",
  "xpathUsage" : "normal",
  "component" : [{
    "definition" : "http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/cprIdentifier",
    "expression" : "RelatedPerson"
  },
  {
    "definition" : "http://hl7.org/fhir/SearchParameter/RelatedPerson-patient",
    "expression" : "RelatedPerson"
  },
  {
    "definition" : "http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/relationshipParauth",
    "expression" : "RelatedPerson"
  }]
}

```
