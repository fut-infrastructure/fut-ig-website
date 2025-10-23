# Organization Source - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Source**

## CodeSystem: Organization Source 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/organization-source | *Version*:6.0.0 |
| Active as of 2019-06-11 | *Computable Name*:OrganizationSource |

 
Organization source type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OrganizationSource](ValueSet-ehealth-organization-source.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-organization-source",
  "url" : "http://ehealth.sundhed.dk/cs/organization-source",
  "version" : "6.0.0",
  "name" : "OrganizationSource",
  "title" : "Organization Source",
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
  "description" : "Organization source type",
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
      "code" : "manual",
      "display" : "Manual",
      "definition" : "Manual"
    },
    {
      "code" : "SOR",
      "display" : "Sundhedsvæsenets Organisationsregister",
      "definition" : "Sundhedsvæsenets Organisationsregister"
    },
    {
      "code" : "STS-ORG",
      "display" : "KOMBIT Støttesystem (STS) Organisation",
      "definition" : "KOMBIT Støttesystem (STS) Organisation"
    }
  ]
}

```
