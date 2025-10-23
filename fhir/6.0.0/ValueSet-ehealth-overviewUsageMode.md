# Overview Usage Mode - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Overview Usage Mode**

## ValueSet: Overview Usage Mode (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/overviewUsageMode | *Version*:6.0.0 |
| Active as of 2020-10-19 | *Computable Name*:OverviewUsageMode |

 
Whether the element should appear in overview modes of operation. 

 **References** 

* [Overview usage mode](StructureDefinition-ehealth-overviewUsageMode.md)

### Logical Definition (CLD)

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/overviewUsageMode`](CodeSystem-ehealth-overviewUsageMode.md)version 📦6.0.0

 

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
  "id" : "ehealth-overviewUsageMode",
  "url" : "http://ehealth.sundhed.dk/vs/overviewUsageMode",
  "version" : "6.0.0",
  "name" : "OverviewUsageMode",
  "title" : "Overview Usage Mode",
  "status" : "active",
  "experimental" : true,
  "date" : "2020-10-19T00:00:00+00:00",
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
  "description" : "Whether the element should appear in overview modes of operation.",
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
        "system" : "http://ehealth.sundhed.dk/cs/overviewUsageMode"
      }
    ]
  }
}

```
