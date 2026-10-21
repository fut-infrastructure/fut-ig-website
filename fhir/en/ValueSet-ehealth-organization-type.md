# Organization Type - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Type**

## ValueSet: Organization Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/organization-type | *Version*:11.0.0 |
| Active as of 2019-05-27 | *Computable Name*:OrganizationType |

 
Value set used for indicating the organization type 

 **References** 

* [ehealth-organization](StructureDefinition-ehealth-organization.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-organization-type",
  "url" : "http://ehealth.sundhed.dk/vs/organization-type",
  "version" : "11.0.0",
  "name" : "OrganizationType",
  "title" : "Organization Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-05-27T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set used for indicating the organization type",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://ehealth.sundhed.dk/vs/sor-organization-type"]
    },
    {
      "valueSet" : ["http://ehealth.sundhed.dk/vs/oio-organization-type"]
    }]
  }
}

```
