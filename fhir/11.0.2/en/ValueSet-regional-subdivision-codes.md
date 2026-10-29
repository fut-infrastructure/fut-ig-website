# RegionalSubdivisionCodes - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RegionalSubdivisionCodes**

## ValueSet: (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/regional-subdivision-codes | *Version*:11.0.2 |
| Active as of 2019-02-02 | *Computable Name*:RegionalSubdivisionCodes |

 
Subdivision codes (Regional codes) used in Denmark 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (Unknown Code System)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "regional-subdivision-codes",
  "url" : "http://ehealth.sundhed.dk/vs/regional-subdivision-codes",
  "version" : "11.0.2",
  "name" : "RegionalSubdivisionCodes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Subdivision codes (Regional codes) used in Denmark",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://www.iso.org/obp/ui/#iso:code:3166:DK"
    }]
  }
}

```
