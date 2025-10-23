# OIO Organization Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **OIO Organization Type**

## CodeSystem: OIO Organization Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/oio-organization-type | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:OIOOrganizationType |

 
Organization types specific for organizations from OIO / STS-ORG 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OIOOrganizationType](ValueSet-ehealth-oio-organization-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-oio-organization-type",
  "url" : "http://ehealth.sundhed.dk/cs/oio-organization-type",
  "version" : "6.0.0",
  "name" : "OIOOrganizationType",
  "title" : "OIO Organization Type",
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
  "description" : "Organization types specific for organizations from OIO / STS-ORG",
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
      "code" : "Organisation",
      "display" : "Organisation",
      "definition" : "Organisation"
    },
    {
      "code" : "OrganisationEnhed",
      "display" : "OrganisationEnhed",
      "definition" : "OrganisationEnhed"
    }
  ]
}

```
