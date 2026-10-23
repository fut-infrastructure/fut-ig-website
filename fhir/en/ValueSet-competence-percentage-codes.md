# IT Competence Level codes - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IT Competence Level codes**

## ValueSet: (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/itcompetencelevel-codes | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:IT Competence Level codes |

 
The set of possible message types 

 **References** 

* [IT competence level](StructureDefinition-ehealth-itcompetencelevel.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "competence-percentage-codes",
  "url" : "http://ehealth.sundhed.dk/vs/itcompetencelevel-codes",
  "version" : "11.0.1",
  "name" : "IT Competence Level codes",
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
  "description" : "The set of possible message types",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/fs3-scores"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/percentage-codes",
      "concept" : [{
        "code" : "0"
      },
      {
        "code" : "10"
      },
      {
        "code" : "20"
      },
      {
        "code" : "30"
      },
      {
        "code" : "40"
      },
      {
        "code" : "50"
      },
      {
        "code" : "60"
      },
      {
        "code" : "70"
      },
      {
        "code" : "80"
      },
      {
        "code" : "90"
      },
      {
        "code" : "100"
      }]
    }]
  }
}

```
