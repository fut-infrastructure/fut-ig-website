# OIO BPP Roles - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **OIO BPP Roles**

## ValueSet: OIO BPP Roles (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/oio-bpp-roles | *Version*:11.0.1 |
| Active as of 2019-12-02 | *Computable Name*:OIOBPPRoles |

 
OIO BPP roles. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-oio-bpp-roles",
  "url" : "http://ehealth.sundhed.dk/vs/oio-bpp-roles",
  "version" : "11.0.1",
  "name" : "OIOBPPRoles",
  "title" : "OIO BPP Roles",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-12-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "OIO BPP roles.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/oio-bpp-roles"
    }]
  }
}

```
