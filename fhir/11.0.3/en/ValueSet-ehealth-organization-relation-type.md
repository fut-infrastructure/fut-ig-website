# Organization Relation Type - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization Relation Type**

## ValueSet: Organization Relation Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/organization-relation-type | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:OrganizationRelationType |

 
How Organizations are related. 

 **References** 

* [Related to](StructureDefinition-ehealth-organization-relatedTo.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-organization-relation-type",
  "url" : "http://ehealth.sundhed.dk/vs/organization-relation-type",
  "version" : "11.0.3",
  "name" : "OrganizationRelationType",
  "title" : "Organization Relation Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "How Organizations are related.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/organization-relation-type"
    }]
  }
}

```
