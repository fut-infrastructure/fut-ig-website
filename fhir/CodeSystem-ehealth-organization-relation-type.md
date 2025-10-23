# Organization Relation Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Relation Type**

## CodeSystem: Organization Relation Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/organization-relation-type | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:OrganizationRelationType |

 
Organization Relation Type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OrganizationRelationType](ValueSet-ehealth-organization-relation-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-organization-relation-type",
  "url" : "http://ehealth.sundhed.dk/cs/organization-relation-type",
  "version" : "6.0.0",
  "name" : "OrganizationRelationType",
  "title" : "Organization Relation Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
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
  "description" : "Organization Relation Type",
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
      "code" : "related-to-SOR",
      "display" : "Relateret til organisatorisk enhed i SOR",
      "definition" : "Relateret til organisatorisk enhed i SOR",
      "designation" : [
        {
          "language" : "da",
          "value" : "Relateret til organisatorisk enhed i SOR"
        }
      ]
    }
  ]
}

```
