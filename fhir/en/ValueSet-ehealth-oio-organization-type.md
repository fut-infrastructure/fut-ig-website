# OIO Organization Type - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **OIO Organization Type**

## ValueSet: OIO Organization Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/oio-organization-type | *Version*:11.0.2 |
| Active as of 2019-05-27 | *Computable Name*:OIOOrganizationType |

 
Value set used for indicating the organization type for organizations from OIO / STS-ORG 

 **References** 

* Included into [Organization Type](ValueSet-ehealth-organization-type.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-oio-organization-type",
  "url" : "http://ehealth.sundhed.dk/vs/oio-organization-type",
  "version" : "11.0.2",
  "name" : "OIOOrganizationType",
  "title" : "OIO Organization Type",
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
  "description" : "Value set used for indicating the organization type for organizations from OIO / STS-ORG",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/oio-organization-type"
    }]
  }
}

```
