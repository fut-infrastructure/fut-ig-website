# eHealth Designation Use - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Designation Use**

## ValueSet: eHealth Designation Use 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-designation-use | *Version*:11.0.0 |
| Active as of 2025-03-05 | *Computable Name*:eHealthDesignationUse |

 
Details of how a designation would be used. 

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
  "id" : "ehealth-designation-use",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-designation-use",
  "version" : "11.0.0",
  "name" : "eHealthDesignationUse",
  "title" : "eHealth Designation Use",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-03-05T09:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Details of how a designation would be used.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-designation-use"
    }]
  }
}

```
