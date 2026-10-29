# eHealth Program - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Program**

## ValueSet: eHealth Program 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-program | *Version*:11.0.3 |
| Active as of 2024-11-28 | *Computable Name*:eHealthProgram |

 
Programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use. 

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
  "id" : "ehealth-program",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-program",
  "version" : "11.0.3",
  "name" : "eHealthProgram",
  "title" : "eHealth Program",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-11-28T09:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-program"
    }]
  }
}

```
