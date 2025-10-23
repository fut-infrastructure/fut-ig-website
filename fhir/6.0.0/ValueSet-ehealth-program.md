# eHealth Program - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Program**

## ValueSet: eHealth Program 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-program | *Version*:6.0.0 |
| Active as of 2024-11-28 | *Computable Name*:eHealthProgram |

 
Programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/ehealth-program`](CodeSystem-ehealth-program.md)version 📦6.0.0

 

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
  "id" : "ehealth-program",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-program",
  "version" : "6.0.0",
  "name" : "eHealthProgram",
  "title" : "eHealth Program",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-11-28T09:00:00+00:00",
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
  "description" : "Programs or projects using the eHealth Infrastructure and wanting to mark various resources as intended for their non-exclusive use.",
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
        "system" : "http://ehealth.sundhed.dk/cs/ehealth-program"
      }
    ]
  }
}

```
