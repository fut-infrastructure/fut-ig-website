# relatedPersonRelationshipParauth - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **relatedPersonRelationshipParauth**

## SearchParameter: relatedPersonRelationshipParauth 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/relationshipParauth | *Version*:11.0.3 |
| Active as of 2026-10-26 | *Computable Name*:relatedPersonRelationshipParauth |

 
Search parameter for the relationship code PARAUTH (parental authority) on a RelatedPerson. Component of the uniqueness constraint relatedPersonCPRIdentifierPatientParauthUnique. 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-relatedperson-search-relationship-parauth",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/relationshipParauth",
  "version" : "11.0.3",
  "name" : "relatedPersonRelationshipParauth",
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
  "description" : "Search parameter for the relationship code PARAUTH (parental authority) on a RelatedPerson. Component of the uniqueness constraint relatedPersonCPRIdentifierPatientParauthUnique.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "relatedPersonRelationshipParauth",
  "base" : ["RelatedPerson"],
  "type" : "token",
  "expression" : "RelatedPerson.relationship.coding.where(system = 'http://hl7.dk/fhir/core/CodeSystem/dk-relatedperson-relationshipcodes' and code = 'PARAUTH').code",
  "xpathUsage" : "normal"
}

```
