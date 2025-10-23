# Event Timing - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Event Timing**

## CodeSystem: Event Timing 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/event-timing | *Version*:6.0.0 | |
| *Standards status:*[Normative](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 5 | *Computable Name*:EventTiming |

 
EventTiming 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

Last updated: 2016-11-11 00:00:00+1100

This code system supplement `http://hl7.org/fhir/event-timing` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EventTiming",
  "meta" : {
    "lastUpdated" : "2016-11-11T00:00:00.000+11:00"
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "fhir"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "normative"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-normative-version",
      "valueCode" : "4.0.0"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 5
    }
  ],
  "url" : "http://hl7.org/fhir/event-timing",
  "version" : "6.0.0",
  "name" : "EventTiming",
  "title" : "Event Timing",
  "status" : "active",
  "experimental" : false,
  "date" : "2016-11-11T00:00:00+11:00",
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
  "description" : "EventTiming",
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
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/event-timing",
  "concept" : [
    {
      "code" : "MORN",
      "display" : "Morning",
      "definition" : "Event occurs during the morning. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Morgen"
        }
      ]
    },
    {
      "code" : "MORN.early",
      "display" : "Early Morning",
      "definition" : "Event occurs during the early morning. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Tidlig morgen"
        }
      ]
    },
    {
      "code" : "MORN.late",
      "display" : "Late Morning",
      "definition" : "Event occurs during the late morning. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Sen morgen"
        }
      ]
    },
    {
      "code" : "NOON",
      "display" : "Noon",
      "definition" : "Event occurs around 12:00pm. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Middag"
        }
      ]
    },
    {
      "code" : "AFT",
      "display" : "Afternoon",
      "definition" : "Event occurs during the afternoon. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Eftermiddag"
        }
      ]
    },
    {
      "code" : "AFT.early",
      "display" : "Early Afternoon",
      "definition" : "Event occurs during the early afternoon. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Tidlig eftermiddag"
        }
      ]
    },
    {
      "code" : "AFT.late",
      "display" : "Late Afternoon",
      "definition" : "Event occurs during the late afternoon. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Sen eftermiddag"
        }
      ]
    },
    {
      "code" : "EVE",
      "display" : "Evening",
      "definition" : "Event occurs during the evening. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Aften"
        }
      ]
    },
    {
      "code" : "EVE.early",
      "display" : "Early Evening",
      "definition" : "Event occurs during the early evening. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Tidlig aften"
        }
      ]
    },
    {
      "code" : "EVE.late",
      "display" : "Late Evening",
      "definition" : "Event occurs during the late evening. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Sen aften"
        }
      ]
    },
    {
      "code" : "NIGHT",
      "display" : "Night",
      "definition" : "Event occurs during the night. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Nat"
        }
      ]
    },
    {
      "code" : "PHS",
      "display" : "After Sleep",
      "definition" : "Event occurs [offset] after subject goes to sleep. The exact time is unspecified and established by institution convention or patient interpretation.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Efter søvn"
        }
      ]
    }
  ]
}

```
