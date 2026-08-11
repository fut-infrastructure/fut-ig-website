# IT Competence Level codes - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IT Competence Level codes**

## ValueSet: IT Competence Level codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/itcompetencelevel-codes | *Version*:10.0.1 |
| Active as of 2019-02-08 | *Computable Name*:IT Competence Level codes |

 
The set of possible message types 

 **References** 

* [IT competence level](StructureDefinition-ehealth-itcompetencelevel.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "competence-percentage-codes",
  "url" : "http://ehealth.sundhed.dk/vs/itcompetencelevel-codes",
  "version" : "10.0.1",
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
