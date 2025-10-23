# SOR Organization Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR Organization Type**

## CodeSystem: SOR Organization Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/sor-organization-type | *Version*:6.0.0 |
| Active as of 2019-06-11 | *Computable Name*:SorOrganizationType |

 
Organization types specific for organizations from Sor 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FacilityTypeCodes](ValueSet-ehealth-facility-type-codes.md)
* [SorOrganizationType](ValueSet-ehealth-sor-organization-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-sor-organization-type",
  "url" : "http://ehealth.sundhed.dk/cs/sor-organization-type",
  "version" : "6.0.0",
  "name" : "SorOrganizationType",
  "title" : "SOR Organization Type",
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
  "description" : "Organization types specific for organizations from Sor",
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
    },
    {
      "code" : "726",
      "display" : "KONVAFD (Converted Organizational Unit)",
      "definition" : "KONVAFD (Converted Organizational Unit)"
    },
    {
      "code" : "56781000005109",
      "display" : "Abuse treatment center",
      "definition" : "Abuse treatment center"
    },
    {
      "code" : "557881000005104",
      "display" : "COVID-19-testenhed",
      "definition" : "COVID-19-testenhed"
    }
  ]
}

```
