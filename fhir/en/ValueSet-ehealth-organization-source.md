# Organization Source - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Source**

## ValueSet: Organization Source (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/organization-source | *Version*:11.0.0 |
| Active as of 2019-06-11 | *Computable Name*:OrganizationSource |

 
Value set used for indicating the organization source 

 **References** 

* [Organization Source](StructureDefinition-ehealth-organization-source.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-organization-source",
  "url" : "http://ehealth.sundhed.dk/vs/organization-source",
  "version" : "11.0.0",
  "name" : "OrganizationSource",
  "title" : "Organization Source",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-06-11T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set used for indicating the organization source",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/organization-source"
    }]
  }
}

```
