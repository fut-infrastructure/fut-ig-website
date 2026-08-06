# Usage Context for Tele Wound Body Site - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Usage Context for Tele Wound Body Site**

## ValueSet: Usage Context for Tele Wound Body Site 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/usage-context-body-site-tele-wound | *Version*:10.0.0 |
| Active as of 2026-01-19 | *Computable Name*:bodyUsageContextSiteTeleWound |

 
Value set of body site for tele wound domain. 

 **References** 

* Included into [usageContextBodySite](ValueSet-vs-usage-context-body-site.md)

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
  "id" : "usage-context-body-site-tele-wound",
  "url" : "http://ehealth.sundhed.dk/vs/usage-context-body-site-tele-wound",
  "version" : "10.0.0",
  "name" : "bodyUsageContextSiteTeleWound",
  "title" : "Usage Context for Tele Wound Body Site",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-19T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of body site for tele wound domain.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://id.who.int/icd/release/11/mms",
      "concept" : [{
        "code" : "XA1RS6"
      },
      {
        "code" : "XA20Q1"
      },
      {
        "code" : "XA6CW5"
      },
      {
        "code" : "XA86S4"
      },
      {
        "code" : "XA6TR8"
      },
      {
        "code" : "XA7MK8"
      },
      {
        "code" : "XA3H13"
      },
      {
        "code" : "XA5A87"
      },
      {
        "code" : "XA7AA6"
      },
      {
        "code" : "XA4QS6"
      },
      {
        "code" : "XA2ZF0"
      },
      {
        "code" : "XA1M78"
      },
      {
        "code" : "XA3FR3"
      },
      {
        "code" : "XA4QH7"
      },
      {
        "code" : "XA5D93"
      },
      {
        "code" : "XA55T2"
      },
      {
        "code" : "XA10L7"
      },
      {
        "code" : "XA6CY1"
      },
      {
        "code" : "XA6GV0"
      },
      {
        "code" : "XA0U66"
      },
      {
        "code" : "XA4TC0"
      },
      {
        "code" : "XA25R8"
      },
      {
        "code" : "XA6ZR2"
      },
      {
        "code" : "XA9ET2"
      },
      {
        "code" : "XA2P90"
      },
      {
        "code" : "XA8HA7"
      },
      {
        "code" : "XA4B34"
      },
      {
        "code" : "XA6AS2"
      },
      {
        "code" : "XA4BA8"
      },
      {
        "code" : "XA2ND5"
      },
      {
        "code" : "XA17J1"
      },
      {
        "code" : "XA6809"
      },
      {
        "code" : "XA9FF8"
      },
      {
        "code" : "XA7WB0"
      },
      {
        "code" : "XA2J63"
      },
      {
        "code" : "XA5R12"
      },
      {
        "code" : "XA30Z6"
      },
      {
        "code" : "XA3NY8"
      },
      {
        "code" : "XA2593"
      },
      {
        "code" : "XA8DJ6"
      },
      {
        "code" : "XA6NZ0"
      },
      {
        "code" : "XA0Y38"
      },
      {
        "code" : "XA06X8"
      },
      {
        "code" : "XA5EN3"
      },
      {
        "code" : "XA45A6"
      },
      {
        "code" : "XA3VA7"
      },
      {
        "code" : "XA5S78"
      },
      {
        "code" : "XA98B3"
      },
      {
        "code" : "XA8RH9"
      },
      {
        "code" : "XA0183"
      },
      {
        "code" : "XA1YQ6"
      },
      {
        "code" : "XA8KL5"
      },
      {
        "code" : "XA3YG1"
      },
      {
        "code" : "XA33X4"
      },
      {
        "code" : "XA4RR4"
      },
      {
        "code" : "XA0LQ2"
      },
      {
        "code" : "XA15P0"
      },
      {
        "code" : "XA67V4"
      },
      {
        "code" : "XA47V8"
      },
      {
        "code" : "XA99M7"
      },
      {
        "code" : "XA5HK0"
      },
      {
        "code" : "XA5151"
      },
      {
        "code" : "XA5YL1"
      },
      {
        "code" : "XA8BE2"
      },
      {
        "code" : "XA1XM4"
      },
      {
        "code" : "XA4LC9"
      },
      {
        "code" : "XA2RP7"
      },
      {
        "code" : "XA8ZZ3"
      },
      {
        "code" : "XA0SP3"
      },
      {
        "code" : "XA4KK7"
      },
      {
        "code" : "XA42W4"
      },
      {
        "code" : "XK9J"
      },
      {
        "code" : "XK8G"
      },
      {
        "code" : "XK9K"
      },
      {
        "code" : "XK70"
      },
      {
        "code" : "XK7V"
      },
      {
        "code" : "XK8L"
      }]
    }]
  }
}

```
