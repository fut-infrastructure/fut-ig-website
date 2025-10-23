# FS III, borgerens vurdering af udførelse - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, borgerens vurdering af udførelse**

## CodeSystem: FS III, borgerens vurdering af udførelse (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/fs3-citizen-performance-scores | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:FS III, borgerens vurdering af udførelse |

 
FS III, borgerens vurdering af udførelse 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fs3-citizen-performance-scores",
  "url" : "http://ehealth.sundhed.dk/cs/fs3-citizen-performance-scores",
  "version" : "6.0.0",
  "name" : "FS III, borgerens vurdering af udførelse",
  "title" : "FS III, borgerens vurdering af udførelse",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-02T00:00:00+00:00",
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
  "description" : "FS III, borgerens vurdering af udførelse",
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
  "content" : "complete",
  "concept" : [
    {
      "code" : "PERFORMS_INDEPENDENTLY",
      "display" : "Udfører selv",
      "designation" : [
        {
          "language" : "da",
          "value" : "Udfører selv"
        }
      ]
    },
    {
      "code" : "PERFORMS_PARTLY",
      "display" : "Udfører dele af aktiviteten",
      "designation" : [
        {
          "language" : "da",
          "value" : "Udfører dele af aktiviteten"
        }
      ]
    },
    {
      "code" : "DOES_NOT_PERFORM",
      "display" : "Udfører ikke selv aktiviteten",
      "designation" : [
        {
          "language" : "da",
          "value" : "Udfører ikke selv aktiviteten"
        }
      ]
    },
    {
      "code" : "IRRELEVANT",
      "display" : "Ikke relevant",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ikke relevant"
        }
      ]
    }
  ]
}

```
