# Library Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Library Type**

## ValueSet: Library Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/library-type | *Version*:6.0.0 |
| Active as of 2019-08-27 | *Computable Name*:LibraryType |

 
http://terminology.hl7.org/CodeSystem/library-type + automated-processing 

 **References** 

* [ehealth-library](StructureDefinition-ehealth-library.md)

### Logical Definition (CLD)

This value set includes codes based on the following rules:

* Include all codes defined in [`http://terminology.hl7.org/CodeSystem/library-type`](http://terminology.hl7.org/6.5.0/CodeSystem-library-type.html)version 📦1.0.1
* Include all codes defined in [`http://ehealth.sundhed.dk/cs/library-type`](CodeSystem-ehealth-library-type.md)version 📦6.0.0

 

### Expansion

This value set contains 5 concepts

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
  "id" : "ehealth-library-type",
  "url" : "http://ehealth.sundhed.dk/vs/library-type",
  "version" : "6.0.0",
  "name" : "LibraryType",
  "title" : "Library Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-08-27T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "http://terminology.hl7.org/CodeSystem/library-type + automated-processing",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "compose" : {
    "include" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/library-type"
      },
      {
        "system" : "http://ehealth.sundhed.dk/cs/library-type"
      }
    ]
  }
}

```
