# SOR Organization Specialty - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR Organization Specialty**

## CodeSystem: SOR Organization Specialty 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/sor-organization-specialty | *Version*:11.0.3 |
| Active as of 2019-06-11 | *Computable Name*:SorOrganizationSpecialty |

 
Organization specialties specific for organizations from Sor 

This Code system is referenced in the definition of the following value sets:

* [SorOrganizationSpecialty](ValueSet-sor-organization-specialty.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-sor-organization-specialty",
  "url" : "http://ehealth.sundhed.dk/cs/sor-organization-specialty",
  "version" : "11.0.3",
  "name" : "SorOrganizationSpecialty",
  "title" : "SOR Organization Specialty",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-06-11T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Organization specialties specific for organizations from Sor",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "unknown",
    "display" : "Unknown",
    "definition" : "Unknown"
  }]
}

```
