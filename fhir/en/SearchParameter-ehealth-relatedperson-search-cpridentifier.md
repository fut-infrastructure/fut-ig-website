# relatedPersonCPRIdentifier - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **relatedPersonCPRIdentifier**

## SearchParameter: relatedPersonCPRIdentifier 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/cprIdentifier | *Version*:11.0.2 |
| Active as of 2026-10-26 | *Computable Name*:relatedPersonCPRIdentifier |

 
Search parameter for RelatedPerson DK-Core CPR identifier 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-relatedperson-search-cpridentifier",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/RelatedPerson/cprIdentifier",
  "version" : "11.0.2",
  "name" : "relatedPersonCPRIdentifier",
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
  "description" : "Search parameter for RelatedPerson DK-Core CPR identifier",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "relatedPersonCPRIdentifier",
  "base" : ["RelatedPerson"],
  "type" : "token",
  "expression" : "RelatedPerson.identifier.where(system = 'urn:oid:1.2.208.176.1.2').value",
  "xpathUsage" : "normal"
}

```
