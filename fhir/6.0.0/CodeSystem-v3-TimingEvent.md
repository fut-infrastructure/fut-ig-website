# v3 Code System TimingEvent - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **v3 Code System TimingEvent**

## CodeSystem: v3 Code System TimingEvent 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/v3/TimingEvent | *Version*:6.0.0 | |
| Active as of 2016-11-11 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 0 | *Computable Name*:v3 Code System TimingEvent |

 
**** MISSING DEFINITIONS **** 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

Last updated: 2016-11-11 00:00:00+1100

This code system supplement `http://hl7.org/fhir/v3/TimingEvent` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "v3-TimingEvent",
  "meta" : {
    "lastUpdated" : "2016-11-11T00:00:00.000+11:00"
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "fhir"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-ballot-status",
      "valueString" : "External"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 0
    }
  ],
  "url" : "http://hl7.org/fhir/v3/TimingEvent",
  "version" : "6.0.0",
  "name" : "v3 Code System TimingEvent",
  "title" : "v3 Code System TimingEvent",
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
  "description" : "**** MISSING DEFINITIONS ****",
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
  "supplements" : "http://terminology.hl7.org/ValueSet/v3-TimingEvent",
  "concept" : [
    {
      "code" : "AC",
      "display" : "AC",
      "definition" : "before meal (from lat. ante cibus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "før måltid (fra lat. ante cibus)"
        }
      ]
    },
    {
      "code" : "ACD",
      "display" : "ACD",
      "definition" : "before lunch (from lat. ante cibus diurnus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "før frokost (fra lat. ante cibus diurnus)"
        }
      ]
    },
    {
      "code" : "ACM",
      "display" : "ACM",
      "definition" : "before breakfast (from lat. ante cibus matutinus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "før morgenmad (fra lat. ante cibus matutinus)"
        }
      ]
    },
    {
      "code" : "ACV",
      "display" : "ACV",
      "definition" : "before dinner (from lat. ante cibus vespertinus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "før middag (fra lat. ante cibus vespertinus)"
        }
      ]
    },
    {
      "code" : "C",
      "display" : "C",
      "definition" : "Description: meal (from lat. ante cibus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "Beskrivelse: måltid (fra lat. ante cibus)"
        }
      ],
      "concept" : [
        {
          "code" : "CD",
          "display" : "CD",
          "definition" : "Description: lunch (from lat. cibus diurnus)",
          "designation" : [
            {
              "language" : "da",
              "value" : "Beskrivelse: frokost (fra lat. cibus diurnus)"
            }
          ]
        },
        {
          "code" : "CM",
          "display" : "CM",
          "definition" : "Description: breakfast (from lat. cibus matutinus)",
          "designation" : [
            {
              "language" : "da",
              "value" : "Beskrivelse: morgenmad (fra lat. Cibus matutinus)"
            }
          ]
        },
        {
          "code" : "CV",
          "display" : "CV",
          "definition" : "Description: dinner (from lat. cibus vespertinus)",
          "designation" : [
            {
              "language" : "da",
              "value" : "Beskrivelse: middag (fra lat. cibus vespertinus)"
            }
          ]
        }
      ]
    },
    {
      "code" : "HS",
      "display" : "HS",
      "definition" : "Description: Prior to beginning a regular period of extended sleep (this would exclude naps).  Note that this might occur at different times of day depending on a person's regular sleep schedule.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Beskrivelse: Inden du begynder en regelmæssig periode med længere søvn (dette ville udelukke lur). Bemærk, at dette kan forekomme på forskellige tidspunkter af dagen afhængigt af en persons normale søvnplan."
        }
      ]
    },
    {
      "code" : "IC",
      "display" : "IC",
      "definition" : "between meals (from lat. inter cibus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "mellem måltiderne (fra lat. inter cibus)"
        }
      ]
    },
    {
      "code" : "ICD",
      "display" : "ICD",
      "definition" : "between lunch and dinner",
      "designation" : [
        {
          "language" : "da",
          "value" : "mellem frokost og aftensmad"
        }
      ]
    },
    {
      "code" : "ICM",
      "display" : "ICM",
      "definition" : "between breakfast and lunch",
      "designation" : [
        {
          "language" : "da",
          "value" : "mellem morgenmad og frokost"
        }
      ]
    },
    {
      "code" : "ICV",
      "display" : "ICV",
      "definition" : "between dinner and the hour of sleep",
      "designation" : [
        {
          "language" : "da",
          "value" : "mellem middagen og søvnens time"
        }
      ]
    },
    {
      "code" : "PC",
      "display" : "PC",
      "definition" : "after meal (from lat. post cibus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "efter måltid (fra lat. post cibus)"
        }
      ]
    },
    {
      "code" : "PCD",
      "display" : "PCD",
      "definition" : "after lunch (from lat. post cibus diurnus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "efter frokost (fra lat. post cibus diurnus)"
        }
      ]
    },
    {
      "code" : "PCM",
      "display" : "PCM",
      "definition" : "after breakfast (from lat. post cibus matutinus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "efter morgenmad (fra lat. post cibus matutinus)"
        }
      ]
    },
    {
      "code" : "PCV",
      "display" : "PCV",
      "definition" : "after dinner (from lat. post cibus vespertinus)",
      "designation" : [
        {
          "language" : "da",
          "value" : "Efter middagen (fra lat. post cibus vespertinus)"
        }
      ]
    },
    {
      "code" : "WAKE",
      "display" : "WAKE",
      "definition" : "Description: Upon waking up from a regular period of sleep, in order to start regular activities (this would exclude waking up from a nap or temporarily waking up during a period of sleep)                                                      Usage Notes: e.g.                          Take pulse rate on waking in management of thyrotoxicosis.                          Take BP on waking in management of hypertension                          Take basal body temperature on waking in establishing date of ovulation",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Opvågning"
        }
      ]
    }
  ]
}

```
