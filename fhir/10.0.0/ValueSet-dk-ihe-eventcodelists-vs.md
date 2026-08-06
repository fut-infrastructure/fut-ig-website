# DK_IHE_EventCodeLists_VS - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK_IHE_EventCodeLists_VS**

## ValueSet: DK_IHE_EventCodeLists_VS 

| | |
| :--- | :--- |
| *Official URL*:http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-eventcodelists-vs | *Version*:10.0.0 |
| Active as of 2025-03-07 | *Computable Name*:DK_IHE_EventCodeLists_VS |

 
Event codes used in DK IHE Document sharing. The codes shall be NPU or procedure codes used in the Danish health care systems. 

 **References** 

* Included into [EventTypeCodes](ValueSet-ehealth-event-type-codes.md)

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
  "id" : "dk-ihe-eventcodelists-vs",
  "url" : "http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-eventcodelists-vs",
  "version" : "10.0.0",
  "name" : "DK_IHE_EventCodeLists_VS",
  "title" : "DK_IHE_EventCodeLists_VS",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-03-07T00:00:00+01:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Event codes used in DK IHE Document sharing. The codes shall be NPU or procedure codes used in the Danish health care systems.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:oid:1.2.208.176.2.4",
      "concept" : [{
        "code" : "ALAL01"
      },
      {
        "code" : "ALAL02"
      },
      {
        "code" : "ALAL03"
      },
      {
        "code" : "ALAL21"
      },
      {
        "code" : "ALAL22"
      },
      {
        "code" : "ALAL23"
      },
      {
        "code" : "ALAL51"
      },
      {
        "code" : "ALAL52"
      }]
    },
    {
      "system" : "urn:oid:1.2.208.176.2.1",
      "concept" : [{
        "code" : "NPU03804"
      },
      {
        "code" : "NPU03963"
      },
      {
        "code" : "NPU21692"
      },
      {
        "code" : "NPU22089"
      },
      {
        "code" : "NPU03011"
      },
      {
        "code" : "NPU27281"
      },
      {
        "code" : "NPU19748"
      },
      {
        "code" : "DNK05472"
      },
      {
        "code" : "DNK05473"
      }]
    },
    {
      "system" : "urn:oid:1.2.208.184.100.8",
      "concept" : [{
        "code" : "MCS88100"
      },
      {
        "code" : "MCS88015"
      },
      {
        "code" : "MCS88019"
      },
      {
        "code" : "MCS88020"
      },
      {
        "code" : "MCS88050"
      },
      {
        "code" : "MCS88137"
      },
      {
        "code" : "MCS88021"
      },
      {
        "code" : "MCS88214"
      }]
    },
    {
      "system" : "urn:oid:1.2.208.176.7.3.1"
    }]
  }
}

```
