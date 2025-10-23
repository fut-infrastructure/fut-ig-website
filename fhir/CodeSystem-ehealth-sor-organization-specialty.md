# SOR Organization Specialty - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR Organization Specialty**

## CodeSystem: SOR Organization Specialty 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/sor-organization-specialty | *Version*:6.0.0 |
| Active as of 2019-06-11 | *Computable Name*:SorOrganizationSpecialty |

 
Organization specialties specific for organizations from Sor 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SorOrganizationSpecialty](ValueSet-sor-organization-specialty.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-sor-organization-specialty",
  "url" : "http://ehealth.sundhed.dk/cs/sor-organization-specialty",
  "version" : "6.0.0",
  "name" : "SorOrganizationSpecialty",
  "title" : "SOR Organization Specialty",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-06-11T00:00:00+00:00",
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
  "description" : "Organization specialties specific for organizations from Sor",
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
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "unknown",
      "display" : "Unknown",
      "definition" : "Unknown"
    }
  ]
}

```
