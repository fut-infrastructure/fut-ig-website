# Event Type Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Event Type Codes**

## ValueSet: Event Type Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/event-type-codes | *Version*:6.0.0 |
| Active as of 2019-02-08 | *Computable Name*:EventTypeCodes |

 
Event type codes value set. 

 **References** 

* [ehealth-composition](StructureDefinition-ehealth-composition.md)
* [ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)

### Logical Definition (CLD)

* Import all the codes that are contained in [DK_IHE_EventCodeLists_VS](ValueSet-dk-ihe-eventcodelists-vs.md)

 

### Expansion

This value set contains 28 concepts

**Additional Designations and Language Displays**

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
  "id" : "ehealth-event-type-codes",
  "url" : "http://ehealth.sundhed.dk/vs/event-type-codes",
  "version" : "6.0.0",
  "name" : "EventTypeCodes",
  "title" : "Event Type Codes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
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
  "description" : "Event type codes value set.",
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
        "valueSet" : [
          "http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-eventcodelists-vs"
        ]
      }
    ]
  }
}

```
