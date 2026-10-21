# Organization Specialty - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Specialty**

## ValueSet: Organization Specialty (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/organization-specialty | *Version*:11.0.0 |
| Active as of 2019-05-27 | *Computable Name*:OrganizationSpecialty |

 
Value set used for indicating the specialty for organizations. 

 **References** 

* [Organization specialty](StructureDefinition-ehealth-organization-specialty.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-organization-specialty",
  "url" : "http://ehealth.sundhed.dk/vs/organization-specialty",
  "version" : "11.0.0",
  "name" : "OrganizationSpecialty",
  "title" : "Organization Specialty",
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
  "description" : "Value set used for indicating the specialty for organizations.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://ehealth.sundhed.dk/vs/sor-organization-specialty"]
    }]
  }
}

```
